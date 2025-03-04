@extends('layouts.user.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 mt-4">
          <div class="col-12">
            <h1 class="m-0 text-dark">
                <a class="nav-link drawer" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                پرداخت های شما
                <a href="{{route('home.products.all')}}" class="home-dashboard nav-link">
                    خانه 
                </a>
            </h1>
                {{-- <img src="/images/icons/logo-01.png" style="filter: brightness(0) invert(1);"> --}}

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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
