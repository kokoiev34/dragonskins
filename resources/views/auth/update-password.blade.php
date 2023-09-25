<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Fredoka:wght@300;400;500;600;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" {{ asset("../css/app.css")}}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body class="antialiased">
<div class="wrapper">
    <div class="nav">
        <a href="/"><div class="nav__logo"></div></a>
        <a href="/" class="nav__button-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                <path d="M1.33477 0.759472L22.0766 21.5013M1.33477 21.5013L22.0766 0.759472" stroke="white" stroke-linecap="round"></path>
            </svg>
        </a>
    </div>
    <div class="sign-up__wrapper">
        <div class="wrapper__transparent-layer">
            <div class="sign-up__forms">
                <div class="sign-up__forms-links reset-password-title">
                    Reset password
                </div>
                <form class="sign-up__form" action="{{ route("password.update") }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="email" name="email" class="sign-up__form-input sign-up__form-email" placeholder="Email">
                    <input type="password" name="password" class="sign-up__form-input sign-up__form-email" placeholder="Password">
                    <input type="password" name="password_confirmation" class="sign-up__form-input sign-up__form-email" placeholder="Password confirmation">
                    <button class="sign-up__form-submit" type="submit">RESET PASSWORD</button>
                </form>
                <div class="reset-password"><a href="#">BACK TO LOG IN</a></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
