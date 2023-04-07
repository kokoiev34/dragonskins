@extends("app")
@section("content")
    <div class="main">
        <div class="filter">
            <div class="filter-wrapper">
                <div class="filter-btn"></div>
                <div class="filter-title">Filter</div>
                <div class="filter-reset"></div>
                <div class="filter-hidden"></div>
            </div>
            <div class="filter__configs">
                <div class="filter__config filter__config-price">
                    <div class="filter__config-container">
                        <p class="filter__config-container-title">PRICE RANGE</p>
                        <div class="filter__config-container-hidden"></div>
                    </div>
                    <div class="filter__config-price-range">
                        <div class="range-slider">
                            <div class="price-range-input" style="display:flex">
                                <input type="number" value="10" min="0" max="1000">
                                <input type="number" value="250" min="0" max="1000">
                            </div>
                            <input value="10" min="0" max="1000" step="1" type="range">
                            <input value="250" min="0" max="1000" step="1" type="range">
                        </div>
                    </div>
                </div>
                <div class="filter__config filter__config-exterior">
                    <div class="filter__config-container">
                        <p class="filter__config-container-title">Exterior</p>
                        <div class="filter__config-container-hidden"></div>
                    </div>
                    <div class="filter__config-checkboxs">
                        <label class="container">Factory New
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Minimal Wear
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Field-Tested
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Well-Worn
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Battle Scarred
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="filter__config filter__config-rarity">
                    <div class="filter__config-container">
                        <p class="filter__config-container-title">RARITY</p>
                        <div class="filter__config-container-hidden"></div>
                    </div>
                    <div class="filter__config-checkboxs">
                        <label class="container">Consumer Grade
                            <input type="checkbox">
                            <span class="checkmark checkmark_consumer"></span>
                        </label>
                        <label class="container">Industrial Grade
                            <input type="checkbox">
                            <span class="checkmark checkmark_industrial"></span>
                        </label>
                        <label class="container">Mil-Spec Grade
                            <input type="checkbox">
                            <span class="checkmark checkmark_mil-spec"></span>
                        </label>
                        <label class="container">Restricted
                            <input type="checkbox">
                            <span class="checkmark checkmark_restricted"></span>
                        </label>
                        <label class="container">Classified
                            <input type="checkbox">
                            <span class="checkmark checkmark_classified"></span>
                        </label>
                        <label class="container">Covert
                            <input type="checkbox">
                            <span class="checkmark checkmark_covert"></span>
                        </label>
                    </div>
                </div>
                <div class="filter__config filter__config-extras">
                    <div class="filter__config-container">
                        <p class="filter__config-container-title">EXTRAS</p>
                        <div class="filter__config-container-hidden"></div>
                    </div>
                    <div class="filter__config-checkboxs">
                        <label class="container">StatTrak™
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Souvenir
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Vanilla
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Sticker
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Name Tag
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__offers">
            <div class="main__offers-wrapper">
                <div class="main__links">
                    <a href="/index.html" class="main__link">Home</a>
                    <span class="main__link-span">></span>
                    <a href="/knives.html" class="main__link">Knives</a>
                </div>
                <p class="main__offers-btn">See all</p>
            </div>
            <div class="main__offers-cards">
                <a href="/product.html">
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
                </a>
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
            <div class="main__offers-loadmore">
                <btn class="main__offers-more">LOAD MORE</btn>
            </div>
        </div>
    </div>
@endsection
