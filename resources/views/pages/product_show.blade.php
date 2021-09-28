@extends('layouts.main')

@section('title', "Product Details")

@section('contents')

<div class="wrapper">
    <div class="breadcrumb-area pt-255 pb-30"
        style="background-image: url({{asset('website')}}/assets/img/banner/banner-4.jpg)">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>product details </h2>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>product details </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details-area fluid-padding-3 ptb-130">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-img-content">
                        <div class="product-details-tab mr-40">
                            <div class="product-details-large tab-content">
                                <div class="tab-pane active" id="pro-details1">
                                    @foreach ($product->getImages() as $image)
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/img/product-details/bl1.jpg">
                                            <img src="{{asset('storage')}}/images/products/{{$image}}" alt="">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>

                                <
                            </div>
                            <div class="product-details-small nav mt-12 product-dec-slider owl-carousel">
                                <a class="active" href="#pro-details1">
                                    <img src="{{asset('website')}}/assets/img/product-details/s1.jpg" alt="">
                                </a>
                                <a href="#pro-details2">
                                    <img src="{{asset('website')}}/assets/img/product-details/s2.jpg" alt="">
                                </a>
                                <a href="#pro-details3">
                                    <img src="{{asset('website')}}/assets/img/product-details/s3.jpg" alt="">
                                </a>
                                <a href="#pro-details4">
                                    <img src="{{asset('website')}}/assets/img/product-details/s4.jpg" alt="">
                                </a>
                                <a href="#pro-details5">
                                    <img src="{{asset('website')}}/assets/img/product-details/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content">
                        <h2>{{$product->name}}</h2>

                        <div class="product-price">
                            <span>RS {{$product->price}}</span>
                        </div>
                        <div class="product-price">
                            <span>{{$product->brand}}</span>
                        </div>
                        <div class="product-overview">
                            <h5 class="pd-sub-title">Product Overview</h5>
                            <p>{{$product->description}}</p>
                        </div>
                        <!-- <div class="product-color">
                            <h5 class="pd-sub-title">Product color</h5>
                            <ul>
                                <li class="red">b</li>
                                <li class="pink">p</li>
                                <li class="blue">b</li>
                                <li class="sky2">b</li>
                                <li class="green">y</li>
                                <li class="purple2">g</li>
                            </ul>
                        </div> -->
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="quickview-plus-minus">

                            <form action="{{url('addToCart')}}" method="Post" style="display:block;">
                                @csrf
                            <div class="cart-plus-minus">
                                <input type="number" value="1" min="1" name="quantity" class="cart-plus-minus-box">
                            </div>
                            <input type="hidden"  name="product_id" value="{{$product->id}}">
                            <div class="quickview-btn-cart" style="margin: 30px 0px !important;">
                                <button type="submit" class="btn-style cr-btn" ><span>add to cart</span></button>
                            </div>
                            </form>
                            <form action="{{route('add_to_wishlist')}}" method="POST" style="display:block;">
                                @csrf
                                {{-- <input type="hidden" name="user_id" value="{{Auth::user()->id}}"> --}}
                                <input type="hidden" name="for_favourite" value="{{$product->for_favourite}}">
                                <input type="hidden" name="product_or_bike_id" value="{{$product->id}}">
                                <style>
                                .cr-btn{
                                    display:block;
                                    padding:10px 15px;
                                    border:1px solid black;
                                    transition:all .5s;
                                    font-size:18px;
                                }
                                .cr-btn:hover{
                                    background:#fff;
                                    color:black;
                                }
                                </style>
                                    <div class="quickview-btn-wishlist">
                                         <button typ="submit" class="btn-hover cr-btn" href="#"><span><i
                                            class="icofont icofont-heart-alt"></i></span></button>
                                    </div>
                            </form>
                            
                        </div>
                        <div class="product-categories">
                            <h5 class="pd-sub-title">Category</h5>
                            <ul>
                                <li>
                                    <a href="#">{{$product->category->name}}</a>
                                </li>

                            </ul>
                        </div>
                        <div class="product-share">
                            <h5 class="pd-sub-title">Share</h5>
                            <ul>
                                <li>
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"> <i class="icofont icofont-social-instagram"></i></a>
                                </li>
                            </ul>
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
                        <div class="newsletter-img bg-img"
                            style="background-image: url(assets/img/banner/newsletter-bg.png)">
                            <img alt="image" src="{{asset('website')}}/assets/img/team/newsletter-img.png">
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 col-md-12">
                        <div class="newsletter-wrapper text-center">
                            <div class="newsletter-title">
                                <h3>Subscribe our newsletter</h3>
                            </div>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form action="#" method="post" id="#" name="mc-embedded-subscribe-form" class="validate"
                                    target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" value="" name="EMAIL" class="email"
                                            placeholder="Enter your email here..." required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text"
                                                name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                        </div>
                                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe"
                                                id="mc-embedded-subscribe" class="button"></div>
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
