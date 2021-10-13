@extends('layouts.main')

@section('title', 'Home')

@section('contents')
<style>
    .location-checkbox,
    .brand-checkbox,
    .range-checkbox,
    .category-checkbox {
        width: fit-content;
    }

    .range-checkbox-block,
    .company-checkbox-block,
    .location-checkbox-block,
    .category-parts-checkbox-block {
        height: 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<div class="header-space"></div>
<div class="container" style="margin-top:100px">
    <form action="bike_search_result_sidebar_index" method="POST">
        @csrf
        <div class="row m-0">
            <div class="col-12 col-md-2 p-0">
                <h4 data-toggle="collapse" data-target="#choosebike" class="pt-3" style="cursor: pointer;">Choose </h4>
                <div id="choosebike" class="collaps">
                    <!-- <div class="py-1 curs"><b>-</b> Bikes</div> -->
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="category-parts">Used Bike</label>
                        <input type="radio" name="category" value="Used Bike"  id="category-parts" class="category-checkbox" />
                    </div>
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bicycles-parts">New Bike</label>
                        <input type="radio" name="category" value="New Bike"  id="bicycles-parts" class="category-checkbox" />
                    </div>

                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bicycles-parts">Both</label>
                        <input type="radio" name="category" value="Both" checked id="bicycles-parts" class="category-checkbox" />
                    </div>
                </div>
                <h4 data-toggle="collapse" data-target="#demo" class="pt-3" style="cursor: pointer;">CATEGORIES</h4>
                <div id="demo" class="collaps">
                    <!-- <div class="py-1 curs"><b>-</b> Bikes</div> -->
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="category-parts">Standard</label>
                        <input type="checkbox" name="body_type[]" value="Standard" id="category-parts" class="category-checkbox" />
                    </div>
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bicycles-parts">Heavy Bike</label>
                        <input type="checkbox" name="body_type[]" value="Heavy Bike" id="bicycles-parts" class="category-checkbox" />
                    </div>
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="scooters-parts">Sports Bike</label>
                        <input type="checkbox" name="body_type[]" value="Sports Bike" id="scooters-parts" class="category-checkbox" />
                    </div>

                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="scooters-parts">Dirt Bike</label>
                        <input type="checkbox" name="body_type[]" value="Dirt Bike" id="scooters-parts" class="category-checkbox" />
                    </div>

                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="category-parts">ATV</label>
                        <input type="checkbox" name="body_type[]" value="ATV" id="category-parts" class="category-checkbox" />
                    </div>
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bicycles-parts">Chopper</label>
                        <input type="checkbox" name="body_type[]" value="Chopper" id="bicycles-parts" class="category-checkbox" />
                    </div>
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="scooters-parts">Scooter</label>
                        <input type="checkbox" name="body_type[]" value="Scooter" id="scooters-parts" class="category-checkbox" />
                    </div>

                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="scooters-parts">Trail</label>
                        <input type="checkbox" name="body_type[]" value="Trail" id="scooters-parts" class="category-checkbox" />
                    </div>
                </div>
                <h4 data-toggle="collapse" data-target="#demo3" class="pt-3" style="cursor: pointer;">LOCATIONS</h4>

                <div id="demo3" class="collapse">
                    <h6 class="py-2">FILTER </h6>
                    <div class="location-checkbox-block">
                        <label class="m-0" for="city_name_lahore">Lahore</label>
                        <input type="checkbox" name="city[]" value="Lahore" id="city_name_lahore" class="location-checkbox" />
                    </div>
                    <div class="location-checkbox-block">
                        <label class="m-0" for="city_name_karachi">Karachi</label>
                        <input type="checkbox" name="city[]" value="Karachi" id="city_name_karachi" class="location-checkbox" />
                    </div>
                    <div class="location-checkbox-block">
                        <label class="m-0" for="city_name_islamabad">Islamabad</label>
                        <input type="checkbox" name="city[]" value="Islamabad" id="city_name_islamabad" class="location-checkbox" />
                    </div>
                    <div class="location-checkbox-block">
                        <label class="m-0" for="city_name_rawalpindi">Rawalpindi</label>
                        <input type="checkbox" name="city[]" value="Rawalpindi" id="city_name_rawalpindi" class="location-checkbox" />
                    </div>
                    <div class="location-checkbox-block">
                        <label class="m-0" for="city_name_peshawar">Peshawar</label>
                        <input type="checkbox" name="city[]" value="Peshawar" id="city_name_peshawar" class="location-checkbox" />
                    </div>
                </div>
                <h4 data-toggle="collapse" data-target="#demo2" class="pt-3" style="cursor: pointer;">Company / MAKE</h4>
                <div id="demo2" class="collapse">
                    <p>All Make</p>
                    @foreach ($companies as $key=>$company)
                    <div class="company-checkbox-block">
                        <label class="m-0" for="{{$company->id}}">{{$company->name}}</label>
                        <input type="checkbox" name="companies[]" value="{{$company->id}}" id="{{$company->id}}" class="brand-checkbox" />
                    </div>
                    @endforeach
                </div>

                <h4 data-toggle="collapse" data-target="#demo33" class="pt-3" style="cursor: pointer;">Model</h4>
                <div id="demo33" class="collapse">
                    <p>All Models</p>
                    @foreach ($models as $key=>$model)
                    <div class="company-checkbox-block">
                        <label class="m-0" for="{{$model->id}}">{{$model->name}}</label>
                        <input type="checkbox" name="modeles[]" value="{{$model->id}}" id="{{$model->id}}" class="brand-checkbox" />
                    </div>
                    @endforeach
                </div>
                {{-- <h4 data-toggle="collapse" data-target="#demo5" class="pt-3" style="cursor: pointer;">PRICE</h4>
                <div id="demo5" class="collapse">

                    <div class="range-checkbox-block">
                          <label class="m-0" for="range-10000">PKR, 10000</label>
                         <input type="checkbox" name="city_peshwar" id="range-10000" class="range-checkbox" />
                     </div>
                      <div class="range-checkbox-block">
                          <label class="m-0" for="range-20000">PKR, 20000</label>
                         <input type="checkbox" name="city_peshwar" id="range-20000" class="range-checkbox" />
                     </div>
                      <div class="range-checkbox-block">
                          <label class="m-0" for="range-30000">PKR, 30000</label>
                         <input type="checkbox" name="city_peshwar" id="range-30000" class="range-checkbox" />
                     </div>
                      <div class="range-checkbox-block">
                          <label class="m-0" for="range-40000">PKR, 40000</label>
                         <input type="checkbox" name="city_peshwar" id="range-40000" class="range-checkbox" />
                     </div>
                      <div class="range-checkbox-block">
                          <label class="m-0" for="range-50000">PKR, 50000</label>
                         <input type="checkbox" name="city_peshwar" id="range-50000" class="range-checkbox" />
                     </div>
                      <div class="range-checkbox-block">
                          <label class="m-0" for="range-60000">PKR, 60000</label>
                         <input type="checkbox" name="city_peshwar" id="range-60000" class="range-checkbox" />
                     </div>
                      <div class="range-checkbox-block">
                          <label class="m-0" for="range-70000">PKR, 70000</label>
                         <input type="checkbox" name="city_peshwar" id="range-70000" class="range-checkbox" />
                     </div>
                      <div class="range-checkbox-block">
                          <label class="m-0" for="range-90000">PKR, 90000</label>
                         <input type="checkbox" name="city_peshwar" id="range-90000" class="range-checkbox" />
                     </div>
                </div> --}}
                <h4 data-toggle="collapse" data-target="#demo11" class="pt-3" style="cursor: pointer;">Year</h4>
                <div id="demo11" class="collaps">
                    <div class="row m-0">
                        <p>Change a range below</p>
                        <div class="col-12 p-0">
                            <div class="row m-0 align-items-center">
                                <div class="col-12 p-0 my-2">
                                    <input type="number" maxlength="4" minlength="4" min="1950" max="2021" name="price_from" min="0" class="custom-control" placeholder="From">
                                </div>
                                <div class="col-12 p-0">
                                    <input type="number" maxlength="4" minlength="4" min="1950" max="2021" name="price_to" min="0" class="custom-control" placeholder="To">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn common-btn-clr mt-5 text-right" type="submit"> Search</button>
            </div>
    </form>
    <div class="col-12 col-md-10 p-0">

        <form action="{{route('bike_search_result_index')}}" method="POST">
            @csrf
            <div class="row m-0 w-100">

                <div class="col-md-6 my-1 col-12 pl-md-5 ">
                    <input type="text"  name="keyword" placeholder="Search Here" class="custom-control w-100 ">
                </div>
                <div class="col-md-2 my-1 col-12 px-md-0">
                    <input type="text" name="min_price" list="MinPrice" placeholder="Min Price"/>
                    <datalist id="MinPrice">
                        <option value="" selected disabled>Min Rs</option>
                        <option value='10000'>10,000 Pk</option>
                        <option value='20000'>20,000 Pk</option>
                        <option value='30000'>30,000 Pk</option>
                        <option value='40000'>40,000 Pk</option>
                        <option value='50000'>50,000 Pk</option>
                        <option value='60000'>60,000 Pk</option>
                        <option value='70000'>70,000 Pk</option>
                        <option value='80000'>80,000 Pk</option>
                        <option value='90000'>90,000 Pk</option>
                        <option value='100000'>100,000 Pk</option>
                        <option value='125000'>125,000 Pk</option>
                        <option value='150000'>150,000 Pk</option>
                        <option value='175000'>175,000 Pk</option>
                        <option value='200000'>200,000 Pk</option>
                    </datalist>
                </div>
                <div class="col-md-2 my-1 col-12 px-md-0 pr-md-3">
                    <input type="text" name="max_price" list="MaxPrice" placeholder="Max Price"/>
                    <datalist id="MaxPrice">
                        <option value="" selected disabled>Min Rs</option>
                        <option value='10000'>10,000 Pk</option>
                        <option value='20000'>20,000 Pk</option>
                        <option value='30000'>30,000 Pk</option>
                        <option value='40000'>40,000 Pk</option>
                        <option value='50000'>50,000 Pk</option>
                        <option value='60000'>60,000 Pk</option>
                        <option value='70000'>70,000 Pk</option>
                        <option value='80000'>80,000 Pk</option>
                        <option value='90000'>90,000 Pk</option>
                        <option value='100000'>100,000 Pk</option>
                        <option value='125000'>125,000 Pk</option>
                        <option value='150000'>150,000 Pk</option>
                        <option value='175000'>175,000 Pk</option>
                        <option value='200000'>200,000 Pk</option>
                    </datalist>
                </div>
                <div class="col-md-2 my-1 col-12 pl-md-0 pr-md-5 pb-1">
                    <button class="btn common-btn-clr w-100 h-100">Search</button>
                </div>
            </div>
        </form>
        <div class="container-fluid">
            <!--  -->
            <div class="row m-0">
                <!--  -->
                @forelse ($searchedbikes as $bike)
                <div class="col-md-3 my-5">
                    <div class="panel-130-100-make">
                        <div class="cards">
                            <a href="{{ route('bike.show', $bike->id) }}" class="show" title="Yamaha_YB_125z in Pakistan, Specs, Features &amp; Pictures">
                                <div class="img-box">
                                    <div class="img-content">
                                        <img alt="Yamaha_YB_125z 2021" class="lazy-featured-new-slider pic" src="{{ asset('storage') }}/images/bikes/{{ $bike->getImages()[0] }}" title="New Yamaha_YB_125z 2021" style="display: inline;">
                                    </div>
                                </div>
                                <div class="cards-content text-center noborder">
                                    <h3 class="nomargin truncate">{{ $bike->company->name }}
                                        {{ $bike->model->name }}
                                    </h3>
                                    <div class="generic-green truncate fs14">PKR {{ $bike->price }} <span>k</span></div>
                                    <div class="mt10 mb10">
                                        <span class="rating generic-orange fs12 fs12">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if($i <= $bike->rating)
                                                <i class="fas fa-star"></i>
                                                @else
                                                <i class="fas fa-star-o"></i>
                                                @endif
                                            @endfor
                                        </span>
                                        <span class="fs14 generic-gray ml5 dib">{{ $bike->no_of_reviews }} Reviews</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
                <!--  -->
                <div class="col-12 p-0">
                    {{ $searchedbikes->links('pagination::bootstrap-4') }}
                </div>
            </div>

            <!--  -->
        </div>
    </div>
</div>


</div>


<div class="banner-area pt-135 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="banner-wrapper mb-30">
                    <a href="{{route('bike.listing')}}"><img src="{{ asset('website') }}/assets/img/header_slider/Honda_CB_150.jpg" alt="image" style="height:295px;width:370px"></a>
                    <div class="banner-content">
                        <h2>BUY NEW BIKE</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="banner-wrapper mb-30">
                    <a href="{{ route('bike.create') }}"><img src="{{ asset('website') }}/assets/img/header_slider/hondamodi.jpg" alt="image" style="height:295px;width:370px"></a>
                    <div class="banner-content">
                        <h2>SELL YOUR BIKE</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="banner-wrapper mb-30">
                    <a href="{{route('product.index')}}"><img src="{{ asset('website') }}/assets/img/header_slider/Honda_CB_150.jpg" alt="image" style="height:295px;width:370px"></a>
                    <div class="banner-content">
                        <h2>FIND SPARE PARTS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-190">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>CHOOSE YOUR BIKE</h2>
            <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you lateforst qulity of motorcycle
                also you can sell here your motorcycle</p>
        </div>
        <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
            <a class="active" href="#home1" data-toggle="tab">
                <h4>NEW BIKES </h4>
            </a>
            <a href="#home2" data-toggle="tab">
                <h4> USED BIKES </h4>
            </a>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane active" id="home1">
                <div class="product-slider-active owl-carousel">

                    <div class="product-wrapper-bundle">
                        @php
                            $number = 1;
                        @endphp
                        @foreach ($newBikes as $key=>$bike)
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{route('bike.show', $bike->id)}}">
                                        <img src="{{asset('storage')}}/images/bikes/{{$bike->getImages()[0]}}" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>{{$bike->model_year}}</li>
                                            <li>{{$bike->company->name}}</li>
                                            <li>{{$bike->body_type}}</li>
                                            <li>{{$bike->engine_type}}</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">{{$bike->name}}</a></h4>
                                            <span>{{$bike->rating}}/5</span>
                                        </div>
                                        <div class="product-price">
                                            <span>PKR {{$bike->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($number % 2 == 0)
                                </div>
                                <div class="product-wrapper-bundle">

                            @endif
                            @php
                                $number = $number + 1;
                            @endphp
                        @endforeach

                    </div>

                </div>
            </div>
            <div class="tab-pane" id="home2">
                <div class="product-slider-active owl-carousel">
                    <div class="product-wrapper-bundle">
                        @php
                            $number = 1;
                        @endphp
                        @foreach ($usedBikes as $key=>$bike)
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{route('bike.show', $bike->id)}}">
                                        <img src="{{asset('storage')}}/images/bikes/{{$bike->getImages()[0]}}" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>{{$bike->model_year}}</li>
                                            <li>{{$bike->company->name}}</li>
                                            <li>{{$bike->body_type}}</li>
                                            <li>{{$bike->engine_type}}</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">{{$bike->name}}</a></h4>
                                            <span>{{$bike->rating}}/5</span>
                                        </div>
                                        <div class="product-price">
                                            <span>PKR {{$bike->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($number % 2 == 0)
                                </div>
                                <div class="product-wrapper-bundle">

                            @endif
                            @php
                                $number = $number + 1;
                            @endphp
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="tab-content jump">
            <div class="tab-pane active" id="home1">
                <div class="product-slider-active owl-carousel">
                    <div class="product-wrapper-bundle">
                        @foreach ($newBikes as $key=>$bike)
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="{{route('bike.show', $bike->id)}}">
                                    <img src="{{asset('storage')}}/images/bikes/{{$bike->getImages()[0]}}" alt="" style="height:488px;width:370px;">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>{{$bike->model_year}}</li>
                                        <li>{{$bike->company->name}}</li>
                                        <li>{{$bike->body_type}}</li>
                                        <li>{{$bike->engine_type}}</li>
                                    </ul>
                                </div>

                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">{{$bike->name}}</a></h4>
                                        <span>{{$bike->rating}}/5</span>
                                    </div>
                                    <div class="product-price">
                                        <span>PKR {{$bike->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="home2">
                <div class="product-slider-active owl-carousel">
                    <div class="product-wrapper-bundle">
                        @foreach ($usedBikes as $key=>$bike)

                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="{{route('bike.show', $bike->id)}}">
                                    <img src="{{asset('storage')}}/images/bikes/{{$bike->getImages()[0]}}" alt="" style="height:488px;width:370px;">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>{{$bike->model_year}}</li>
                                        <li>{{$bike->company->name}}</li>
                                        <li>{{$bike->body_type}}</li>
                                        <li>{{$bike->engine_type}}</li>
                                    </ul>
                                </div>

                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">{{$bike->name}}</a></h4>
                                        <span>{{$bike->rating}}/5</span>
                                    </div>
                                    <div class="product-price">
                                        <span>PKR {{$bike->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>

<div class="accessories-area pt-152 pb-130">
    <div class="container-fluid">
        <div class="section-title section-fluid text-center mb-60">
            <h2>ACCESSORIES</h2>
            <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle
                also you can sell here your motorcycle</p>
        </div>
        <div class="accessories-wrapper">
            <div class="product-accessories-active owl-carousel">
                @foreach ($latestProducts as $product)

                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('storage')}}/images/products/{{$product->getImages()[0]}}" alt="" style="height:450px;width:280px;">
                        </a>

                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Price: RP {{$product->price}}</span>
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="testimonial-area">
    <div class="container">
        <div class="section-title-2 section-title-position">
            <h2>OUR CLIENTS REVIEW</h2>
        </div>
        <div class="testimonial-active owl-carousel">
            <div class="single-testimonial">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="testimonial-img pl-75">
                            <img alt="image" src="{{ asset('website') }}/assets/img/header_slider/hondameter.jpg" style="height:522px;width:337px;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonial-content">
                            <div class="testimonial-dec">
                                <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest
                                    qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie
                                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus.
                                    Temporibus autem quibusdam quoten</p>
                            </div>
                            <div class="name-designation">
                                <h4>Rayed Ayash Hisham</h4>
                                <span>COO, ASEKHA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testimonial">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="testimonial-img pl-75">
                            <img alt="image" src="{{ asset('website') }}/assets/img/header_slider/honda_atlas_offical.jpg" style="height:522px;width:337px;">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="testimonial-content">
                            <div class="testimonial-dec">
                                <p><span>2 Wheels</span> Lorem ipsum dolor sit amet, consectetur adipisicing , sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis
                                    dolor in reprehenderit.</p>
                            </div>
                            <div class="name-designation">
                                <h4>James Momen Nirob</h4>
                                <span>CEO, ASEKHA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area pt-150 pb-110">
    <div class="container">
        <div class="section-title text-center mb-60">
            <h2>BLOG POST</h2>
            <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle
                also you can sell here your motorcycle</p>
        </div>
        <div class="row">
            @forelse ($blogs as $blog)
            <div class="col-lg-4 col-md-6 border">
                <div class="blog-hm-wrapper mb-40">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('storage')}}/images/blogs/{{$blog->image}}" alt="image" style="height:274px;width:368px;"></a>
                        <div class="blog-date">
                            <h4>{{$blog->created_at}}</h4>
                        </div>
                        <!-- <div class="blog-hm-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div> -->
                    </div>
                    <div class="blog-hm-content">
                        <h3><a href="blog-details.html">{{$blog->name}}</a></h3>
                        <p>{{$blog->description}}</p>
                    </div>
                </div>
            </div>
            @empty

            @endforelse


        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="icofont icofont-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="{{ asset('website') }}/assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="{{ asset('website') }}/assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="{{ asset('website') }}/assets/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                <img src="{{ asset('website') }}/assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab">
                                <img src="{{ asset('website') }}/assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab">
                                <img src="{{ asset('website') }}/assets/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>Aerion Carbon Helmet</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00 </span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et
                                dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-style" href="#">Add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="icofont icofont-heart-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
