@extends('layouts.main')
@section('title')
<title> Auto Parts Whishlist - 2Wheels</title>
@endsection
@section('contents')
<style>
@media screen and (max-width:768px) {
    .dashboard-nav>li>a {
        width: fit-content;
        padding: 0px 20px;
    }

    .dashboard-nav {
        display: block !important;
        width: fit-content;

    }
}
</style>
<div class="header-space"></div>
<section>
    <div class="container">
        <div class="user-ads mb40">
            <div class="well mb40">
                <div class="dashboard-profile clearfix">
                    <div class="profile-photo pull-left"
                        style="background-image: url({{asset('storage')}}/images/users/{{Auth::user()->image}});">
                    </div>
                    <h2>{{Auth::user()->name}}</h2>
                    <p>Member Since {{Auth::user()->created_at}}</p>
                    <p class="fs12"><a href="{{route('user.edit', Auth::id())}}">Edit Profile</a> | <a href="{{route('user.edit', Auth::id())}}">Change Password</a></p>
                </div>
                <ul class="dashboard-nav">
                    <li class="">
                        <a href="{{ route('my_bike_adds') }}">My Bike Adds</a>
                    </li>
                    <li class="">
                        <a href="{{ route('my_product_adds') }}">My Product Adds</a>
                    </li>
                    <li class="">
                        <a href="{{ route('my_fav_bikes') }}">Favourites Bikes</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('my_fav_products') }}">Favourites Products</a>
                    </li>

                    <li class="">
                        <a href="{{ route('my_orders') }}">My Orders</a>
                    </li>
                </ul>
            </div>


            <div class="search-page-new">
                <div class="mb20 text-right">
                    Displaying <b>{{count($products)}}</b> Ads
                </div>
                <ul class="list-unstyled search-results">
                    @foreach ($products as $pro)
                    <li class="classified-listing">
                        <div>

                            <div class="well search-list clearfix ad-container page-">
                                <div class="col-md-3 grid-style">
                                    <div class="img-box">
                                        <div id="gallery-5362814">
                                            <div id="contact-user-info-5362814" class='custom-html'
                                                style="display: none">
                                                <div class="light-gallery-user-info clearfix">
                                                    <strong class="generic-white fs18">PKR {{$pro->product->price}}</strong>
                                                </div>
                                            </div>

                                            <ul class="gallery list-unstyled image-gallery page-">
                                                <li class="total-pictures-bar-outer img-content img-valign">
                                                   <a href="{{route('product.show', $pro->product->id)}}">
                                                    <img alt="Universal PVC Plastic Car Mat - Black  in Karachi"
                                                    class="lazy pic"
                                                    src="{{asset('storage')}}/images/products/{{$pro->product->getImages()[0]}}"
                                                    title="Universal PVC Plastic Car Mat - Black  in Karachi" />
                                                   </a>

                                                </li>

                                            </ul>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-9 grid-style">
                                    <div>
                                        <div class="search-title-row">
                                            <div class="search-title">
                                                <div class="right">
                                                    <div class="price-details generic-dark-grey">
                                                        <div class="price-details generic-dark-grey">
                                                            PKR {{$pro->product->price}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{route('product.show', $pro->product->id)}}" class="car-name ad-detail-path"
                                                    title='Universal PVC Plastic Car Mat - Black  in Karachi'
                                                    current-index='0' target='_blank'>
                                                    <h3>{{$pro->product->name}}
                                                        {{-- {{$products[$i]->product->category->name}} --}}
                                                    </h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ad-mt10">
                                        <div class="col-md-12 grid-date">
                                            <div class="search-dealer-logo pull-right">
                                            </div>
                                            <ul class="search-vehicle-info mt5">
                                                <li>Interior</li>
                                                <li>Floor Mats</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-bottom">
                                        <div class="">
                                            <div class="quantizer-info links-container pull-right mr5 clearfix">
                                                <a href="{{url('removeToWishlist/'.$pro->product->id)}}" class="btn btn-link-outline btn-danger pull-right mr5 add-cart-item">Remove</a>
                                            </div>
                                            <div>
                                                <div class="listing-action mr5">
                                                    <span class="save-ad pull-left">
                                                        <div class='saved-list' data-toggle='tooltip'>
                                                            <i class='fa fa-heart' title='Saved'></i> Saved
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--
                                <p>Saved</p>
                                <p>Saved</p> --}}
                            </div>
                        </div>
                    </li>

                    @endforeach

                    <div class="header-space"></div>
                    <div class="header-space"></div>
                    @endsection
