@extends("app")
@section("content")
    <div class="wrapper__bg">
        <div class="wrapper__transparent-layer">
            <form class="settings" action="{{ route("account.update") }}" method="POST">
                @csrf
                <h2 class="settings__title">Settings</h2>
                <div class="settings__wrapper">
                    <div class="settings__block">
                        <h3 class="settings__block-title">General</h3>
{{--                        <input class="settings__block-input" placeholder="E-mail">--}}
                        <div class="settings__block-input" >{{ $user->email }}</div>
                        <div class="settings__block-icon"></div>
                    </div>
                    <div class="settings__block">
                        <h3 class="settings__block-title">Steam Account</h3>
                        <input name="steam_account" class="settings__block-input" placeholder="Steam" value="{{ $user->information?->steam_account }}">
                        <div class="settings__block-icon"></div>
                    </div>
                </div>
                <div class="settings__wrapper">
                    <div class="settings__block">
                        <h3 class="settings__block-title">Personal information</h3>
                        <h4 class="settings__block-subtitle">Name</h4>
                        <div class="settings__block-container">
                            <input type="text" name="first_name" class="settings__block-container-name" placeholder="Name" value="{{ $user->information?->first_name }}">
                            <input type="text" name="last_name" class="settings__block-container-surname" placeholder="Surname" value="{{ $user->information?->last_name }}">
                        </div>
                        <h4 class="settings__block-subtitle">Birth</h4>
                        <div class="settings__block-container">
                            <input type="text" name="birth_date" class="settings__block-container-surname" placeholder="Day" value="{{ $user->information?->birth_date }}">
                            <input type="text" name="birth_month" class="settings__block-container-surname" placeholder="Month" value="{{ $user->information?->birth_month }}">
                            <input type="text" name="birth_year" class="settings__block-container-surname" placeholder="Year" value="{{ $user->information?->birth_year }}">
                        </div>
                        <h4 class="settings__block-subtitle">Billing address</h4>
                        <div class="settings__block-container">
                            <input type="text" name="street_name" class="settings__block-container-name" placeholder="Street name" value="{{ $user->information?->street_name }}">
                            <input type="text" name="street_number" class="settings__block-container-surname" placeholder="Street number" value="{{ $user->information?->street_number }}">
                        </div>
                        <div class="settings__block-container">
                            <input type="text" name="zip" class="settings__block-container-name zip" placeholder="ZIP/Postal code" value="{{ $user->information?->zip }}">
                            <input type="text" name="city" class="settings__block-container-surname city" placeholder="City" value="{{ $user->information?->city }}">
                        </div>
                        <div class="settings__block-container">
{{--                            <input type="text" name="country" class="settings__block-container-name country" placeholder="Country" value="{{ $user->information?->country }}">--}}
                            <select name="country" class="settings__block-container-name country">
                                <option value=""></option>
                                @foreach($geos as $key => $geo)
                                    @if($user->information?->country == $key)
                                        <option value="{{ $key }}" selected>{{ $geo->native }}</option>
                                    @else
                                        <option value="{{ $key }}"> {{ $geo->native }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit"><div class="settings__block-container-button">SAVE</div></button>
                    </div>
                    <div class="settings__block">
                        <h3  class="settings__block-title">Social Account</h3>
                        <input name="social_account" class="settings__block-input" placeholder="Steam" value="{{ $user->information?->social_account }}">
                        <div class="settings__block-icon"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
