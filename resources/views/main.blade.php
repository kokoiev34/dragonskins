<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __("main_title") }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Fredoka:wght@300;400;500;600;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body class="antialiased">
    <div class="wrapper">
        <div class="nav">
            <a href="/"><div class="nav__logo"></div></a>
            <div class="nav__links">
                @foreach($categories as $category)
                <a href="knives.html" class="nav__link nav__link-rifles">{{ $category->name }}</a>
                @endforeach
                    <a href="{{ route('changeLang', ['lang' => 'en']) }}" class="nav__link nav__link-rifles">English</a>
                    <a href="{{ route('changeLang', ['lang' => 'ru']) }}" class="nav__link nav__link-rifles">Русский</a>
            </div>
            <input type="search" placeholder="Search" class="nav__search">
            <div class="nav__buttons">
                <a href="sign-up.html"><div class="nav__button">sign up</div></a>
                <a href="sign-in.html"><div class="nav__button nav__sign-in">sign in</div></a>
            </div>
        </div>
        <div class="wrapper__bg">
            <div class="wrapper__transparent-layer">
                <div class="hero">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach($banners as $banner)
                            <div class="swiper-slide">
                                <div class="swiper-slide-left">
                                    <div class="swiper__title">{{$banner->title}}</div>
                                    <div class="swiper__subtitle">{{$banner->description}}</div>
                                    <div class="swiper__button">{{$banner->button}}</div>
                                </div>
                                <div class="swiper-slide-right" style="background-image: url({{ asset($banner->image) }})"></div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="main">
                    <div class="main__blog">
                        <div class="main__blog-wrapper">
                            <h2 class="main__blog-title">Blog</h2>
                            <p class="main__blog-btn">See all</p>
                        </div>
                        <div class="main__blog-cards">
                            @foreach($blogs as $blog)
                            <div class="main__blog-card">
                                <h3 class="main__blog-card-title">{{ $blog->title }}</h3>
                                <div class="main__blog-card-img" style="background-image: url({{ asset($blog->image) }})"></div>
                                <p class="main__blog-card-subtitle">{{ $blog->description }}</p>
                                <date class="main__blog-card-date">{{ $blog->date }}3</date>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__offers">
                        <div class="main__offers-wrapper">
                            <h2 class="main__offers-title">Top Offers</h2>
                            <p class="main__offers-btn">See all</p>
                        </div>
                        <div class="main__offers-cards">
                                <div class="main__offers-card">
                                    <p class="card-title">P250 Visions</p>
                                    <div class="card-img"></div>
                                    <div class="card-wrapper">
                                        <div class="card-statrak">StatTrak™</div>
                                        <div class="card-rarity">Classified</div>
                                    </div>
                                    <p class="card-price">€9,90</p>
{{--                                    <form action="{{ route('cart.add', ['product' => $product->id]) }}" method="POST" >--}}
{{--                                        @csrf--}}
                                        <button type="submit" class="card-cart-btn"></button>
                                    </form>
                                    <div class="card-float">
                                        <p class="card-float-title">Minimal wear</p>
                                        <span class="card-float-rate">0.13</span>
                                    </div>
                                    <div class="card-float-scale">
                                        <div class="card-float-scale1"></div>
                                        <div class="card-float-scale2"></div>
                                        <div class="card-float-scale3"></div>
                                        <div class="card-float-scale4"></div>
                                        <div class="card-float-scale5"></div>
                                    </div>
                                </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                            <div class="main__offers-card">
                                <p class="card-title">P250 Visions</p>
                                <div class="card-img"></div>
                                <div class="card-wrapper">
                                    <div class="card-statrak">StatTrak™</div>
                                    <div class="card-rarity">Classified</div>
                                </div>
                                <p class="card-price">€9,90</p>
                                <div class="card-cart-btn"></div>
                                <div class="card-float">
                                    <p class="card-float-title">Minimal wear</p>
                                    <span class="card-float-rate">0.13</span>
                                </div>
                                <div class="card-float-scale">
                                    <div class="card-float-scale1"></div>
                                    <div class="card-float-scale2"></div>
                                    <div class="card-float-scale3"></div>
                                    <div class="card-float-scale4"></div>
                                    <div class="card-float-scale5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo">
                    <div class="promo__wrapper">
                        <h1 class="promo__title">Promo code</h1>
                        <p class="promo__subtitle">By subscribing to our newsletter you receive an exclusive promocode with 25% off the first purchase</p>
                    </div>
                    <div class="promo__btn">Subscribe</div>
                </div>
                <div class="suggested">
                    <div class="suggested__wrapper">
                        <h2 class="suggested__wrapper-title">Suggested</h2>
                        <p class="suggested__wrapper-btn">See all</p>
                    </div>
                    <div class="suggested__cards">
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="latest">
                    <div class="latest__wrapper">
                        <h2 class="latest__wrapper-title">Recently Added</h2>
                        <p class="latest__wrapper-btn">See all</p>
                    </div>
                    <div class="latest__cards">
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                        <div class="main__offers-card">
                            <p class="card-title">P250 Visions</p>
                            <div class="card-img"></div>
                            <div class="card-wrapper">
                                <div class="card-statrak">StatTrak™</div>
                                <div class="card-rarity">Classified</div>
                            </div>
                            <p class="card-price">€9,90</p>
                            <div class="card-cart-btn"></div>
                            <div class="card-float">
                                <p class="card-float-title">Minimal wear</p>
                                <span class="card-float-rate">0.13</span>
                            </div>
                            <div class="card-float-scale">
                                <div class="card-float-scale1"></div>
                                <div class="card-float-scale2"></div>
                                <div class="card-float-scale3"></div>
                                <div class="card-float-scale4"></div>
                                <div class="card-float-scale5"></div>
                            </div>
                        </div>
                    </div>
                </div>
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
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>let swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });</script>
    </body>
</html>
