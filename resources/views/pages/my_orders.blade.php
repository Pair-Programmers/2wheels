@extends('layouts.main')
@section('title', "whishlist")
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
                    <p class="fs12"><a href="{{route('user.edit', Auth::id())}}">Edit Profile</a> | <a
                            href="{{route('user.edit', Auth::id())}}">Change Password</a></p>
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
                    <li class="">
                        <a href="{{ route('my_fav_products') }}">Favourites Products</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('my_orders') }}">My Orders</a>
                    </li>
                </ul>
            </div>


            <div class="search-page-new">
                <div class="mb20 text-right">
                    Displaying <b></b> Ads
                </div>
                <ul class="list-unstyled search-results">

                    <li class="classified-listing">
                        <div>

                            <div class="well search-list clearfix ad-container page-">
                                @foreach($orders as $order)
                                <div class="col-md-12 p-5 grid-style">
                                    <div>
                                        <div class="search-title-row">
                                            <div class="search-title">
                                                <div class="right">
                                                    <div class="price-details generic-dark-grey">
                                                        <div class="price-details generic-dark-grey">
                                                            Order Status: {{$order->status}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <a disabled class="car-name ad-detail-path"
                                                    title='Universal PVC Plastic Car Mat - Black  in Karachi'
                                                    current-index='0' target='_blank'>
                                                    <h3>Order ID: {{$order->id}}</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ad-mt10">
                                        <div class="col-md-12 grid-date">
                                            <div class="col-md-12">
                                                <div class="u">
                                                    <table id="mytable" class="table">
                                                        <thead>
                                                            <th>Item Name</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Amount</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($order->orderDetails as $orderDetail)
                                                            <tr>
                                                                <td>{{$orderDetail->orderDetailProduct->name}}</td>
                                                                <td>{{$orderDetail->quantity}}</td>
                                                                <td>{{$orderDetail->unit_price}}</td>
                                                                <td>{{$orderDetail->total_ammount}}</td>
                                                            </tr>
                                                            @endforeach

                                                            <!-- <tr>
                                                                <td>Honda</td>
                                                                <td>1</td>
                                                                <td>89,000</td>
                                                                <td>89,000</td>
                                                            </tr><tr>
                                                                <td>Honda</td>
                                                                <td>1</td>
                                                                <td>89,000</td>
                                                                <td>89,000</td>
                                                            </tr> -->
                                                        </tbody>
                                                    </table>

                                                    <div class="clearfix"></div>
                                                    <div style="text-align: right;width:100%;margin-top:20px;">
                                                        <span><b>Total Amount</b></span>
                                                        <br>
                                                        <span class="mt-3">{{$order->total_ammount}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-bottom">
                                        <div class="">
                                            <div class="quantizer-info links-container pull-right mr5 clearfix">

                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </li>
                    <ul>
            </div>
        </div>
    </div>
    </div>


    <div class="header-space"></div>
    <div class="header-space"></div>
    @endsection