@extends('layouts.user.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">داشبورد کاربری</h1>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <p>به پنل کاربری خوش آمدید!</p>
            <ul>
                <li><a href="{{ route('user.orders') }}">مشاهده سفارشات</a></li>
                <li><a href="{{ route('user.payments') }}">مشاهده پرداخت‌ها</a></li>
                <li><a href="{{ route('user.profile') }}">ویرایش پروفایل</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
