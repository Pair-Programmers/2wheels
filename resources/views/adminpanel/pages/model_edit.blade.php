<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2Wheels | BikeModel Edit</title>

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
                    <h2>Edit Bike Model</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('admin_dashboard_page')}}">Home</a>
                        </li>
                        <li>
                            <a>Bike Model</a>
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
                            <form method="post" class="form-horizontal" action="{{route('model.update', $model->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Model Name</label>

                                    <div class="col-sm-4">
                                        <input type="hidden" name="id" value="{{$model->id}}">
                                        <input type="text" class="form-control" name="name" value="{{$model->name}}">
                                    </div>


                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Image</label>

                                    <div class="col-sm-4">
                                        <input type="file" class="form-control" name="image" >
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Company</label>

                                    <div class="col-sm-4">
                                        <select class="form-control" name="company_id" required>

                                            @foreach ($companies as $company)
                                                @if ($model->company_id == $company->id)
                                                    <option selected value="{{$company->id}}">{{$company->name}}</option>
                                                @else
                                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                                @endif

                                            @endforeach

                                        </select>
                                    </div>



                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Engine_type</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="engine_type" required value="{{$model->engine_type}}">
                                    </div>

                                    <label class="col-sm-2 control-label">Displacement</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="displacement" required value="{{$model->displacement}}">
                                    </div>

                                </div>



                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Bore & Stroke</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="bore_stroke" required value="{{$model->bore_stroke}}">
                                    </div>

                                    <label class="col-sm-2 control-label">Compression Ratio</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="compression_ratio" required value="{{$model->compression_ratio}}">
                                    </div>

                                </div>



                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Clutch</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="clutch" required value="{{$model->clutch}}">
                                    </div>

                                    <label class="col-sm-2 control-label">Transmission</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="transmission" required value="{{$model->transmission}}">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Dimension</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="dimension" value="{{$model->dimension}}" required>
                                    </div>

                                    <label class="col-sm-2 control-label">Starting</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="starting" value="{{$model->starting}}" required>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Top Speed</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="top_speed" value="{{$model->top_speed}}" required>
                                    </div>

                                    <label class="col-sm-2 control-label">Petrol Capacity</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="petrol_capacity" value="{{$model->petrol_capacity}}" required>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fuel Average</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="fuel_average" value="{{$model->fuel_average}}" required>
                                    </div>

                                    <label class="col-sm-2 control-label">Dry Weight</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="dry_weight" value="{{$model->dry_weight}}" required>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Frame</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="frame" value="{{$model->frame}}" required>
                                    </div>

                                    <label class="col-sm-2 control-label">Ground Clearance</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="ground_clearance" value="{{$model->ground_clearance}}" required>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Wheel Size</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="wheel_size" value="{{$model->wheel_size}}" required>
                                    </div>

                                    <label class="col-sm-2 control-label">Tyre At Back</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="tyre_at_back" value="{{$model->tyre_at_back}}" required>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tyre At Front</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="tyre_at_front" value="{{$model->tyre_at_front}}" required>
                                    </div>

                                    <label class="col-sm-2 control-label">Horsepower</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="horsepower" value="{{$model->horsepower}}" required>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Torque</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="torque" value="{{$model->torque}}" required>
                                    </div>
                                    <label class="col-sm-2 control-label">Price</label>

                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="price" value="{{$model->price}}" required>
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
                <strong>Copyright</strong> twowheelss.com &copy; 2014-2015
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

</body>

</html>
