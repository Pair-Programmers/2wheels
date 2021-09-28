@extends('layouts.main')
@section('title', "Bike camparison")
@section('contents')

<div class="header-space"></div>
<section class="search-main-outer">
    <div id="top-search-heading" class="search-main-head">
        <div class="container" style="margin-top: 40px;">
            <h1>New Bikes Comparison</h1>
            <p>Confused? Compare your choice of bikes now!</p>
        </div>
    </div>
    <div class="search-main vehicle-comparison-page mb0">
        <form accept-charset="UTF-8" action="{{route('do_bikecomperison')}}" method="post">
            @csrf
            <div style="margin:0;padding:0;display:inline">
            </div>
            <div class="row">
                <script type="text/javascript">
                var type = "bike";
                </script>
                <div class="comparisons">
                    <div class="col-md-4">
                        <legend class="pull-left">Bike-1 Company</legend>
                        <select class="full-field" onchange="display_Models_1()" data-index="0" id="company_select_1" name="compananies[]"
                            placeholder="Bike Maker" type="text" value="" required>
                            <option value="" selected disabled>Select</option>
                            @foreach ($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                        <legend class="pull-left">Models</legend>
                        <select class="full-field" data-index="0" id="model_select_1" name="models[]"
                            placeholder="Bike Model" type="text" value="" required>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <legend class="pull-left">Bike-2 Company</legend>
                        <select class="full-field" onchange="display_Models_2()" data-index="1" id="company_select_2" name="compananies[]"
                            placeholder="Bike Maker" type="text" value="" required>
                            <option value="" selected disabled>Select</option>

                            @foreach ($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                        <legend class="pull-left">Models</legend>
                        <select class="full-field" data-index="1" id="model_select_2" name="models[]"
                            placeholder="Bike Model" type="text" value="" required>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <legend class="pull-left">Bike-3 Company</legend>
                        <select class="full-field" onchange="display_Models_3()" data-index="2" id="company_select_3" name="compananies[]"
                            placeholder="Make/Model" type="text" value="">
                            <option value="" selected disabled>Select</option>

                            @foreach ($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                        <legend class="pull-left">Models</legend>
                        <select class="full-field" data-index="2" id="model_select_3" name="models[]"
                            placeholder="Make/Model" type="text" value="">
                        </select>
                    </div>
                </div>
                <div id="vehicle_selector_error" class="generic-red col-sm-6 fs12 pull-left mt5"></div>
            </div>
            <div class="search-functions clearfix">
                <a href="{{route('bikecomperison')}}" class="more_option"> Clear </a>
                <input type="submit" style="height: 50px;" class="w-25 btn btn-lg btn-success pull-right"
                    value="Compare" />
            </div>

        </form>
    </div>

    <div class="container">
        <div class="main-google-ad-container">
            <div style="max-width: 970px; margin: 0 auto;">
                <div id="div-gpt-2Wheels_TopBanner_970x90" class='top_banner' style='display:none;'>

                </div>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="container">
        <h2>
            Hot Bike Comparisons


        </h2>
        <div class="pull-right ml20" style="width: 300px;">

        </div>

        <div class="well p10 clearfix mr320">

            <div class="car-comparisons-view" id="NewBikeCompare-main-comparison">
                <a href="#" class="clearfix">
                    <div class="car-view-1 pull-left">

                        <div class="thumb">
                            <img alt="Honda_cb_150" src="{{asset('website')}}/assets/img/Honda_CB_150.jpg" />
                        </div>
                        <h3 class="nomargin text-center">Honda CB 150F</h3>
                    </div>
                    <div class="car-view-1 pull-right">

                        <div class="thumb">
                            <img alt="Gs_150_se" src="{{asset('website')}}/assets/img/GS_150_SE.jpg" />
                        </div>
                        <h3 class="nomargin text-center">Suzuki GS 150 SE</h3>
                    </div>
                    <div class="car-view-vs">VS</div>
                </a> <a href="{{route('view_bike_Comperison', 1)}}" class="btn btn-block btn-link-outline">
                    View Comparison
                </a>
            </div>
            <ul class="car-comparisons-list list-unstyled pull-right text-center" id=NewBikeCompare-comparison-list>
                <li>
                    <a href="{{route('view_bike_Comperison', 1)}}">

                        Yamaha YBR 125
                        <div>
                            <span class="car-view-vs">VS</span>
                        </div>

                        Honda CG 125
                    </a>
                </li>
                <li>
                    <a href="{{route('view_bike_Comperison', 1)}}">

                        Yamaha YBR 125G
                        <div>
                            <span class="car-view-vs">VS</span>
                        </div>

                        Honda CB 125F
                    </a>
                </li>
            </ul>


        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="gen_desc_large active " id="introduction" itemprop="description"
            style="height: 150px; overflow: hidden;">
            <h2><strong>Bikes Comparison in Pakistan</strong></h2>

            <p>If you&rsquo;re still in a dilemma on purchasing a new bike, 2Wheels is here to help you in choosing you
                the best bike in your desired budget.&nbsp;2Wheels bike comparison tool made with comprehensive research
                and practicality. Although there is no direct naming of the brand in regards to which one is better or
                not we still try to make it clear to the assumed rational customers with a good list of points.&nbsp;
            </p>


        </div>


        <div id="demo" class="collapse mt-5">
            <strong>How it works</strong></h2>

            <p>All you need to do is filling in the name of at least two automakers and their respective models, and you
                have a good list of comparison. Some of the top Companies Models you might wish to
                compare,&nbsp;however; you can always change it according to your needs and desire. You&#39;ll be able
                to see bike comparison of <a href="/bikes/honda/cg-125--2/">Honda 125</a>, <a
                    href="/bikes/yamaha/ybr-125/">Yamaha YBR 125</a>, <a href="/bikes/suzuki/gs-150/">Suzuki GS 150</a>
                and Honda Deluxe, if that&#39;s what you were looking for, all you need to do is just click anywhere on
                the two bikes, and you&#39;ll have a healthy list of comparison.&nbsp;</p>

            <h2><strong><span style="line-height: 20.8px;">Bikes Comparison Tool</span></strong></h2>

            <p>2Wheels bike comparison based on a long list such as Engine Type, displacement, transmission, clutch,
                compression ratio bore and stroke. Bike comparison in Pakistan is necessary, but bike reviews are
                another important aspect. Once you land on the final page, you&#39;ll find a list of reviews done by
                plenty of anonymous people who have either used the motorbike or are currently using the motorcycle.
                Many decisions while purchasing a bike are based on reviews as it&#39;s the experience talking.&nbsp;
            </p>

            <h3><strong>Top Comparisons</strong></h3>

            <ol>
                <li><a href="#">Compare Yamaha YBR 125 and Honda CG 125</a></li>
                <li><a href="#">Compare Ravi Piaggio and Honda 125 Deluxe</a></li>
                <li><a href="#">Compare Suzuki 150 and&nbsp;Honda CG 125</a></li>
            </ol>

            <h2><strong>Popular Manufacturers</strong></h2>

            <p>The Pakistan market is very unpredictable, and one cannot easily determine what the next move of
                customers will be. There are few companies which are magnificent, but they fail in the Pakistani market
                and few companies are not at all expected to flourish, but they do. However, the most famous
                manufacturers are <a href="/bikes/honda/" style="line-height: 20.8px;">Honda</a><span
                    style="line-height: 20.8px;">,&nbsp;</span><a href="/bikes/yamaha/"
                    style="line-height: 20.8px;">Yamaha</a><span style="line-height: 20.8px;">,&nbsp;</span><a
                    href="/bikes/suzuki/" style="line-height: 20.8px;">Suzuki</a><span
                    style="line-height: 20.8px;">,&nbsp;</span><a href="/bikes/metro/"
                    style="line-height: 20.8px;">Metro</a>, <a href="/bikes/unique/">Unique</a> and <a
                    href="/bikes/super-power/">Super Power</a>.</p>

        </div>
    </div>
</section>

</div>

<div class="header-space"></div>
<div class="header-space"></div>


<script>
    function display_Models_1() {
        $('#model_select_1').html('');
       $.ajax({
           type:"GET",
           url:`{{ url('get_models') }}/` +  $('#company_select_1').find(":selected").val(),
           success:function(data){
            data.models.forEach(element => {
                $('#model_select_1').append(`
                <option value="${element.id}">${element.name}</option>
                `)
            });
           },
           error:function(error){
               console.log(error);
           }
       })
    }

    function display_Models_2() {
        $('#model_select_2').html('');
       $.ajax({
           type:"GET",
           url:`{{ url('get_models') }}/` +  $('#company_select_2').find(":selected").val(),
           success:function(data){
            data.models.forEach(element => {
                $('#model_select_2').append(`
                <option value="${element.id}">${element.name}</option>
                `)
            });
           },
           error:function(error){
               console.log(error);
           }
       })
    }

    function display_Models_3() {
        $('#model_select_3').html('');
       $.ajax({
           type:"GET",
           url:`{{ url('get_models') }}/` +  $('#company_select_3').find(":selected").val(),
           success:function(data){
            data.models.forEach(element => {
                $('#model_select_3').append(`
                <option value="${element.id}">${element.name}</option>
                `)
            });
           },
           error:function(error){
               console.log(error);
           }
       })
    }
</script>
@endsection