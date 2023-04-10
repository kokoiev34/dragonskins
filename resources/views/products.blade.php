@extends("app")
@section("content")
    @foreach($products as $product)
    <div class="main__offers-card">
        <p class="card-title">{{ $product->hash_name }}</p>
        <div class="card-img" style="background-image: url({{ asset($product->image) }})"></div>
        <div class="card-wrapper">
            <div class="card-statrak">StatTrak™</div>
            <div class="card-rarity">{{ $product->rarity }}</div>
        </div>
        <p class="card-price">{{$product->price . " €"  }}</p>
        <div class="card-cart-btn"></div>
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
@endsection
