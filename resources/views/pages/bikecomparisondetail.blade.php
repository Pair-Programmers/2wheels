@extends('layouts.main')
@section('title', "Bike detail comparison")
@section('contents')
<div class="header-space"></div>
<!-- #TODO : Multiple checks for ad to not show -->
<div class="hide" id="featured-tooltip-content">
    <a href='/products/feature_your_ad' class='pull-right fs12 mt15'>Learn More</a>
    <h4>Why Feature your Ad?</h4>
    <ul class='feature-popover-points'>
        <li><i class='fa fa-tick'></i>Ad appears at the top</li>
        <li><i class='fa fa-tick'></i>Ad standouts with the Featured tag</li>
        <li><i class='fa fa-tick'></i>Get more calls &amp; Sell up to 10x faster</li>
    </ul>
</div>
<script>
function removeCookies() {
    if ($.cookie("chat_precaution") != undefined && $.cookie("chat_precaution") == "true") {
        $.removeCookie("chat_precaution", {
            path: "/"
        })
    }
}
</script>
<div class="" id="main-container">

    <section class="nopad">

        <div class="container">

            <div class="alert alert-danger" style="display:none" id="error_div">
                <button type="button" class="close" data-dismiss="alert">×</button>

            </div>

            <div class="alert alert-success" style="display:none" id="success_div">
                <button type="button" class="close" data-dismiss="alert">×</button>

            </div>

            <div class="alert alert-info" style="display:none">
                <button type="button" class="close" data-dismiss="alert">×</button>

            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <ul class="breadcrumb" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"><a href="/"
                        itemprop="url"><span itemprop="name">Home</span></a>
                    <meta content='https://www.pakwheels.com/' itemprop='item'>
                    <meta content="1" itemprop="position">
                </li>
                <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"><a
                        href="/bikes/new-bikes/" itemprop="url"><span itemprop="name">New Bikes</span></a>
                    <meta content='https://www.pakwheels.com/bikes/new-bikes/' itemprop='item'>
                    <meta content="2" itemprop="position">
                </li>
                <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"><a
                        href="/bikes/compare/" itemprop="url"><span itemprop="name">Compare Bikes</span></a>
                    <meta content='https://www.pakwheels.com/bikes/compare/' itemprop='item'>
                    <meta content="3" itemprop="position">
                </li>
                
            </ul>


            <h1>{{$model1->name}} {{$model1->company->name}} vs. {{$model2->name}} {{$model2->company->name}}  @if($count > 2)  {{$model3->name}} {{$model3->company->name}} @endif</h1>

            <table class="table vehicle-compare-head text-center well">
                <tbody>
                    <tr>

                        <td>
                            <a href="/bikes/honda/cg-125--2/">
                                <div class="img-box">
                                    <img alt="Bike_honda_125_cover" class="img-content pic"
                                        src="{{ asset('storage') }}/images/bikemodels/{{ $model1->image }}" />
                                </div>
                                <h3 class="mt10 mb10"> {{$model1->name}} {{$model1->company->name}}  <br /></h3>

                            </a>
                        </td>

                        <td>
                            <a href="/bikes/yamaha/ybr-125g/">
                                <div class="img-box">
                                    <img alt="Honda_freed_(14)" class="img-content pic"
                                        src="{{ asset('storage') }}/images/bikemodels/{{ $model2->image }}" />
                                </div>
                                <h3 class="mt10 mb10">{{$model2->name}} {{$model2->company->name}} <br /></h3>

                            </a>
                        </td>
                        @if($count > 2)
                        <td>
                            <a href="/bikes/super-power/sp-100/">
                                <div class="img-box">
                                    <img alt="1" class="img-content pic"
                                        src="{{ asset('storage') }}/images/bikemodels/{{ $model3->image }}" />
                                </div>
                                <h3 class="mt10 mb10"> {{$model3->name}} {{$model3->company->name}} <br /></h3>

                            </a>
                        </td>
                        @endif
                        
                    </tr>

                    <tr>
                        <td>
                            <div><span class="rating generic-orange fs12 ">

                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                </span></div>
                            <div><a href="{{route('review.index')}}">{{count($model1->reviews)}} Reviews</a></div>
                        </td>
                        <td>
                            <div><span class="rating generic-orange fs12 ">

                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-o"></i>
                                </span></div>
                            <div><a href="{{route('review.index')}}">{{count($model2->reviews)}} Reviews</a></div>

                        </td>

                        @if($count > 2)
                        <td>
                            <div><span class="rating generic-orange fs12 ">

                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                </span></div>
                            <div><a href="{{route('review.index')}}">{{count($model3->reviews)}} Reviews</a></div>

                        </td>
                        @endif
                    </tr>

                    
                    

                </tbody>
            </table>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="row vehicle-comparison-detail">
                <div class="col-md-12">
                    <h2>Compare Specifications</h2>
                    <div class="details">
                        <table class="table table-bordered table-striped table-styled well nomargin">
                            <tbody>
                                <tr>
                                    <td>Engine Type</td>
                                    <td>{{$model1->engine_type}}</td>
                                    <td>{{$model2->engine_type}}</td>
                                    @if($count > 2)
                                    <td>{{$model3->engine_type}}</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Displacement</td>
                                    <td>{{$model1->displacement}}</td>
                                    <td>{{$model2->displacement}}</td>
                                    @if($count > 2)
                                    <td>{{$model3->displacement}}</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Bore &amp; Stroke</td>
                                    <td>{{$model1->bore_stroke}}</td>
                                    <td>{{$model2->bore_stroke}}</td>
                                    @if($count > 2)
                                    <td>{{$model3->bore_stroke}}</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Compression Ratio</td>
                                    <td>{{$model1->compression_ratio}}</td>
                                    <td>{{$model2->compression_ratio}}</td>
                                    @if($count > 2)
                                    <td>{{$model3->compression_ratio}}</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Clutch</td>
                                    <td>{{$model1->clutch}}</td>
                                    <td>{{$model2->clutch}}</td>
                                    @if($count > 2)
                                    <td>{{$model3->clutch}}</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Transmission</td>
                                    <td>{{$model1->transmission}}</td>
                                    <td>{{$model2->transmission}}</td>
                                    @if($count > 2)
                                    <td>{{$model3->transmission}}</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                        {{-- <table class="table table-bordered table-striped table-styled well nomargin mt-1"
                            style="display:none;" id="more_new_bike_specs">
                            <tbody>
                                <tr>
                                    <td>Starting</td>
                                    <td>Kick start</td>
                                    <td>Kick &amp; Electric Start</td>
                                    <td>Kick start</td>
                                </tr>

                                <tr>
                                    <td>Frame</td>
                                    <td>Diamond Type Steel</td>
                                    <td>Backbone Type</td>
                                    <td>Back Bone Type</td>
                                </tr>

                                <tr>
                                    <td>Dimension (Lxwxh)</td>
                                    <td>1912</td>
                                    <td>1990</td>
                                    <td>2080mm x 110mm x 760mm</td>
                                </tr>

                                <tr>
                                    <td>Ground Clearance</td>
                                    <td>132 mm</td>
                                    <td>145 mm</td>
                                    <td>N/A mm</td>
                                </tr>

                                <tr>
                                    <td>Petrol Capacity</td>
                                    <td>9.2 L</td>
                                    <td>13 L</td>
                                    <td>15L L</td>
                                </tr>

                                <tr>
                                    <td>Tyre at Front</td>
                                    <td>2.50 - 18 </td>
                                    <td>3.00 - 18</td>
                                    <td>N/A - </td>
                                </tr>

                                <tr>
                                    <td>Tyre at Back</td>
                                    <td>3.00 - 17</td>
                                    <td>3.50 - 18</td>
                                    <td>N/A - </td>
                                </tr>

                                <tr>
                                    <td>Dry Weight</td>
                                    <td>99 KG</td>
                                    <td>113 KG</td>
                                    <td>120 Kg. KG</td>
                                </tr>
                            </tbody>
                        </table> --}}
                        {{-- <div>
                            <a href="javascript:" class="pull-right" onclick="more_specs(true)" id="more-specs">More
                                Specifications <i class="fa fa-chevron-circle-down"></i></a>
                            <a href="javascript:" class="pull-right" id="less-specs" style="display: none;">Less
                                Specifications <i class="fa fa-chevron-circle-up"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="header-space"></div>
    <div class="header-space"></div>

    @endsection