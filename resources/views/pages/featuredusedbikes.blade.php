@extends('layouts.main')

@section('title', "Bike Finance")

@section('contents')

<head>

    <style>
        body{
            background-color: #F2F3F3;
        }
    .container{
        width: 100% !important;
    }
    input[type="checkbox"]{
        height: 10px;
        margin-top: 10px;
    }
    </style>
</head>

<div class="header-space"></div>

<!-- #TODO : Multiple checks for ad to not show -->

    <div class="" id="main-container">

        <section class="nopad" style="margin-top: 100px ;"></section>      

  <div class="container">

      <h3 style="line-height: 20px"> Used  Bikes For Sale In Pakistan<span style="font-weight: normal;">(321)</span></h3>
      <ul class="breadcrumb" itemscope="itemscope"><li itemprop="itemListElement" itemscope="itemscope"><a href="/" itemprop="url"><span itemprop="name">Home</span></a><meta itemprop='item'><meta content="1" itemprop="position"></li><li itemprop="itemListElement" itemscope="itemscope"><a href="/used-bikes/" itemprop="url"><span itemprop="name">Used Bikes</span></a><meta itemprop='item'><meta content="2" itemprop="position"></li><li class="active" itemprop="itemListElement" itemscope="itemscope"><span itemprop="name"> Used  Bikes For Sale In Pakistan</span><meta content="3" itemprop="position"></li></ul>


          <div class="search-page-new">
            <div class="row">
              <div class="col-md-3 used-bike-refine-search">
                <div class="sidebar-filters">
  <div class="filter-panel-new box" data-pjax-enable>

    <input id="selected_city_slug" name="selected_city_slug" type="hidden" />
    

    <div class="accordion" id="sidebar">

      <div class="accordion-group search-filter-heading">
        <div class="accordion-heading">
          <a class="accordion-toggle">Show Results By:</a>
        </div>
      </div>

          <div data-pjax-enable>
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" href="#collapse_search_key_filter">
            <i class="fa fa-caret-down"></i>Search Filters
          </a>
        </div>
        <div id="collapse_search_key_filter" class="accordion-body collapse in">
          <div class="accordion-inner clearfix">
            <ul class="list-unstyled">
                          <li>
                            Featured Ads
                            <a href="/used-bikes/search/-/" rel="nofollow">
                                <span class="pull-right"><i class="fa fa-times-circle"></i></span>
</a>                          </li>
            </ul>
            <a class="clear-filters" href="/used-bikes/search/-/" rel="nofollow" >Clear All</a>
          </div>
        </div>
      </div>
    </div>


      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" href="#collapse_search_key_keyword">
            <i class="fa fa-caret-down"></i>Search by Keyword
          </a>
        </div>
        <div id="collapse_search_key_keyword" class="accordion-body collapse in">
          <div class="accordion-inner">
            <form id="search_key_form" action="/used-bikes/search/-/featured_1" method="get">
              <input class="pr35" id="q" name="q" placeholder="e.g. Honda in Lahore" type="text" />
              
              <input class="btn btn-primary refine-go" type="submit" value="Go" />
            </form>
            <input id="query_params" name="query_params" type="hidden" value="" />
          </div>
        </div>
      </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_0">
              <i class="fa fa-caret-down"></i>Price Range
            </a>
          </div>
          <div id="collapse_0" class="accordion-body filter_25 collapse in">
            <div class="accordion-inner">
                <div class="range-filter clearfix">
                  <input class="rng-hintify" data-hintify="{&quot;min&quot;:10000,&quot;max&quot;:1000000000,&quot;step&quot;:10000,&quot;add_comma&quot;:true}" id="pr_from" maxlength="9" name="pr_from" placeholder="From" type="text" value="" />
                  <input class="rng-hintify" data-hintify="{&quot;min&quot;:10000,&quot;max&quot;:1000000000,&quot;step&quot;:10000,&quot;add_comma&quot;:true}" id="pr_to" maxlength="9" name="pr_to" placeholder="To" type="text" value="" />
                  <input class="btn btn-primary pull-left" data-alias="pr" data-max-text="More" data-min-text="Less" data-name="price range" id="pr-go" name="commit" type="submit" value="Go" />

                    <div class="clearfix"></div>
                    <div id="pr_hint"></div>

                </div>

            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_1">
              <i class="fa fa-caret-down"></i>Year
            </a>
          </div>
          <div id="collapse_1" class="accordion-body filter_50 collapse in">
            <div class="accordion-inner">
                <div class="range-filter clearfix">
                  <input class="rng-hintify" data-hintify="{&quot;min&quot;:2000,&quot;max&quot;:2021,&quot;step&quot;:1}" id="yr_from" maxlength="9" name="yr_from" placeholder="From" type="text" value="" />
                  <input class="rng-hintify" data-hintify="{&quot;min&quot;:2000,&quot;max&quot;:2021,&quot;step&quot;:1}" id="yr_to" maxlength="9" name="yr_to" placeholder="To" type="text" value="" />
                  <input class="btn btn-primary pull-left" data-alias="yr" data-max-text="Later" data-min-text="Earlier" data-name="year" id="yr-go" name="commit" type="submit" value="Go" />


                </div>

            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_2">
              <i class="fa fa-caret-down"></i>Make
            </a>
          </div>
          <div id="collapse_2" class="accordion-body filter_15 collapse in">
            <div class="accordion-inner">
                <ul class="list-unstyled ">

                        <li title="Chinese Bikes Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="#"  title="Chinese Bikes Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Chinese Bikes
                              <span class="pull-right count">184</span>


                            </a>
                          </label>
                        </li>

                        <li title="Hi Speed Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="#"  title="Hi Speed Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Hi Speed
                              <span class="pull-right count">24</span>


                            </a>
                          </label>
                        </li>

                        <li title="Sigma Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="#"  title="Sigma Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Sigma
                              <span class="pull-right count">17</span>


                            </a>
                          </label>
                        </li>

                        <li title="Honda Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/honda/56415?featured=1"  title="Honda Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Honda
                              <span class="pull-right count">15</span>


                            </a>
                          </label>
                        </li>

                        <li title="Kawasaki Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/kawasaki/56408?featured=1"  title="Kawasaki Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Kawasaki
                              <span class="pull-right count">13</span>


                            </a>
                          </label>
                        </li>
                </ul>

                <div class="clearfix"></div>
                  <div id="lb_more_choices_manufacturers" class="modal more_choices_manufacturers" ></div>
                  <a class="more-choice" href="javascript:void;" data-toggle="modal" data-target="#lb_more_choices_manufacturers" rel="nofollow">more choices...</a>
            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_3">
              <i class="fa fa-caret-down"></i>City
            </a>
          </div>
          <div id="collapse_3" class="accordion-body filter_20 collapse in">
            <div class="accordion-inner">
                <ul class="list-unstyled ">

                        <li title="Bikes for Sale in Lahore, Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/lahore/56926?featured=1"  title="Bikes for Sale in Lahore, Pakistan">
                              <input type="checkbox" />

                                Lahore
                              <span class="pull-right count">267</span>


                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Karachi, Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/karachi/56925?featured=1"  title="Bikes for Sale in Karachi, Pakistan">
                              <input type="checkbox" />

                                Karachi
                              <span class="pull-right count">20</span>


                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Islamabad, Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/islamabad/56924?featured=1"  title="Bikes for Sale in Islamabad, Pakistan">
                              <input type="checkbox" />

                                Islamabad
                              <span class="pull-right count">9</span>


                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Rawalpindi, Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/rawalpindi/56916?featured=1"  title="Bikes for Sale in Rawalpindi, Pakistan">
                              <input type="checkbox" />

                                Rawalpindi
                              <span class="pull-right count">7</span>


                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Bahawalpur, Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/bahawalpur/56892?featured=1"  title="Bikes for Sale in Bahawalpur, Pakistan">
                              <input type="checkbox" />

                                Bahawalpur
                              <span class="pull-right count">4</span>


                            </a>
                          </label>
                        </li>
                </ul>

                <div class="clearfix"></div>
                  <div id="lb_more_choices_cities" class="modal more_choices_cities" ></div>
                  <a class="more-choice" href="javascript:void;" data-toggle="modal" data-target="#lb_more_choices_cities" rel="" >more choices...</a>
            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_4">
              <i class="fa fa-caret-down"></i>Registration City
            </a>
          </div>
          <div id="collapse_4" class="accordion-body filter_22 collapse in">
            <div class="accordion-inner">
                <ul class="list-unstyled ">

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/rg_unregistered/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Un-Registered
                              <span class="pull-right count">224</span>


                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/rg_lahore/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Lahore
                              <span class="pull-right count">76</span>


                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/rg_islamabad/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Islamabad
                              <span class="pull-right count">5</span>


                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/rg_karachi/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Karachi
                              <span class="pull-right count">5</span>


                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/rg_peshawar/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Peshawar
                              <span class="pull-right count">2</span>


                            </a>
                          </label>
                        </li>
                </ul>

                <div class="clearfix"></div>
                  <div id="lb_more_choices_registration_cities" class="modal more_choices_registration_cities" ></div>
                  <a class="more-choice" href="javascript:void;" data-toggle="modal" data-target="#lb_more_choices_registration_cities" rel="nofollow" >more choices...</a>
            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_5">
              <i class="fa fa-caret-down"></i>Engine Type
            </a>
          </div>
          <div id="collapse_5" class="accordion-body filter_51 collapse in">
            <div class="accordion-inner">
                <ul class="list-unstyled ">

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/eg_4-stroke/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                4 Stroke
                              <span class="pull-right count">321</span>


                            </a>
                          </label>
                        </li>
                </ul>

            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_6">
              <i class="fa fa-caret-down"></i>Mileage
            </a>
          </div>
          <div id="collapse_6" class="accordion-body filter_52 collapse in">
            <div class="accordion-inner">
                <div class="range-filter clearfix">
                  <input class="rng-hintify" data-hintify="{&quot;min&quot;:5000,&quot;max&quot;:1000000,&quot;step&quot;:5000}" id="ml_from" maxlength="9" name="ml_from" placeholder="From" type="text" value="" />
                  <input class="rng-hintify" data-hintify="{&quot;min&quot;:5000,&quot;max&quot;:1000000,&quot;step&quot;:5000}" id="ml_to" maxlength="9" name="ml_to" placeholder="To" type="text" value="" />
                  <input class="btn btn-primary pull-left" data-alias="ml" data-max-text="More" data-min-text="Less" data-name="mileage" id="ml-go" name="commit" type="submit" value="Go" />


                </div>

            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_7">
              <i class="fa fa-caret-down"></i>Engine Capacity (cc)
            </a>
          </div>
          <div id="collapse_7" class="accordion-body filter_56 collapse in">
            <div class="accordion-inner">
                <div class="range-filter clearfix">
                  <input class="rng-hintify" data-hintify="{&quot;min&quot;:100,&quot;max&quot;:10000,&quot;step&quot;:50}" id="ec_from" maxlength="9" name="ec_from" placeholder="From" type="text" value="" />
                  <input class="rng-hintify" data-hintify="{&quot;min&quot;:100,&quot;max&quot;:10000,&quot;step&quot;:50}" id="ec_to" maxlength="9" name="ec_to" placeholder="To" type="text" value="" />
                  <input class="btn btn-primary pull-left" data-alias="ec" data-max-text="More" data-min-text="Less" data-name="engine capacity (cc)" id="ec-go" name="commit" type="submit" value="Go" />


                </div>

            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_8">
              <i class="fa fa-caret-down"></i>Body Type
            </a>
          </div>
          <div id="collapse_8" class="accordion-body filter_55 collapse in">
            <div class="accordion-inner">
                <ul class="list-unstyled has-picture-new">

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/bt_atv/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox"  class="pull-left" />

                                <div class="bike-body-image atv"></div>
                              <span class="pull-right count">123</span>

                                <p>ATV</p>

                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/bt_sportsbike/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox"  class="pull-left" />

                                <div class="bike-body-image sportsbike"></div>
                              <span class="pull-right count">93</span>

                                <p>Sportsbike</p>

                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/bt_standard/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox"  class="pull-left" />

                                <div class="bike-body-image standard"></div>
                              <span class="pull-right count">38</span>

                                <p>Standard</p>

                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/bt_cruiser/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox"  class="pull-left" />

                                <div class="bike-body-image cruiser"></div>
                              <span class="pull-right count">31</span>

                                <p>Cruiser</p>

                            </a>
                          </label>
                        </li>
                </ul>

                <div class="clearfix"></div>
                  <div id="lb_more_choices_body_types" class="modal more_choices_body_types" ></div>
                  <a class="more-choice" href="javascript:void;" data-toggle="modal" data-target="#lb_more_choices_body_types" rel="nofollow" >more choices...</a>
            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_9">
              <i class="fa fa-caret-down"></i>Model Category
            </a>
          </div>
          <div id="collapse_9" class="accordion-body filter_67 collapse in">
            <div class="accordion-inner">
                <ul class="list-unstyled ">

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/ctg_dirt-bikes/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Dirt Bikes
                              <span class="pull-right count">124</span>


                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/ctg_heavy-bikes/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Heavy Bikes
                              <span class="pull-right count">64</span>


                            </a>
                          </label>
                        </li>
                </ul>

            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_10">
              <i class="fa fa-caret-down"></i>Picture Availability
            </a>
          </div>
          <div id="collapse_10" class="accordion-body filter_19 collapse in">
            <div class="accordion-inner">
                <ul class="list-unstyled ">

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/picture_1/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                With Pictures
                              <span class="pull-right count">321</span>


                            </a>
                          </label>
                        </li>
                </ul>

            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_11">
              <i class="fa fa-caret-down"></i>Seller Type
            </a>
          </div>
          <div id="collapse_11" class="accordion-body filter_65 collapse in">
            <div class="accordion-inner">
                <ul class="list-unstyled ">

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/seller_2/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Dealers
                              <span class="pull-right count">270</span>


                            </a>
                          </label>
                        </li>

                        <li title="Bikes for Sale in Pakistan">

                          <label class="filter-check clearfix">
                            <a href="/used-bikes/search/-/seller_1/featured_1/" rel=nofollow title="Bikes for Sale in Pakistan">
                              <input type="checkbox" />

                                Individuals
                              <span class="pull-right count">51</span>


                            </a>
                          </label>
                        </li>
                </ul>

            </div>
          </div>
        </div>
        




        <div class="accordion-group" >
          <div class="accordion-heading">
            <a class="accordion-toggle text-left " data-toggle="collapse" href="#collapse_12">
              <i class="fa fa-caret-down"></i>Ad Type
            </a>
          </div>
          <div id="collapse_12" class="accordion-body filter_105 collapse in">
            <div class="accordion-inner">
                <ul class="list-unstyled ">
                      <li>
                        <span class="selected">
                          <label class="filter-uncheck clearfix">
                            <a href="/used-bikes/search/-/" rel="nofollow">
                              <input type="checkbox" checked="checked"  />
                                Featured Ads

                            </a>
                          </label>
                        </span>
                      </li>
                </ul>

            </div>
          </div>
        </div>
    </div>
  </div>
</div>

    <div class='tlc google-ad-unit mt20'>
          <div id="div-gpt-2Wheels_UsedBikes_Search_ATF_VerticalBar_160x600">
      
    </div>
    </div>

              </div>
              <div class="col-md-9 search-listing pull-right">
                <div class="well search-heading">
                  <div class="organize-results">
                    <div class="col-md-8" data-pjax-enable>
  <span class="form-horizontal sort-by">
    <span class="sort-by-text">Sort By: </span>
    <select id="sortby" name="sortby" onchange="callPjax(&#39;/used-bikes/search/-/featured_1/?sortby=&#39; + $(this).val())"><option value="bumped_at-desc" selected="selected">Updated Date: Recent First</option>
<option value="bumped_at-asc">Updated Date: Oldest First</option>
<option value="price-asc">Price: Low to High</option>
<option value="price-desc">Price: High to Low</option>
<option value="model_year-desc">Model Year: Latest First</option>
<option value="model_year-asc">Model Year: Oldest First</option>
<option value="mileage-asc">Mileage: Low to High</option>
<option value="mileage-desc">Mileage: High to Low</option></select>
  </span>
</div>

                    <div class="col-md-4 mt5 text-right">
                      <div class="btn-group nomargin" data-toggle="buttons-radio">
                        <button type="button" id="list" class="btn btn-sm active">
                          <span class="generic-dark-grey"><i class = "fa fa-th-list"></i> LIST</span>
                        </button>
                        <button type="button" id="grid" class="btn btn-sm ">
                          <span class="generic-dark-grey"><i class = "fa fa-th-large"></i> GRID</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                  <ul class="list-unstyled search-results search-results-mid next-prev bike-search-results ">
                    




    <li id="main_ad_255871" data-listing-id="255871" class="classified-listing featured-listing  " >

            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-255871">
                <div id="contact-user-info-255871" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='4025735' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes Other 2020 for sale in Karachi' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="800000" data-ad-id="255871" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Sigma MotorSports<br>
                      <span class="generic-green fs16">03229000800</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2020</li>
                          <li><i class="icon pw-mileage"></i>100 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 800,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-255871">
                      <img alt="Chinese Bikes Other 2020 for Sale in Karachi" class="lazy pic" data-original="{{asset('website')}}/assets/img/Slide_chinese-bikes-other-2019-32972727.jpg" src="{{asset('website')}}/assets/img/Slide_chinese-bikes-other-2019-32972727.jpg" title="Chinese Bikes Other 2020 for Sale in Karachi" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 12
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 50000</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-other-2020-for-sale-in-karachi-255871" class="car-name ad-detail-path" title='Chinese Bikes Other  2020 ' current-index='0' target='_blank'>
                  <h3 >Chinese Bikes Other  2020  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Karachi
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2020</li>
                  <li >100 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated about 4 hours ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="800000" data-ad-id="255871" 
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>SigmaMotorsports Pakistan</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03229000800</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_4025735"  >
          <div class="listing-action mr5">

            <span id="ad_4025735" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip' >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_313781" data-listing-id="313781" class="classified-listing featured-listing  " >

            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-313781">
                <div id="contact-user-info-313781" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5321056' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Sigma SCORPION 350 RR 2021 for sale in Karachi' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="680000" data-ad-id="313781" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Sigma MotorSports<br>
                      <span class="generic-green fs16">03229000800</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>5 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 680,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-313781">
                      <img alt="Sigma SCORPION 350 RR 2021 for Sale in Karachi" class="lazy pic" data-original="assets/img/Slide_sigma-scorpion-350-rr-2021-47881301.jpg" src="assets/img/Slide_sigma-scorpion-350-rr-2021-47881301.jpg" title="Sigma SCORPION 350 RR 2021 for Sale in Karachi" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 20
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 68000

                  </div>

                </div>

                <a href="/used-bikes/sigma-scorpion-350-rr-2021-for-sale-in-karachi-313781" class="car-name ad-detail-path" title='Sigma SCORPION 350 RR  2021 ' current-index='1' target='_blank'>
                  <h3 >Sigma SCORPION 350 RR  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Karachi
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >5 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated about 4 hours ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="680000" data-ad-id="313781" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>SigmaMotorsports Pakistan</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03229000800</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5321056"  >
          <div class="listing-action mr5">

            <span id="ad_5321056" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'>
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_258816" data-listing-id="258816" class="classified-listing featured-listing  " >

            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-258816">
                <div id="contact-user-info-258816" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='4093505' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes Other 2019 for sale in Quetta' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="330000" data-ad-id="258816" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Bullet 1 MotorSports By Shaukat Autos<br>
                      <span class="generic-green fs16">03024354122</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2019</li>
                          <li><i class="icon pw-mileage"></i>30 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 330,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-258816">
                      <img alt="Chinese Bikes Other 2019 for Sale in Quetta" class="lazy pic" data-original="assets/img/Slide_chinese-bikes-other-2019-45588563.jpg" src="assets/img/Slide_chinese-bikes-other-2019-45588563.jpg" title="Chinese Bikes Other 2019 for Sale in Quetta" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 3
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 3.3 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-other-2019-for-sale-in-quetta-258816" class="car-name ad-detail-path" title='Chinese Bikes Other  2019 ' current-index='2' target='_blank'>
                  <h3 >Chinese Bikes Other  2019  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Quetta
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2019</li>
                  <li >30 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated about 6 hours ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="330000" data-ad-id="258816" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>Shaukat autos</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03024354122</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_4093505"  >
          <div class="listing-action mr5" >

            <span id="ad_4093505" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'>
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_297098" data-listing-id="297098" class="classified-listing featured-listing  " >

            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-297098">
                <div id="contact-user-info-297098" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='4964345' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes Other 2019 for sale in Lahore'>Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="330000" data-ad-id="297098" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Bullet 1 MotorSports By Shaukat Autos<br>
                      <span class="generic-green fs16">03214820747</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2019</li>
                          <li><i class="icon pw-mileage"></i>45,000 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 330,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-" >


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-297098">
                      <img alt="Chinese Bikes Other 2019 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_chinese-bikes-other-2019-43541675.jpg" src="assets/img/Slide_chinese-bikes-other-2019-43541675.jpg" title="Chinese Bikes Other 2019 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 1
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 3.3 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-other-2019-for-sale-in-lahore-297098" class="car-name ad-detail-path" title='Chinese Bikes Other  2019 ' current-index='3' target='_blank'>
                  <h3 >Chinese Bikes Other  2019  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2019</li>
                  <li >45,000 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated about 6 hours ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="330000" data-ad-id="297098"  data-url="/used-bikes/297098/increment_phone_count?sid=baab766aea47f5c287a72e34ed66187e" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>Shaukat autos</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03214820747</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_4964345"  >
          <div class="listing-action mr5">

            <span id="ad_4964345" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'>
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_309523" data-listing-id="309523" class="classified-listing featured-listing  " >

            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-309523">
                <div id="contact-user-info-309523" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5231164' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="300000" data-ad-id="309523" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Bullet 1 MotorSports By Shaukat Autos<br>
                      <span class="generic-green fs16">03024354122</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>25 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 300,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-" >


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-309523">
                      <img alt="Chinese Bikes Other 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_benelli-other-11-2021-46786303.jpg" src="assets/img/Slide_benelli-other-11-2021-46786303.jpg" title="Chinese Bikes Other 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 17
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 3 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-other-2021-for-sale-in-lahore-309523" class="car-name ad-detail-path" title='Chinese Bikes Other  2021 ' current-index='4' target='_blank'>
                  <h3 >Chinese Bikes Other  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >25 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated about 6 hours ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="300000" data-ad-id="309523" data-url="/used-bikes/309523/increment_phone_count?sid=baab766aea47f5c287a72e34ed66187e" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>Shaukat autos</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03024354122</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5231164"  >
          <div class="listing-action mr5" >

            <span id="ad_5231164" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'>
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_315067" data-listing-id="315067" class="classified-listing featured-listing  " >

            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-315067">
                <div id="contact-user-info-315067" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5349039' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes 150cc 2021 for sale in Lahore'>Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="240000" data-ad-id="315067"><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Bullet 1 MotorSports By Shaukat Autos<br>
                      <span class="generic-green fs16">03024354122</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>25 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 240,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-" >


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-315067" data-src="assets/img/Slide_chinese-bikes-150cc-2-2021-48224915.jpg"  >
                      <img alt="Chinese Bikes 150cc 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_chinese-bikes-150cc-2-2021-48224915.jpg" src="assets/img/Slide_chinese-bikes-150cc-2-2021-48224915.jpg" title="Chinese Bikes 150cc 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 14
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 2.4 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-150cc-2021-for-sale-in-lahore-315067" class="car-name ad-detail-path" title='Chinese Bikes 150cc  2021 ' current-index='5' target='_blank'>
                  <h3 >Chinese Bikes 150cc  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >25 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated about 6 hours ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="240000" data-ad-id="315067"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>Shaukat autos</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03024354122</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5349039"  >
          <div class="listing-action mr5" >

            <span id="ad_5349039" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'>
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_307582" data-listing-id="307582" class="classified-listing featured-listing  " >

            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-307582">
                <div id="contact-user-info-307582" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5187428' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes Other 2021 for sale in Lahore' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="440000" data-ad-id="307582" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Bullet 1 MotorSports By Shaukat Autos<br>
                      <span class="generic-green fs16">03024354122</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>200 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 440,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-307582">
                      <img alt="Chinese Bikes Other 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_chinese-bikes-other-2021-46862057.jpg" src="assets/img/Slide_chinese-bikes-other-2021-46862057.jpg" title="Chinese Bikes Other 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 11
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 4.4 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-other-2021-for-sale-in-lahore-307582" class="car-name ad-detail-path" title='Chinese Bikes Other  2021 ' current-index='6' target='_blank'>
                  <h3 >Chinese Bikes Other  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >200 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated about 6 hours ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="440000" data-ad-id="307582" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>Shaukat autos</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03024354122</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5187428"  >
          <div class="listing-action mr5" >

            <span id="ad_5187428" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip' >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_317295" data-listing-id="317295" class="classified-listing featured-listing  " >

            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-317295">
                <div id="contact-user-info-317295" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5397948' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Honda CB 150F 2018 for sale in Lahore'>Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="185000" data-ad-id="317295" ></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Haseeb<br>
                      <span class="generic-green fs16">03165009202</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2018</li>
                          <li><i class="icon pw-mileage"></i>4,200 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 185,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" >
                      <img alt="Honda CB 150F 2018 for Sale in Lahore" src="assets/img/Slide_derbi-etx-150-2021-48811365.jpg" class="lazy pic"  title="Honda CB 150F 2018 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 9
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 1.85 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/honda-cb-150f-2018-for-sale-in-lahore-317295" class="car-name ad-detail-path" title='Honda CB 150F  2018 ' current-index='7' target='_blank'>
                  <h3 >Honda CB 150F  2018  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2018</li>
                  <li >4,200 km</li>
                  <li >4 Stroke</li>
                </ul>     
            </div>   
          </div>
          <div class="search-bottom clearfix">
                <div class="pull-left dated">Updated about 7 hours ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="185000" data-ad-id="317295" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>Haseeb</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03165009202</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5397948"  >
          <div class="listing-action mr5">

            <span id="ad_5397948" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'>
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_317272" data-listing-id="317272" class="classified-listing featured-listing">
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-317272">
                <div id="contact-user-info-317272" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5397609' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Yamaha YBR 125 2019 for sale in Islamabad' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="159500" data-ad-id="317272"><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Hamza A<br>
                      <span class="generic-green fs16">03008010908</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2019</li>
                          <li><i class="icon pw-mileage"></i>6,000 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 159,500  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-317272">
                      <img alt="Yamaha YBR 125 2019 for Sale in Islamabad" class="lazy pic" data-original="assets/img/Slide_yamaha-ybr-125-2019-48809891.jpg" src="assets/img/Slide_yamaha-ybr-125-2019-48809891.jpg" title="Yamaha YBR 125 2019 for Sale in Islamabad" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 11
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	
    
    
    
    </div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 1.6 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/yamaha-ybr-125-2019-for-sale-in-islamabad-317272" class="car-name ad-detail-path" title='Yamaha YBR 125  2019 ' current-index='8' target='_blank'>
                  <h3 >Yamaha YBR 125  2019  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Islamabad
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2019</li>
                  <li >6,000 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated about 10 hours ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="159500" data-ad-id="317272" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>Hamza A</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03008010908</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5397609"  >
          <div class="listing-action mr5">

            <span id="ad_5397609" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'>
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_317256" data-listing-id="317256" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-317256">
                <div id="contact-user-info-317256" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5397202' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Derbi ETX 150 2021 for sale in Karachi'>Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="295000" data-ad-id="317256" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Qazi Mussavir<br>
                      <span class="generic-green fs16">03212828620</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 295,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-317256">
                      <img alt="Derbi ETX 150 2021 for Sale in Karachi" class="lazy pic" data-original="assets/img/Slide_derbi-etx-150-2021-48811365.jpg" src="assets/img/Slide_derbi-etx-150-2021-48811365.jpg" title="Derbi ETX 150 2021 for Sale in Karachi" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 13
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 2.95 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/derbi-etx-150-2021-for-sale-in-karachi-317256" class="car-name ad-detail-path" title='Derbi ETX 150  2021 ' current-index='9' target='_blank'>
                  <h3 >Derbi ETX 150  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Karachi
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated about 20 hours ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="295000" data-ad-id="317256" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>Qazi Mussavir</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03212828620</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5397202"  >
          <div class="listing-action mr5">

            <span id="ad_5397202" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'>
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_254573" data-listing-id="254573" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-254573">
                <div id="contact-user-info-254573" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='3997924' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes OW R3 400cc 2021 for sale in Lahore'>Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          OW Motors<br>
                      <span class="generic-green fs16">03222033399</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 650,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-254573">
                      <img alt="Chinese Bikes OW R3 400cc 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_zongshen-300-2019-32674829.jpg" src="assets/img/Slide_zongshen-300-2019-32674829.jpg" title="Chinese Bikes OW R3 400cc 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 20
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 6.5 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-ow-r3-400cc-2021-for-sale-in-lahore-254573" class="car-name ad-detail-path" title='Chinese Bikes OW R3 400cc  2021 ' current-index='10' target='_blank'>
                  <h3 >Chinese Bikes OW R3 400cc  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="650000" data-ad-id="254573" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>OW MOTORSPORTS</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03222033399</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_3997924"  >
          <div class="listing-action mr5">

            <span id="ad_3997924" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'>
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_255403" data-listing-id="255403" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-255403">
                <div id="contact-user-info-255403" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='4014048' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='OW Ninja 300cc 2020 for sale in Lahore' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="550000" data-ad-id="255403" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          OW Motors<br>
                      <span class="generic-green fs16">03222033399</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2020</li>
                          <li><i class="icon pw-mileage"></i>10 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 550,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-" >


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-255403">
                      <img alt="OW Ninja 300cc 2020 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_kawasaki-ninja-zx300-2019-32848196.jpg" src="assets/img/Slide_kawasaki-ninja-zx300-2019-32848196.jpg" title="OW Ninja 300cc 2020 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 5
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 5.5 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/ow-ninja-300cc-2020-for-sale-in-lahore-255403" class="car-name ad-detail-path" title='OW Ninja 300cc  2020 ' current-index='11' target='_blank'>
                  <h3 >OW Ninja 300cc  2020  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2020</li>
                  <li >10 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="550000" data-ad-id="255403"  data-url="/used-bikes/255403/increment_phone_count?sid=baab766aea47f5c287a72e34ed66187e" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>OW MOTORSPORTS</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03222033399</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_4014048"  >
          <div class="listing-action mr5">

            <span id="ad_4014048" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip' >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>

<div id="contact_seller_div" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"  data-dismiss="modal">&times;</button>
        <h3>Send Message to Seller</h3>
      </div>
      <form accept-charset="UTF-8" action="" class="form-horizontal nomargin get-user-details" data-parsley-validate="" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="7Hsojy4MNZ2A6qAHtT41LyIsKJ/0fiJGbreoapjo7xw=" /></div>
      <input id="sid" name="sid" type="hidden" value="baab766aea47f5c287a72e34ed66187e" />
      <input id="id" name="id" type="hidden" />
      
      <div class="modal-body seller-form">
        <div class="form-group">
          <label class="col-md-4">Title: </label>
          <div id="contact-title" class="col-md-8 mt10">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4">Your Name<span class="text-error">*</span></label>
          <div class="col-md-8">
              <label class="show" for="contact_seller_login">Ahmad Ijaz</label>
              <input id="contact_seller_login" name="contact_seller[login]" type="hidden" value="Ahmad Ijaz" />
          </div>
        </div>

            <input id="contact_seller_email" name="contact_seller[email]" type="hidden" value="ahmadijaz385@gmail.com" />

      <div class="form-group">
          <label class="col-md-4">Your Message<span class="text-error">*</span></label>
          <div class="col-md-8">
            <textarea autofocus class="primary-lang sellerTextArea" data-parsley-required="true" data-parsley-pattern-message = "Please enter valid information." data-parsley-pattern ="^(?:(?!(&lt;.*&gt;))(.|[
]))*$" data-parsley-trigger = "change" name="contact_seller[message]" id="contact_seller_message" cols="28" rows="5" maxlength="250">
            </textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
              <label class="show"><input type="checkbox" name="contact_seller[alert]" id="daily_alerts" checked /><span class="translation_missing" title="translation missing: en.partial_templates.listing.contact_seller_search.create_daily_alert">Create Daily Alert</span> <strong id="contact-alert-title"></strong></label>
            </div>
          </div>

          <input id="contact_seller_filters" name="contact_seller[filters]" type="hidden" value="/used-bikes/search/-/featured_1/" />

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>      </div>
    </div>
  </div>

<script type="application/javascript">
  function showMessagePopup(item) {
      $('.light-gallery').unbind('mouseup');
      $('.light-gallery').unbind('mousedown');

      var title = $(item).data('ad-title');
      var ad_id = $(item).data('ad-id');
      ad_type = $(item).data('ad-type');
      featured = 'Free';

      if($(item).data('ad-featured')) { featured = 'Featured' }

      trackEvents(ad_type, 'ContactEmail', 'Search-Image-'+featured);

      if (true){
          $('input#id').val(ad_id);
          $('#contact-title').html(title);
          $('#contact-alert-title').html(title);
          $('.sellerTextArea').val('Hi,\n I am interested in your "' + title + '" advertised on 2Wheels.com. Please let me know if it\'s still available.\n Thanks');

          $('#contact_seller_div').modal('show');
      }else{
          $('#sign_in_pop_up').modal('show');
      }


  }
</script>


                    <li id="ad-in-search" class="tlc google-ad-unit">
                      <div id="div-gpt-2Wheels_UsedBikes_FullBanner_468x60">
     
    </div>
                    </li>
                  </ul>
                  
                  <ul class="list-unstyled search-results search-results-mid next-prev bike-search-results ">
                    




    <li id="main_ad_255052" data-listing-id="255052" class="classified-listing featured-listing  " >

            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-255052">
                <div id="contact-user-info-255052" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='4006812' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes Other 2021 for sale in Lahore'>Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="465000" data-ad-id="255052" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          OW Motors<br>
                      <span class="generic-green fs16">03222033399</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 465,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-255052">
                      <img alt="Chinese Bikes Other 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_chinese-bikes-other-2021-47577224.jpg" src="assets/img/Slide_chinese-bikes-other-2021-47577224.jpg" title="Chinese Bikes Other 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 8
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 4.65 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-other-2021-for-sale-in-lahore-255052" class="car-name ad-detail-path" title='Chinese Bikes Other  2021 ' current-index='0' target='_blank'>
                  <h3 >Chinese Bikes Other  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="465000" data-ad-id="255052" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>OW MOTORSPORTS</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03222033399</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_4006812"  >
          <div class="listing-action mr5">

            <span id="ad_4006812" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip' >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_317198" data-listing-id="317198" class="classified-listing featured-listing  " >

            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-317198">
                <div id="contact-user-info-317198" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5396126' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes OW R3 400cc 2021 for sale in Lahore'>Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="6700000" data-ad-id="317198" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          OW Motors<br>
                      <span class="generic-green fs16">03222033399</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 6,700,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign">
                      <img alt="Chinese Bikes OW R3 400cc 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_chinese-bikes-ow-r3-400cc-2021-48793770.jpg" src="assets/img/Slide_chinese-bikes-ow-r3-400cc-2021-48793770.jpg" title="Chinese Bikes OW R3 400cc 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 14
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 67 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-ow-r3-400cc-2021-for-sale-in-lahore-317198" class="car-name ad-detail-path" title='Chinese Bikes OW R3 400cc  2021 ' current-index='1' target='_blank'>
                  <h3 >Chinese Bikes OW R3 400cc  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="6700000" data-ad-id="317198"  rel="popover"
                          data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5396126"  >
          <div class="listing-action mr5">

            <span id="ad_5396126" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip' >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_314417" data-listing-id="314417" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-314417">
                <div id="contact-user-info-314417" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5335208' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Honda CB400 1996 for sale in Karachi' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="500000" data-ad-id="314417" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          shahjeez<br>
                      <span class="generic-green fs16">03132872272</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>1996</li>
                          <li><i class="icon pw-mileage"></i>22,000 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 500,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-" >


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-314417">
                      <img alt="Honda CB400 1996 for Sale in Karachi" class="lazy pic" data-original="assets/img/Slide_honda-cb400-1996-48054003.jpg" src="assets/img/Slide_honda-cb400-1996-48054003.jpg" title="Honda CB400 1996 for Sale in Karachi" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 4
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 5 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/honda-cb400-1996-for-sale-in-karachi-314417" class="car-name ad-detail-path" title='Honda CB400  1996 ' current-index='2' target='_blank'>
                  <h3 >Honda CB400  1996  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Karachi
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >1996</li>
                  <li >22,000 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="500000" data-ad-id="314417" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>shahjeez</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03132872272</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5335208"  >
          <div class="listing-action mr5">

            <span id="ad_5335208" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip' >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_307583" data-listing-id="307583" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-307583">
                <div id="contact-user-info-307583" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5187434' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes Other 2021 for sale in Lahore' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="420000" data-ad-id="307583" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Bullet 1 MotorSports By Shaukat Autos<br>
                      <span class="generic-green fs16">03024354122</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>25 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 420,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-" >


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-307583">
                      <img alt="Chinese Bikes Other 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_chinese-bikes-ow-ninja-250cc-2021-46257758.jpg" src="assets/img/Slide_chinese-bikes-ow-ninja-250cc-2021-46257758.jpg" title="Chinese Bikes Other 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 2
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 4.2 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-other-2021-for-sale-in-lahore-307583" class="car-name ad-detail-path" title='Chinese Bikes Other  2021 ' current-index='3' target='_blank'>
                  <h3 >Chinese Bikes Other  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >25 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="420000" data-ad-id="307583" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>Shaukat autos</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03024354122</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5187434"  >
          <div class="listing-action mr5" >

            <span id="ad_5187434" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip' >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_237561" data-listing-id="237561" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-237561">
                <div id="contact-user-info-237561" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='3592019' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes Other 2021 for sale in Lahore' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="420000" data-ad-id="237561" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Bullet 1 MotorSports By Shaukat Autos<br>
                      <span class="generic-green fs16">03024354122</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 420,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-237561">
                      <img alt="Chinese Bikes Other 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_ow-ninja-250cc-2021-46661616.jpg" src="assets/img/Slide_ow-ninja-250cc-2021-46661616.jpg" title="Chinese Bikes Other 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 13
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 4.2 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-other-2021-for-sale-in-lahore-237561" class="car-name ad-detail-path" title='Chinese Bikes Other  2021 ' current-index='4' target='_blank'>
                  <h3 >Chinese Bikes Other  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="420000" data-ad-id="237561" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>Shaukat autos</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03024354122</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_3592019"  >
          <div class="listing-action mr5">

            <span id="ad_3592019" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip' >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_294956" data-listing-id="294956" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-294956">
                <div id="contact-user-info-294956" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='4925581' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes Other 2020 for sale in Faisalabad' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="650000" data-ad-id="294956" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          Bullet 1 MotorSports By Shaukat Autos<br>
                      <span class="generic-green fs16">03214820747</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2020</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 650,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-" >


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-294956">
                      <img alt="Chinese Bikes Other 2020 for Sale in Faisalabad" class="lazy pic" data-original="assets/img/Slide_yamaha-other-17-2020-43070678.jpg" src="assets/img/Slide_yamaha-other-17-2020-43070678.jpg" title="Chinese Bikes Other 2020 for Sale in Faisalabad" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 4
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 6.5 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-other-2020-for-sale-in-faisalabad-294956" class="car-name ad-detail-path" title='Chinese Bikes Other  2020 ' current-index='5' target='_blank'>
                  <h3 >Chinese Bikes Other  2020  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Faisalabad
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2020</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="650000" data-ad-id="294956" rel="popover"
                          data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_4925581"  >
          <div class="listing-action mr5">

            <span id="ad_4925581" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip' >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_255170" data-listing-id="255170" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-255170">
                <div id="contact-user-info-255170" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='4009074' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Kawasaki Ninja 250R 2021 for sale in Lahore' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="430000" data-ad-id="255170" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          OW Motors<br>
                      <span class="generic-green fs16">03222033399</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 430,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-255170">
                      <img alt="Kawasaki Ninja 250R 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_kawasaki-ninja-250r-2019-32796466.jpg" src="assets/img/Slide_kawasaki-ninja-250r-2019-32796466.jpg" title="Kawasaki Ninja 250R 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 3
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 4.3 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/kawasaki-ninja-250r-2021-for-sale-in-lahore-255170" class="car-name ad-detail-path" title='Kawasaki Ninja 250R  2021 ' current-index='6' target='_blank'>
                  <h3 >Kawasaki Ninja 250R  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="430000" data-ad-id="255170" data-url="/used-bikes/255170/increment_phone_count?sid=baab766aea47f5c287a72e34ed66187e" rel="popover"
                          data-content="
                    <div class='text-center owner-info-popover'>
                      <div class='primary-lang'>OW MOTORSPORTS</div>
                      <h4 style='display:inline-block' class='nomargin mt5 generic-green primary-lang'><i class='fa fa-phone'></i> 03222033399</h4>
                      <p style='margin:10px -15px 0' class='fs12'>Mention 2Wheels.com when calling Seller to get a good deal</p>
                    </div>
                  " data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_4009074"  >
          <div class="listing-action mr5" >

            <span id="ad_4009074" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'  >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_264479" data-listing-id="264479" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-264479">
                <div id="contact-user-info-264479" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='4238974' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes OW Ninja 250cc 2021 for sale in Lahore' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="430000" data-ad-id="264479" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          OW Motors<br>
                      <span class="generic-green fs16">03222033399</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 430,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-264479">
                      <img alt="Chinese Bikes OW Ninja 250cc 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_chinese-bikes-ow-ninja-250cc-2021-47490405.jpg" src="assets/img/Slide_chinese-bikes-ow-ninja-250cc-2021-47490405.jpg" title="Chinese Bikes OW Ninja 250cc 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 8
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 4.3 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-ow-ninja-250cc-2021-for-sale-in-lahore-264479" class="car-name ad-detail-path" title='Chinese Bikes OW Ninja 250cc  2021 ' current-index='7' target='_blank'>
                  <h3 >Chinese Bikes OW Ninja 250cc  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="430000" data-ad-id="264479"  rel="popover"
                           data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_4238974"  >
          <div class="listing-action mr5">

            <span id="ad_4238974" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'  >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_227548" data-listing-id="227548" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-227548">
                <div id="contact-user-info-227548" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='3348034' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='Chinese Bikes Other 2020 for sale in Lahore' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="460000" data-ad-id="227548" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          OW Motors<br>
                      <span class="generic-green fs16">03234258755</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2020</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 460,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-227548">
                      <img alt="Chinese Bikes Other 2020 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_bmw-s1000rr-2018-25923505.jpg" src="assets/img/Slide_bmw-s1000rr-2018-25923505.jpg" title="Chinese Bikes Other 2020 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 8
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 4.6 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/chinese-bikes-other-2020-for-sale-in-lahore-227548" class="car-name ad-detail-path" title='Chinese Bikes Other  2020 ' current-index='8' target='_blank'>
                  <h3 >Chinese Bikes Other  2020  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2020</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="460000" data-ad-id="227548"  rel="popover"
                         data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_3348034"  >
          <div class="listing-action mr5" >

            <span id="ad_3348034" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'  >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_260141" data-listing-id="260141" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-260141">
                <div id="contact-user-info-260141" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='4126178' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='OW Ducatin 250cc 2021 for sale in Lahore' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="470000" data-ad-id="260141" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          OW Motors<br>
                      <span class="generic-green fs16">03222033399</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>10 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 470,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-260141">
                      <img alt="OW Ducatin 250cc 2021 for Sale in Lahore" class="lazy pic" data-original="assets/img/Slide_ow-ducatin-250cc-2021-47530983.jpg" src="assets/img/Slide_ow-ducatin-250cc-2021-47530983.jpg" title="OW Ducatin 250cc 2021 for Sale in Lahore" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 10
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 4.7 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/ow-ducatin-250cc-2021-for-sale-in-lahore-260141" class="car-name ad-detail-path" title='OW Ducatin 250cc  2021 ' current-index='9' target='_blank'>
                  <h3 >OW Ducatin 250cc  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Lahore
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >10 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="470000" data-ad-id="260141" rel="popover"
                         data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_4126178"  >
          <div class="listing-action mr5" >

            <span id="ad_4126178" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'  >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_312579" data-listing-id="312579" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-312579">
                <div id="contact-user-info-312579" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5295720' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='OW Ducatin 250cc 2021 for sale in Islamabad' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="465000" data-ad-id="312579" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          OW Motors<br>
                      <span class="generic-green fs16">03222033399</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 465,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-312579">
                      <img alt="OW Ducatin 250cc 2021 for Sale in Islamabad" class="lazy pic" data-original="assets/img/Slide_ow-ducatin-250cc-2021-47573350.jpg" src="assets/img/Slide_ow-ducatin-250cc-2021-47573350.jpg" title="OW Ducatin 250cc 2021 for Sale in Islamabad" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 11
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 4.65 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/ow-ducatin-250cc-2021-for-sale-in-islamabad-312579" class="car-name ad-detail-path" title='OW Ducatin 250cc  2021 ' current-index='10' target='_blank'>
                  <h3 >OW Ducatin 250cc  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Islamabad
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="465000" data-ad-id="312579"rel="popover"
                          data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5295720"  >
          <div class="listing-action mr5" >

            <span id="ad_5295720" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip'  >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>



    <li id="main_ad_312582" data-listing-id="312582" class="classified-listing featured-listing  " >
            <div class="well search-list clearfix ad-container page-" >
                <div class="col-md-3 grid-style">
                <div class="img-box">
              <div id="gallery-312582">
                <div id="contact-user-info-312582" class='custom-html' style="display: none">
                  <div class="light-gallery-user-info clearfix">
                      <button class="btn btn-secondary pull-right ml10" data-ad-id='5295740' data-ad-type='UsedBike' data-ad-featured='true' data-ad-title='OW Ducatin 250cc 2021 for sale in Rawalpindi' >Send Message</button>
                      <button class="btn btn-success phone_number_btn ad-show-btn pull-right" data-price="465000" data-ad-id="312582" ><i class="fa fa-phone mr5" style="font-size: 14px; vertical-align: -2px"></i>Show Phone No.</button>

                    <div class="ad-numbers pull-right fs12" style="display: none"><strong>
                          OW Motors<br>
                      <span class="generic-green fs16">03222033399</span>
                    </strong></div>
                        <ul class="list-unstyled ad-specs list-inline pull-left nomargin">
                          <li><i class="icon pw-date"></i>2021</li>
                          <li><i class="icon pw-mileage"></i>1 km</li>
                            <li><i class="icon pw-engine"></i>4 Stroke</li>
                        </ul>
                    <strong class="generic-white fs18">PKR 465,000  </strong>
                  </div>
                </div>

                <ul class="gallery list-unstyled image-gallery page-">


                    <li  class="total-pictures-bar-outer img-content img-valign" data-sub-html="#contact-user-info-312582">
                      <img alt="OW Ducatin 250cc 2021 for Sale in Rawalpindi" class="lazy pic" data-original="assets/img/Slide_ow-ducatin-250cc-2021-47573445.jpg" src="assets/img/Slide_ow-ducatin-250cc-2021-47573445.jpg" title="OW Ducatin 250cc 2021 for Sale in Rawalpindi" />
                      <div class="total-pictures-bar fs12">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> 10
                      </div>
                    </li>

                </ul>
              </div>
                </div>
              	<div class="featured-ribbon">
		<div class="inner">
    		FEATURED
    	</div>
  	</div>

        </div>
        <div class="col-md-9 grid-style">
          <div>
            <div class="search-title-row">  
              
              <div class="search-title">
                <div class="right">

                  <div class="price-details generic-dark-grey" >

                        PKR 4.65 <span>lacs</span>

                  </div>

                </div>

                <a href="/used-bikes/ow-ducatin-250cc-2021-for-sale-in-rawalpindi-312582" class="car-name ad-detail-path" title='OW Ducatin 250cc  2021 ' current-index='11' target='_blank'>
                  <h3 >OW Ducatin 250cc  2021  for Sale</h3>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="row ">

            <div class="col-md-12 grid-date">

                <ul class="list-unstyled search-vehicle-info fs13">
                  <li>
                    Rawalpindi
                  </li>
                </ul>

                <ul class="list-unstyled search-vehicle-info-2 fs13">
                  <li >2021</li>
                  <li >1 km</li>
                  <li >4 Stroke</li>



                </ul>
                
            </div>
            
              
          </div>
          <div class="search-bottom clearfix">


                <div class="pull-left dated">Updated 1 day ago</div>

            <div class="pull-right">
                  <button class="btn btn-success phone_number_btn pull-right" data-price="465000" data-ad-id="312582" rel="popover"
                           data-placement="bottom" data-trigger="focus" data-html="true"><i class='fa fa-phone'></i>Show Phone No.</button>

              
<div class="pull-right" id="div_action_5295740"  >
          <div class="listing-action mr5">

            <span id="ad_5295740" class="save-ad ">
              <div class= "not-saved-list logged-in-user" data-toggle = 'tooltip' style = "" >
                <i class='fa fa-heart-o' title='Save this ad to review later'></i> 
              </div>

              <div class= 'saved-list' data-toggle = 'tooltip' style = "display: none;">
                <i class='fa fa-heart' title='Saved'></i> 
              </div>
            </span>

          </div>
</div>
            </div>
          </div>
        </div>
      </div>
  </li>
      <li class="alert-box-container alert-container">  
  <div class="well well-blue nomargin contact-us p30 ">
    <h3 class="nomargin mb5"><i class="fa fa-bell"></i>Notify Me</h3>
    <p class="mb20 generic-dark-grey ">Receive email notifications for the latest ads matching your search criteria</p>
    <form accept-charset="UTF-8" action="/alerts" class="form-horizontal nomargin" data-parsley-validate="" id="form_alert_bottom" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="7Hsojy4MNZ2A6qAHtT41LyIsKJ/0fiJGbreoapjo7xw=" /></div>
      <div class="row">
        <div class="col-md-5">
          <input data-parsley-error-message="Enter valid email address" data-parsley-required="true" data-parsley-type="email" disabled="disabled" id="user_email_alert_box" maxlength="100" name="user_email" onchange="$(&#39;#email&#39;).val($(this).val());" placeholder="Type your email address" required="required" type="email" value="ahmadijaz385@gmail.com" />
        </div>
        <div class="col-md-4">
          <select id="alert_duration" name="alert[duration]"><option value="1">Daily</option>
<option value="7">Weekly</option></select>
          <input id="alert_filters" name="alert[filters]" type="hidden" value="/used-bikes/search/-/featured_1/" />
        </div>
        <div class="col-md-3">
          <input class="btn btn-info btn-lg btn-block" name="commit" type="submit" value="Submit" />
        </div>
      </div>
</form>  </div>
</li>

<div id="contact_seller_div" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"  data-dismiss="modal">&times;</button>
        <h3>Send Message to Seller</h3>
      </div>
      <form accept-charset="UTF-8" action="/conversations" class="form-horizontal nomargin get-user-details" data-parsley-validate="" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="7Hsojy4MNZ2A6qAHtT41LyIsKJ/0fiJGbreoapjo7xw=" /></div>
      <input id="sid" name="sid" type="hidden" value="baab766aea47f5c287a72e34ed66187e" />
      <input id="id" name="id" type="hidden" />
      
      <div class="modal-body seller-form">
        <div class="form-group">
          <label class="col-md-4">Title: </label>
          <div id="contact-title" class="col-md-8 mt10">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4">Your Name<span class="text-error">*</span></label>
          <div class="col-md-8">
              <label class="show" for="contact_seller_login">Ahmad Ijaz</label>
              <input id="contact_seller_login" name="contact_seller[login]" type="hidden" value="Ahmad Ijaz" />
          </div>
        </div>

            <input id="contact_seller_email" name="contact_seller[email]" type="hidden" value="ahmadijaz385@gmail.com" />

      <div class="form-group">
          <label class="col-md-4">Your Message<span class="text-error">*</span></label>
          <div class="col-md-8">
            <textarea autofocus class="primary-lang sellerTextArea" data-parsley-required="true" data-parsley-pattern-message = "Please enter valid information." data-parsley-pattern ="^(?:(?!(&lt;.*&gt;))(.|[
]))*$" data-parsley-trigger = "change" name="contact_seller[message]" id="contact_seller_message" cols="28" rows="5" maxlength="250">
            </textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
              <label class="show"><input type="checkbox" name="contact_seller[alert]" id="daily_alerts" checked /><span class="translation_missing" title="translation missing: en.partial_templates.listing.contact_seller_search.create_daily_alert">Create Daily Alert</span> <strong id="contact-alert-title"></strong></label>
            </div>
          </div>

          <input id="contact_seller_filters" name="contact_seller[filters]" type="hidden" value="/used-bikes/search/-/featured_1/" />

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>      </div>
    </div>
  </div>

<script type="application/javascript">
  function showMessagePopup(item) {
      $('.light-gallery').unbind('mouseup');
      $('.light-gallery').unbind('mousedown');

      var title = $(item).data('ad-title');
      var ad_id = $(item).data('ad-id');
      ad_type = $(item).data('ad-type');
      featured = 'Free';

      if($(item).data('ad-featured')) { featured = 'Featured' }

      trackEvents(ad_type, 'ContactEmail', 'Search-Image-'+featured);

      if (true){
          $('input#id').val(ad_id);
          $('#contact-title').html(title);
          $('#contact-alert-title').html(title);
          $('.sellerTextArea').val('Hi,\n I am interested in your "' + title + '" advertised on 2Wheels.com. Please let me know if it\'s still available.\n Thanks');

          $('#contact_seller_div').modal('show');
      }else{
          $('#sign_in_pop_up').modal('show');
      }


  }
</script>


                  </ul>

                  </ul>



                <div data-pjax-enable>
                  <ul class="pagination search-pagi">
  
  
      <li class="page active">
  <a href="/used-bikes/search/-/featured_1/">1</a>
</li>

      <li class="page">
  <a href="/used-bikes/search/-/featured_1/?page=2" rel="next">2</a>
</li>

      <li class="page">
  <a href="/used-bikes/search/-/featured_1/?page=3">3</a>
</li>

      <li class="page">
  <a href="/used-bikes/search/-/featured_1/?page=4">4</a>
</li>

      <li class="page">
  <a href="/used-bikes/search/-/featured_1/?page=5">5</a>
</li>

      <li class="page gap disabled"><a href="#" >&hellip;</a></li>
  <li class="next_page">
  <a href="/used-bikes/search/-/featured_1/?page=2" rel="next">Next &rsaquo;</a>
</li>

  <li class="last next">
  <a href="/used-bikes/search/-/featured_1/?page=13">Last &raquo;</a>
</li>

</ul>

                  <input id="selected_search_key" name="selected_search_key" type="hidden" value="featured_1" />
                  <input id="selected_query" name="selected_query" type="hidden" />
                  <input id="cookie_prefix" name="cookie_prefix" type="hidden" value="used_bikes" />
                  <input id="page" name="page" type="hidden" />
                  <input id="search_url" name="search_url" type="hidden" value="" />
                </div>
                </div>
                </div>
                </div>
                </div>
              











                @endsection
                 