<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title>فروشگاه اینترنتی</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/assets/css/bootstrap-rtl.css" />
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="/assets/css/style.css" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!--===============================================================================================-->
    
</head>
<body dir="rtl"  class="animsition bg-light">

    <!-- start top nav -->
    <div class="container-fluid bg-top-nav">
        <div class="row">
          <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-sm-12 col-md-6 d-none d-md-block">
                <p class="text-white">ارسال رایگان - ضمانت بازگشت وجه 30 روزه</p>
              </div>
              <div
                class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center"
              >
                <nav class="nav custom-top-nav">
                  <a class="nav-link text-white border-left" href="#"
                    >آدرس فروشگاه</a
                  >
                  <a class="nav-link text-white border-left" href="#"
                    >پیگیری سفارش</a
                  >
                  <a class="nav-link text-white border-left" href="#"
                    >تلفن : 0912000000</a
                  >
                  <a
                    class="nav-link text-white border-left d-none d-md-block"
                    href="#"
                    >ضمانت کیفیت محصولات</a
                  >
                </nav>
              </div>
            </div>
          </div>
          <div class="container my-4">
            <div class="row">
              <div class="col-sm-12 col-md-9">
                <div class="input-group">
                  {{-- <div class="input-group-prepend">
                    <button
                      class="btn btn-secondary dropdown-toggle custom-btn-font-size"
                      type="button"
                      data-toggle="dropdown"
                    >
                      همه دست بندی ها
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">موبایل</a>
                      <a class="dropdown-item" href="#">قطعات کامپیوتر</a>
                      <a class="dropdown-item" href="#">پوشاک</a>
                      <a class="dropdown-item" href="#">لوازم خانگی</a>
                    </div>
                  </div> --}}
                  <form class="" action="{{ route('home.products.all') }}">
                  <input
                    type="text" name="search"
                    class="form-control input-top-nav-search"
                    placeholder="جستجو بین بیش از 250000 کالا ..."
                  />
                  <div class="input-group-append">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                
                  </div>
                </form>
                </div>
              </div>
              <div
                class="col-sm-12 col-md-3 d-flex justify-content-center align-items-center mt-csm-3"
              >
              <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{  is_null(Cookie::get('basket')) ? 0 : count(json_decode(Cookie::get('basket'), true)) }}">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
              </div>
            </div>
          </div>
          <nav class="custom-nav w-100 position-relative">
            <div class="container">
              <div class="row">
                <nav
                  class="navbar navbar-expand-xl navbar-dark custom-navbar w-100"
                >
                  <button
                    class="navbar-toggler custom-navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>
  
                  <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                  >
                    <ul class="navbar-nav custom-navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link text-white" href="{{route('home.products.all')}}">خانه</a>
                      </li>
  
                      <li class="nav-item dropdown">
                        <a
                          class="nav-link text-white dropdown-toggle"
                          href="#"
                          id="navbarDropdown"
                          role="button"
                          data-toggle="dropdown"
                        >
                          موبایل و تبلت 
                        </a>
                        <div
                          class="dropdown-menu w-100 dropdown-image border-0 shadow"
                          aria-labelledby="navbarDropdown"
                        >
                          <img
                            src="assets/img/home.png"
                            class="d-none d-xl-block"
                            alt=""
                          />
                          <div class="container">
                            <div class="row w-100">
                              <div class="col-sm-12 col-md-12 col-lg-3">
                                <ul class="nav flex-column pl-3">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                      <i class="fas fa-angle-left"></i> ماشین لباش
                                      شویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> یخچال و
                                      فریزر</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> اجاق
                                      گاز</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> لوازم
                                      صوتی و تصویری</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> ماشین
                                      ظرفشویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link"
                                      ><i class="fas fa-angle-left"></i> مبلمان</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> فرش و
                                      قالیچه</a
                                    >
                                  </li>
                                </ul>
                              </div>
                              <div class="col-sm-12 col-md-12 col-lg-3">
                                <ul class="nav flex-column pl-3">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                      <i class="fas fa-angle-left"></i> ماشین لباش
                                      شویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> یخچال و
                                      فریزر</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> اجاق
                                      گاز</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> لوازم
                                      صوتی و تصویری</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> ماشین
                                      ظرفشویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link"
                                      ><i class="fas fa-angle-left"></i> مبلمان</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> فرش و
                                      قالیچه</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                     
                      <li class="nav-item dropdown">
                        <a
                          class="nav-link text-white dropdown-toggle"
                          href="#"
                          id="navbarDropdown"
                          role="button"
                          data-toggle="dropdown"
                        >
                          صوتی و تصویری 
                        </a>
                        <div
                          class="dropdown-menu w-100 dropdown-image border-0 shadow"
                          aria-labelledby="navbarDropdown"
                        >
                          <img
                            src="assets/img/home.png"
                            class="d-none d-xl-block"
                            alt=""
                          />
                          <div class="container">
                            <div class="row w-100">
                              <div class="col-sm-12 col-md-12 col-lg-3">
                                <ul class="nav flex-column pl-3">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                      <i class="fas fa-angle-left"></i> ماشین لباش
                                      شویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> یخچال و
                                      فریزر</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> اجاق
                                      گاز</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> لوازم
                                      صوتی و تصویری</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> ماشین
                                      ظرفشویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link"
                                      ><i class="fas fa-angle-left"></i> مبلمان</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> فرش و
                                      قالیچه</a
                                    >
                                  </li>
                                </ul>
                              </div>
                              <div class="col-sm-12 col-md-12 col-lg-3">
                                <ul class="nav flex-column pl-3">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                      <i class="fas fa-angle-left"></i> ماشین لباش
                                      شویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> یخچال و
                                      فریزر</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> اجاق
                                      گاز</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> لوازم
                                      صوتی و تصویری</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> ماشین
                                      ظرفشویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link"
                                      ><i class="fas fa-angle-left"></i> مبلمان</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> فرش و
                                      قالیچه</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>


                      <li class="nav-item dropdown">
                        <a
                          class="nav-link text-white dropdown-toggle"
                          href="#"
                          id="navbarDropdown"
                          role="button"
                          data-toggle="dropdown"
                        >
                          بازی و سرگرمی 
                        </a>
                        <div
                          class="dropdown-menu w-100 dropdown-image border-0 shadow"
                          aria-labelledby="navbarDropdown"
                        >
                          <img
                            src="assets/img/home.png"
                            class="d-none d-xl-block"
                            alt=""
                          />
                          <div class="container">
                            <div class="row w-100">
                              <div class="col-sm-12 col-md-12 col-lg-3">
                                <ul class="nav flex-column pl-3">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                      <i class="fas fa-angle-left"></i> ماشین لباش
                                      شویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> یخچال و
                                      فریزر</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> اجاق
                                      گاز</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> لوازم
                                      صوتی و تصویری</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> ماشین
                                      ظرفشویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link"
                                      ><i class="fas fa-angle-left"></i> مبلمان</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> فرش و
                                      قالیچه</a
                                    >
                                  </li>
                                </ul>
                              </div>
                              <div class="col-sm-12 col-md-12 col-lg-3">
                                <ul class="nav flex-column pl-3">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                      <i class="fas fa-angle-left"></i> ماشین لباش
                                      شویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> یخچال و
                                      فریزر</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#"
                                      ><i class="fas fa-angle-left"></i> اجاق
                                      گاز</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> لوازم
                                      صوتی و تصویری</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> ماشین
                                      ظرفشویی</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link"
                                      ><i class="fas fa-angle-left"></i> مبلمان</a
                                    >
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"
                                      ><i class="fas fa-angle-left"></i> فرش و
                                      قالیچه</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>


                      <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('shop.index')}}">فروشگاه</a>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('about.page')}}">درباره ما</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('contact.page')}}">تماس ما</a>
                      </li>
                    </ul>
                    {{-- <a href="{{route('admin.products.create')}}" class="text-warning text-decoration-none login-btn" data-toggle="modal" data-target="#login-form"> --}}
                    <a href="{{route('admin.products.create')}}" class="text-warning text-decoration-none login-btn">
                      <i class="far fa-user"></i>
                      <span>ورود مدیر</span>
                    </a>
                    <div class="modal fade" id="login-form" tabindex="-1" role="dialog">
                      <div class="modal-dialog modal-dialog-centered show" role="document">
                        <div class="modal-content">
                          <div class="modal-header border-0">
                            <h5 class="modal-title text-center w-100" id="exampleModalLabel">ورود به سایت</h5>
                        
                          </div>
                          <div class="modal-body">
                            <form class="login-form" method="">
                              <div class="form-group">
                                <label for="exampleInputEmail1" class="m-0">ایمیل</label>
                                <input type="email" placeholder="ایمیل..." class="form-control form-control-sm" id="exampleInputEmail1" >
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1" class="m-0">کلمه عبور</label>
                                <input type="password" placeholder="کلمه عبور..." class="form-control form-control-sm" id="exampleInputPassword1">
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input ml-0 " id="exampleCheck1">
                                <label class="custom-control-label pt-1" for="exampleCheck1">مرا به خاطر بسپار</label>
                              </div>
                              <button type="submit" class="btn btn-success btn-sm btn-block mt-4">ورود</button>
                            </form>
                          </div>
                          <div class="modal-footer border-0 pt-0 d-flex justify-content-around">
                          <a class="text-decoration-none" href="">رمز خود را فراموش کرده اید؟</a>
                          <a class="text-decoration-none" href="">عضویت در سایت</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </nav>
        </div>
      </div>


































    
    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="/images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15" action="{{ route('home.products.all') }}">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="متن خود را اینجا بنویسید ...">
            </form>
        </div>
    </div>


<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					سبد خرید
				</span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
            <ul class="header-cart-wrapitem w-full">
                @if (!is_null(Cookie::get('basket')))
                @foreach (json_decode(Cookie::get('basket'), true) as $id => $value)
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <a href="{{ route('home.basket.remove', $id) }}">
                        <div class="header-cart-item-img">
                            <img src="/{{ $value['demo_url'] }}" alt="IMG">
                        </div>
                    </a>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="single.php" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            {{ $value['title'] }}
                        </a>

                        <span class="header-cart-item-info">
								{{ $value['price'] }} هزار تومان
							</span>
                    </div>
                </li>
                @endforeach
                @endif
            </ul>

            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
                    جمع کل: {{ is_null(Cookie::get('basket')) ? 0 : array_sum(array_column(json_decode(Cookie::get('basket'), true), 'price')) }} هزار تومان
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="{{ route('home.checkout') }}" class="flex-c-m stext-101 cl0 size-107 w-100 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-l-8 m-b-10">
                        مشاهده سبد خرید و پرداخت
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>