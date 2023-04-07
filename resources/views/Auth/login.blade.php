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
            <a href="{{ route("homepage") }}"><div class="nav__logo"></div></a>
            <a href="{{ route("homepage") }}" class="nav__button-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                    <path d="M1.33477 0.759472L22.0766 21.5013M1.33477 21.5013L22.0766 0.759472" stroke="white" stroke-linecap="round"></path>
                </svg>
            </a>
        </div>
        <div class="sign-up__wrapper">
            <div class="sign-up__forms">
                <div class="sign-up__forms-links">
                    <a href="{{ route("auth.register") }}" class="sign-up__forms-link sign-up__forms-link-not-active">Sign up</a>
                    <a href="{{ route("auth.login") }}" class="sign-up__forms-link sign-up__forms-link-sign-in">Sign in</a>
                </div>
                <form class="sign-up__form" action="{{ route("auth.login") }}" method="POST">
                    @csrf
                    <input type="email" name="email" class="sign-up__form-input sign-up__form-username" placeholder="Email or username">
                    <!-- <input type="email" class="sign-up__form-input sign-up__form-email" placeholder="Email"> -->
                    <input type="password" name="password" class="sign-up__form-input sign-up__form-password" placeholder="Password">
                    <!-- <input type="password" class="sign-up__form-input sign-up__form-re-password" placeholder="Repeat password"> -->
                    <label class="sign-up__form-checkbox container">Remember me
                        <input type="checkbox" name="remember">
                        <span class="sign-up__form-checkmark checkmark"></span>
                    </label>
                    <div class="sign-up__form-forget-password"><a href="reset-password.html">Forgot your password?</a></div>
                    <button class="sign-up__form-submit" type="submit"><a>SIGN IN</a></button>
                </form>
                <div class="sign-up__different">or</div>
                <h3 class="sign-up__different-title">SIGN UP WITH</h3>
                <div class="sign-up__different-methods">
                    <a href="index.html" class="sign-up__different-method method-gmail"></a>
                    <a href="index.html" class="sign-up__different-method method-steam"></a>
                </div>
            </div>
        </div>

    </div>
    </body>
</html>
