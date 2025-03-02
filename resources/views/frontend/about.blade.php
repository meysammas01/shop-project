
@extends('layouts.frontend.master')
 
@section('content')

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما</title>
   <style>
    /* تنظیمات کلی صفحه */
/* body {
    font-family: Arial, sans-serif;
    direction: rtl;
    text-align: center;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
} */
/* 
.container {
    width: 90%;
    max-width: 1200px;
    margin: 50px auto;
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
} */

/* استایل بخش‌ها */
section {
    margin: 50px 0;
}

h1, h2 {
    color: #2c3e50;
}

p {
    color: #555;
    line-height: 1.8;
}

/* استایل تصویر */
img {
    width: 100%;
    max-width: 600px;
    border-radius: 10px;
    margin-top: 15px;
}

/* استایل بخش خدمات */
.service-box {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.service {
    width: 45%;
    background: #fff;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
}

.service:hover {
    transform: translateY(-5px);
}

.service img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px;
}

/* استایل تماس با ما */
.contact p {
    font-size: 18px;
    font-weight: bold;
}

.contact strong {
    color: #e74c3c;
}

/* ریسپانسیو برای موبایل */
@media (max-width: 768px) {
    .service {
        width: 100%;
    }
}

   </style>
</head>
<body>
    <div class="container">

        <!-- 🔹 معرفی فروشگاه -->
        <section class="about">
            <h1>درباره ما</h1>
            <p>فروشگاه <strong>TechStore</strong> با ارائه جدیدترین محصولات دیجیتال، شامل موبایل، لپ‌تاپ، کنسول‌های بازی و لوازم جانبی، تجربه‌ای متفاوت از خرید آنلاین را برای شما فراهم می‌کند.</p>
            <img src="images/store.jpg" alt="فروشگاه ما">
        </section>

        <!-- 🔹 خدمات ما -->
        <section class="services">
            <h2>خدمات ما</h2>
            <div class="service-box">
                <div class="service">
                    <img src="\assets\img\b8(1).jpg" alt="موبایل">
                    <h3>فروش موبایل و لپ‌تاپ</h3>
                    <p>جدیدترین مدل‌های گوشی و لپ‌تاپ با بهترین قیمت</p>
                </div>

                <div class="service">
                    <img src="\assets\img\b12.jpg" alt="کنسول بازی">
                    <h3>کنسول‌های بازی</h3>
                    <p>پلی‌استیشن، ایکس‌باکس و نینتندو با ضمانت اصل بودن</p>
                </div>
                <div class="service">
                    <img src="\assets\img\banner-half1.jpg" alt="لوازم جانبی">
                    <h3>لوازم جانبی</h3>
                    <p>از هدفون و کیبورد تا شارژر و کاور موبایل</p>
                </div>
                <div class="service">
                    <img src="\assets\img\ad1(1).jpg" alt="ارسال سریع">
                    <h3>ارسال سریع</h3>
                    <p>ارسال به سراسر کشور در کمترین زمان ممکن</p>
                </div>
            </div>
        </section>


        <!-- 🔹 تماس با ما -->
        <section class="contact">
            <h2>تماس با ما</h2>
            <p>سوالی دارید؟ با ما در ارتباط باشید:</p>
            <p><strong>📧 ایمیل:</strong> support@techstore.com</p>
            <p><strong>📞 تلفن:</strong> ۰۲۱-۱۲۳۴۵۶۷۸</p>
            <p><strong>📍 آدرس:</strong> تهران، خیابان ولیعصر، پلاک ۱۲۳</p>
        </section>

    </div>
</body>
</html>







@endsection