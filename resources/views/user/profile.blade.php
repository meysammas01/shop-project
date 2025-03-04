@extends('layouts.user.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">ویرایش پروفایل</h1>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('user.profile.update') }}" method="POST">
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
@endsection
