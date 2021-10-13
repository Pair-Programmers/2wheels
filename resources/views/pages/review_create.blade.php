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
                        <select required data-parsley-trigger="change" id="bike_review_model_year"
                            name="model_year">
                            @for ($i = 2021; $i > 1940; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Make<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                        <select required class="chzn-select" data-parsley-trigger="change" id="company_select"
                            name="company_id" onchange="display_Models()">
                            @foreach ($companies as $company)
                                <option value='' selected disabled>Select</option>
                                <option value='{{$company->id}}'>{{$company->name}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Model<span class="text-error">*</span> </label>
                    <div class="col-md-8">
                        <select required name="model_id" id="model_select">
                        </select>
                        {{-- <select class="chzn-select" id="bike_review_bike_model_id" name="model_id">
                            @foreach ($models as $model)
                                <option value='{{$model->id}}'>{{$model->name}}</option>

                            @endforeach
                        </select> --}}
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
                                <input  class="star" id="two-style" name="style" type="radio"
                                    value="2" />
                                <label for="three-style" class="px-2">3</label>
                                <input checked class="star" id="three-style" name="style" type="radio"
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
                                <input checked class="star" id="three-style" name="comfort" type="radio"
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
                                <input checked class="star" id="three-style" name="performance" type="radio"
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
                                <input checked class="star" id="three-style" name="value_for_money" type="radio"
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
                                <input checked class="star" id="three-style" name="fuel_economy" type="radio"
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
                        <input required data-parsley-pattern-message="Please enter valid title." data-parsley-pattern="^[\w ]+$"
                            data-parsley-trigger="change" id="bike_review_title" maxlength="100"
                            name="title" size="100" type="text" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Your Review<span class="text-error">*</span></label>
                    <div class="col-md-8">
                        <textarea required cols="40" data-parsley-length="[250,995]"
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
                        <select required id="bike_review_familiarity" name="how_you_know">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    function display_Models() {
        $('#model_select').html('');
       $.ajax({
           type:"GET",
           url:`{{ url('get_models') }}/` +  $('#company_select').find(":selected").val(),
           success:function(data){
            data.models.forEach(element => {
                $('#model_select').append(`
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
