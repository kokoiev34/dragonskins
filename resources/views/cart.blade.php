@extends("app")
@section("content")
    <div class="cart">
        <div class="cart__wrapper">
            <h2 class="cart__wrapper-title">Cart</h2>
            <span class="cart__wrapper-quantity">{{ $carts?->count() }} item(s)</span>
            @foreach($products as $product)
                <div class="cart__wrapper-card">
                    <div class="cart__wrapper-card-image" style="background-image: url({{ asset($product->preview) }})"></div>
                    <div class="cart__wrapper-card-information">
                        <span class="cart__wrapper-card-information-weapon">{{ $product->weapons}}</span>
                        <span class="cart__wrapper-card-information-model">{{ $product->hash_name }}</span>
                        <span class="cart__wrapper-card-information-float">{{ $product->rarity }}</span>
                    </div>
                    <div class="cart__wrapper-card-other">
                        <span class="cart__wrapper-card-other-price">{{ $cart[$product->id]["quantity"] * $product->price }} €</span>
                        <a href="{{ route('cart.remove', [$product->id]) }}">
                            <button class="cart__wrapper-card-other-delete">
                                <img src="{{ asset ("/css/cart-delete.png") }}" alt="delete">
                                <span class="cart__wrapper-card-other-delete-title">Remove</span>
                            </button>
                        </a>
                    </div>

                </div>
            @endforeach
{{--            <div class="cart__wrapper-card">--}}
{{--                <div class="cart__wrapper-card-image" style="background-image: url({{ asset("/css/cart_device.png") }})"></div>--}}
{{--                <div class="cart__wrapper-card-information">--}}
{{--                    <span class="cart__wrapper-card-information-weapon">P250</span>--}}
{{--                    <span class="cart__wrapper-card-information-model">Visions</span>--}}
{{--                    <span class="cart__wrapper-card-information-float">Minimal Wear Classified Pistol</span>--}}
{{--                </div>--}}
{{--                <div class="cart__wrapper-card-other">--}}
{{--                    <span class="cart__wrapper-card-other-price">€9,90</span>--}}
{{--                    <button class="cart__wrapper-card-other-delete">--}}
{{--                        <img src="{{ asset ("/css/cart-delete.png") }}" alt="delete">--}}
{{--                        <span class="cart__wrapper-card-other-delete-title">Remove</span>--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="cart__wrapper-card">--}}
{{--                <div class="cart__wrapper-card-image" style="background-image: url({{ asset("/css/cart_device.png") }})"></div>--}}
{{--                <div class="cart__wrapper-card-information">--}}
{{--                    <span class="cart__wrapper-card-information-weapon">P250</span>--}}
{{--                    <span class="cart__wrapper-card-information-model">Visions</span>--}}
{{--                    <span class="cart__wrapper-card-information-float">Minimal Wear Classified Pistol</span>--}}
{{--                </div>--}}
{{--                <div class="cart__wrapper-card-other">--}}
{{--                    <span class="cart__wrapper-card-other-price">€9,90</span>--}}
{{--                    <button class="cart__wrapper-card-other-delete">--}}
{{--                        <img src="{{ asset ("/css/cart-delete.png") }}" alt="delete">--}}
{{--                        <span class="cart__wrapper-card-other-delete-title">Remove</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="cart__wrapper-card">--}}
{{--                <div class="cart__wrapper-card-image" style="background-image: url({{ asset("/css/cart_device.png") }})"></div>--}}
{{--                <div class="cart__wrapper-card-information">--}}
{{--                    <span class="cart__wrapper-card-information-weapon">P250</span>--}}
{{--                    <span class="cart__wrapper-card-information-model">Visions</span>--}}
{{--                    <span class="cart__wrapper-card-information-float">Minimal Wear Classified Pistol</span>--}}
{{--                </div>--}}
{{--                <div class="cart__wrapper-card-other">--}}
{{--                    <span class="cart__wrapper-card-other-price">€9,90</span>--}}
{{--                    <button class="cart__wrapper-card-other-delete">--}}
{{--                        <img src="{{ asset ("/css/cart-delete.png") }}" alt="delete">--}}
{{--                        <span class="cart__wrapper-card-other-delete-title">Remove</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="cart__wrapper-card">--}}
{{--                <div class="cart__wrapper-card-image" style="background-image: url({{ asset("/css/cart_device.png") }})"></div>--}}
{{--                <div class="cart__wrapper-card-information">--}}
{{--                    <span class="cart__wrapper-card-information-weapon">P250</span>--}}
{{--                    <span class="cart__wrapper-card-information-model">Visions</span>--}}
{{--                    <span class="cart__wrapper-card-information-float">Minimal Wear Classified Pistol</span>--}}
{{--                </div>--}}
{{--                <div class="cart__wrapper-card-other">--}}
{{--                    <span class="cart__wrapper-card-other-price">€9,90</span>--}}
{{--                    <button class="cart__wrapper-card-other-delete">--}}
{{--                        <img src="{{ asset ("/css/cart-delete.png") }}" alt="delete">--}}
{{--                        <span class="cart__wrapper-card-other-delete-title">Remove</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="cart__wrapper-clear">
                <a href="{{ route('cart.clear') }}" class="cart__wrapper-clear-button">Clear Cart</a>
            </div>
        </div>
        <div class="cart__order">
            <h3 class="cart__order-title">Confirm Order</h3>
            <p class="cart__order-quantity">{{ $carts?->count() }} item(s) in Cart</p>
            <div class="cart__order-total">
                <p class="cart__order-total-title">Total</p>
                <p class="cart__order-total-price">€{{ $totalSum }}</p>
            </div>
            <label class="sign-up__form-checkbox container"><p class="">I have read and agree to <a href="/" class="sign-up__form-policies-link">Terms & Conditions</a> and <a href="" class="sign-up__form-policies-link">Privacy Policy</a>.</p>
                <input type="checkbox">
                <span class="sign-up__form-checkmark checkmark"></span>
            </label>
            <button class="cart__order-button" id="subscribe">PROCEED TO CHECKOUT</button>
        </div>
    </div>
    <div class="modal-window" id="myModal">
        <div class="modal-window-content">
            <img class="modal__content-close" src="{{ asset('/css/close.png') }}" id="close">
            <h1 class="modal__content-title">Checkout</h1>
            <div class="modal__content-checkout">
                <form action="{{ asset(route('order.create')) }}" class="modal__content-form">
                    <p class="modal__content-checkout-subtitle">Credit and debit cards details</p>
                    @if($errors->has('number'))
                        <div class="error">{{ $errors->first('number') }}</div>
                    @endif
                    <input type="number" name="number" class="sign-up__form-input modal__content-input" placeholder="Card number">
                    <div class="modal__content-checkout-inputs">
                        @if($errors->has('date'))
                            <div class="error">{{ $errors->first('date') }}</div>
                        @endif
                        <input type="number" name="date" class="sign-up__form-input modal__content-input" placeholder="Expiry date">
                            @if($errors->has('cvv'))
                                <div class="error">{{ $errors->first('cvv') }}</div>
                            @endif
                        <input type="number" name="cvv" class="sign-up__form-input modal__content-input" placeholder="CVC/CVV">
                    </div>
                    <div class="modal__content-button-wrapper"><button class="modal__content-button" type="submit">PAY €{{ $totalSum }}</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>
@endsection
