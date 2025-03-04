<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;

class UserPanelController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function orders()
    {
        $orders = Auth::user()->orders()->paginate(10);
        return view('user.orders', compact('orders'));
    }

    public function payments()
    {
        $payments = Payment::whereHas('order', function ($query) {
            $query->where('user_id', Auth::id());
        })->paginate(10);

        return view('user.payments', compact('payments'));
    }

    public function profile()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }

    public function updateProfile(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:500',
    ]);

    $user = Auth::user(); // دریافت کاربر جاری

    if (!$user) {
        return back()->with('failed', 'کاربر یافت نشد، لطفاً دوباره وارد شوید.');
    }

    $updated = User::where('id', $user->id)->update([
        'name' => $request->name,
        'mobile' => $request->mobile,
        'address' => $request->address
    ]);

    if (!$updated) {
        return back()->with('failed', 'بروزرسانی انجام نشد.');
    }

    return back()->with('success', 'اطلاعات شما با موفقیت بروزرسانی شد.');
}
}
