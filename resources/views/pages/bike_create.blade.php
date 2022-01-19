@extends('layouts.main')

@section('title', 'Post And Add')

@section('contents')





    <div class="clearfix"></div>
    <div class="header-space" style="height:64px;"></div>

    <!-- #TODO : Multiple checks for ad to not show -->

    <div class="hide" id="featured-tooltip-content">
        <a href='#' onclick='' class='pull-right fs12 mt15'>Learn More</a>
        <h4>Why Feature your Ad?</h4>
        <ul class='feature-popover-points'>
            <li><i class='fa fa-tick'></i>Ad appears at the top</li>
            <li><i class='fa fa-tick'></i>Ad standouts with the Featured tag</li>
            <li><i class='fa fa-tick'></i>Get more calls &amp; Sell up to 10x faster</li>
        </ul>
    </div>

    <div class="" id="main-container">

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



        <div class="remove-section">
            <section class="nopad">
                <div class="well text-center p30 fwl" style="margin-top: 130px;">
                    <h1 class="nomargin fs28 fwb">
                        Sell your Bike With 3 Easy &amp; Simple Steps!
                    </h1>
                    <p class="fs16" style="color: #070707;">It&#39;s free and takes less than a minute</p>
                    <div class="sell-header-list">
                        <img alt=" Enter Your Bike Information" src="{{ asset('website') }}/assets/img/bikepic.svg" />
                        Enter Your Bike Information
                        <img alt=" Upload Photos" src="{{ asset('website') }}/assets/img/gallery.svg" />
                        Upload Photos
                        <img alt=" Enter Your Selling Price" src="{{ asset('website') }}/assets/img/tag.svg" />
                        Enter Your Selling Price
                    </div>
                </div>
            </section>



            <section>
                <div class="container">

                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @elseif(\Session::has('error'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{!! \Session::get('error') !!}</li>
                            </ul>
                        </div>
                    @endif

                    <form accept-charset="UTF-8" action="{{ route('bike.store') }}"
                        class="form-horizontal ga-used-bike-form" data-parsley-validate="" enctype="multipart/form-data"
                        id="submitAnad" method="post">
                        @csrf

                        <div class="linked-fields sell-form-main">
                            <div class="well">
                                <fieldset class="nomargin sell-form">
                                    <legend class="nomargin noborder">Bike Information
                                        <span class="sell-mandatory">
                                            All fields marked with * are mandatory</span>
                                    </legend>


{{--
                                    <div class="form-group mt20">
                                        <label class="col-md-3" for="city"> <span id="city_label_id"> Name </span><span
                                                class="text-error">*</span></label>
                                        <div class="col-md-5">
                                            <input id="bike_selector" name="name" placeholder="" type="text" value=""
                                                required />
                                        </div>

                                    </div> --}}



                                    <div class="form-group mt20">
                                        <label class="col-md-3" for="city"> <span id="city_label_id"> Company/Make
                                            </span><span class="text-error">*</span></label>
                                        <div class="col-md-5" id="">
                                            <select name="company_id" id="company_select" onchange="display_Models()">
                                                @foreach ($companies as $key => $company)
                                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>


                                    <div class="form-group mt20">
                                        <label class="col-md-3" for="city"> <span id="city_label_id"> Model </span><span
                                                class="text-error">*</span></label>
                                        <div class="col-md-5">
                                            <select name="model_id" id="model_select">
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group mt20">
                                        <label class="col-md-3" for="city"> <span id="city_label_id"> Model Year
                                            </span><span class="text-error">*</span></label>
                                        <div class="col-md-5">
                                            <select name="model_year" id="">
                                                @for ($i = 1940; $i < 2022; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor

                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group mt20">
                                        <label class="col-md-3" for="city"> <span id="city_label_id">Body Type</span><span
                                                class="text-error">*</span></label>
                                        <div class="col-md-5">
                                            <select name="body_type" id="">
                                                <option value="Standard">Standard</option>
                                                <option value="Heavy Bike">Heavy Bike</option>
                                                <option value="Sports Bike">Sports Bike</option>
                                                <option value="Dirt Bike">Dirt Bike</option>
                                                <option value="ATV">ATV</option>
                                                <option value="Chopper">Chopper</option>
                                                <option value="Scooter">Scooter</option>
                                                <option value="Trail">Trail</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3" for="make">Bike Description<span
                                                class="text-error">*</span></label>
                                        <div class="col-md-5 car-select-parent">
                                            <input id="bike_selector" name="description" placeholder="" type="text" value=""
                                                class="w-100" />

                                            <ul class="parsley-errors-list">
                                                <li id="car_selector_error"></li>
                                            </ul>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3" for="registration_city">Registration City</label>
                                        <div class="col-md-5">
                                            <select class="chzn-select" style="width: 100%;" id="used_bike_reg_city_id"
                                                name="reg_city_id" required>
                                                <option value="" disabled>Registration City</option>
                                                <optgroup label="Un-Registered">
                                                    <option value="Un-Registered">Un-Registered</option>
                                                </optgroup>
                                                <optgroup label="Popular Cities">
                                                    <option value="Karachi">Karachi</option>
                                                    <option value="Lahore">Lahore</option>
                                                    <option value="Islamabad">Islamabad</option>
                                                    <option value="Rawalpindi">Rawalpindi</option>
                                                    <option value="Peshawar">Peshawar</option>
                                                </optgroup>
                                                <optgroup label="Other Cities">
                                                    <option value="Abdul Hakeem">Abdul Hakeem</option>
                                                    <option value="Abottabad">Abottabad</option>
                                                    <option value="Adda jahan khan">Adda jahan khan</option>
                                                    <option value="Adda shaiwala">Adda shaiwala</option>
                                                    <option value="Ahmed Pur East">Ahmed Pur East</option>
                                                    <option value="Ahmedpur Lamma">Ahmedpur Lamma</option>
                                                    <option value="Akhora khattak">Akhora khattak</option>
                                                    <option value="Ali chak">Ali chak</option>
                                                    <option value="Alipur Chatta">Alipur Chatta</option>
                                                    <option value="Allahabad">Allahabad</option>
                                                    <option value="Amangarh">Amangarh</option>
                                                    <option value="Arifwala">Arifwala</option>
                                                    <option value="Attock">Attock</option>
                                                    <option value="Babarloi">Babarloi</option>
                                                    <option value="Babri banda">Babri banda</option>
                                                    <option value="Badin">Badin</option>
                                                    <option value="Bahawal Nagar">Bahawal Nagar</option>
                                                    <option value="Bahawalpur">Bahawalpur</option>
                                                    <option value="Balakot">Balakot</option>
                                                    <option value="Bannu">Bannu</option>
                                                    <option value="Gojra">Gojra</option>
                                                    <option value="Goth Machi">Goth Machi</option>
                                                    <option value="Goular khel">Goular khel</option>
                                                    <option value="Guddu">Guddu</option>
                                                    <option value="Gujar Khan">Gujar Khan</option>
                                                    <option value="Gujranwala">Gujranwala</option>
                                                    <option value="Gujrat">Gujrat</option>
                                                    <option value="Gwadar">Gwadar</option>
                                                    <option value="Hafizabad">Hafizabad</option>
                                                    <option value="Hala">Hala</option>
                                                    <option value="Hangu">Hangu</option>
                                                    <option value="Harappa">Harappa</option>
                                                    <option value="Hari pur">Hari pur</option>
                                                    <option value="Hariwala">Hariwala</option>
                                                    <option value="Haroonabad">Haroonabad</option>
                                                    <option value="Hasilpur">Hasilpur</option>
                                                    <option value="Hassan abdal">Hassan abdal</option>
                                                    <option value="Hattar">Hattar</option>
                                                    <option value="Hattian">Hattian</option>
                                                    <option value="Hattian lawrencepur">Hattian lawrencepur</option>
                                                    <option value="Havali Lakhan">Havali Lakhan</option>
                                                    <option value="Hawilian">Hawilian</option>
                                                    <option value="Hayatabad">Hayatabad</option>
                                                    <option value="Hazro">Hazro</option>
                                                    <option value="Head marala">Head marala</option>
                                                    <option value="Hub">Hub</option>
                                                    <option value="Hub-Balochistan">Hub-Balochistan</option>
                                                    <option value="Hujra Shah Mukeem">Hujra Shah Mukeem</option>
                                                    <option value="Hunza">Hunza</option>
                                                    <option value="Hyderabad">Hyderabad</option>
                                                    <option value="Iskandarabad">Iskandarabad</option>
                                                    <option value="Jacobabad">Jacobabad</option>
                                                    <option value="Jahaniya">Jahaniya</option>
                                                    <option value="Jaja abasian">Jaja abasian</option>
                                                    <option value="Jalalpur Jattan">Jalalpur Jattan</option>
                                                    <option value="Kakur town">Kakur town</option>
                                                    <option value="Kala bagh">Kala bagh</option>
                                                    <option value="Kala shah kaku">Kala shah kaku</option>
                                                    <option value="Kalaswala">Kalaswala</option>
                                                    <option value="Kallar Kahar">Kallar Kahar</option>
                                                    <option value="Kallar Saddiyian">Kallar Saddiyian</option>
                                                    <option value="Kallur kot">Kallur kot</option>
                                                    <option value="Kamalia">Kamalia</option>
                                                    <option value="Kamalia musa">Kamalia musa</option>
                                                    <option value="Kamber ali khan">Kamber ali khan</option>
                                                    <option value="Kameer">Kameer</option>
                                                    <option value="Kamoke">Kamoke</option>
                                                    <option value="Kamra">Kamra</option>
                                                    <option value="Kandh kot">Kandh kot</option>
                                                    <option value="Kandiaro">Kandiaro</option>
                                                    <option value="Karak">Karak</option>
                                                    <option value="Karoor pacca">Karoor pacca</option>
                                                    <option value="Karore lalisan">Karore lalisan</option>
                                                    <option value="Kashmir">Kashmir</option>

                                                    {{-- <option value="">Registration City</option>
                                            <optgroup label="Un-Registered">
                                                <option value="">Un-Registered</option>
                                            </optgroup>
                                            <optgroup label="Popular Cities">
                                                <option value="409">Karachi</option>
                                                <option value="410">Lahore</option>
                                                <option value="408">Islamabad</option>
                                                <option value="313">Rawalpindi</option>
                                                <option value="288">Peshawar</option>
                                            </optgroup>
                                            <optgroup label="Other Cities">
                                                <option value="2">Abdul Hakeem</option>
                                                <option value="1">Abottabad</option>
                                                <option value="3">Adda jahan khan</option>
                                                <option value="4">Adda shaiwala</option>
                                                <option value="183503">Ahmed Pur East</option>
                                                <option value="183504">Ahmedpur Lamma</option>
                                                <option value="5">Akhora khattak</option>
                                                <option value="6">Ali chak</option>
                                                <option value="183505">Alipur Chatta</option>
                                                <option value="7">Allahabad</option>
                                                <option value="8">Amangarh</option>
                                                <option value="10">Arifwala</option>
                                                <option value="11">Attock</option>
                                                <option value="18">Babarloi</option>
                                                <option value="12">Babri banda</option>
                                                <option value="13">Badin</option>
                                                <option value="14">Bahawal Nagar</option>
                                                <option value="15">Bahawalpur</option>
                                                <option value="16">Balakot</option>
                                                <option value="17">Bannu</option>
                                                <option value="105">Gojra</option>
                                                <option value="220">Goth Machi</option>
                                                <option value="106">Goular khel</option>
                                                <option value="107">Guddu</option>
                                                <option value="108">Gujar Khan</option>
                                                <option value="109">Gujranwala</option>
                                                <option value="110">Gujrat</option>
                                                <option value="183501">Gwadar</option>
                                                <option value="111">Hafizabad</option>
                                                <option value="112">Hala</option>
                                                <option value="113">Hangu</option>
                                                <option value="183514">Harappa</option>
                                                <option value="114">Hari pur</option>
                                                <option value="115">Hariwala</option>
                                                <option value="116">Haroonabad</option>
                                                <option value="117">Hasilpur</option>
                                                <option value="118">Hassan abdal</option>
                                                <option value="119">Hattar</option>
                                                <option value="183515">Hattian</option>
                                                <option value="120">Hattian lawrencepur</option>
                                                <option value="121">Havali Lakhan</option>
                                                <option value="122">Hawilian</option>
                                                <option value="123">Hayatabad</option>
                                                <option value="124">Hazro</option>
                                                <option value="125">Head marala</option>
                                                <option value="183489">Hub</option>
                                                <option value="183487">Hub-Balochistan</option>
                                                <option value="183516">Hujra Shah Mukeem</option>
                                                <option value="183488">Hunza</option>
                                                <option value="127">Hyderabad</option>
                                                <option value="183517">Iskandarabad</option>
                                                <option value="130">Jacobabad</option>
                                                <option value="142">Jahaniya</option>
                                                <option value="131">Jaja abasian</option>
                                                <option value="132">Jalalpur Jattan</option>
                                                <option value="154">Kakur town</option>
                                                <option value="155">Kala bagh</option>
                                                <option value="156">Kala shah kaku</option>
                                                <option value="158">Kalaswala</option>
                                                <option value="183523">Kallar Kahar</option>
                                                <option value="157">Kallar Saddiyian</option>
                                                <option value="159">Kallur kot</option>
                                                <option value="160">Kamalia</option>
                                                <option value="161">Kamalia musa</option>
                                                <option value="162">Kamber ali khan</option>
                                                <option value="183524">Kameer</option>
                                                <option value="163">Kamoke</option>
                                                <option value="164">Kamra</option>
                                                <option value="165">Kandh kot</option>
                                                <option value="166">Kandiaro</option>
                                                <option value="168">Karak</option>
                                                <option value="169">Karoor pacca</option>
                                                <option value="170">Karore lalisan</option>
                                                <option value="171">Kashmir</option> --}}
                                        </div>
                                    </div>

                                </fieldset>


                                <fieldset>

                                    <input id="used_bike_ad_listing_attributes_step"
                                        name="used_bike[ad_listing_attributes][step]" type="hidden" value="0" />

                                    <div class="form-group">
                                        <label class="col-md-5" for="hpi_mileage"
                                            style="transform:translateX(-213px);margin-top:10px"> Mileage<span
                                                class="text-error">*</span> </label>
                                        <!--  -->
                                        <div>
                                            <div class="col-md-7">
                                                <div class="input-group p-0" style="margin-left:-213px;margin-top:10px">
                                                    <span class="input-group-addon fs16">KM</span>
                                                    <input class="w-100"
                                                        data-parsley-error-message="Enter valid mileage (1-1000000)"
                                                        data-parsley-errors-container="#error-mileage"
                                                        data-parsley-pattern="^([1-9][0-9]{0,5}|1000000)$"
                                                        data-parsley-range="[1, 1000000]" data-parsley-required="true"
                                                        data-parsley-trigger="change" id="mileage_text" maxlength="6"
                                                        name="mileage" placeholder="Mileage" type="number" value=""
                                                        required />
                                                </div>
                                                <div id="error-mileage"></div>
                                                <p class="mileage nomargin generic-blue-light fs12" style="display:none">
                                                </p>
                                                <input class="bike_mileage" id="used_bike_mileage" name="hj" type="hidden"
                                                    value="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-5" for="engine_type"
                                                style="transform:translateX(-213px);margin-top:10px"> Engine Type<span
                                                    class="text-error">*</span></label>
                                            <div class="col-md-5" style="margin-left:-213px;margin-top:10px">
                                                <select data-parsley-error-message="Please select engine type"
                                                    data-parsley-required="true" data-parsley-trigger="change"
                                                    id="used_bike_engine_type" name="engine_type" required>
                                                    <option value="">Engine Type</option>
                                                    <option value='2-stroke'>2 Stroke</option>
                                                    <option value='4-stroke'>4 Stroke</option>
                                                </select>
                                            </div>



                                            <!--  -->
                                            <!-- <div class="col-md-4">
                                                <div class="form-hint">
                                                    <img alt="Hint" class="hint-img"
                                                        src="{{ asset('website') }}/assets/img/bulb.svg" />
                                                    We don&#39;t allow promotional messages that are not relevant to the ad
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5" for="engine_type"
                                            style="transform:translateX(-213px);margin-top:10px"> Category<span
                                                class="text-error">*</span></label>
                                        <div class="col-md-5" style="margin-left:-213px;margin-top:10px">
                                            <select data-parsley-error-message="Please select engine type"
                                                data-parsley-required="true" data-parsley-trigger="change"
                                                id="used_bike_engine_type" name="category" required>
                                                {{-- <option value='New Bike'>New Bike</option> --}}
                                                <option value='Used Bike' selected>Used Bike</option>
                                            </select>
                                        </div>
                                    </div>



                                </fieldset>

                            </div>


                            <fieldset>
                                <div class="well">
                                    <legend class="noborder">Expected Selling Price</legend>

                                    <div class="form-group">
                                        <label class="col-md-3" for="price" id="price-label"><span>Price<span
                                                    class='text-error'>*</span> <span>(Rs.)</span></span></label>
                                        <div class="col-md-5">
                                            <input id="bike_selector" name="price" placeholder="" type="number" value=""
                                                required />
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-hint">
                                                <img alt="Hint" class="hint-img"
                                                    src="{{ asset('website') }}/assets/img/bulb.svg" />
                                                Please enter a realistic price to get more genuine responses.
                                            </div>
                                        </div>
                                    </div>





                                    <div id="EvaluatePriceModal" class="modal" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="well">
                                    <legend class="noborder">Additional Information</legend>

                                    <div class="form-group">
                                        <label class="col-md-3" for="features">Features</label>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled list-inline sell-feature-list col-12">
                                                <li>
                                                    <label class="d-flex align-items-center">
                                                        <input name="additional_info[]" type="hidden" value="0" />
                                                        <input style="height: 15px;" id="used_bike_anti_theft_lock" name="additional_info[]"
                                                            type="checkbox" value="Anti Theft Lock" /> 
                                                            <span style="width: 28vw;">Anti Theft Lock</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="d-flex align-items-center"><input name="additional_info[]"
                                                            type="hidden" value="0" /><input style="height: 15px;"
                                                            id="used_bike_disc_break" name="additional_info[]"
                                                            type="checkbox" value="Disc Brake" />
                                                        <span style="width: 22vw;">Disc Brake</span></label>
                                                </li>
                                                <li>
                                                    <label class="d-flex align-items-center"><input id="used_bike_led_light"
                                                            name="additional_info[]" style="height: 15px;" type="checkbox"
                                                            value="Led Light" />
                                                        <span style="width: 22vw;">LED Light</span></label>
                                                </li>
                                                <li>
                                                    <label class="d-flex align-items-center"><input name="additional_info[]"
                                                            type="hidden" value="0" /><input style="height: 15px;"
                                                            id="used_bike_wind_shield" name="additional_info[]"
                                                            type="checkbox" value="Wind Shield" />
                                                        <span style="width: 22vw;">Wind Shield</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="well">


                                    <legend class="nomargin noborder">
                                        Upload Photos
                                        <span class="text-error"></span>
                                    </legend>
                                    <div class="upload-image-hint clearfix mt20 pos-rel" id="img_upload_tr">
                                        <div id="plupload_uploader" class="clearfix text-center">
                                            <div id="img_upload">
                                                <div id="moreUploads">
                                                    <span id="uploadify_limit_reached" class="uploadify_help"
                                                        onclick="$(this).hide(); $('#uploadify_limit_help').fadeIn(500);">
                                                        <img alt="Error-msg-arrow"
                                                            src="{{ asset('website') }}/assets/img/error-msg-arrow-44fdb1d2522ee92c4d83a54fd63919e0.png" />
                                                        Sorry, you have reached the maximum number of pictures allowed.
                                                    </span>
                                                    <div id="container">
                                                        <img alt="Photos" src="{{ asset('website') }}/assets/img/gal.svg"
                                                            style="vertical-align: -5px" />
                                                        <div class="add-photo mb30">
                                                            <label for="images" style="height: 40px;" id="pickfiles"
                                                                class="pickfiles btn btn-success">+ Add Photos</label>
                                                            <input type="file" id="images" name="images[]" multiple
                                                                class="d-none" required>
                                                            <div class="generic-gray mt5">
                                                                (Max limit 5 MB per image)
                                                            </div>
                                                        </div>
                                                        <div id="filelist">
                                                        </div>
                                                    </div>
                                                    <div id="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="row fs13 generic-gray add-photo-info mt40 mb30">
                                            <div class="col-md-4 col-md-offset-1">

                                                <strong class='generic-basic'>Adding at least 8 pictures</strong>
                                                improves the chances for a quick sale.
                                            </div>
                                            <div class="col-md-5 col-md-offset-1">

                                                <strong class='generic-basic'>Adding clear Front, Back and Side
                                                    pictures</strong> of your bike increases the quality of your Ad and
                                                gets you noticed more.
                                            </div>
                                            <div class="col-md-5 col-md-offset-4 mt30">

                                                <strong class='generic-basic'>Photos should be</strong> in 'jpeg, jpg,
                                                png, gif' format only.
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="well">
                                    <legend class="noborder">Contact Information</legend>
                                    <div id="contact_seller_div">



                                        <div class="form-group">
                                            <label class="col-md-3 prefill" for="display_name">Seller Name<span
                                                    class="text-error">*</span></label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input class="prefilled" data-parsley-error-message="Enter valid name"
                                                        data-parsley-errors-container="#error-name-number"
                                                        data-parsley-length="[3, 100]"
                                                        data-parsley-pattern="/^(((?!pakwheels)[a-z ]){3,100})$/i"
                                                        data-parsley-required="true" data-parsley-trigger="change"
                                                        id="used_bike_ad_listing_attributes_display_name" maxlength="100"
                                                        name="seller_name" placeholder="Seller Name" size="30" type="text"
                                                        required />
                                                </div>
                                                <div id="error-name-number"></div>
                                            </div>
                                        </div>


                                        <input id="user_email" name="user[email]" type="hidden" />
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3" for="phone_number"> Mobile Number<span
                                                class="text-error">*</span></label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input class="ad-mobile-number prefilled"
                                                    data-parsley-error-message="Enter a valid mobile number."
                                                    data-parsley-errors-container="#error-mobile-number"
                                                    data-parsley-pattern="^03[0-9]{9}$" data-parsley-required="true"
                                                    data-parsley-trigger="change" id="used_bike_ad_listing_attributes_phone"
                                                    maxlength="12" name="seller_phone" placeholder="Mobile Number" size="30"
                                                    type="number" value="" required />
                                            </div>
                                            <div id="error-mobile-number"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-hint">
                                                <i class="fa fa-mobile hint-icon"></i>
                                                Enter a genuine 11 digit mobile no. with format 03XXXXXXXXX. All
                                                inquires will come on this number.
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group secondary-phone">
                                        <label class="col-md-3" for="second_phone" class="note">Address <span
                                                class="optional"></span></label>
                                        <div class="col-md-9">
                                            <input required name="seller_address" type="text" />
                                        </div>
                                    </div>

                                    <div class="form-group secondary-phone">
                                        <label class="col-md-3" for="second_phone" class="note">Comment <span
                                                class="optional">(Optional)</span></label>
                                        <div class="col-md-9">
                                            <input name="seller_comment" type="text" />
                                        </div>
                                    </div>




                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-group text-right mb30">
                                    <div class="col-md-12">
                                        <button style="height: 40px;" type="submit" class="btn btn-success btn-lg fs16"
                                            id="submit_form">Submit &amp; Continue</button>
                                    </div>
                                </div>
                            </fieldset>

                        </div>

                    </form>
                    <div id="duplicate_ads_alert"></div>

                </div>
            </section>
        </div>



    </div>
    <div id="sign_in_pop_up" class="modal" tabindex="-1" role="dialog" aria-labelledby="Sign In Pop Up" aria-hidden="true">
        <div class="modal-dialog" style="width: 680px">
            <div class="modal-content">
                <div class="modal-body p30">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                        style="margin: -15px -15px 0 0;" onclick="$('#sign_in_pop_up').modal('hide');">×</button>

                    <div class="row">
                        <div class="col-md-6 why-login-left">
                            <h2>Why Signin?</h2>
                            <ul class="list-unstyled login-points-list">
                                <li>
                                    <img class="pull-left" src="{{ asset('website') }}/assets/img/login-point-1.png" />
                                    <h4>Safely Connect with Buyers</h4>
                                    <p>You can connect with thousands of buyers and quick search</p>
                                </li>
                                <li>
                                    <img class="pull-left" src="{{ asset('website') }}/assets/img/login-point-2.png" />
                                    <h4>Create Quick Alerts</h4>
                                    <p>Create alerts quickly and get notified when new listing become available</p>
                                </li>
                                <li>
                                    <img class="pull-left" src="{{ asset('website') }}/assets/img/login-point-3.png">
                                    <h4>Save Your Favourite Ads</h4>
                                    <p>Easily save ads and accessories for a later time</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
            display_Models();
        </script>
@endsection
