
@extends('layouts.frontend.master')
 
@section('content')


<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با ما</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contact-container">
        <h1>تماس با ما</h1>
        <p>برای ارتباط با ما می‌توانید فرم زیر را پر کنید یا از طریق شماره تماس و ایمیل با ما در ارتباط باشید.</p>
        <form action="#" method="post">
            <label for="name">نام و نام خانوادگی:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">ایمیل:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">پیام شما:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">ارسال پیام</button>
        </form>
    </div>
</body>
</html>






@endsection