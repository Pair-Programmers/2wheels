@extends('layouts.main')


@section('title')
<title> Bike Auto Parts - 2Wheels</title>
@endsection
@section('contents')


<style>
    .side-category-section {
        height: 100vh;
        width: 100%;
        background-color: teal;
    }

    .top-search-parts,
    .search-form {
        position: relative;
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 0px 30px;
    }

    @media screen and (max-width:768px) {

        .top-search-parts,
        .search-form {
            padding: 0px 5px 0px 0px;
            margin: 5px 0px;
        }
    }
</style>
<div class="container px-1 pt-130 pb-50">
    <div class="row m-0">

        <div class="col-12 p-0 py-3 pb-5">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ipsum.</h3>
        </div>
        <div class="col-12 p-0" style="min-height:100vh;">
            <div class="row m-0">
                <div class="col-12 col-md-3 p-0">
                    <div class="side-category-section">

                    </div>
                </div>
                <div class="col-12 col-md-9 p-0">

                    <!--  -->
                    <div class="row m-0">
                    <div class="col-12 p-0">
                    <div class="top-search-parts">
                        <form class="search-form" action="">
                            <div class="form-group w-100">
                                <input class="w-100" type="text" placeholder="seacrh here parts" value="">
                            </div>
                            <div class="form-group">
                                <input type="button" class="ml-3 px-5 btn-success" value="Search">
                            </div>
                        </form>
                    </div>
                    </div>
                    <!--  -->
                        <div class="col-4 p-0 pl-2 mt-1">
                            <div class="card w-100">
                                <img class="card-img-top" src="{{asset('website')}}/assets/img/bike_honda_125_cover.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Honda 125</h4>
                                    <p class="card-text">Some example text.</p>
                                    <a href="#" class="btn btn-danger">Add to Cart</a>
                                    <a href="#" class="btn btn-success">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-4 p-0 pl-2 mt-1">
                            <div class="card w-100">
                                <img class="card-img-top" src="{{asset('website')}}/assets/img/bike_honda_125_cover.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Honda 125</h4>
                                    <p class="card-text">Some example text.</p>
                                    <a href="#" class="btn btn-danger">Add to Cart</a>
                                    <a href="#" class="btn btn-success">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    <!--  -->
                    <div class="col-4 p-0 pl-1 mt-1">
                            <div class="card w-100 ">
                                <img class="card-img-top" src="{{asset('website')}}/assets/img/bike_honda_125_cover.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Honda 125</h4>
                                    <p class="card-text">Some example text.</p>
                                    <a href="#" class="btn btn-danger">Add to Cart</a>
                                    <a href="#" class="btn btn-success">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-4 p-0 pl-1 mt-1">
                            <div class="card w-100">
                                <img class="card-img-top" src="{{asset('website')}}/assets/img/bike_honda_125_cover.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Honda 125</h4>
                                    <p class="card-text">Some example text.</p>
                                    <a href="#" class="btn btn-danger">Add to Cart</a>
                                    <a href="#" class="btn btn-success">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>

    </div>
</div>













@endsection
