@extends("app")
@section("content")
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
                            @foreach($products as $product)
                                <div class="main__offers-card">
                                    <p class="card-title">{{ $product->hash_name }}</p>
                                    <a href="{{ route("products.show", ['product' => $product->id ]) }}"><div class="card-img" style="background-image: url({{ asset($product->image) }})"></div></a>
                                    <div class="card-wrapper">
                                        <div class="card-statrak">StatTrak™</div>
                                        <div class="card-rarity">{{ $product->rarity }}</div>
                                    </div>
                                    <p class="card-price">{{$product->price . " €"  }}</p>
                                    <form action="{{ route('cart.add', ['product' => $product->id]) }}" method="POST" >
                                        @csrf
                                    <button class="card-cart-btn" type="submit"></button>
                                    </form>
                                    <div class="card-float">
                                        <p class="card-float-title">Minimal wear</p>
                                        <span class="card-float-rate">{{ $product->float_rate }}</span>
                                    </div>
                                    <div class="card-float-scale">
                                        <div class="card-float-scale1"></div>
                                        <div class="card-float-scale2"></div>
                                        <div class="card-float-scale3"></div>
                                        <div class="card-float-scale4"></div>
                                        <div class="card-float-scale5"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="promo">
                    <div class="promo__wrapper">
                        <h1 class="promo__title">Promo code</h1>
                        <p class="promo__subtitle">By subscribing to our newsletter you receive an exclusive promocode with 25% off the first purchase</p>
                    </div>
                    <button class="promo__btn" id="subscribe">Subscribe</button>
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
@endsection
