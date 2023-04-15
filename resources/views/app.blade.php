<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __("main_title") }}</title>
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
            <div class="nav__links">
                @foreach($categories as $category)
                    <a href="{{route("productsByCategory", $category->id)}}" class="nav__link nav__link-rifles"
                       @if( intval($categoryId) === $category->id)
                            style="color: #7280C7;"
                        @endif
                    >{{ $category->name }}</a>
                @endforeach
                <a href="{{ route('changeLang', ['lang' => 'en']) }}" class="nav__link nav__link-rifles">English</a>
                <a href="{{ route('changeLang', ['lang' => 'ru']) }}" class="nav__link nav__link-rifles">Русский</a>
            </div>
            <input type="search" placeholder="Search" class="nav__search">
            @auth
                <div class="nav__profile">
                    <div class="nav__profile-profile" id="profile">
                        <div class="nav__profile-profile-img"></div>
                    </div>
                    <div class="nav__profile-cart" id="cart">
                        <div class="nav__profile-cart-img"></div>
                        <span class="nav__profile-cart-count">0</span>
                    </div>
                    <div class="nav__profile-modal" id="profile-modal">
                        <ul class="nav__profile-modal-links">
                            <a class="nav__profile-modal-link" href="inventory.html">
                                <img src="{{ asset("/css/inventory.8dbe2f20.png") }}" class="nav__profile-modal-link-img">
                                <p class="nav__profile-modal-link-title">Inventory</p>
                            </a>
                            <a class="nav__profile-modal-link" href="">
                                <img src="{{ asset("/css/history.8329ff1e.png") }}" class="nav__profile-modal-link-img">
                                <p class="nav__profile-modal-link-title">Order History</p>
                            </a>
                            <a class="nav__profile-modal-link" href="{{ route("account.show") }}">
                                <img src="{{ asset("/css/settings.97c71a4e.png") }}" class="nav__profile-modal-link-img">
                                <p class="nav__profile-modal-link-title">Settings</p>
                            </a>
                            <a class="nav__profile-modal-link" href="{{ route("auth.logout") }}">
                                <img src="{{ asset("/css/exit.9b889f17.png") }}" class="nav__profile-modal-link-img">
                                <p class="nav__profile-modal-link-title">Exit</p>
                            </a>
                        </ul>
                    </div>
                    <div class="cart-modal" id="cart-modal">
                        <div class="cart__modal">
                            <h5 class="cart__modal-title">1 items in Cart</h5>
                            <div class="cart__modal-item">
                                <div class="cart-modal-item-left">
                                    <p class="cart__item-title">P250</p>
                                    <p class="cart__item-model">Visions</p>
                                    <p class="cart__item-info">Minimal Wear Classified Pistol</p>
                                </div>
                                <div class="cart-modal-item-right">
                                    <p class="cart__item-price">€9,90</p>
                                    <button class="cart__item-delete">Delete</button>
                                </div>
                            </div>
                            <p class="cart-total">Total €19,80</p>
                            <button class="cart-btn-clear-cart">CLEAR CART</button>
                            <a href="{{ route("carts") }}" class="cart-btn-clear-cart">VIEW CART</a>
                        </div>
                    </div>
                </div>
            @endauth
            @guest
                <div class="nav__buttons">
                    <a href="{{ route("auth.register") }}"><div class="nav__button">sign up</div></a>
                    <a href="{{ route("auth.login") }}"><div class="nav__button nav__sign-in">sign in</div></a>
                </div>
            @endguest
        </div>
        <div class="wrapper__bg">
            <div class="wrapper__transparent-layer">
                @yield("content")
            </div>
        </div>
        <div class="footer">
            <h2 class="footer__title">DRAGON SKINS</h2>
            <div class="footer__links">
                <div class="footer__links-left">
                    <div class="footer__link">Support</div>
                    <div class="footer__link">FAQ</div>
                    <div class="footer__link">Blog</div>
                </div>
                <div class="footer__links-right">
                    <div class="footer__link">Terms & Conditions</div>
                    <div class="footer__link">Privacy Policy</div>
                    <div class="footer__link">Cookie Policy</div>
                </div>
            </div>
            <div class="footer__payments">
                <p class="footer__payments-title">Payment methods</p>
                <div class="footer__payments-methods">
                    <img src="{{asset("../css/amex.529d5ce8.png")}}" class="footer__payments-method amex">
                    <img src="{{asset("../css/visa.489472ea.png")}}" class="footer__payments-method visa">
                    <img src="{{asset("../css/mc.bddb5590.png")}}" class="footer__payments-method mc">
                    <img src="{{asset("../css/applepay.8feba053.png")}}" class="footer__payments-method applepay">
                    <img src="{{asset("../css/googlepay.ac19081e.png")}}" class="footer__payments-method googlepay">
                </div>
            </div>
            <div class="footer__other">
                <div class="footer__other-steam">
                    <img src="{{asset("../css/steam.05bf0337.png")}}" class="footer__other-steam-icon">
                    <p class="footer__other-steam-title">Powered by Steam</p>
                </div>
                <p class="footer__other-copyright">© 2023 Dragon Skins</p>
            </div>
        </div>
        <div class="modal-window" id="myModal">
            <div class="modal-window-content">
                <img class="modal__content-close" src="{{ asset("/css/close.png") }}" id="close"></img>
                <h1 class="modal__content-title">NEWSLETTER SIGN UP</h1>
                <p class="modal__content-subtitle">If you want to receive newsletter, enter your email below</p>
                <form action="" class="modal__content-form">
                    <input type="email" class="sign-up__form-input modal__content-input" placeholder="Email">
                    <label class="sign-up__form-checkbox container">Yes, I would like to subscribe to Dragon Skins Newsletter. I agree to let Sragon Skins to process my personal data in order to send me marketing material, and I have read and agree to <a href="/" class="sign-up__form-policies-link">Terms & Conditions</a> and <a href="" class="sign-up__form-policies-link">Privacy Policy</a>.</p>
                        <input type="checkbox">
                        <span class="sign-up__form-checkmark checkmark"></span>
                    </label>
                    <div class="modal__content-button-wrapper"><button class="modal__content-button">Yes, sign me up!</button></div>
                </form>
            </div>
        </div>
        <div class="overlay" id="overlay"></div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{asset("/js/profile-modal.ca00708a.js") }}"></script>
    <script src="{{asset("/js/cart-modal.js") }}"></script>
    <script src="{{asset("/js/modal.js") }}"></script>
    <!-- Initialize Swiper -->
    <script>let swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });</script>
    </body>
</html>
