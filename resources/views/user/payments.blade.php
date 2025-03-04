@extends('layouts.user.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">پرداخت‌های شما</h1>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>تاریخ</th>
                        <th>مبلغ</th>
                        <th>کد رهگیری</th>
                        <th>وضعیت</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->created_at }}</td>
                        <td>{{ $payment->order->amount }} تومان</td>
                        <td>{{ $payment->res_id }}</td>
                        <td>{{ $payment->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $payments->links() }}
        </div>
    </div>
</div>
@endsection
