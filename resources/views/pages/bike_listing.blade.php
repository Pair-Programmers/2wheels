<!DOCTYPE html>
<html lang="en" xml:lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/application.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="preload"
        href="https://wsa2.pakwheels.com/assets/desktop/application-a5b694b3fae411e8b15ce4c8f0071139.css" as="style">
    <link
        href="https://wsa3.pakwheels.com/assets/desktop/search-results/application-970e5d52e0b67fc84c9bc82a8c973772.css"
        media="screen" rel="stylesheet" type="text/css" />
    <link rel="preload" href="https://wsa3.pakwheels.com/assets/Lato-Regular-35cf7e967cceb3804eaf9dccf8f1228b.woff2"
        as="font" crossorigin>
    <link rel="preload" href="https://wsa4.pakwheels.com/assets/Lato-Bold-a901503621ac1a177f5ef7b4c6e6671e.woff2"
        as="font" crossorigin>
    <link rel="preload"
        href="https://wsa1.pakwheels.com/assets/desktop/fonts-woff2-7f9fe6d80cdb7f20cc2bd69fcc60ea59.css" as="style"
        onload="this.rel='stylesheet'">
    <link rel="preload" href="https://wsa2.pakwheels.com/assets/fonts-base64-woff-9009644a9b2e88f0d021717f9b557f80.css"
        as="style" onload="this.rel='stylesheet'">
    <title> {{ old('keyword') }} Bike List | 2Wheels</title>
    <script src="https://wsa2.pakwheels.com/assets/classified/top_javascript-0c9654bdb83d35bf1fa129a253ce6300.js"
        type="text/javascript"></script>
    <script src="{{ asset('website') }}/assets/js/search-add-list.js" type="text/javascript"></script>
</head>

<body>
    <style>
        body {
            background-color: #fff;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .common-btn-clr {
            background-color: #FFB52F;
            border-radius: 0;
            color: #FFFFFF;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            line-height: 18px;
            position: relative;
            text-transform: uppercase;
            transition: all 0.4s ease-in-out 0s;
            overflow: hidden;
            z-index: 99;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        /* Font Awesome Icons have variable width. Added fixed width to fix that.*/
        .icon-width {
            width: 2rem;
        }

        #navbar4 {
            padding: 20px 10px;
            font-size: 18px;
        }

        .bg-light {
            background-color: #FFFFFF !important;
            box-shadow: 1px 1px 5px 3px lightgrey;
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1280px;
                width: 1280px;
            }
        }

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
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
        <div class="container"> <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
                <svg width="40px" version="1.1" id="Layer_1" xmlns="C:\xampp\htdocs\bike\public\assets\img\logo"
                    xmlns:xlink="C:\xampp\htdocs\bike\public\assets\img\logo" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M511.981,118.509c-0.135-2.956-1.892-5.726-4.565-7.04l-159.24-79.62c-3.776-1.887-8.363-0.64-10.664,2.898 L229.916,200.282l-55.413-85.891c-0.796-1.235-1.945-2.264-3.259-2.922l-159.24-79.62C6.582,29.138,0,33.218,0,39.268v79.621 c0,4.581,3.712,8.294,8.294,8.294c4.581,0,8.294-3.712,8.294-.294V52.687l142.652,71.326v335.32L16.587,388.008V154.277	c0-4.581-3.712-8.294-8.294-8.294c-4.581,0-8.294,3.712-8.294,8.294v238.857c0,3.142,1.775,6.013,4.585,7.418l159.24,79.62	c5.427,2.714,12.003-1.375,12.003-7.418V318.087l324.17,162.085c5.427,2.714,12.003-1.375,12.003-7.418V118.888	C512,118.76,511.987,118.636,511.981,118.509z M175.827,299.541v-152.5l145.239,225.12L175.827,299.541z M495.413,459.335
      l-139.34-69.671l108.576-186.993c2.299-3.961,0.952-9.037-3.009-11.337c-3.96-2.298-9.036-0.953-11.337,3.009L344.094,377.258
      L239.77,215.555L347.383,49.998l144.717,72.359l-26.387,45.446c-2.299,3.961-0.952,9.037,3.009,11.337	c3.958,2.297,9.035,0.953,11.337-3.009l15.354-26.443V459.335z"
                                fill="#000" />
                        </g>
                    </g>
                </svg>
                <span style="letter-spacing:2px;" class="ml-3 font-weight-bold"><span
                        style="color:#BCBCBC;">2</span>Wheels</span>
            </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" style="display: flex !important;" id="navbar4">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="{{ route('new_bike') }}" id="dropdown01"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i>
                            </span>
                            New Bikes
                            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <div style="font-size: 1.6rem;margin:0px -30px;" class="dropdown-menu shadow-sm sm-menu"
                            aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="{{ route('new_bike') }}">Find New Bikes</a>
                            <a class="dropdown-item" href="{{ route('newbikeprices', ['all']) }}">On road price</a>
                            <a class="dropdown-item" href="{{ route('bikecomperison') }}">Bike Comparison</a>
                            <a class="dropdown-item" href="{{ route('review.index') }}">Bike Reviews</a>
                            <a class="dropdown-item" href="{{ route('newbikeprices', ['all']) }}">New Bike
                                Prices</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="{{ route('used_bike') }}" id="dropdown01"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i>
                            </span>
                            Used Bikes
                            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <div style="font-size: 1.6rem;margin:0px -30px;" class="dropdown-menu shadow-sm sm-menu"
                            aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="{{ route('used_bike') }}">Find Used Bikes</a>
                            <a class="dropdown-item" href="{{ route('used_bike') }}">Featured Used Bikes</a>
                            <a class="dropdown-item" href="{{ route('bike.create') }}">Sell Your Bike</a>
                            <a class="dropdown-item" href="{{ route('review.index') }}">Bike Reviews</a>
                            <a class="dropdown-item" href="{{ route('newbikeprices', ['all']) }}">Bike Prices</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i>
                            </span>
                            Bikes
                            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <div style="font-size: 1.6rem;margin:0px -60px;" class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="{{ route('bike.listing') }}">Find Bikes</a>
                            <a class="dropdown-item" href="{{ route('used_bike') }}">Featured Used Bikes</a>
                            <a class="dropdown-item" href="{{ route('bike.create') }}">Sell Your Bike</a>
                            <a class="dropdown-item" href="{{ route('new_bike') }}">Find New Bikes</a>
                            <a class="dropdown-item" href="{{ route('bikecomperison') }}">Bike Comparison</a>
                            <a class="dropdown-item" href="{{ route('review.index') }}">Bike Reviews</a>
                            <a class="dropdown-item" href="newbikeprices">New Bike Prices</a>
                        </div>
                    </li> -->
                    <li class="nav-item dropdown px-lg-2 d-menu2">
                        <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i
                                    class="fas fa-spa"></i>
                            </span>Auto Store
                            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <div style="font-size: 1.6rem;" class="dropdown-menu shadow-sm sm-menu2"
                            aria-labelledby="dropdown02">
                            {{-- <a class="dropdown-item" href="{{ route('product.index') }}">Find Auto Parts</a> --}}
                            <a class="dropdown-item" href="{{ route('product.index') }}">Buy Auto Parts </a>
                            <a class="dropdown-item" href="{{ route('product.create') }}">Sell Bike Parts</a>
                        </div>
                    </li>
                    <li class="nav-item px-lg-2 dropdown d-menu3"> <a class="nav-link" href="#"><span
                                class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>More
                            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <div style="font-size: 1.6rem;" class="dropdown-menu shadow-sm sm-menu3"
                            aria-labelledby="dropdown02">
                            <!--<a class="dropdown-item" href="{{ route('coolrides') }}">Cool Rides</a>-->
                            <a class="dropdown-item" href="{{ route('bikeimport') }}">Bike Import</a>
                            {{-- <a class="dropdown-item" href="bikeinsurance">Bike Insurance</a> --}}
                            <a class="dropdown-item" href="{{ route('bikefinance') }}">Bike Finance</a>
                            <a class="dropdown-item" href="mtmispak">Mtmis Pakistan</a>
                            <a class="dropdown-item" href="currentfuelprice">Current Fuel Prices</a>
                        </div>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="aboutUs"><span
                                class="d-inline-block d-lg-none icon-width"><i
                                    class="far fa-user"></i></i></span>About
                        </a>
                    </li>

                    <li class="nav-item px-lg-2"> <a class="nav-link"
                            href="{{ route('contact_us.create') }}"><span
                                class="d-inline-block d-lg-none icon-width"><i
                                    class="far fa-envelope"></i></span>Contact</a> </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                    @if (Auth::check())
                        <!-- <li class="nav-item"></li> -->
                        <!-- <li class="nav-item"><a class="btn p-0 px-4 py-2" href="{{ route('login') }}">Profile</a>

                          <div style="font-size: 1.6rem;" class="dropdown-menu shadow-sm sm-menu3"
                              aria-labelledby="dropdown02">
                              <a class="btn p-0 px-4 py-2 dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a>
                          </div>
                      </li> -->
                        <li class="nav-item px-lg-2 dropdown d-menu3"> <a style="padding: 6px;" class="nav-link"
                                href="newbike"><span class="d-inline-block d-lg-none icon-width"><i
                                        class="fas fa-spa"></i></span>Profile
                                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <div style="font-size: 1.6rem;" class="dropdown-menu shadow-sm sm-menu3"
                                aria-labelledby="dropdown02">

                                <a class="dropdown-item" href="{{ route('order-summary') }}">My Cart</a>
                                <a class="dropdown-item" href="{{ route('my_bike_adds') }}">My Posts</a>
                                <a class="dropdown-item" href="{{ route('review.create') }}">Write Review</a>
                                <a class="dropdown-item" href="{{ route('user.edit', Auth::id()) }}">Setting</a>
                                <a class="btn p-0 px-4 py-2 dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a>
                                <!-- <a class="dropdown-item" href=""></a> -->
                            </div>

                        </li>
                    @else
                        <li class="nav-item"><a class="p-0 px-4 py-2 common-btn-clr" style="color:#fff"
                                href="{{ route('login') }}">Login</a></li>
                    @endif
                    <!--start  -->

                    <li class="nav-item px-lg-2 dropdown d-menu3">
                        <a class="btn px-4 p-0 py-2 common-btn-clr" style="color:#fff">Post Add</a>
                        <div style="font-size: 1.6rem;" class="dropdown-menu shadow-sm sm-menu3"
                            aria-labelledby="dropdown02">
                            <a class="dropdown-item" href="{{ route('bike.create') }}">Post Bike</a>
                            <a class="dropdown-item" href="{{ route('product.create') }}">Post Bike Parts</a>
                            <!-- <a class="dropdown-item" href=""></a> -->
                        </div>
                    </li>
                    <!-- end -->
                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
    <!--The html below this line is for display purpose only-->
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("navbar4").style.padding = "25px 10px";
                document.querySelector(".navbar").style.background = "#FFFFFF !important";
                document.getElementById("navbar4").style.fontSize = "18px";


            } else {
                document.getElementById("navbar4").style.padding = "20px 10px";
                document.querySelector(".navbar").style.background = "#FFFFFF !important";

                document.getElementById("navbar4").style.fontSize = "18px";
            }
        }





        $(document).ready(function() {
            if ($(window).width() > 991) {
                $('.navbar-light .d-menu').hover(function() {
                    $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
                }, function() {
                    $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
                });
            }
        });



        $(document).ready(function() {
            if ($(window).width() > 991) {
                $('.navbar-light .d-menu2').hover(function() {
                    $(this).find('.sm-menu2').first().stop(true, true).slideDown(150);
                }, function() {
                    $(this).find('.sm-menu2').first().stop(true, true).delay(120).slideUp(100);
                });
            }
        });
        $(document).ready(function() {
            if ($(window).width() > 991) {
                $('.navbar-light .d-menu3').hover(function() {
                    $(this).find('.sm-menu3').first().stop(true, true).slideDown(150);
                }, function() {
                    $(this).find('.sm-menu3').first().stop(true, true).delay(120).slideUp(100);
                });
            }
        });
    </script>
    <div id="main-container">

        <section style="background-color: #fff;">
            <div class="container">
                <div class="accessory-search-results">
                    <!-- <h1>Engine &amp; Mechanical Spare Parts and Accessories for Sale in Pakistan <span style="font-weight: normal;">(3273)</span></h1>
                    <ul class="breadcrumb" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"><a href="/" itemprop="url"><span itemprop="name">Home</span></a>
                            <meta content='https://www.pakwheels.com/' itemprop='item'>
                            <meta content="1" itemprop="position">
                        </li>
                        <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"><a href="/accessories-spare-parts/" itemprop="url"><span itemprop="name">Parts &amp;
                                    Accessories</span></a>
                            <meta content='https://www.pakwheels.com/accessories-spare-parts/' itemprop='item'>
                            <meta content="2" itemprop="position">
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"><span itemprop="name">Engine &amp; Mechanical Spare
                                Parts and Accessories for Sale in Pakistan</span>
                            <meta content="3" itemprop="position">
                        </li>
                    </ul> -->


                    <div class="search-page-new">
                        <div class="row">
                            <div class="col-md-2 accessory-refine-search">
                                <form style="width: 100%;display:block;"
                                    action="{{ route('bike_search_result_sidebar_bikelisting') }}" method="POST">
                                    @csrf
                                    <div class="row m-0 w-100">
                                        <div class="col-md-12 col-2 p-0 w-100">
                                            <h4 data-toggle="collapse" data-target="#choosebike" class="pt-3"
                                                style="cursor: pointer;">Choose </h4>
                                            <div id="choosebike" class="collaps">
                                                <!-- <div class="py-1 curs"><b>-</b> Bikes</div> -->
                                                <div class="category-parts-checkbox-block">
                                                    <label class="m-0" for="category-parts">Used
                                                        Bike</label>
                                                    <input type="radio" name="category" value="Used Bike"
                                                        @if (old('category') == 'Used Bike') checked @endif
                                                        id="category-parts" class="category-checkbox" />
                                                </div>
                                                <div class="category-parts-checkbox-block">
                                                    <label class="m-0" for="bicycles-parts">New Bike</label>
                                                    <input type="radio" name="category" value="New Bike"
                                                        @if (old('category') == 'New Bike') checked @endif
                                                        id="bicycles-parts" class="category-checkbox" />
                                                </div>

                                                <div class="category-parts-checkbox-block">
                                                    <label class="m-0" for="bicycles-parts">Both</label>
                                                    <input type="radio" name="category" value="Both"
                                                        @if (old('category') == 'Both') checked @endif
                                                        {{ old('category') ? '' : 'checked' }} id="bicycles-parts"
                                                        class="category-checkbox" />
                                                </div>

                                            </div>
                                            <h4 data-toggle="collapse" data-target="#demo2" class="pt-3" style="cursor: pointer;">Company / MAKE</h4>

                <div id="demo2" class="collapse">
                    {{-- <p>All Make</p> --}}
                    @foreach ($companies as $key=>$company)
                    <div class="company-checkbox-block">
                        <label class="m-0" for="{{$company->id}}">{{$company->name}}</label>
                        <input   type="checkbox" name="companies[]" value="{{$company->id}}" id="company-checkbox-{{$company->id}}" class="brand-checkbox" />
                        <script>

                            $("#company-checkbox-{{$company->id}}").change(function() {
                                var models = @json($models);
                                if(this.checked) {
                                    for(var i = 0; i < models.length; i++) {
                                        if(models[i].company_id == {{$company->id}})
                                        {$( "#demo33" ).append(
                                            `<div class="company-checkbox-block" id="model-div-${models[i].id}">
                                                <label class="m-0" for="${models[i].id}">${models[i].name}</label>
                                                <input type="checkbox" name="modeles[]" value="${models[i].id}" id="${models[i].id}" class="brand-checkbox" />
                                            </div>`
                                        );}
                                    }
                                }
                                else{
                                    for(var i = 0; i < models.length; i++) {
                                        if(models[i].company_id == {{$company->id}})
                                        {
                                            $(`#model-div-${models[i].id}`).remove();
                                        }
                                    }
                                }
                            });
                            // var selectedCompanies = @json(old('companies'));
                            // var currentComany = @json($company);
                            // for (let index = 0; index < selectedCompanies.length; index++) {
                            //     console.log(selectedCompanies[index]);
                            //     if(selectedCompanies[index] == currentComany.id){
                            //         $('#company-checkbox-' + currentComany.id).attr('checked', true);
                            //         $('#company-checkbox-' + currentComany.id).trigger("change");
                            //     }
                            // }
                        </script>
                    </div>
                    @endforeach

                    <script>
                         var selectedCompanies = @json(old('companies'));
                         if(selectedCompanies){
                            for (let index = 0; index < selectedCompanies.length; index++) {
                                $('#company-checkbox-' + selectedCompanies[index]).attr('checked', true);
                                $('#company-checkbox-' + selectedCompanies[index]).trigger("change");
                            }
                            if(selectedCompanies.length > 0){
                                $('#demo2').removeClass('collapse');
                            }
                            else{
                                $('#demo2').addClass('collapse');
                            }
                         }

                    </script>
                </div>
                <h4 data-toggle="collapse" data-target="#demo33" class="pt-3" style="cursor: pointer;">Model</h4>
                <div id="demo33" class="collapse">
                    @if(old('companies'))
                    @forelse (old('companies') as $oldCompany)
                        @foreach ($models as $key=>$model)
                            @if ($oldCompany == $model->company_id)
                                <div class="company-checkbox-block" id="model-div-{{$model->id}}">
                                    <label class="m-0" for="{{$model->id}}">{{$model->name}}</label>
                                    <input   type="checkbox" name="models[]" value="{{$model->id}}" id="model-checkbox-{{$model->id}}" class="brand-checkbox" />
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                    @endif
                    <script>
                        var selectedModels = @json(old('models'));
                        if(selectedModels){
                            for (let index = 0; index < selectedModels.length; index++) {
                                $('#model-checkbox-' + selectedModels[index]).attr('checked', true);
                            }
                            if(selectedModels.length > 0){
                                $('#demo33').removeClass('collapse');
                            }
                            else{
                                $('#demo33').addClass('collapse');
                            }
                        }

                    </script>

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
                                <div class="col-5 p-0 my-2 mr-10">
                                    <input type="text" value="{{old('price_from')}}" title="enter 4 digit valid year"  maxlength="4" minlength="4" pattern="[0-9]{4}" name="price_from"  class="custom-control" placeholder="From">
                                </div>
                                <div class="col-5 p-0">
                                    <input type="text" value="{{old('price_to')}}" title="enter 4 digit valid year" maxlength="4" minlength="4" pattern="[0-9]{4}" name="price_to"  class="custom-control" placeholder="To">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 data-toggle="collapse" data-target="#demoBodyType" class="pt-3" style="cursor: pointer;">CATEGORIES</h4>
                <div id="demoBodyType" class="collapse">
                    <!-- <div class="py-1 curs"><b>-</b> Bikes</div> -->
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bodytype-Standard">Standard</label>
                        <input type="checkbox" name="body_type[]" value="Standard" id="bodytype-Standard" class="category-checkbox" />
                    </div>
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bodytype-Heavy Bike">Heavy Bike</label>
                        <input type="checkbox" name="body_type[]" value="Heavy Bike" id="bodytype-Heavy Bike" class="category-checkbox" />
                    </div>
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bodytype-Sports Bike">Sports Bike</label>
                        <input type="checkbox" name="body_type[]" value="Sports Bike" id="bodytype-Sports Bike" class="category-checkbox" />
                    </div>

                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bodytype-Dirt Bike">Dirt Bike</label>
                        <input type="checkbox" name="body_type[]" value="Dirt Bike" id="bodytype-Dirt Bike" class="category-checkbox" />
                    </div>

                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bodytype-ATV">ATV</label>
                        <input type="checkbox" name="body_type[]" value="ATV" id="bodytype-ATV" class="category-checkbox" />
                    </div>
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bodytype-Chopper">Chopper</label>
                        <input type="checkbox" name="body_type[]" value="Chopper" id="bodytype-Chopper" class="category-checkbox" />
                    </div>
                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bodytype-Scooter">Scooter</label>
                        <input type="checkbox" name="body_type[]" value="Scooter" id="bodytype-Scooter" class="category-checkbox" />
                    </div>

                    <div class="category-parts-checkbox-block">
                        <label class="m-0" for="bodytype-Trail">Trail</label>
                        <input type="checkbox" name="body_type[]" value="Trail" id="bodytype-Trail" class="category-checkbox" />
                    </div>

                    <script>
                        var selectedBodyType = @json(old('body_type'));
                        if(selectedBodyType){
                            for (let index = 0; index < selectedBodyType.length; index++) {
                                $('#bodytype-' + selectedBodyType[index]).attr('checked', true);
                            }
                            if(selectedBodyType.length > 0){
                                $('#demoBodyType').removeClass('collapse');
                            }
                            else{
                                $('#demoBodyType').addClass('collapse');
                            }
                        }

                   </script>
                </div>
                <h4 data-toggle="collapse" data-target="#democity" class="pt-3" style="cursor: pointer;">LOCATIONS</h4>

                <div id="democity" class="collapse">
                    <h6 class="py-2">FILTER </h6>
                    <div class="location-checkbox-block">
                        <label class="m-0" for="city_name-Lahore">Lahore</label>
                        <input type="checkbox" name="city[]" value="Lahore" id="city_name-Lahore" class="location-checkbox" />
                    </div>
                    <div class="location-checkbox-block">
                        <label class="m-0" for="city_name-Karachi">Karachi</label>
                        <input type="checkbox" name="city[]" value="Karachi" id="city_name-Karachi" class="location-checkbox" />
                    </div>
                    <div class="location-checkbox-block">
                        <label class="m-0" for="city_name-Islamabad">Islamabad</label>
                        <input type="checkbox" name="city[]" value="Islamabad" id="city_name-Islamabad" class="location-checkbox" />
                    </div>
                    <div class="location-checkbox-block">
                        <label class="m-0" for="city_name-Rawalpindi">Rawalpindi</label>
                        <input type="checkbox" name="city[]" value="Rawalpindi" id="city_name-Rawalpindi" class="location-checkbox" />
                    </div>
                    <div class="location-checkbox-block">
                        <label class="m-0" for="city_name-Peshawar">Peshawar</label>
                        <input type="checkbox" name="city[]" value="Peshawar" id="city_name-Peshawar" class="location-checkbox" />
                    </div>
                </div>

                <script>

                    var selectedCity = @json(old('city'));
                    if(selectedCity){
                        for (let index = 0; index < selectedCity.length; index++) {
                            $('#city_name-' + selectedCity[index]).attr('checked', true);
                        }
                        if(selectedCity.length > 0){
                            $('#democity').removeClass('collapse');
                        }
                        else{
                            $('#democity').addClass('collapse');
                        }
                    }

               </script>
                                            <button class="btn common-btn-clr mt-5 text-right" type="submit">
                                                Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- copy here -->
                            <div class="col-md-10 search-listing">
                                <!-- search start -->
                                <div class="col-12 p-0 mb-3">
                                    <!-- {{ route('bike_search_result_bikelisting') }} -->
                                    <form action="{{ route('bike_search_result_bikelisting') }}" method="POST">
                                        @csrf
                                        <div class="row m-0 w-100">

                                            <div class="col-md-6 my-1 col-12 pl-md-5 ">
                                                <input type="text" value="{{old('keyword')}}" name="keyword" placeholder="Search Here"
                                                    class="custom-control w-100 ">
                                            </div>
                                            <div class="col-md-2 my-1 col-12 px-md-0">
                                                <input type="text" value="{{old('min_price')}}" name="min_price" value="{{ old('min_price') }}"
                                                    list="MinPrice" placeholder="Min Price" />
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
                                                <input type="text" value="{{old('max_price')}}" name="max_price" list="MaxPrice"
                                                    placeholder="Max Price" />
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

                                </div>
                                <!-- search end -->
                                <div class="well search-heading">
                                    <div class="organize-results">
                                        <div class="col-md-8">
                                            {{-- <div class="col-md-8" data-pjax-enable>
                                                <span class="form-horizontal sort-by">
                                                    <span class="sort-by-text">Sort By: </span>
                                                    <select id="sortby" name="sortby" onchange="sortProduct()">
                                                        <option value="bumped_at-desc" selected="selected">Updated
                                                            Date:Recent First</option>
                                                        <option value="bumped_at-asc">Updated Date: Oldest First
                                                        </option>
                                                        <option value="price-asc">Price: Low to High</option>
                                                        <option value="price-desc">Price: High to Low</option>
                                                    </select>
                                                </span>
                                            </div> --}}

                                        </div>

                                        <div class="col-md-4 mt5 text-right">
                                            <div class="btn-group" data-toggle="buttons-radio">
                                                <button type="button" id="list" class="btn btn-sm ">
                                                    <span class="generic-dark-grey"><i class="fa fa-th-list"></i>
                                                        LIST</span>
                                                </button>
                                                <button type="button" id="grid" class="btn btn-sm active">
                                                    <span class="generic-dark-grey"><i class="fa fa-th-large"></i>
                                                        GRID</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fitmen-listing well p10 clearfix mb40">
                                    <div class="dropdown pull-right">
                                        <div class="fitment-list-footer">
                                            <a href="{{ route('bike.create') }}" class="btn common-btn-clr"><i
                                                    class="fa fa-plus mr5" style="vertical-align: -1px;"></i>Post
                                                Bike</a>
                                        </div>
                                    </div>
                                    <p class="generic-gray fs16 nomargin mt5">
                                        <strong class="generic-blue">Select a vehicle to check Detail</strong>
                                    </p>
                                </div>


                                <ul id="accessory-results-container"
                                    class="list-unstyled accessory search-results search-results-mid accessory-search-results grid-view">
                                    <!-- singal product -->
                                    @forelse ($bikes as $product)
                                        <li id="main_ad_3307129" data-listing-id="3307129" class="classified-listing">
                                            <div class="well search-list clearfix ad-container page-">
                                                <div class="col-md-3 grid-style">
                                                    <div class="img-box">
                                                        <div id="gallery-3307129">
                                                            <ul class="gallery list-unstyled image-gallery page-">
                                                                <li
                                                                    class="total-pictures-bar-outer img-content img-valign">
                                                                    <img alt="Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22) in Karachi"
                                                                        class="lazy pic"
                                                                        src="{{ asset('storage') }}/images/bikes/{{ $product->getImages()[0] }}"
                                                                        title="Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22) in Karachi" />
                                                                    <div class="total-pictures-bar fs12">
                                                                        <i class="fa fa-picture-o"
                                                                            aria-hidden="true"></i>
                                                                        {{ count($product->getImages()) }}
                                                                    </div>
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
                                                                    <div class="price-details generic-dark-grey">PKR
                                                                        {{ $product->price }}
                                                                    </div>
                                                                </div>
                                                                <a href="{{ route('bike.show', $product->id) }}"
                                                                    class="car-name ad-detail-path"
                                                                    title='Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22)'
                                                                    current-index='0' target='_blank'>
                                                                    <h3>{{ $product->model->name }}
                                                                        {{ $product->engin_type }}

                                                                    </h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ad-mt10">
                                                        <div class="col-md-12 right-container pos-rel">
                                                            <strong class="free-shipping-listing">
                                                                {{ $product->reg_city_id }}</strong>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-right p-0" style="margin-bottom: 5px">
                                                    @if (Auth::user())
                                                        @php
                                                            $found = false;
                                                        @endphp
                                                        @foreach ($wishlist as $value)

                                                            @if ($value->product_or_bike_id	== $product->id)
                                                                <button id="wishlistButton-{{$product->id}}" type="button"
                                                                onclick="removeFromWishlist({{ $product->id }})"
                                                                class="btn btn-light"
                                                                style="font-size: 25px; color:rgba(243, 180, 8, 0.877); ">&#9829;</button>
                                                                @php
                                                                $found = true;
                                                                @endphp
                                                                @break
                                                            @endif
                                                        @endforeach
                                                        @if (!$found)

                                                        <button id="wishlistButton-{{$product->id}}" type="button"
                                                        onclick="addtoWishlist({{ $product->id }})"
                                                        class="btn btn-light"
                                                        style="font-size: 25px; color:rgba(243, 180, 8, 0.877); ">&#9825;</button>

                                                        @endif

                                                        @else
                                                        <button type="button"
                                                        onclick="loginRedirect()"
                                                        class="btn btn-light"
                                                        style="font-size: 25px; color:rgba(243, 180, 8, 0.877); ">&#9825;</button>

                                                        @endif
                                                    </div>

                                                    <div class="search-bottom clearfix">
                                                        <div>
                                                            <div style="margin-bottom: 10px"
                                                                class="quantizer-info links-container pull-right mr5 clearfix">
                                                                <a href="{{ route('bike.show', $product->id) }}"
                                                                    class="btn common-btn-clr pull-right gtm-buynow">
                                                                    <i class="icon-shopping-cart"></i>View Detail</a>
                                                            </div>
                                                            <div>
                                                                <span class="rating generic-orange fs12 fs12">
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        @if ($i <= $product->rating)
                                                                            <i class="fas fa-star"></i>
                                                                        @else
                                                                            <i class="fas fa-star-o"></i>
                                                                        @endif
                                                                    @endfor
                                                                </span>
                                                                <span
                                                                    class="fs14 generic-gray ml5 dib">{{ $product->no_of_reviews }}
                                                                    Reviews</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                        <div class="mt-50 ml-50">
                                            <h3>No Bikes to Show ...</h3>
                                        </div>
                                    @endforelse

                                    <!-- singal product end -->
                                </ul>

                                <div class="col-12 p-0">
                                    {{ $bikes->appends(['keyword'=>old('keyword'), 'max_price'=>old('max_price'),
                                    'min_price'=>old('min_price'), 'companies[]'=>old('companies'), 'models[]'=>old('models'), 'city[]',
                                     'body_type[]'=>old('body_type'), 'category'=>old('category'), 'price_from'=>old('price_from'),
                                      'price_to'=>old('price_to')])->links('pagination::bootstrap-4') }}
                                </div>

                            </div>
                            <!-- copy end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    </div>
    <div class="header-space"></div>
    <div class="header-space"></div>
    <script>
        allow_make_model_change = true;



        $(document).ready(function() {
            applyPjax();
            onSearchReady("accessory");
            trackEventOnLayoutChange("AccessorySearch");
        });
        $(document).on('pjax:complete', function() {
            onSearchReady("accessory", true);
            trackEventOnLayoutChange("AccessorySearch");
            $('#form_alert_bottom').parsley();
            $("#tree").treeview();
            var buynow = /buynow/.test(window.location.href);
            if (buynow) {
                $('.sell-bar-fixed').removeClass('show').addClass('hide');
                $('#fb-root').removeClass('hide').addClass('show');
            } else {
                $('.sell-bar-fixed').removeClass('hide').addClass('show');
                $('#fb-root').removeClass('show').addClass('hide');
            }


        });
    </script>

    <div class="newsletter-area">
        <div class="container">
            <div class="newsletter-wrapper-all theme-bg-2">
                <div class="row">
                    <div class="col-lg-5 col-12 col-md-12">
                        <div class="newsletter-img bg-img"
                            style="background-image: url({{ asset('website') }}/assets/img/banner/newsletter-bg.png)">
                            <img alt="image" src="{{ asset('website') }}/assets/img/header_slider/united.jpg"
                                style="height:274px;width:378px;">
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 col-md-12">
                        <div class="newsletter-wrapper text-center">
                            <div class="newsletter-title">
                                <h3>Subscribe our newsletter</h3>
                            </div>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form action="#" method="post" id="#" name="mc-embedded-subscribe-form"
                                    class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" value="" name="EMAIL" class="email"
                                            placeholder="Enter your email here..." required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text"
                                                name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                        </div>
                                        <div class="clear"><input type="submit" value="Subscribe"
                                                name="subscribe" id="mc-embedded-subscribe" class="button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .button.theme-bg {
            border-color: #4a90e2;
        }

        .theme-bg {
            background: #001232
        }

        .theme-bg-2 {
            background: #ffb52f
        }

    </style>
    <style>
        .button.theme-bg {
            border-color: #4a90e2;
        }

        .theme-bg {
            background: #001232
        }

        .theme-bg-2 {
            background: #ffb52f
        }

        .pt-210 {
            padding-top: 210px
        }

        .pb-98 {
            padding-bottom: 98px
        }

    </style>

    <footer>
        <div class="footer-top pt-210 pb-98 theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-widget mb-30">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="{{ asset('website') }}/assets/img/logo/logo1.png" alt=""
                                        style="height:70px;">
                                </a>
                            </div>
                            <div class="footer-about">
                                <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest
                                    ulity
                                    of motorcycle soucan sell here your motorcycle it quo </p>
                                <div class="footer-support">
                                    <h5>FOR SUPPORT</h5>
                                    <span> +111 222 333 44 (Toll Free)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-widget mb-30 pl-60">
                            <div class="footer-widget-title">
                                <h3>QUICK LINK</h3>
                            </div>
                            <div class="quick-links">
                                <ul>
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Inventory</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="blog-sidebar.html">Blog</a></li>
                                    <li><a href="#">Conditions</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-widget mb-30">
                            <div class="footer-widget-title">
                                <h3>LATEST TWEET</h3>
                            </div>
                            <div class="food-widget-content pr-30">
                                <div class="single-tweet">
                                    <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you
                                        10 min ago</p>
                                </div>
                                <div class="single-tweet">
                                    <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you
                                        10 min ago</p>
                                </div>
                                <div class="single-tweet">
                                    <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you
                                        10 min ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-widget mb-30">
                            <div class="footer-widget-title">
                                <h3>CONTACT INFO</h3>
                            </div>
                            <div class="food-info-wrapper">
                                <div class="food-address">
                                    <div class="food-info-title">
                                        <span>Address</span>
                                    </div>
                                    <div class="food-info-content">
                                        <p>276 Jhilli Nogor, 4th folor, Momen Tower, Main Town, Lahore</p>
                                    </div>
                                </div>
                                <div class="food-address">
                                    <div class="food-info-title">
                                        <span>Phone</span>
                                    </div>
                                    <div class="food-info-content">
                                        <p>+042 12568 369 987</p>
                                        <p>+042 12568 369 987</p>
                                    </div>
                                </div>
                                <div class="food-address">
                                    <div class="food-info-title">
                                        <span>Web</span>
                                    </div>
                                    <div class="food-info-content">
                                        <a href="mailto:info@twowheelss.com">info@twowheelss.com</a>
                                        <a href="{{route('index')}}">www.twowheelss.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom ptb-35 black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="copyright">
                            <p>©Copyright, 2018 All Rights Reserved by <a href="{{route('index')}}">2Wheels</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="footer-payment-method">
                            <a href="#"><img alt="" src="{{ asset('website') }}/assets/img/icon-img/payment.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
    function addtoWishlist(id) {
        $.ajax({
            type: "GET",
            url: `{{ url('/addToWishlist2') }}` +'/'+ id,
            success: function(data) {
                $('#wishlistButton-' + id).html("&#9829;");
                $('#wishlistButton-'+id).attr("onclick","removeFromWishlist(" + id + ")");

            }
        });
    }

    function removeFromWishlist(id) {
        $.ajax({
            type: "GET",
            url: `{{ url('/removeToWishlist') }}` +'/'+ id,
            success: function(data) {
                $('#wishlistButton-'+id).html("&#9825;");
                $('#wishlistButton-'+id).attr("onclick","addtoWishlist(" + id + ")");
            }
        });
    }

    function loginRedirect() {
        document.location.href = `{{route('login')}}`;
    }

    function sortProduct() {
        $('#accessory-results-container').html('');
        if ($('#sortby').find(":selected").val() == "bumped_at-desc") {
            $('#accessory-results-container').append(`
                                                @foreach ($bikesDateRecent as $product)
                                                    <li id="main_ad_3307129" data-listing-id="3307129" class="classified-listing">
                                                        <div class="well search-list clearfix ad-container page-">
                                                            <div class="col-md-3 grid-style">
                                                                <div class="img-box">
                                                                    <div id="gallery-3307129">
                                                                        <ul class="gallery list-unstyled image-gallery page-">
                                                                            <li class="total-pictures-bar-outer img-content img-valign">
                                                                                <img alt="Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22) in Karachi"
                                                                                    class="lazy pic"
                                                                                    src="{{ asset('storage') }}/images/bikes/{{ $product->getImages()[0] }}"
                                                                                    title="Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22) in Karachi" />
                                                                                <div class="total-pictures-bar fs12">
                                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                                    {{ count($product->getImages()) }}
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 grid-style">
                                                                <div class="">
                                                                    <div class="search-title-row">
                                                                        <div class="search-title">
                                                                            <div class="right">
                                                                                <div class="price-details generic-dark-grey">PKR
                                                                                    {{ $product->price }}
                                                                                </div>
                                                                            </div>
                                                                            <a href="{{ route('bike.show', $product->id) }}" class="car-name ad-detail-path"
                                                                                title='Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22)' current-index='0'
                                                                                target='_blank'>
                                                                                <h3>{{ $product->model->name }}
                                                                                    {{ $product->engin_type }}

                                                                                </h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ad-mt10">
                                                                    <div class="col-md-12 right-container pos-rel">
                                                                        <strong class="free-shipping-listing">
                                                                            {{ $product->reg_city_id }}</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 text-right p-0" style="margin-bottom: 5px">
                                                                    <button type="button" onclick="addtoWishlist({{ $product->id }})" class="btn btn-light"
                                                                        style="font-size: 25px; color:rgba(243, 180, 8, 0.877); ">&#9825;</button>

                                                                </div>
                                                                <div class="search-bottom clearfix">
                                                                    <div>
                                                                        <div style="margin-bottom: 10px" class="quantizer-info links-container pull-right mr5 clearfix">
                                                                            <a href="{{ route('bike.show', $product->id) }}"
                                                                                class="btn common-btn-clr pull-right gtm-buynow">
                                                                                <i class="icon-shopping-cart"></i>View Detail</a>
                                                                        </div>
                                                                        <div>
                                                                            <span class="rating generic-orange fs12 fs12">
                                                                                @for ($i = 1; $i <= 5; $i++)
                                                                                    @if ($i <= $product->rating)
                                                                                        <i class="fas fa-star"></i>
                                                                                    @else
                                                                                        <i class="fas fa-star-o"></i>
                                                                                    @endif
                                                                                @endfor
                                                                            </span>
                                                                            <span class="fs14 generic-gray ml5 dib">{{ $product->no_of_reviews }} Reviews</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                                `);
        } else if ($('#sortby').find(":selected").val() == "bumped_at-asc") {
            $('#accessory-results-container').append(`
                                                @foreach ($bikesDateOld as $product)
                                                    <li id="main_ad_3307129" data-listing-id="3307129" class="classified-listing">
                                                        <div class="well search-list clearfix ad-container page-">
                                                            <div class="col-md-3 grid-style">
                                                                <div class="img-box">
                                                                    <div id="gallery-3307129">
                                                                        <ul class="gallery list-unstyled image-gallery page-">
                                                                            <li class="total-pictures-bar-outer img-content img-valign">
                                                                                <img alt="Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22) in Karachi"
                                                                                    class="lazy pic"
                                                                                    src="{{ asset('storage') }}/images/bikes/{{ $product->getImages()[0] }}"
                                                                                    title="Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22) in Karachi" />
                                                                                <div class="total-pictures-bar fs12">
                                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                                    {{ count($product->getImages()) }}
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 grid-style">
                                                                <div class="">
                                                                    <div class="search-title-row">
                                                                        <div class="search-title">
                                                                            <div class="right">
                                                                                <div class="price-details generic-dark-grey">PKR
                                                                                    {{ $product->price }}
                                                                                </div>
                                                                            </div>
                                                                            <a href="{{ route('bike.show', $product->id) }}" class="car-name ad-detail-path"
                                                                                title='Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22)' current-index='0'
                                                                                target='_blank'>
                                                                                <h3>{{ $product->model->name }}
                                                                                    {{ $product->engin_type }}

                                                                                </h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ad-mt10">
                                                                    <div class="col-md-12 right-container pos-rel">
                                                                        <strong class="free-shipping-listing">
                                                                            {{ $product->reg_city_id }}</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 text-right p-0" style="margin-bottom: 5px">
                                                                    <button type="button" onclick="addtoWishlist({{ $product->id }})" class="btn btn-light"
                                                                        style="font-size: 25px; color:rgba(243, 180, 8, 0.877); ">&#9825;</button>

                                                                </div>
                                                                <div class="search-bottom clearfix">
                                                                    <div>
                                                                        <div style="margin-bottom: 10px" class="quantizer-info links-container pull-right mr5 clearfix">
                                                                            <a href="{{ route('bike.show', $product->id) }}"
                                                                                class="btn common-btn-clr pull-right gtm-buynow">
                                                                                <i class="icon-shopping-cart"></i>View Detail</a>
                                                                        </div>
                                                                        <div>
                                                                            <span class="rating generic-orange fs12 fs12">
                                                                                @for ($i = 1; $i <= 5; $i++)
                                                                                    @if ($i <= $product->rating)
                                                                                        <i class="fas fa-star"></i>
                                                                                    @else
                                                                                        <i class="fas fa-star-o"></i>
                                                                                    @endif
                                                                                @endfor
                                                                            </span>
                                                                            <span class="fs14 generic-gray ml5 dib">{{ $product->no_of_reviews }} Reviews</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                                `);
        } else if ($('#sortby').find(":selected").val() == "price-asc") {
            $('#accessory-results-container').append(`
                                                @foreach ($bikesPriceLowToHigh as $product)
                                                    <li id="main_ad_3307129" data-listing-id="3307129" class="classified-listing">
                                                        <div class="well search-list clearfix ad-container page-">
                                                            <div class="col-md-3 grid-style">
                                                                <div class="img-box">
                                                                    <div id="gallery-3307129">
                                                                        <ul class="gallery list-unstyled image-gallery page-">
                                                                            <li class="total-pictures-bar-outer img-content img-valign">
                                                                                <img alt="Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22) in Karachi"
                                                                                    class="lazy pic"
                                                                                    src="{{ asset('storage') }}/images/bikes/{{ $product->getImages()[0] }}"
                                                                                    title="Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22) in Karachi" />
                                                                                <div class="total-pictures-bar fs12">
                                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                                    {{ count($product->getImages()) }}
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 grid-style">
                                                                <div class="">
                                                                    <div class="search-title-row">
                                                                        <div class="search-title">
                                                                            <div class="right">
                                                                                <div class="price-details generic-dark-grey">PKR
                                                                                    {{ $product->price }}
                                                                                </div>
                                                                            </div>
                                                                            <a href="{{ route('bike.show', $product->id) }}" class="car-name ad-detail-path"
                                                                                title='Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22)' current-index='0'
                                                                                target='_blank'>
                                                                                <h3>{{ $product->model->name }}
                                                                                    {{ $product->engin_type }}

                                                                                </h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ad-mt10">
                                                                    <div class="col-md-12 right-container pos-rel">
                                                                        <strong class="free-shipping-listing">
                                                                            {{ $product->reg_city_id }}</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 text-right p-0" style="margin-bottom: 5px">
                                                                    <button type="button" onclick="addtoWishlist({{ $product->id }})" class="btn btn-light"
                                                                        style="font-size: 25px; color:rgba(243, 180, 8, 0.877); ">&#9825;</button>

                                                                </div>
                                                                <div class="search-bottom clearfix">
                                                                    <div>
                                                                        <div style="margin-bottom: 10px" class="quantizer-info links-container pull-right mr5 clearfix">
                                                                            <a href="{{ route('bike.show', $product->id) }}"
                                                                                class="btn common-btn-clr pull-right gtm-buynow">
                                                                                <i class="icon-shopping-cart"></i>View Detail</a>
                                                                        </div>
                                                                        <div>
                                                                            <span class="rating generic-orange fs12 fs12">
                                                                                @for ($i = 1; $i <= 5; $i++)
                                                                                    @if ($i <= $product->rating)
                                                                                        <i class="fas fa-star"></i>
                                                                                    @else
                                                                                        <i class="fas fa-star-o"></i>
                                                                                    @endif
                                                                                @endfor
                                                                            </span>
                                                                            <span class="fs14 generic-gray ml5 dib">{{ $product->no_of_reviews }} Reviews</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                                `);
        } else if ($('#sortby').find(":selected").val() == "price-desc") {
            $('#accessory-results-container').append(`
                                                @foreach ($bikesPriceHighToLow as $product)
                                                    <li id="main_ad_3307129" data-listing-id="3307129" class="classified-listing">
                                                        <div class="well search-list clearfix ad-container page-">
                                                            <div class="col-md-3 grid-style">
                                                                <div class="img-box">
                                                                    <div id="gallery-3307129">
                                                                        <ul class="gallery list-unstyled image-gallery page-">
                                                                            <li class="total-pictures-bar-outer img-content img-valign">
                                                                                <img alt="Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22) in Karachi"
                                                                                    class="lazy pic"
                                                                                    src="{{ asset('storage') }}/images/bikes/{{ $product->getImages()[0] }}"
                                                                                    title="Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22) in Karachi" />
                                                                                <div class="total-pictures-bar fs12">
                                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                                    {{ count($product->getImages()) }}
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 grid-style">
                                                                <div class="">
                                                                    <div class="search-title-row">
                                                                        <div class="search-title">
                                                                            <div class="right">
                                                                                <div class="price-details generic-dark-grey">PKR
                                                                                    {{ $product->price }}
                                                                                </div>
                                                                            </div>
                                                                            <a href="{{ route('bike.show', $product->id) }}" class="car-name ad-detail-path"
                                                                                title='Denso Spark Plug Daihatsu Mira Iradium - 3 Pcs (IXUH 22)' current-index='0'
                                                                                target='_blank'>
                                                                                <h3>{{ $product->model->name }}
                                                                                    {{ $product->engin_type }}

                                                                                </h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ad-mt10">
                                                                    <div class="col-md-12 right-container pos-rel">
                                                                        <strong class="free-shipping-listing">
                                                                            {{ $product->reg_city_id }}</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 text-right p-0" style="margin-bottom: 5px">
                                                                    <button type="button" onclick="addtoWishlist({{ $product->id }})" class="btn btn-light"
                                                                        style="font-size: 25px; color:rgba(243, 180, 8, 0.877); ">&#9825;</button>

                                                                </div>
                                                                <div class="search-bottom clearfix">
                                                                    <div>
                                                                        <div style="margin-bottom: 10px" class="quantizer-info links-container pull-right mr5 clearfix">
                                                                            <a href="{{ route('bike.show', $product->id) }}"
                                                                                class="btn common-btn-clr pull-right gtm-buynow">
                                                                                <i class="icon-shopping-cart"></i>View Detail</a>
                                                                        </div>
                                                                        <div>
                                                                            <span class="rating generic-orange fs12 fs12">
                                                                                @for ($i = 1; $i <= 5; $i++)
                                                                                    @if ($i <= $product->rating)
                                                                                        <i class="fas fa-star"></i>
                                                                                    @else
                                                                                        <i class="fas fa-star-o"></i>
                                                                                    @endif
                                                                                @endfor
                                                                            </span>
                                                                            <span class="fs14 generic-gray ml5 dib">{{ $product->no_of_reviews }} Reviews</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                                `);
        }


    }
</script>

</html>
