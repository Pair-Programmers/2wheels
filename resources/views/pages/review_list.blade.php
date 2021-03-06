@extends('layouts.main')

@section('title')
<title> Reviews List - 2Wheels</title>
@endsection

@section('contents')




    <div class="header-space"></div>
    <section>
        <div class="container">
            <h2 style="padding:60px 0px 10px  !important;">Most Reviewed Bikes </h2>
            <ul class="row list-unstyled">
                @foreach ($bike_models as $key=>$model)
                    <li class="col-md-3">
                        <div class="panel-130-100-make">
                            <div  class="show cards">
                                <div class="img-box mb10">
                                    <div class="img-content">
                                        <img alt="{{ $model->name }}" class="pic"
                                            src="{{ asset('storage') }}/images/bikes/{{ $model->getImages()[0]}}"
                                            title="{{ $model->name }}" />
                                    </div>
                                </div>
                                <div class="cards-content text-center noborder">
                                    <h3 class="nomargin">{{ $model->name }}</h3>
                                    <span class="rating generic-orange fs12 fs12">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $model->rating)
                                            <i class="fa fa-star"></i>
                                            @else
                                            <i class="fa fa-star-o"></i>
                                            @endif
                                        @endfor
                                    </span>
                                    <div class="generic-gray">{{ $model->no_of_reviews }} Reviews</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @if ($key == 3)
                        @break
                    @endif
                @endforeach

            </ul>
        </div>
    </section>


    <section style="margin-bottom: 120px">
        <div class="container">
            <div class="row">
                <div class="col-md-10 latest-reviews">
                    <h2>Bike Reviews </h2>
                    <div class="well form-horizontal clearfix">
                        <form accept-charset="UTF-8" method="post" action="{{route('review_order')}}" class="pull-right" id="review_sort"
                            method="get">
                            @csrf
                            <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
                                    value="&#x2713;" /></div>
                            <span>Sort By: </span>
                            <select name="sortby" id="sortby" required>
                                <option selected value="DESC">Recent</option>
                                <option value="ASC">Oldest</option>
                            </select>
                            <button type="submit">search</button>
                        </form>
                        <div class="mt5">
                            Displaying Reviews <b>1&nbsp;-&nbsp;20</b> of <b>{{count($reviews)}}</b> in total
                        </div>
                    </div>
                    <div class="well mb20">
                        @forelse ($reviews as $review)
                            <div class=" mb40 " id="update_helpful_count_673">

                                <div class="review-info row">
                                    <div class="col-md-3">
                                        <a style="pointer-events: none" href=""><img alt="United Us 100 Jazba User Review" class="img-polaroid"
                                                src="{{ asset('storage') }}/images/bikes/{{ $review->model->getImages()[0] }}"
                                                title="United Us 100 Jazba User Review" /></a>
                                    </div>
                                    <div class="col-md-9">

                                        <h3 class="nomargin"><a style="pointer-events: none" href="" rel="nofollow">{{$review->title}}
                                            </a>
                                        </h3>
                                        <span class="generic-gray" rel="nofollow">{{$review->model_year}} {{$review->model->name}} {{$review->company->name}}</span>
                                        <div><span class="rating generic-orange fs12 fs12">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if($i<= $review->model->rating)
                                                <i class="fas fa-star"></i>
                                                @else
                                                <i class="fas fa-star-o"></i>
                                                @endif
                                            @endfor
                                            </span></div>

                                        <p class="date">
                                            Posted by {{$review->user->name}} on {{$review->created_at}}</p>

                                        <div class="familiarity">
                                            <strong>Familiarity:</strong> {{$review->how_you_know}}
                                        </div>
                                    </div>
                                </div>
                                <div dir="ltr" style="word-wrap: break-word;">
                                    <p>{{$review->comment}}
                                    </p>
                                </div>
                                <ul class="review-rating list-unstyled clearfix">
                                    <li class="col-md-4">Style <img alt="5-rating"
                                            src="{{ asset('website') }}/assets/img/{{$review->style}}-rating.jpg" />
                                    </li>
                                    <li class="col-md-4">Comfort <img alt="3-rating"
                                            src="{{ asset('website') }}/assets/img/{{$review->comfort}}-rating.jpg" />
                                    </li>
                                    <li class="col-md-4">Fuel Economy <img alt="5-rating"
                                            src="{{ asset('website') }}/assets/img/{{$review->fuel_economy}}-rating.jpg" />
                                    </li>
                                    <li class="col-md-4">Performance <img alt="4-rating"
                                            src="{{ asset('website') }}/assets/img/{{$review->performance}}-rating.jpg" />
                                    </li>
                                    <li class="col-md-4">Value for Money <img alt="3-rating"
                                            src="{{ asset('website') }}/assets/img/{{$review->value_for_money}}-rating.jpg" />
                                    </li>
                                </ul>
                                <div class="control review-footer clearfix">

                                    <div class="col-md-6">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        @empty
                            <p>no reviews yet ..</p>
                        @endforelse

                        <div class="col-12 p-0">
                            {{ $reviews->links('pagination::bootstrap-4') }}
                        </div>


                    </div>


                    {{-- <ul class="pagination search-pagi">


                        <li class="page active">
                            <a href="/bikes/reviews/">1</a>
                        </li>

                        <li class="page">
                            <a href="/bikes/reviews/?page=2" rel="next">2</a>
                        </li>

                        <li class="page">
                            <a href="/bikes/reviews/?page=3">3</a>
                        </li>

                        <li class="page">
                            <a href="/bikes/reviews/?page=4">4</a>
                        </li>

                        <li class="page">
                            <a href="/bikes/reviews/?page=5">5</a>
                        </li>

                        <li class="page gap disabled"><a href="#" onclick="return false;">&hellip;</a></li>
                        <li class="next_page">
                            <a href="/bikes/reviews/?page=2" rel="next">Next &rsaquo;</a>
                        </li>

                        <li class="last next">
                            <a href="/bikes/reviews/?page=53">Last &raquo;</a>
                        </li>

                    </ul> --}}

                </div>
                <div class="col-md-2 skyscrapper-ad-container mt30">
                    <div id="div-gpt-2Wheels_NewBikes_Reviews_VerticalBar_120x600">

                    </div>
                </div>
            </div>
        </div>
    </section>












@endsection
