@extends('layouts.main')

@section('title', "Bike Finance")

@section('contents')

<div class="header-space"></div>

<section>
    <div class="container">
        <h1>Write Review</h1>
        <div class="well" style="padding-top: 40px;">
            @if (\Session::has('success'))
            <div class="alert alert-success">
              <ul>
                <li>{!! \Session::get('success') !!}</li>
              </ul>
            </div>
          @endif

            <form action="{{route('review.store')}}" class="form-horizontal" id="frm_write_a_review" method="post" name="frm_write_a_review">
                @csrf
                <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
                        value="&#x2713;" /><input name="authenticity_token" type="hidden" value="" /></div>


                <div class="form-group">
                    <label class="col-md-4">Model Year<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                        <select data-parsley-trigger="change" id="bike_review_model_year"
                            name="model_year">
                            <option value="">- Select Year -</option>
                            <option value='2021'>2021</option>
                            <option value='2020'>2020</option>
                            <option value='2019'>2019</option>
                            <option value='2018'>2018</option>
                            <option value='2017'>2017</option>
                            <option value='2016'>2016</option>
                            <option value='2015'>2015</option>
                            <option value='2014'>2014</option>
                            <option value='2013'>2013</option>
                            <option value='2012'>2012</option>
                            <option value='2011'>2011</option>
                            <option value='2010'>2010</option>
                            <option value='2009'>2009</option>
                            <option value='2008'>2008</option>
                            <option value='2007'>2007</option>
                            <option value='2006'>2006</option>
                            <option value='2005'>2005</option>
                            <option value='2004'>2004</option>
                            <option value='2003'>2003</option>
                            <option value='2002'>2002</option>
                            <option value='2001'>2001</option>
                            <option value='2000'>2000</option>
                            <option value='1999'>1999</option>
                            <option value='1998'>1998</option>
                            <option value='1997'>1997</option>
                            <option value='1996'>1996</option>
                            <option value='1995'>1995</option>
                            <option value='1994'>1994</option>
                            <option value='1993'>1993</option>
                            <option value='1992'>1992</option>
                            <option value='1991'>1991</option>
                            <option value='1990'>1990</option>
                            <option value='1989'>1989</option>
                            <option value='1988'>1988</option>
                            <option value='1987'>1987</option>
                            <option value='1986'>1986</option>
                            <option value='1985'>1985</option>
                            <option value='1984'>1984</option>
                            <option value='1983'>1983</option>
                            <option value='1982'>1982</option>
                            <option value='1981'>1981</option>
                            <option value='1980'>1980</option>
                            <option value='1979'>1979</option>
                            <option value='1978'>1978</option>
                            <option value='1977'>1977</option>
                            <option value='1976'>1976</option>
                            <option value='1975'>1975</option>
                            <option value='1974'>1974</option>
                            <option value='1973'>1973</option>
                            <option value='1972'>1972</option>
                            <option value='1971'>1971</option>
                            <option value='1970'>1970</option>
                            <option value='1969'>1969</option>
                            <option value='1968'>1968</option>
                            <option value='1967'>1967</option>
                            <option value='1966'>1966</option>
                            <option value='1965'>1965</option>
                            <option value='1964'>1964</option>
                            <option value='1963'>1963</option>
                            <option value='1962'>1962</option>
                            <option value='1961'>1961</option>
                            <option value='1960'>1960</option>
                            <option value='1959'>1959</option>
                            <option value='1958'>1958</option>
                            <option value='1957'>1957</option>
                            <option value='1956'>1956</option>
                            <option value='1955'>1955</option>
                            <option value='1954'>1954</option>
                            <option value='1953'>1953</option>
                            <option value='1952'>1952</option>
                            <option value='1951'>1951</option>
                            <option value='1950'>1950</option>
                            <option value='1949'>1949</option>
                            <option value='1948'>1948</option>
                            <option value='1947'>1947</option>
                            <option value='1946'>1946</option>
                            <option value='1945'>1945</option>
                            <option value='1944'>1944</option>
                            <option value='1943'>1943</option>
                            <option value='1942'>1942</option>
                            <option value='1941'>1941</option>
                            <option value='1940'>1940</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Make<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                        <select class="chzn-select" data-parsley-trigger="change" id="bike_review_bike_manufacturer_id"
                            name="company_id">
                            @foreach ($companies as $company)
                                <option value='{{$company->id}}'>{{$company->name}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Model<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                        <select class="chzn-select" id="bike_review_bike_model_id" name="model_id">
                            @foreach ($models as $model)
                                <option value='{{$model->id}}'>{{$model->name}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                </div>
                <style>
                .star {
                    width: 20px;
                    padding-left: 50px;
                }
                </style>
                <div class="form-group">
                    <label class="col-md-4">Rating<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Style<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                        <div class="rate-block">
                            <div style="display: flex;justify-content:flex-start; align-items:center">
                                <label for="one-style" class="px-2">1</label>
                                <input class="star" id="one-style" type="radio" value="1" name="style" />
                                <label for="two-style" class="px-2">2</label>
                                <input class="star" id="two-style" name="style" type="radio"
                                    value="2" />
                                <label for="three-style" class="px-2">3</label>
                                <input class="star" id="three-style" name="style" type="radio"
                                    value="3" />
                                <label for="four-style" class="px-2">4</label>
                                <input class="star" id="four-style" name="style" type="radio"
                                    value="4" />
                                    <label for="four-style" class="px-2">5</label>
                                <input class="star" id="four-style" name="style" type="radio"
                                    value="5" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Comfort<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                        <div class="rate-block">
                            <div style="display: flex;justify-content:flex-start; align-items:center">
                                <label for="one-style" class="px-2">1</label>
                                <input class="star" id="one-style" type="radio" value="1" name="comfort" />
                                <label for="two-style" class="px-2">2</label>
                                <input class="star" id="two-style" name="comfort" type="radio"
                                    value="2" />
                                <label for="three-style" class="px-2">3</label>
                                <input class="star" id="three-style" name="comfort" type="radio"
                                    value="3" />
                                <label for="four-style" class="px-2">4</label>
                                <input class="star" id="four-style" name="comfort" type="radio"
                                    value="4" />
                                    <label for="four-style" class="px-2">5</label>
                                <input class="star" id="four-style" name="comfort" type="radio"
                                    value="5" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Performance<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                        <div class="rate-block">
                            <div style="display: flex;justify-content:flex-start; align-items:center">
                                <label for="one-style" class="px-2">1</label>
                                <input class="star" id="one-style" type="radio" value="1" name="performance" />
                                <label for="two-style" class="px-2">2</label>
                                <input class="star" id="two-style" name="performance" type="radio"
                                    value="2" />
                                <label for="three-style" class="px-2">3</label>
                                <input class="star" id="three-style" name="performance" type="radio"
                                    value="3" />
                                <label for="four-style" class="px-2">4</label>
                                <input class="star" id="four-style" name="performance" type="radio"
                                    value="4" />
                                    <label for="four-style" class="px-2">5</label>
                                <input class="star" id="four-style" name="performance" type="radio"
                                    value="5" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Value for Money<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                        <div class="rate-block">
                            <div style="display: flex;justify-content:flex-start; align-items:center">
                                <label for="one-style" class="px-2">1</label>
                                <input class="star" id="one-style" type="radio" value="1" name="value_for_money" />
                                <label for="two-style" class="px-2">2</label>
                                <input class="star" id="two-style" name="value_for_money" type="radio"
                                    value="2" />
                                <label for="three-style" class="px-2">3</label>
                                <input class="star" id="three-style" name="value_for_money" type="radio"
                                    value="3" />
                                <label for="four-style" class="px-2">4</label>
                                <input class="star" id="four-style" name="value_for_money" type="radio"
                                    value="4" />
                                    <label for="four-style" class="px-2">5</label>
                                <input class="star" id="four-style" name="value_for_money" type="radio"
                                    value="5" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Fuel Economy<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                        <div class="rate-block">
                            <div style="display: flex;justify-content:flex-start; align-items:center">
                                <label for="one-style" class="px-2">1</label>
                                <input class="star" id="one-style" type="radio" value="1" name="fuel_economy" />
                                <label for="two-style" class="px-2">2</label>
                                <input class="star" id="two-style" name="fuel_economy" type="radio"
                                    value="2" />
                                <label for="three-style" class="px-2">3</label>
                                <input class="star" id="three-style" name="fuel_economy" type="radio"
                                    value="3" />
                                <label for="four-style" class="px-2">4</label>
                                <input class="star" id="four-style" name="fuel_economy" type="radio"
                                    value="4" />
                                    <label for="four-style" class="px-2">5</label>
                                <input class="star" id="four-style" name="fuel_economy" type="radio"
                                    value="5" />
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4">Review Title<span class="text-error">*</span></label>
                    <div class="col-md-8">
                        <input data-parsley-pattern-message="Please enter valid title." data-parsley-pattern="^[\w ]+$"
                            data-parsley-trigger="change" id="bike_review_title" maxlength="100"
                            name="title" size="100" type="text" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Your Review<span class="text-error">*</span></label>
                    <div class="col-md-8">
                        <textarea cols="40" data-parsley-length="[250,995]"
                            data-parsley-pattern-message="Please enter valid information." id="bike_review_body"
                            maxlength="995" name="comment"
                            placeholder="Look and Feel:Fuel Economy:Ride Quality &amp; Handling:Final Words:" rows="20"
                            style="color: grey; font-style: italic;"></textarea>
                        <p id="remaining_chars_info"><span>Enter at least (<strong>250</strong>) more characters.</span>
                        </p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-4 col-md-8">
                        <select id="bike_review_familiarity" name="how_you_know">
                            <option value="">You know this bike because...</option>
                            <option value="I owned this bike.">I owned this bike.</option>
                            <option value="I did not own this bike, but have driven this bike.">I did not own this bike, but have driven this bike.</option>
                            <option value="I have neither owned nor driven this bike.">I have neither owned nor driven this bike.</option>
                        </select>
                    </div>
                </div>

                <div class="form-group sell-btn-main">
                    <div class="col-md-offset-4 col-md-8">
                        <input type="submit" class="btn btn-primary btn-lg fs16" value="Submit Review" />
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
<div class="header-space"></div>
<div class="header-space"></div>

@endsection