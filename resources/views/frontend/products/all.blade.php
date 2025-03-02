@extends('layouts.frontend.master')
 
@section('content')


      <!-- end top nav -->
      <div class="container-fluid bg-light pb-5">
        <div class="row">
           <!-- start slider nav -->
       <div class="container mt-5">
         <div class="row">
           <div class="col-sm-12 col-lg-6 custom-col-lg-6">
             <div
               id="carouselExampleCaptions"
               class="carousel slide carousel-fade"
               data-ride="carousel"
             >
               <ol class="carousel-indicators">
                 <li
                   data-target="#carouselExampleCaptions"
                   data-slide-to="0"
                   class="active"
                 ></li>
                 <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                 <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                 <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                 <div class="carousel-item active">
                   <a href="#">
                     <img style="height: fit-content;" src="assets/img/new-slider4.jpg" class="d-block w-100" alt="..."
                   /></a>
                   <!-- <div class="carousel-caption d-none d-md-block">
                     <h6>پوشاک زنانه</h6>
                     <p class="bg-warning p-1 shadow">
                       تابستان 99 همراه با جدیترین پوشاک زنانه
                     </p>
                   </div> -->
                 </div>
                 <div class="carousel-item">
                   <a href="#"
                     ><img style="height: fit-content;" src="assets/img/new-slider3.jpg" class="d-block w-100" alt="..."
                   /></a>
                   <!-- <div class="carousel-caption d-none d-md-block">
                     <h6>جدیدترین گوشی های موبایل</h6>
                     <p class="bg-success p-1 shadow">گوشی و لوازم جانبی موبایل</p>
                   </div> -->
                 </div>
                 <div class="carousel-item">
                   <a href="#">
                     <img style="height: fit-content;" src="assets/img/new-slider1.jpg" class="d-block w-100" alt="..."
                   /></a>
                   <!-- <div class="carousel-caption d-none d-md-block">
                     <h6>لوازم خانگی مدرن</h6>
                     <p class="bg-danger p-1 shadow">بروز ترین لوازم خانگی</p>
                   </div> -->
                 </div>
                 <div class="carousel-item">
                   <a href="#">
                     <img style="height: fit-content;" src="assets/img/new-slider2.jpg" class="d-block w-100" alt="..."
                   /></a>
                   <!-- <div class="carousel-caption d-none d-md-block">
                     <h6>لوازم خانگی مدرن</h6>
                     <p class="bg-danger p-1 shadow">بروز ترین لوازم خانگی</p>
                   </div> -->
                 </div>
               </div>
               <a
                 class="carousel-control-prev"
                 href="#carouselExampleCaptions"
                 role="button"
                 data-slide="prev"
               >
                 <span
                   class="carousel-control-prev-icon"
                   aria-hidden="true"
                 ></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a
                 class="carousel-control-next"
                 href="#carouselExampleCaptions"
                 role="button"
                 data-slide="next"
               >
                 <span
                   class="carousel-control-next-icon"
                   aria-hidden="true"
                 ></span>
                 <span class="sr-only">Next</span>
               </a>
             </div>
           </div>
           <div class="col-sm-12 col-md-6 col-lg-3 custom-col-lg-3 mt-clg-3">
             <a href="#">
               <img class="img-fluid" style="height: fit-content;" src="assets/img/b4.jpg" alt=""
             /></a>
           </div>
           <div class="col-sm-12 col-md-6 col-lg-3   custom-col-lg-3 mt-clg-3 d-flex flex-column justify-content-between"
           >
             <a href="#">
                  <img class="img-fluid mb-cmd-3"  style="height: fit-content;" src="assets/img/b2.jpg" alt=""
             /></a>
             <a href="#">
               <img class="img-fluid" style="height: fit-content;" src="assets/img/b3.jpg" alt=""
             /></a>
           </div>
         </div>
       </div>
       <!-- start slider nav -->
       <!-- start shipping nav -->
       <div class="container mt-5">
         <div class="row">
           <div
             class="col-sm12 col-md-6 col-lg-3 col-xl-2 offset-xl-1 mb-2 shipping-wrapper"
           >
             <div class="bg-light">
               <img src="assets/img/shipping.png" alt="" class="float-right" />
               <p>ارسال رایگان</p>
               <p>
                 به تمام نقاط کشور
               </p>
             </div>
           </div>
           <div class="col-sm12 col-md-6 col-lg-3 col-xl-2 mb-2 shipping-wrapper">
             <div class="bg-light">
               <img src="assets/img/shipping2.png" alt="" class="float-right" />
               <p>ارسال رایگان</p>
               <p>
                 به تمام نقاط کشور
               </p>
             </div>
           </div>
           <div class="col-sm12 col-md-6 col-lg-3 col-xl-2 mb-2 shipping-wrapper">
             <div class="bg-light">
               <img src="assets/img/shipping3.png" alt="" class="float-right" />
               <p>ارسال رایگان</p>
               <p>
                 به تمام نقاط کشور
               </p>
             </div>
           </div>
           <div class="col-sm12 col-md-6 col-lg-3 col-xl-2 mb-2 shipping-wrapper">
             <div class="bg-light">
               <img src="assets/img/shipping4.png" alt="" class="float-right" />
               <p>ارسال رایگان</p>
               <p>
                 به تمام نقاط کشور
               </p>
             </div>
           </div>
           <div class="col-sm12 col-md-6 col-lg-3 col-xl-2 mb-2 shipping-wrapper">
             <div class="bg-light">
               <img src="assets/img/shipping5.png" alt="" class="float-right" />
               <p>ارسال رایگان</p>
               <p>
                 به تمام نقاط کشور
               </p>
             </div>
           </div>
         </div>
       </div>
       <!-- end shipping nav -->
        </div>
       <!-- start ads nav -->
       <div class="container mt-5">
         <div class="row">
           <div class="col-sm-12 col-md-3 wrapper-ads mb-2">
             <img class="img-fluid" src="assets/img/b5.jpg" alt="">
           </div>
           <div class="col-sm-12 col-md-6 wrapper-ads mb-2">
            <img class="img-fluid" src="assets/img/b6.jpg" alt="">
           </div>
           <div class="col-sm-12 col-md-3 wrapper-ads mb-2">
            <img class="img-fluid" src="assets/img/b7.jpg" alt="">
           </div>
         </div>
       </div>
       <!-- end ads nav -->
       </div>
      <!-- start cat nav -->
        <section class="container mt-5">
          <div class="row no-gutters">
            
            @foreach ($categories as $category)
           <div class="col-sm-12 col-md-3 col-lg-2 mb-2 mb-md-0 cat-hover">
             <a href="{{ route('category.products.show', $category->slug) }}" class="text-decoration-none">
               <div class="d-flex justify-content-center align-items-center bg-white ">
                 <div class="cat-desc ">
                   <p class="mb-2">{{ $category->title }}</p>
                   <p>{{ $category->products_count }} محصول</p></div>
                   <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}">
                </div>
             </a>
           </div>
           @endforeach

          </div>
        </section>
        <!-- end cat nav -->

    <!-- Modal1 -->
{{-- <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                <img src="/images/icons/icon-close.png" alt="CLOSE">
            </button>

            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="/images/product-detail-01.jpg" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="images/product-detail-02.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="/images/product-detail-02.jpg" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="images/product-detail-03.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="/images/product-detail-03.jpg" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-l-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            کارت ویزیت مشاور املاک
                        </h4>

                        <span class="mtext-106 cl2">
                            ۱۳ هزار تومان
                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                        </p>

                        <!--  -->
                        <div class="p-t-33">

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="flex-w flex-m respon6-next">
                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        افزودن به سبد خرید
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div> --}}
 <!-- start special offers nav -->
 <section class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
     <nav>
       <div class="nav nav-tabs custom-nav-tabs position-relative" dir="ltr" id="nav-tab" role="tablist">
         <p class="offer-section-title position-absolute">پیشنهاد ویژه امروز</p>
         <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">بازی و سرگرمی</a>
         <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">موبایل و تبلت</a>
         <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">مدو پوشاک </a>

       </div>
     </nav>
     <div class="tab-content" id="nav-tabContent">
       <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
         <div class="container">
           <div class="row">
           
             <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
               <div class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
               <div  class="offer-blur d-flex justify-content-between" >
                 <div class="offer-product-image">
                   <img class="first-img"  class="img-fliud" src="assets/img/s1.jpg" alt="">
                   <img class="second-img"  class="img-fliud" src="assets/img/s2.jpg" alt="">

                 </div>
               <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
                 <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
              <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
              <div class="count-down-timer mt-4">
                <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
                <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

                </div>
              </div>
               </div>
               </div>
              
             </div>
             <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
               <div  class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
               <div  class="offer-blur d-flex justify-content-between" >
                 <div class="offer-product-image">
                   <img class="first-img"  class="img-fliud" src="assets/img/s3.jpg" alt="">
                   <img class="second-img"  class="img-fliud" src="assets/img/s4.jpg" alt="">

                 </div>
               <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
                 <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
              <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
              <div class="count-down-timer mt-4">
                <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
                <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

                </div>
              </div>
               </div>
               </div>
              
             </div>
             <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
               <div  class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
               <div  class="offer-blur d-flex justify-content-between" >
                 <div class="offer-product-image">
                   <img class="first-img"  class="img-fliud" src="assets/img/s5.jpg" alt="">
                   <img class="second-img"  class="img-fliud" src="assets/img/s6.jpg" alt="">

                 </div>
               <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
                 <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
              <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
              <div class="count-down-timer mt-4">
                <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
                <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

                </div>
              </div>
               </div>
               </div>
              
             </div>
             <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
               <div  class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
               <div  class="offer-blur d-flex justify-content-between" >
                 <div class="offer-product-image">
                   <img class="first-img"  class="img-fliud" src="assets/img/s7.jpg" alt="">
                   <img class="second-img"  class="img-fliud" src="assets/img/s8.jpg" alt="">

                 </div>
               <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
                 <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
              <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
              <div class="count-down-timer mt-4">
                <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
                <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

                </div>
              </div>
               </div>
               </div>
              
             </div>
         </div>

       </div>
      
     </div>
     <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
       <div class="container">
         <div class="row">
         
           <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
             <div class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
             <div  class="offer-blur d-flex justify-content-between" >
               <div class="offer-product-image">
                 <img class="first-img"  class="img-fliud" src="assets/img/s1.jpg" alt="">
                 <img class="second-img"  class="img-fliud" src="assets/img/s2.jpg" alt="">

               </div>
             <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
               <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
            <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
            <div class="count-down-timer mt-4">
              <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
              <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

              </div>
            </div>
             </div>
             </div>
            
           </div>
           <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
             <div  class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
             <div  class="offer-blur d-flex justify-content-between" >
               <div class="offer-product-image">
                 <img class="first-img"  class="img-fliud" src="assets/img/s3.jpg" alt="">
                 <img class="second-img"  class="img-fliud" src="assets/img/s4.jpg" alt="">

               </div>
             <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
               <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
            <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
            <div class="count-down-timer mt-4">
              <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
              <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

              </div>
            </div>
             </div>
             </div>
            
           </div>
           <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
             <div  class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
             <div  class="offer-blur d-flex justify-content-between" >
               <div class="offer-product-image">
                 <img class="first-img"  class="img-fliud" src="assets/img/s5.jpg" alt="">
                 <img class="second-img"  class="img-fliud" src="assets/img/s6.jpg" alt="">

               </div>
             <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
               <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
            <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
            <div class="count-down-timer mt-4">
              <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
              <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

              </div>
            </div>
             </div>
             </div>
            
           </div>
           <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
             <div  class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
             <div  class="offer-blur d-flex justify-content-between" >
               <div class="offer-product-image">
                 <img class="first-img"  class="img-fliud" src="assets/img/s7.jpg" alt="">
                 <img class="second-img"  class="img-fliud" src="assets/img/s8.jpg" alt="">

               </div>
             <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
               <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
            <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
            <div class="count-down-timer mt-4">
              <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
              <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

              </div>
            </div>
             </div>
             </div>
            
           </div>
       </div>

     </div>
     </div>
     <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
       <div class="container">
         <div class="row">
         
           <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
             <div class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
             <div  class="offer-blur d-flex justify-content-between" >
               <div class="offer-product-image">
                 <img class="first-img"  class="img-fliud" src="assets/img/s1.jpg" alt="">
                 <img class="second-img"  class="img-fliud" src="assets/img/s2.jpg" alt="">

               </div>
             <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
               <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
            <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
            <div class="count-down-timer mt-4">
              <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
              <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

              </div>
            </div>
             </div>
             </div>
            
           </div>
           <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
             <div  class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
             <div  class="offer-blur d-flex justify-content-between" >
               <div class="offer-product-image">
                 <img class="first-img"  class="img-fliud" src="assets/img/s3.jpg" alt="">
                 <img class="second-img"  class="img-fliud" src="assets/img/s4.jpg" alt="">

               </div>
             <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
               <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
            <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
            <div class="count-down-timer mt-4">
              <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
              <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

              </div>
            </div>
             </div>
             </div>
            
           </div>
           <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
             <div  class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
             <div  class="offer-blur d-flex justify-content-between" >
               <div class="offer-product-image">
                 <img class="first-img"  class="img-fliud" src="assets/img/s5.jpg" alt="">
                 <img class="second-img"  class="img-fliud" src="assets/img/s6.jpg" alt="">

               </div>
             <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
               <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
            <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
            <div class="count-down-timer mt-4">
              <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
              <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

              </div>
            </div>
             </div>
             </div>
            
           </div>
           <div class="col-sm-12 col-md-12 col-lg-6 bg-white position-relative s-o-box-shadow">
             <div  class="after-expire position-absolute"><div  class="offer-expire-text-inner badge bg-warning"></div></div>
             <div  class="offer-blur d-flex justify-content-between" >
               <div class="offer-product-image">
                 <img class="first-img"  class="img-fliud" src="assets/img/s7.jpg" alt="">
                 <img class="second-img"  class="img-fliud" src="assets/img/s8.jpg" alt="">

               </div>
             <div class="my-4 offer-details"><a href="#" class="text-decoration-none">هدست شیائومی مدل B-43</a>
               <div class="offer-rating mt-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
            <div class="offer-price mt-2 "><s class="mr-3">250000 تومان</s><span>120000 تومان</span></div>
            <div class="count-down-timer mt-4">
              <p>فرصت <span>باقی مانده</span> تا پایان این پشنهاد</p>
              <div id="demo" dir="ltr" class="demos mt-3 d-flex justify-content-center position-relative">

              </div>
            </div>
             </div>
             </div>
            
           </div>
       </div>

     </div>
     </div>
   </div>
    </div>
  </section>
<!-- end special offers nav -->
 <!-- start banner offers nav -->
 <section class="container mt-5">
    <div class="row">
      <div class="col-sm-12 col-md-6 mb-cmd-3">
        <img src="assets/img/top-2.gif" class="img-fluid" alt="">
      </div>
      <div class="col-sm-12 col-md-6 ">
        <img src="assets/img/top1.gif" class="img-fluid" alt="">
      </div>
 </div>
  </section>
<!-- end  banner  offers nav -->
 <!-- start products offers nav -->
 <section class="container mt-5 position-relative">

   <div class="row ">
     <div class="col-sm-12">  
        
      <p class="offer-section-title position-absolute ml-3">موبایل و تبلت</p>
      <div class="owl-carousel owl-theme bg-white position-relative mt-5">
        
       @foreach($mobileProducts as $product)

                    <a href="{{ route('home.product.show', $product->id) }}" class="text-decoration-none">
                        <div class="p-3"> 
                            <div class="card custom-card">
                                <img class="p-img align-self-center mt-4" src="{{$product->demo_url}}" alt="{{ $product->title }}">
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        <p class="p-title mt-2">{{ $product->title }}</p>
                                        <p class="p-price mt-2">
                                            {{ number_format($product->price) }} تومان
                                        </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
        
      </div>
     </div>
   </div>
 </section>
 <!-- end products offers nav -->
<!-- start banner-1 offers nav -->
<div class="container mt-5 banner-section-1">
  <div class="row">
    <div class="col-sm-12 col-md-3 banner-img-hover mb-2">
<a href=""><img class="img-fluid" src="assets/img/ads3.jpg" alt=""></a>
    </div>
    <div class="col-sm-12 col-md-3 banner-img-hover  mb-2">
      <a href=""><img class="img-fluid" src="assets/img/ads4.jpg" alt=""></a>
          </div>
          <div class="col-sm-12 col-md-3 banner-img-hover  mb-2">
            <a href=""><img class="img-fluid" src="assets/img/ads6.jpg" alt=""></a>
                </div>
                <div class="col-sm-12 col-md-3 banner-img-hover  mb-2">
                  <a href=""><img class="img-fluid" src="assets/img/ad5.jpg" alt=""></a>
                      </div>
  </div>
</div>
 <!-- end banner-1 offers nav -->
 <!-- start mobile offers nav -->
 <section class="container mt-5">
  <div class="row ">
    <div class="col-sm-12">  
     <p class="offer-section-title position-absolute ml-3">کامپیوتر و لپ تاپ</p>
     <div class="owl-carousel owl-theme bg-white position-relative mt-5">
       
        @foreach($laptopProducts as $product)
                    <a href="{{ route('home.product.show', $product->id) }}" class="text-decoration-none">
                        <div class="p-3"> 
                            <div class="card custom-card">
                                <img class="p-img align-self-center mt-4" src="{{$product->demo_url}}" alt="{{ $product->title }}">
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        <p class="p-title mt-2">{{ $product->title }}</p>
                                        <p class="p-price mt-2">
                                            {{ number_format($product->price) }} تومان
                                        </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
       
     </div>
    </div>
  </div>
 </section>
 <!-- end mobile  offers nav -->
<!-- start banner-2 offers nav -->
<div class="container mt-5 ">
  <div class="row">
    <div class="col-sm-12">
      <a href=""><img class="img-fluid rounded" src="assets/img/f-banner.jpg" alt=""></a>
    </div>
  </div>
</div>
 <!-- end banner-2 offers nav -->

  <!-- start laptop offers nav -->
  <section class="container mt-5">
    <div class="row ">
      <div class="col-sm-12">  
       <p class="offer-section-title position-absolute ml-3">تفریحی و ورزشی</p>
       <div class="owl-carousel owl-theme bg-white position-relative mt-5">
        

        @foreach($sportProducts as $product)
        <a href="{{ route('home.product.show', $product->id) }}" class="text-decoration-none">
            <div class="p-3"> 
                <div class="card custom-card">
                    <img class="p-img align-self-center mt-4" src="{{$product->demo_url}}" alt="{{ $product->title }}">
                    <div class="card-body text-center">
                        <p class="card-text">
                            <p class="p-title mt-2">{{ $product->title }}</p>
                            <p class="p-price mt-2">
                                {{ number_format($product->price) }} تومان
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
       </div>
      </div>
    </div>
   </section>
   <!-- end laptop  offers nav -->
   <!-- start banner-3 offers nav -->
<div class="container mt-5 ">
  <div class="row">
    <div class="col-sm-12 col-md-6 mb-2">
      <a href=""><img class="img-fluid rounded" src="assets/img/banner-half1.jpg" alt=""></a>
    </div>
    <div class="col-sm-12 col-md-6  mb-2">
      <a href=""><img class="img-fluid rounded" src="assets/img/banner-half2.jpg" alt=""></a>
    </div>
  </div>
</div>
 <!-- end banner-3 offers nav -->
   <!-- start brand nav -->
   <section class="container mt-5" style="margin-bottom:300px">
    <div class="row ">
      <div class="col-sm-12">  
       <p class="offer-section-title position-absolute ml-3">برند های برتر</p>
       <div class="owl-carousel-brand owl-carousel owl-theme bg-white position-relative mt-5">
         
         <a href="#" class="text-decoration-none">
           <div class="p-3"> 
             <div class="card custom-card">
               <img class="p-img align-self-center mt-4" src="assets/img/br1.jpg" class="card-img-top" alt="...">
         
             </div>
           </div>
         </a>
         <a href="#" class="text-decoration-none">
           <div class="p-3"> 
             <div class="card custom-card">
               <img class="p-img align-self-center mt-4" src="assets/img/br2.png" class="card-img-top" alt="...">
             
             </div>
           </div>
         </a>
         <a href="#" class="text-decoration-none">
           <div class="p-3"> 
             <div class="card custom-card">
               <img class="p-img align-self-center mt-4" src="assets/img/br3.png" class="card-img-top" alt="...">
              
             </div>
           </div>
         </a>
         <a href="#" class="text-decoration-none">
           <div class="p-3"> 
             <div class="card custom-card">
               <img class="p-img align-self-center mt-4" src="assets/img/br4.jpg" class="card-img-top" alt="...">
              
             </div>
           </div>
         </a>
         <a href="#" class="text-decoration-none">
           <div class="p-3"> 
             <div class="card custom-card">
               <img class="p-img align-self-center mt-4" src="assets/img/br5.png" class="card-img-top" alt="...">
              
             </div>
           </div>
         </a>
         <a href="#" class="text-decoration-none">
           <div class="p-3"> 
             <div class="card custom-card">
               <img class="p-img align-self-center mt-4" src="assets/img/br6.jpg" class="card-img-top" alt="...">
               
             </div>
           </div>
         </a>
         <a href="#" class="text-decoration-none">
           <div class="p-3"> 
             <div class="card custom-card">
               <img class="p-img align-self-center mt-4" src="assets/img/br7.png" class="card-img-top" alt="...">
               
             </div>
           </div>
         </a>
         <a href="#" class="text-decoration-none">
           <div class="p-3"> 
             <div class="card custom-card">
               <img class="p-img align-self-center mt-4" src="assets/img/br9.jpg" class="card-img-top" alt="...">
              
             </div>
           </div>
         </a>
       </div>
      </div>
    </div>
   </section>
   <!-- end brand nav -->

@endsection