<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2Wheels | Product Categories Add</title>

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
                    <h2>Create Product Category</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('admin_dashboard_page')}}">Home</a>
                        </li>
                        <li>
                            <a>Category</a>
                        </li>
                        <li class="active">
                            <strong>Create</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">

                <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="{{route('product_category.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="name">
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

        {{-- table start --}}
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">


                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All the Categories are listed here..</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $counter = 1;
                    @endphp

                    @foreach($categories as $category)
                        <tr class="gradeX">
                            <td>{{$counter}}</td>
                            <td class="center">{{$category->name}}</td>

                            <td>
                                <a href="{{ route('product_category.edit', $category->id) }}">
                                    <small class="label label-primary"><i class="fa"></i>Edit</small>
                                </a>
                                <a href="{{ route('product_category.destroy', $category->id) }}">
                                    <small class="label label-danger"><i class="fa"></i>Delete</small>
                                </a>
                            </td>
                        </tr>

                        @php
                            $counter = $counter + 1;
                        @endphp
                    @endforeach


                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
        {{-- table end --}}

        {{-- <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">

                <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="{{URL::to('product_sub_category_store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="name" required>
                                    </div>




                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Choose Main Category</label>

                                    <div class="col-sm-4">
                                        <select class="form-control" name="category_id" required>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
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
        </div> --}}

        {{-- table start --}}
        {{-- <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">


                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All the Packages are listed here..</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Main Category</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $counter = 1;
                    @endphp

                    @foreach($subcategories as $subcategory)
                        <tr class="gradeX">
                            <td>{{$counter}}</td>
                            <td class="center">{{$subcategory->name}}</td>
                            <td class="center">{{$subcategory->category->name}}</td>

                            <td>
                                <a href="{{ url('/display_edit_exp_subcategory', ['id' => $subcategory->id]) }}">
                                    <small class="label label-primary"><i class="fa"></i>Edit</small>
                                </a>
                                <a href="{{ url('/product_sub_category_destroy', ['id' => $subcategory->id]) }}">
                                    <small class="label label-danger"><i class="fa"></i>Delete</small>
                                </a>
                            </td>
                        </tr>

                        @php
                            $counter = $counter + 1;
                        @endphp
                    @endforeach


                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Main Category</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div> --}}
        {{-- table end --}}



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
