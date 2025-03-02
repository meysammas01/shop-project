
@extends('layouts.frontend.master')
 
@section('content')


<div class="contact-container">
    <h1>تماس با ما 📞</h1>
    <p>سوالی دارید؟ نیاز به راهنمایی دارید؟ همین حالا با ما در ارتباط باشید!</p>

    <div class="contact-content">
        <!-- فرم تماس -->
        <div class="contact-form">
            <h2>📩 ارسال پیام</h2>
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="نام شما" required>
                <input type="email" name="email" placeholder="ایمیل شما" required>
                <textarea name="message" placeholder="پیام شما" rows="5" required></textarea>
                <button type="submit">ارسال پیام</button>
            </form>
        </div>

        <!-- اطلاعات تماس -->
        <div class="contact-info">
            <h2>📍 راه‌های ارتباطی</h2>
            <p><strong>📞 تلفن:</strong> ۰۲۱-۱۲۳۴۵۶۷۸</p>
            <p><strong>📧 ایمیل:</strong> support@techstore.com</p>
            <p><strong>📍 آدرس:</strong> تهران، خیابان ولیعصر، پلاک ۱۲۳</p>
            <div class="social-icons">

            </div>
        </div>
    </div>
</div>







@endsection