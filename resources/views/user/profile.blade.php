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
                پروفایل ویرایش
            </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          @include('errors.message')
          <div class="row mt-5">
              <div class="col-md-12">
                  <div class="card card-defualt">
                      <!-- form start -->
            <form action="{{ route('user.profile.update') }}" method="POST" style="padding: 20px;">
                @csrf
                <div class="form-group">
                    <label>نام</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label>موبایل</label>
                    <input type="text" class="form-control" name="mobile" value="{{ $user->mobile }}">
                </div>

                <div class="form-group">
                    <label>آدرس</label>
                    <textarea class="form-control" name="address">{{ $user->address }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
            </form>


</div>
</div>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
