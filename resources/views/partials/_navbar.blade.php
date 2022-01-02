<style>
    .dropdown-toggle::after {
        display: none;
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

    .common-btn-clr {
        background-color: #FFB52F !important;
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
</style>



<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
    <div class="container"> <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
            <svg width="40px" version="1.1" id="Layer_1" xmlns="C:\xampp\htdocs\bike\public\assets\img\logo" xmlns:xlink="C:\xampp\htdocs\bike\public\assets\img\logo" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                    <g>
                        <path d="M511.981,118.509c-0.135-2.956-1.892-5.726-4.565-7.04l-159.24-79.62c-3.776-1.887-8.363-0.64-10.664,2.898 L229.916,200.282l-55.413-85.891c-0.796-1.235-1.945-2.264-3.259-2.922l-159.24-79.62C6.582,29.138,0,33.218,0,39.268v79.621 c0,4.581,3.712,8.294,8.294,8.294c4.581,0,8.294-3.712,8.294-.294V52.687l142.652,71.326v335.32L16.587,388.008V154.277	c0-4.581-3.712-8.294-8.294-8.294c-4.581,0-8.294,3.712-8.294,8.294v238.857c0,3.142,1.775,6.013,4.585,7.418l159.24,79.62	c5.427,2.714,12.003-1.375,12.003-7.418V318.087l324.17,162.085c5.427,2.714,12.003-1.375,12.003-7.418V118.888	C512,118.76,511.987,118.636,511.981,118.509z M175.827,299.541v-152.5l145.239,225.12L175.827,299.541z M495.413,459.335
      l-139.34-69.671l108.576-186.993c2.299-3.961,0.952-9.037-3.009-11.337c-3.96-2.298-9.036-0.953-11.337,3.009L344.094,377.258
      L239.77,215.555L347.383,49.998l144.717,72.359l-26.387,45.446c-2.299,3.961-0.952,9.037,3.009,11.337	c3.958,2.297,9.035,0.953,11.337-3.009l15.354-26.443V459.335z" fill="#000" />
                    </g>
                </g>
            </svg>
            <span style="letter-spacing:2px;" class="ml-3 font-weight-bold"><span style="color:#BCBCBC;">2</span>Wheels</span>
        </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbar4">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown d-menu">
                    <a class="nav-link dropdown-toggle" href="usedbikes" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i>
                        </span>
                        New Bikes
                        <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <div style="font-size: 1.6rem;margin:0px -30px;" class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{ route('new_bike') }}">Find New Bikes</a>
                        <a class="dropdown-item" href="{{route('newbikeprices')}}">On road price</a>
                        <a class="dropdown-item" href="{{ route('bikecomperison') }}">Bike Comparison</a>
                        <a class="dropdown-item" href="{{ route('review.index') }}">Bike Reviews</a>
                        <a class="dropdown-item" href="{{route('newbikeprices')}}">New Bike Prices</a>
                    </div>
                </li>
                <li class="nav-item dropdown d-menu">
                    <a class="nav-link dropdown-toggle" href="usedbikes" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i>
                        </span>
                        Used Bikes
                        <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <div style="font-size: 1.6rem;margin:0px -30px;" class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{ route('used_bike') }}">Find Used Bikes</a>
                        <a class="dropdown-item" href="{{ route('used_bike') }}">Featured Used Bikes</a>
                        <a class="dropdown-item" href="{{ route('bike.create') }}">Sell Your Bike</a>
                        <a class="dropdown-item" href="{{ route('review.index') }}">Bike Reviews</a>
                        <a class="dropdown-item" href="{{route('newbikeprices')}}">Bike Prices</a>
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
                    <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i>
                        </span>Auto Store
                        <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <div style="font-size: 1.6rem;" class="dropdown-menu shadow-sm sm-menu2" aria-labelledby="dropdown02">
                        {{-- <a class="dropdown-item" href="{{ route('product.index') }}">Find Auto Parts</a> --}}
                        <a class="dropdown-item" href="{{ route('product.index') }}">Buy Auto Parts </a>
                        <a class="dropdown-item" href="{{ route('product.create') }}">Sell Bike Parts</a>
                    </div>
                </li>
                <li class="nav-item px-lg-2 dropdown d-menu3"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>More
                        <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <div style="font-size: 1.6rem;" class="dropdown-menu shadow-sm sm-menu3" aria-labelledby="dropdown02">
                        <!--<a class="dropdown-item" href="{{route('coolrides')}}">Cool Rides</a>-->
                        <a class="dropdown-item" href="{{route('bikeimport')}}">Bike Import</a>
                        <a class="dropdown-item" href="bikeinsurance">Bike Insurance</a>
                        <a class="dropdown-item" href="{{route('bikefinance')}}">Bike Finance</a>
                        <a class="dropdown-item" href="mtmispak">Mtmis Pakistan</a>
                        <a class="dropdown-item" href="currentfuelprice">Current Fuel Prices</a>
                    </div>

                </li>

                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="aboutUs"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>About
                    </a>
                </li>

                <li class="nav-item px-lg-2"> <a class="nav-link" href="{{ route('contact_us.create') }}"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-envelope"></i></span>Contact</a> </li>
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
                <li class="nav-item px-lg-2 dropdown d-menu3"> <a style="padding: 6px;" class="nav-link" href="newbike"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>Profile
                        <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <div style="font-size: 1.6rem;" class="dropdown-menu shadow-sm sm-menu3" aria-labelledby="dropdown02">

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
                <li class="nav-item"><a class="btn common-btn-clr p-0 px-4 py-2" href="{{ route('login') }}">Login</a></li>
                @endif
                <!--start  -->

                <li class="nav-item px-lg-2 dropdown d-menu3">
                    <a class="btn common-btn-clr px-4 pt-2" style="color:#fff">Post Add</a>
                    <div style="font-size: 1.6rem;" class="dropdown-menu shadow-sm sm-menu3" aria-labelledby="dropdown02">
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
