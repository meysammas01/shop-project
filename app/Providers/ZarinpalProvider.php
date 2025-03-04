<?php

namespace App\Services\Payment\Providers;

use App\Services\Payment\Contracts\RequestInterface;

class ZarinpalProvider
{
    private $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    public function pay()
    {
        // در اینجا کد ارسال درخواست به زرین‌پال و دریافت لینک پرداخت را قرار می‌دهیم.
        $data = [
            "merchant_id" => $this->request->getApiKey(),
            "amount" => $this->request->getAmount(),
            "callback_url" => route('payment.callback'),
            "description" => "خرید از سایت شما",
            "metadata" => [
                "email" => $this->request->getUser()->email,
                "mobile" => $this->request->getUser()->mobile
            ]
        ];

        $jsonData = json_encode($data);

        $ch = curl_init('https://sandbox.zarinpal.com/pg/v4/payment/request.json');
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
            throw new \Exception('cURL Error #:' . $err);
        }

        $result = json_decode($result, true);

        if ($result['data']['code'] == 100) {
            return redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
        } else {
            throw new \Exception('خطا در اتصال به زرین‌پال: ' . $result['errors']['message']);
        }
    }
}