@extends('layouts.main')

@section('title', "Login/Register")

@section('contents')

<div class="wrapper">
    <div class="breadcrumb-area pt-130" style="background-image: url(assets/img/2Wheel.png);background-size:100% 100%;">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2 style="color: #333;">register</h2>
                <ul>
                    <li>
                        <a href="home" style="color: #333;">home</a>
                    </li>
                    <li style="color: #333;">register</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-register-area ptb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="" href="{{ route('login') }}">
                                <h4> login </h4>
                            </a>
                            <a class="active" href="{{ route('register') }}">
                                <h4> register </h4>
                            </a>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-form">
                                        <form action="{{ route('register') }}" method="post">
                                            @csrf
                                            <select name="type" id="" style="margin-bottom: 20px" required>
                                                <option value="" selected disabled>Type</option>
                                                @if (old('type') == 'Dealer')
                                                <option value="Dealer" selected>Dealer</option>
                                                <option value="Non-Dealer">Non-Dealer</option>
                                                @else
                                                <option value="Dealer">Dealer</option>
                                                <option value="Non-Dealer" selected>Non-Dealer</option>
                                                @endif
                                            </select>
                                            <br>
                                            <input type="text" value="{{old('name')}}" name="name" placeholder="Full Name" required>
                                            <input name="phone" placeholder="Phone" value="{{old('phone')}}" type="number" required>
                                            <input name="address" value="{{old('address')}}" placeholder="Address" type="text" required>
                                            <input name="email" value="{{old('email')}}" placeholder="Email" type="email" required>
                                            <input type="password" name="password" placeholder="Password" required>
                                            <input type="password" name="confirm_password" placeholder="Confirm Password" required>

                                            <div class="button-box">
                                                <button type="submit" class="btn-style cr-btn"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-area">
        <div class="container">
            <div class="newsletter-wrapper-all theme-bg-2">
                <div class="row">
                    <div class="col-lg-5 col-12 col-md-12">
                        <div class="newsletter-img bg-img" style="background-image: url(assets/img/banner/newsletter-bg.png)">
                            <img alt="image" src="assets/img/team/newsletter-img.png">
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 col-md-12">
                        <div class="newsletter-wrapper text-center">
                            <div class="newsletter-title">
                                <h3>Subscribe our newsletter</h3>
                            </div>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form action="#" method="post" id="#" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your email here..." required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
