@extends('layouts.main')

@section('title', "Post And Add")

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
                        Sell your Auto Parts With 3 Easy &amp; Simple Steps!
                    </h1>
                    <p class="fs16" style="color: #070707;">It&#39;s free and takes less than a minute</p>
                    <div class="sell-header-list">
                        <img alt=" Enter Your Bike Information"
                            src="{{asset('website')}}/assets/img/bikepic.svg" />
                        Enter Your Bike Parts Information
                        <img alt=" Upload Photos"
                            src="{{asset('website')}}/assets/img/gallery.svg" />
                        Upload Photos
                        <img alt=" Enter Your Selling Price"
                            src="{{asset('website')}}/assets/img/tag.svg" />
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
                    <form accept-charset="UTF-8" action="{{route('product.update', $product->id)}}" class="form-horizontal ga-used-bike-form"
                        data-parsley-validate="" enctype="multipart/form-data" id="submitAnad" method="post">
                        @csrf
                        
                        <div class="linked-fields sell-form-main">
                            <div class="well">
                                <fieldset class="nomargin sell-form">
                                    <legend class="nomargin noborder">Product Information
                                        <span class="sell-mandatory">
                                            All fields marked with * are mandatory</span>
                                    </legend>



                                    <div class="form-group mt20">
                                        <label class="col-md-3" for="city"> <span id="city_label_id"> Name </span><span
                                                class="text-error">*</span></label>
                                        <div class="col-md-5">
                                                <input id="bike_selector" name="name" placeholder=""
                                                type="text" value="{{$product->name}}" required />
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-hint">
                                                <img alt="Hint" class="hint-img"
                                                    src="{{asset('website')}}/assets/img/bulb.svg" />
                                                We don&#39;t allow duplicates of same ad.
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group mt20">
                                        <label class="col-md-3" for="city"> <span id="city_label_id"> Brand </span><span
                                                class="text-error">*</span></label>
                                        <div class="col-md-4">
                                                <select name="brand" id="brand_select">
                                                    @foreach ($companies as $company)
                                                    <option value="{{$company->name}}">{{$company->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>

                                        <script>
                                            let companySelect = document.getElementById('brand_select');
                                            companySelect.value = `{{$product->brand}}`;
                                        </script>
                                        
                                    </div>

                                    <div class="form-group mt20">
                                        <label class="col-md-3" for="city"> <span id="city_label_id"> Category </span><span
                                                class="text-error">*</span></label>
                                        <div class="col-md-4">
                                                <select name="category_id" id="category_id">
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>

                                        <script>
                                            let companySelect = document.getElementById('category_id');
                                            companySelect.value = `{{$product->category_id}}`;
                                        </script>
                                        
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-3" for="make">Description<span
                                                class="text-error">*</span></label>
                                        <div class="col-md-9 car-select-parent">
                                            <input id="bike_selector" name="description" placeholder=""
                                                type="text" value="{{$product->description}}" />
                                           
                                            <ul class="parsley-errors-list">
                                                <li id="car_selector_error"></li>
                                            </ul>
                                            
                                        </div>

                                        
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3" for="make">Condition<span
                                                class="text-error">*</span></label>
                                        <div class="col-md-9 car-select-parent">
                                            <input id="bike_selector" name="condition" placeholder=""
                                                type="text" value="{{$product->description}}" />
                          
                                            <ul class="parsley-errors-list">
                                                <li id="car_selector_error"></li>
                                            </ul>
                                            
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
                                                <input id="bike_selector" name="price" placeholder=""
                                                type="number" value="{{$product->price}}"  required/>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-hint">
                                                <img alt="Hint" class="hint-img"
                                                    src="{{asset('website')}}/assets/img/bulb.svg" />
                                                Please enter a realistic price to get more genuine responses.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3" for="price" id="price-label"><span>Quantity Availabe<span
                                                    class='text-error'>*</span> <span></span></span></label>
                                        <div class="col-md-5">
                                                <input id="bike_selector" min="0" name="quantity_available" placeholder=""
                                                type="number" value="{{$product->quantity_available}}"  required/>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-hint">
                                                <img alt="Hint" class="hint-img"
                                                    src="{{asset('website')}}/assets/img/bulb.svg" />
                                                Please enter a realistic price to get more genuine responses.
                                            </div>
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
                                                            src="{{asset('website')}}/assets/img/error-msg-arrow-44fdb1d2522ee92c4d83a54fd63919e0.png" />
                                                        Sorry, you have reached the maximum number of pictures allowed.
                                                    </span>
                                                    <div id="container">
                                                        <img alt="Photos"
                                                            src="{{asset('website')}}/assets/img/gal.svg"
                                                            style="vertical-align: -5px" />
                                                        <div class="add-photo mb30">
                                                        <label for="images" style="height: 40px;" id="pickfiles" class="pickfiles btn btn-success">+ Add Photos</labele>
                                                                <input type="file" id="images" name="images[]" multiple class="d-none" >
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
                                                <i class="fa fa-check-circle-o"></i>
                                                <strong class='generic-basic'>Adding at least 8 pictures</strong>
                                                improves the chances for a quick sale.
                                            </div>
                                            <div class="col-md-5 col-md-offset-1">
                                                <i class="fa fa-check-circle-o"></i>
                                                <strong class='generic-basic'>Adding clear Front, Back and Side
                                                    pictures</strong> of your bike increases the quality of your Ad and
                                                gets you noticed more.
                                            </div>
                                            <div class="col-md-5 col-md-offset-4 mt30">
                                                <i class="fa fa-check-circle-o"></i>
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
                                                    <input class="prefilled" value="{{$product->seller_name}}"
                                                        data-parsley-error-message="Enter valid name"
                                                        data-parsley-errors-container="#error-name-number"
                                                        data-parsley-length="[3, 100]"
                                                        data-parsley-pattern="/^(((?!pakwheels)[a-z ]){3,100})$/i"
                                                        data-parsley-required="true" data-parsley-trigger="change"
                                                        id="used_bike_ad_listing_attributes_display_name"
                                                        maxlength="100"
                                                        name="seller_name"
                                                        placeholder="Seller Name" size="30" type="text" required/>
                                                </div>
                                                <div id="error-name-number"></div>
                                            </div>
                                        </div>


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
                                                    data-parsley-trigger="change"
                                                    id="used_bike_ad_listing_attributes_phone" maxlength="12"
                                                    name="seller_phone"
                                                    placeholder="Mobile Number" size="30" type="number"
                                                    value="{{$product->seller_phone}}" required />
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
                                                class="optional">(Optional)</span></label>
                                        <div class="col-md-9">
                                            <input required name="seller_address" type="text" {{$product->seller_address}}  />
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
    <div id="sign_in_pop_up" class="modal" tabindex="-1" role="dialog" aria-labelledby="Sign In Pop Up"
        aria-hidden="true">
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
                                    <img class="pull-left"
                                        src="{{asset('website')}}/assets/img/login-point-1.png" />
                                    <h4>Safely Connect with Buyers</h4>
                                    <p>You can connect with thousands of buyers and quick search</p>
                                </li>
                                <li>
                                    <img class="pull-left"
                                        src="{{asset('website')}}/assets/img/login-point-2.png" />
                                    <h4>Create Quick Alerts</h4>
                                    <p>Create alerts quickly and get notified when new listing become available</p>
                                </li>
                                <li>
                                    <img class="pull-left"
                                        src="{{asset('website')}}/assets/img/login-point-3.png">
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
@endsection