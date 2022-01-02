@extends('layouts.main')

@section('title', 'view detail')

@section('contents')
    <div class="" id="main-container" style="margin-top: 120px">

        @if ($bike)


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

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Motorcycle",
                "brand": {
                    "@type": "Brand",
                    "name": "Honda"
                },
                "url": "/bikes/honda/cd-70-dream/",
                "description": "Honda CD 70 Dream Price in Pakistan, Pictures & Specs",
                "manufacturer": "Honda",
                "name": "Honda CD 70 Dream",
                "image": "https://cache4.pakwheels.com/system/bike_model_pictures/1081/medium/Honda_CD_70_Dream_.jpg?1516358929",
                "category": "Standard",
                "offers": {
                    "@context": "https://schema.org",
                    "@type": "Offer",
                    "price": 101500,
                    "priceCurrency": "PKR"
                },
                "aggregateRating": {
                    "@context": "https://schema.org",
                    "@type": "AggregateRating",
                    "ratingValue": 4,
                    "reviewCount": 11,
                    "worstRating": 0,
                    "bestRating": "5"
                },
                "review": [{
                        "@context": "https://schema.org",
                        "@type": "Review",
                        "author": "Anonymous",
                        "reviewBody": "Third class material, even lower than locally manufactured bikes. All tubes already started cracks and leaves after only 3 months of purchase. Most of the metal got rust including screws and silencer. Clutch system is often faulty and need frequent adjustments. Will not recommend to any friend. Honda has gone very low to make money for selling crap. ",
                        "reviewRating": {
                            "@type": "Rating",
                            "ratingValue": 1,
                            "worstRating": 0,
                            "bestRating": 5
                        }
                    },
                    {
                        "@context": "https://schema.org",
                        "@type": "Review",
                        "author": "Anonymous",
                        "reviewBody": "Bike ki sirf look achi hai baqi bike ki ride mazay ki nhi hai meinay December k start mein new li hai aur sirf 1200 km chalai hai lekin buhat si cheezein vibrate hoti hein aur overall bike. Mein vibration buht ziyada bss guzary k liyee hai bike jab meinay ye bike new li thi tou 1st day sy hi is k rim seedhy nhi hein very poor quality",
                        "reviewRating": {
                            "@type": "Rating",
                            "ratingValue": 3,
                            "worstRating": 0,
                            "bestRating": 5
                        }
                    }
                ]
            }
        </script>
        <section>
            <span id="product">
                <div class="container">
                    {{-- <ul class="breadcrumb" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"><a
                                href="/" itemprop="url"><span itemprop="name">Home</span></a>
                            <meta content='https://www.pakwheels.com/' itemprop='item'>
                            <meta content="1" itemprop="position">
                        </li>
                        <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"><a
                                href="/bikes/new-bikes/" itemprop="url"><span itemprop="name">New Bikes</span></a>
                            <meta content='https://www.pakwheels.com/bikes/new-bikes/' itemprop='item'>
                            <meta content="2" itemprop="position">
                        </li>
                        <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"><a
                                href="/bikes/honda/" itemprop="url"><span itemprop="name">Honda</span></a>
                            <meta content='https://www.pakwheels.com/bikes/honda/' itemprop='item'>
                            <meta content="3" itemprop="position">
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope="itemscope"
                            itemtype="https://schema.org/ListItem"><span itemprop="name">Honda CD 70 Dream Price in
                                Pakistan, Pictures &amp; Specs</span>
                            <meta content="4" itemprop="position">
                        </li>
                    </ul> --}}


                    <h1 class="nomargin">{{ $bike->name }} Price in Pakistan, Pictures &amp; Specs</h1>
                    <div class="well p40">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-md-9 nopad">

                                    <label class="generic-green nomargin mt20">
                                        PKR <strong class="fs22">{{ $bike->price }}</strong>
                                    </label>

                                    <a href="/used-bikes/honda-cd-70-dream/67219"
                                        title="Honda CD 70 Dream for Sale in Pakistan">
                                        {{-- <div class="fs12">32 Used Honda CD 70 Dream for Sale</div> --}}
                                    </a>
                                    <span class="rating generic-orange fs12 clearfix">

                                        @for ($i = 1; $i <= 5; $i++)
                                                @if($i <= $bike->rating)
                                                <i class="fas fa-star"></i>
                                                @else
                                                <i class="fas fa-star-o"></i>
                                                @endif
                                            @endfor
                                    </span>
                                    <div class="mb20 fs12">
                                        <span>
                                            <a href="/bikes/honda/cd-70-dream/reviews" id="reviewcount_cd-70-dream"
                                                rel="nofollow" style="margin-left: 0;"
                                                title="Honda CD 70 Dream Price in Pakistan, Pictures &amp; Specs Reviews">{{ $bike->no_of_reviews }}
                                                Reviews</a>
                                        </span>
                                        {{-- <a href="/bikes/reviews/new/?ManID=16&amp;ModelID=527" class="ga-Model-write-review"
                                            ga-label="cd-70-dream" rel="nofollow"
                                            title="Write a Review for Honda CD 70 Dream Price in Pakistan, Pictures &amp; Specs">Write
                                            Review</a> --}}
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8 vehicle-intro generation-slider pos-rel">
                                @foreach ($bike->getImages() as $image)
                                <img style="width: 500px; height: 500px" src="{{asset('storage')}}/images/bikes/{{$image}}" alt="">
                                @break
                                @endforeach

                                <script>
                                    $(document).ready(function() {
                                        applyImagesLazyLoad();
                                        $("#content-slider").lightSlider({
                                            loop: true,
                                            keyPress: true
                                        });

                                        var slider = $('#image-gallery').lightSlider({
                                            gallery: true,
                                            item: 1,
                                            loop: true,
                                            slideMargin: 0,
                                            thumbItem: 3,
                                            vertical: true,
                                            verticalHeight: 343,
                                            vThumbWidth: 92,
                                            galleryMargin: 14,
                                            thumbMargin: 10,
                                            controls: false,
                                            enableDrag: false,
                                            freeMove: false,
                                            addClass: 'v-thumbs',
                                            onSliderLoad: function() {
                                                $('#image-gallery').removeClass('cS-hidden');
                                            }
                                        });

                                        $('#image-gallery').lightGallery({
                                            showThumbByDefault: true,
                                            addClass: 'showThumbByDefault',
                                            selector: '.lslide',
                                            loop: true,
                                            counter: true
                                        });

                                        $('#goToPrevSlide').click(function() {
                                            slider.goToPrevSlide();
                                        });

                                        $('#goToNextSlide').click(function() {
                                            slider.goToNextSlide();
                                        });

                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </span>
        </section>

        <section>
            <div class="container">
                <h2 class="mb10">{{ $bike->name }} Overview</h2>
                <div class=" ">
                    <div class="gen_desc_large" style="overflow: hidden;">
                        {{$bike->description}}


                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2>{{ $bike->name }} Price in Pakistan</h2>
                <p>The current price of {{ $bike->name }} in Pakistan is PKR {{ $bike->price }}</p>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="bikes version-specifications">
                    <h2>{{ $bike->name }} Specifications</h2>
                    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td width="140"> Price</td>
                                <td>PKR {{ $bike->price }}</td>
                                <td width="135">Dimension (Lxwxh)</td>
                                <td>{{ $bike->model->dimension }}</td>
                            </tr>

                            <tr>
                                <td>Engine</td>
                                <td itemprop="vehicleEngine">{{ $bike->model->engine_type }}</td>
                                <td>Displacement</td>
                                <td>{{ $bike->model->displacement }}</td>
                            </tr>

                            <tr>
                                <td>Clutch</td>
                                <td>{{ $bike->model->clutch }}</td>
                                <td>Transmission</td>
                                <td itemprop="vehicleTransmission">{{ $bike->model->transmission }}</td>
                            </tr>

                            <tr>
                                <td>Horsepower</td>
                                <td>{{ $bike->model->horsepower }}</td>
                                <td>Torque</td>
                                <td>5{{ $bike->model->torque }}</td>
                            </tr>

                            <tr>
                                <td>Bore &amp; Stroke</td>
                                <td>{{ $bike->model->bore_stroke }}</td>
                                <td>Compression Ratio</td>
                                <td>{{ $bike->model->compression_ratio }}</td>
                            </tr>

                            <tr>
                                <td>Starting</td>
                                <td>{{ $bike->model->starting }}</td>
                                <td>Top Speed</td>
                                <td>{{ $bike->model->top_speed }}</td>
                            </tr>

                            <tr>
                                <td>Petrol Capacity</td>
                                <td itemprop="fuelCapacity">{{ $bike->model->petrol_capacity }}</td>
                                <td>Fuel Average</td>
                                <td>{{ $bike->model->fuel_average }}</td>
                            </tr>

                            <tr>
                                <td>Dry Weight</td>
                                <td itemprop="weight">{{ $bike->model->dry_weight }}</td>
                                <td>Frame</td>
                                <td>{{ $bike->model->frame }}</td>
                            </tr>


                            <tr>
                                <td>Ground Clearance</td>
                                <td>{{ $bike->model->ground_clearance }}</td>
                                <td>Wheel Size</td>
                                <td>{{ $bike->model->wheel_size }}</td>
                            </tr>

                            <tr>
                                <td>Tyre at Back</td>
                                <td>{{ $bike->model->tyre_at_back }}</td>
                                <td>Tyre at Front</td>
                                <td>{{ $bike->model->tyre_at_front }}</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </section>



        <section>






            @else
            <p>no data avaialble for this</p>
            @endif
        </div>
@endsection
