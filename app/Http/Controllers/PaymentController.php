<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Services\Payment\PaymentService;
use App\Http\Requests\Payment\PayRequest;
use App\Services\Payment\Requests\IDPayRequest;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    
    public function pay(PayRequest $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'لطفا وارد حساب کاربری خود شوید.');
        }
        $validatedData = $request->validated();
    
        // $user = User::firstOrCreate([
        //     'email' => $validatedData['email'],
        // ], [
        //     'name' => $validatedData['name'],
        //     'mobile' => $validatedData['mobile'],
        // ]);
        $user = auth()->user();

        try {
            $orderItems = json_decode(Cookie::get('basket'), true);
    
            if (count($orderItems) <= 0) {
                throw new \InvalidArgumentException('سبد خرید شما خالی است');
            }
    
            $products = Product::findMany(array_keys($orderItems));
    
            $productsPrice = $products->sum('price');
    
            $refCode = Str::random(30);
    
            $createdOrder = Order::create([
                'amount' => $productsPrice,
                'ref_code' => $refCode,
                'status' => 'unpaid',
                'user_id' => $user->id,
            ]);
    
            $orderItemsForCreatedOrder = $products->map(function($product) {
                $currentProduct = $product->only(['price', 'id']);
                $currentProduct['product_id'] = $currentProduct['id'];
                unset($currentProduct['id']);
                return $currentProduct;
            });
    
            $createdOrder->orderItems()->createMany($orderItemsForCreatedOrder->toArray());
    
            $refId = rand(1111, 9999);
    
            $createdPayment = Payment::create([
                'gateway' => 'zarinPal',
                'ref_id' => $refId,
                'res_id' => $refId,
                'status' => 'unpaid',
                'order_id' => $createdOrder->id,
            ]);
    
            // آماده کردن اطلاعات برای ارسال به زرین‌پال
            $data = [
                "merchant_id" => "23451234567890abcdef1234567890abcdef", // مرچنت کد زرین‌پال
                "amount" => $productsPrice, // مبلغ پرداختی
                "callback_url" => route('payment.callback'), // آدرس برگشتی
                "description" => "خرید از سایت شما",
                "metadata" => [
                    "email" => $user->email,
                    "mobile" => $user->mobile
                ]
            ];
    
            $jsonData = json_encode($data);
    
            // ارسال درخواست به زرین‌پال
            $ch = curl_init('https://sandbox.zarinpal.com/pg/v4/payment/request.json'); // استفاده از sandbox برای تست
            curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ]);
    
            $result = curl_exec($ch);
            $err = curl_error($ch);
            curl_close($ch);
    
            if ($err) {
                return back()->with('failed', "cURL Error #:" . $err);
            }
    
            $result = json_decode($result, true);
    
            if (isset($result['data']['code']) && $result['data']['code'] == 100) {
                // ذخیره Authority در جدول پرداخت
                $createdPayment->update([
                    'ref_id' => $result['data']['authority'], // ذخیره Authority در ref_id
                ]);
    
                // هدایت کاربر به درگاه پرداخت زرین‌پال
                return redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
            } else {
                return back()->with('failed', 'خطا در اتصال به زرین‌پال: ' . (isset($result['errors']['message']) ? $result['errors']['message'] : 'Unknown Error'));
            }
    
        } catch (\Exception $e) {
            return back()->with('failed', $e->getMessage());
        }
    }
    

    public function callback(Request $request)
    {
        // ثبت لاگ برای بررسی اطلاعات بازگشتی از درگاه
        Log::info('Zarinpal Callback Data: ', $request->all());
    
        try {
            // بررسی اینکه آیا Authority موجود است
            if (!$request->has('Authority') || !$request->has('Status')) {
                throw new \Exception('شناسه پرداخت یا وضعیت پرداخت ارسال نشده است.');
            }
    
            // اگر پرداخت ناموفق باشد
            if ($request->Status !== "OK") {
                throw new \Exception('پرداخت توسط کاربر لغو شد.');
            }
    
            // پیدا کردن پرداخت بر اساس Authority
            $payment = Payment::where('ref_id', $request->Authority)
                ->where('status', 'unpaid')
                ->first();
    
            if (!$payment) {
                throw new \Exception('پرداختی با این شناسه یافت نشد.');
            }
    
            // درخواست تأیید پرداخت به زرین‌پال
            $data = [
                "merchant_id" => "23451234567890abcdef1234567890abcdef", // مرچنت کد زرین‌پال
                "authority" => $request->Authority,
                "amount" => $payment->order->amount // مبلغ پرداخت شده
            ];
    
            $jsonData = json_encode($data);
    
            $ch = curl_init('https://sandbox.zarinpal.com/pg/v4/payment/verify.json'); // آدرس تأیید پرداخت
            curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ]);
    
            $result = curl_exec($ch);
            $err = curl_error($ch);
            curl_close($ch);
    
            if ($err) {
                throw new \Exception("خطا در تأیید پرداخت: " . $err);
            }
    
            $result = json_decode($result, true);
    
            // بررسی وضعیت تأیید پرداخت
            if (!isset($result['data']['code']) || $result['data']['code'] != 100) {
                throw new \Exception('پرداخت تأیید نشد.');
            }
    
            // ذخیره شماره تراکنش
            $payment->res_id = $result['data']['ref_id']; // شماره پیگیری زرین‌پال
            $payment->status = 'paid';
            $payment->save();
    
            // دریافت سفارش مرتبط با پرداخت
            $order = $payment->order;
            $order->status = 'paid';
            $order->save();
    
            // کاهش موجودی محصولات خریداری‌شده
            foreach ($order->orderItems as $orderItem) {
                $product = Product::find($orderItem->product_id);
    
                if ($product) {
                    if ($product->stock >= $orderItem->quantity) {
                        $product->stock -= $orderItem->quantity; // کاهش موجودی به اندازه quantity
                    } else {
                        $product->stock = 0; // در صورت کمبود، موجودی را صفر کن
                    }
                    $product->save();
                }
            }
    
            return redirect()->route('home.checkout')->with('success', 'پرداخت موفقیت‌آمیز بود و محصولات به‌روز شدند.');
        } catch (\Exception $e) {
            return back()->with('failed', $e->getMessage());
        }
    }
    
    
}
