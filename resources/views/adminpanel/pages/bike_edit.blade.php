<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2Wheels | Bike Mode</title>

    <link href="{{asset('adminpanel')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/css/style.css" rel="stylesheet">

    <link href="{{asset('adminpanel')}}/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <?=$sidebar; ?>

        <div id="page-wrapper" class="gray-bg">
            <?=$header; ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Edit Bike </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Bike </a>
                        </li>
                        <li class="active">
                            <strong>Edit</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">

                <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="{{route('admin.bike.update', $bike->id)}}" enctype="multipart/form-data">
                                @csrf
                                <!-- <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="name" required>
                                    </div>

                                </div> -->

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Images</label>

                                    <div class="col-sm-4">
                                        <input type="file" class="form-control" name="images[]" multiple>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Company/Make</label>

                                    <div class="col-sm-4">
                                        <select class="form-control" name="company_id" id="company_select" onchange="display_Models()" required>
                                            @foreach ($companies as $company)
                                                <option value="{{$company->id}}">{{$company->name}}</option>
                                            @endforeach

                                        </select>
                                        <script>
                                                let companySelect = document.getElementById('company_select');
                                                companySelect.value = `{{$bike->company_id}}`;
                                            </script>
                                    </div>

                                    <label class="col-sm-2 control-label">Model</label>

                                    <div class="col-sm-4">
                                        <select class="form-control" name="model_id" id="model_select" required>
                                        @foreach ($models as $key => $model)
                                                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                                                @endforeach
                                        </select>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Model Yrear</label>

                                    <div class="col-sm-4">
                                        <select class="form-control" id="model_year_select" name="model_year" required>
                                                @for ($i = 1940; $i < 2022; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor

                                        </select>
                                        <script>
                                                let modelYearSelect = document.getElementById('model_year_select');
                                                modelYearSelect.value = `{{$bike->model_year}}`;
                                            </script>
                                    </div>

                                    <label class="col-sm-2 control-label">Body Type</label>

                                    <div class="col-sm-4">
                                        <select class="form-control" id="body_type" name="body_type" required>
                                                <option value="Standard">Standard</option>
                                                <option value="Heavy Bike">Heavy Bike</option>
                                                <option value="Sports Bike">Sports Bike</option>
                                                <option value="Dirt Bike">Dirt Bike</option>
                                                <option value="ATV">ATV</option>
                                                <option value="Chopper">Chopper</option>
                                                <option value="Scooter">Scooter</option>
                                                <option value="Trail">Trail</option>
                                        </select>
                                        <script>
                                                let modelBodySelect = document.getElementById('body_type');
                                                modelBodySelect.value = `{{$bike->body_type}}`;
                                            </script>
                                    </div>

                                </div>



                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Bike Description</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="{{$bike->description}}" name="description" required>
                                    </div>

                                    <label class="col-sm-2 control-label">Registration City</label>

                                    <div class="col-sm-4">
                                        <select class="form-control" id="reg_city_id" name="reg_city_id" required>
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
                                        </select>
                                        <script>
                                                let modelCitySelect = document.getElementById('reg_city_id');
                                                modelCitySelect.value = `{{$bike->reg_city_id}}`;
                                            </script>
                                    </div>

                                </div>



                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mileage</label>

                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" value="{{$bike->mileage}}" name="mileage" required>
                                    </div>

                                    <label class="col-sm-2 control-label">Engine Type</label>

                                    <div class="col-sm-4">
                                        <select class="form-control"  name="engine_type" id="engine_type" required>
                                                <option value='2-stroke'>2 Stroke</option>
                                                    <option value='4-stroke'>4 Stroke</option>
                                        </select>
                                        <script>
                                                let modelengine_typeSelect = document.getElementById('engine_type');
                                                modelengine_typeSelect.value = `{{$bike->engine_type}}`;
                                            </script>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Price</label>

                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="price" value="{{$bike->price}}" required>
                                    </div>
                                    

                                    

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Additional Information</label>

                                    <div class="col-sm-2">
                                        <div class="i-checks">
                                            <label> <input type="checkbox" @if(json_decode($bike->additional_info)[0] != 0) checked @endif value="Anti Theft Lock" name="additional_info[]" > <i></i>Anti Theft Lock</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks">
                                            <label> <input type="checkbox" value="Disc Brake" @if(json_decode($bike->additional_info)[1] != 0) checked @endif name="additional_info[]" > <i></i>Disc Brake</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks">
                                            <label> <input type="checkbox" value="Led Light" @if(json_decode($bike->additional_info)[2] != 0) checked @endif name="additional_info[]" > <i></i>LED Light</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="i-checks">
                                            <label> <input type="checkbox" value="Wind Shield"  @if(json_decode($bike->additional_info)[3] != 0) checked @endif  name="additional_info[]" > <i></i>Wind Shield</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Seller Name</label>

                                    <div class="col-sm-4">
                                        <input type="text" value="{{$bike->seller_name}}" class="form-control" name="seller_name" required>
                                    </div>

                                    <label class="col-sm-2 control-label">Mobile Number</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="{{$bike->seller_phone}}" name="seller_phone" required>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Address</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="{{$bike->seller_address}}" name="seller_address" required>
                                    </div>

                                    <label class="col-sm-2 control-label">Comment</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="{{$bike->seller_comment}}" name="seller_comment" >
                                    </div>

                                </div>



                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br>

            </div>
        </div>

       



        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

        </div>
        </div>

     <!-- Mainly scripts -->
    <script src="{{asset('adminpanel')}}/js/jquery-2.1.1.js"></script>
    <script src="{{asset('adminpanel')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('adminpanel')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{asset('adminpanel')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('adminpanel')}}/js/inspinia.js"></script>
    <script src="{{asset('adminpanel')}}/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="{{asset('adminpanel')}}/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
        <script>
            let modelid = `{{$bike->model_id}}`;
            function display_Models() {
                $('#model_select').html('');
               $.ajax({
                   type:"GET",
                   url:`{{ url('get_models') }}/` +  $('#company_select').find(":selected").val(),
                   success:function(data){
                    data.models.forEach(element => {
                        if(element.id == modelid){
                        $('#model_select').append(`
                        <option selected value="${element.id}">${element.name}</option>
                        `)}
                        else{
                            $('#model_select').append(`
                        <option value="${element.id}">${element.name}</option>
                        `)
                        }
                    });
                   },
                   error:function(error){
                       console.log(error);
                   }
               });
               
            }
            display_Models();
        </script>

</body>

</html>
