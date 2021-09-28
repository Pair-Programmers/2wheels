@extends('layouts.main')

@section('title', "view detail")

@section('contents')
<div class="container" style="margin: 160px auto;">
    <div class="used-bike-show-page row mt20">
    </div>
    <div class="row ad-listing-template mt10">
        <div class="col-md-8">
            <div class="well">
                <h1>{{$bike->name}}</h1>
                <form action="{{route('add_to_wishlist')}}" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="user_id" value="{{Auth::user()->id}}"> --}}
                    <input type="hidden" name="for_favourite" value="{{$bike->for_favourite}}">
                    <input type="hidden" name="product_or_bike_id" value="{{$bike->id}}">

                    <div class="quickview-btn-wishlist">
                        <button class="btn-hover cr-btn" type="submit"><span><i class="icofont icofont-heart-alt"></i></span></button>
                    </div>
                </form>
                <p class="detail-sub-heading">
                    <a href="#">{{$bike->seller_address}}</a> <span class="time"><i class="fa fa-mobile fs18"></i>
                </p>
                <div class="mb40 pos-rel">

                    <div class="">



                        <div class="item vehicle-slide-show vehicle-slide-show-ab" dir="ltr">

                            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

                            <!-- Demo styles -->
                            <style>
                            .swiper-container {
                                width: 100%;
                                height: 100%;
                            }

                            .swiper-slide {
                                text-align: center;
                                font-size: 18px;
                                background: #fff;

                                /* Center slide text vertically */
                                display: -webkit-box;
                                display: -ms-flexbox;
                                display: -webkit-flex;
                                display: flex;
                                -webkit-box-pack: center;
                                -ms-flex-pack: center;
                                -webkit-justify-content: center;
                                justify-content: center;
                                -webkit-box-align: center;
                                -ms-flex-align: center;
                                -webkit-align-items: center;
                                align-items: center;
                            }

                            .swiper-slide img {
                                display: block;
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            }

                            .swiper-container {
                                margin-left: auto;
                                margin-right: auto;
                            }
                            </style>
                            <ul style="height: 50vh;" class="gallery light-gallery list-unstyled  ">
                                <div class="swiper-container mySwiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($bike->getImages() as $image)
                                            <!-- single img -->
                                            <div class="swiper-slide">
                                                <img alt="Honda CRF 250L 2012 Image-1"
                                                    src="{{asset('storage')}}/images/bikes/{{$image}}"
                                                    title="{{$bike->name}}" />
                                            </div>
                                            <!-- single img end-->
                                        @endforeach

                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>

                                <!-- Swiper JS -->
                                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                                <!-- Initialize Swiper -->
                                <script>
                                var swiper = new Swiper(".mySwiper", {
                                    slidesPerView: 1,
                                    spaceBetween: 30,
                                    loop: true,
                                    pagination: {
                                        el: ".swiper-pagination",
                                        clickable: true,
                                    },
                                    navigation: {
                                        nextEl: ".swiper-button-next",
                                        prevEl: ".swiper-button-prev",
                                    },
                                });
                                </script>

                            </ul>

                            <span class="enlarge"><i class="fa fa-search-plus"></i> Click Photo to Enlarge</span>
                        </div>


                        <div class="sold-ad-tag">
                            <img alt="Sold Out" height="180"
                                src="https://wsa1.pakwheels.com/assets/Sold-out-e14c7e2b0005434c0632f6add82d31ec.svg"
                                title="Sold Out" />

                        </div>

                    </div>


                    <style>
                    .removed-reason {
                        position: absolute;
                        font-size: 15px;
                        left: 1px;
                        right: 1px;
                        top: 62%;
                        background-color: rgba(255, 255, 255, .9);
                        text-align: center;
                    }
                    </style>

                </div>


                <table width="100%" class="table table-bordered text-center table-engine-detail fs16">
                    <tbody>
                        <tr>
                            <td>
                                <span class="engine-icon year"></span>
                                <p>{{$bike->model_year}}</p>
                            </td>
                            <td>
                                <span class="engine-icon millage"></span>
                                <p>{{$bike->mileage}} km</p>
                            </td>
                            <td>
                                <span class="engine-icon type"></span>
                                <p>{{$bike->engine_type}}</p>
                            </td>

                        </tr>
                    </tbody>
                </table>


                <table class="table table-featured nomargin">
                    <tbody>
                        <tr>
                            <td class="ad-data last-border">Registered In</td>
                            <td class="last-border">{{$bike->engine_type}}</td>
                            <td class="noborder"></td>
                            <td class="ad-data">Last Updated:</td>
                            <td class="last-border">{{$bike->updated_at}}</td>
                        </tr>
                        <tr>
                            <td class="ad-data last-border">Body Type</td>

                            <td class="last-border"><a href="/used-bikes/trail-bikes/161467"
                                    title="Trail Bikes for sale in Pakistan">{{$bike->body_type}}</a></td>
                            <td class="noborder"></td>
                            <td class="ad-data">Ad Ref #</td>
                            <td class="last-border">{{$bike->id}}</td>
                        </tr>
                    </tbody>
                </table>

                <div style="height:0; position:relative; top:0px;"></div>
                <h2 class="ad-detail-heading mt30" id="scroll_seller_comments">Description</h2>
                <div>
                    {{$bike->description}}
                </div>

                <h2 class="ad-detail-heading mt30" id="scroll_seller_comments">Seller&#39;s Comments</h2>
                <div>
                    {{$bike->seller_comment}}
                    <br>
                    <label class="detail-tip show">Mention PakWheels.com when calling Seller to get a good deal</label>
                </div>

            </div><!-- well -->
        </div>

        <div class="col-md-4 sidebar-ab" style="z-index:8;">
            <!-- z-index is 32, bcoz of feature ads "Feature" tag -->
            <div id="scrollToFixed">
                <div class="pull-right" style="margin-top: -33px;">

                </div>

                <div class="side-bar">
                    <div class="well price-well pos-rel mb20">
                        <div class="price-box" style="">
                            <strong class="generic-green">Call: {{$bike->seller_phone}}</strong>


                        </div>


                    </div>


                    <div class="well">
                        <div class="owner-detail-head fs18 text-center">Seller Information</div>
                        <div class="owner-detail-main">
                            <div class="owner-details tl nopad" itemscope itemtype="http://schema.org/AutoDealer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="user-default-pic">
                                            <img alt="Bashi"
                                                src="https://www.pakwheels.com/forums/user_avatar/www.pakwheels.com/gixxerk6/90/23545_1.png" />
                                            <meta itemprop="name" content="Bashi">

                                            <meta itemprop="image"
                                                content="https://www.pakwheels.com/forums/user_avatar/www.pakwheels.com/gixxerk6/90/23545_1.png">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h5 class="nomargin">{{$bike->seller_phone}}</h5>
                                        <span class="member">{{$bike->user->created_at}}</span>
                                        <p class="more nomargin">
                                            <a href="/used-bikes/search/-/user_gixxerk6/" rel="nofollow"
                                                style="display:block; line-height:15px; margin-top:4px;">more ads by
                                                Bashi
                                                Motorsports »</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="sticky-ad-detail" style="display: none">
                                    <div class="container ">
                                        <h3 class="title generic-white nomargin">
                                            Honda CRF 250L 2012

                                            <span>| Call for price </span>

                                        </h3>

                                        <button class="btn btn-block pull-left btn-phone" data-is-logged-in=true><i
                                                class="fa fa-phone"></i> Show Seller Phone
                                            Number</button>


                                        <button class="btn btn-block pull-left btn-message"><i
                                                class="fa fa-envelope"></i> Send
                                            Message</button>

                                        <div class="sticky-user-info pull-right">
                                            <span class="pic">
                                                <img alt="Bashi Motorsports"
                                                    src="https://cache4.pakwheels.com/system/dealerships/dealers/000/011/240/thumb/11240.jpg?1579512382" />
                                            </span>
                                            Bashi Motorsports
                                            <div class="fs11">Member Since Aug 09, 2009</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="user-verification text-center">
                            <li class="user-phone">
                                <span class='verified'></span>
                            </li>
                            <li class="user-email">
                                <span class='verified'></span>
                            </li>
                            <li class="user-fb">

                            </li>
                        </ul>

                        <div class="registration-page registration-panel text-center"
                            style="min-height: 0; padding: 20px 0 0px;">
                            <div class="nomargin">See if your friends know this seller</div>
                            <a href="" class="connect-fb">Connect with
                                <strong>facebook</strong></a>
                        </div>

                    </div>


                </div>
            </div>


            <div class="well mb10 mt20">

                <h3 class="text-center">Safety tips for transaction</h3>
                <ol>
                    <li>Use a safe location to meet seller</li>
                    <li>Avoid cash transactions</li>
                    <li>Beware of unrealistic offers</li>
                </ol>
                <div class="clearfix">
                    <a href="/safety-guide" class="pull-right" target="_blank">Learn More</a>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
