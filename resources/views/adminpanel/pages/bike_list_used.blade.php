<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2Wheels | Bike List</title>

    <link href="{{asset('adminpanel')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{asset('adminpanel')}}/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="{{asset('adminpanel')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <?=$sidebar; ?>

        <div id="page-wrapper" class="gray-bg">
            <?=$header; ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>List of Used Bike Posts</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('admin_dashboard_page')}}">Home</a>
                        </li>
                        <li>
                            <a>Bikes</a>
                        </li>
                        <li class="active">
                            <strong>List</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">


                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All Used Bikes are listed here..</h5>
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
                        <th>Company</th>
                        <th>Model</th>
                        <th>Model Year</th>
                        <th>Reg. City</th>
                        <th>Body Type</th>
                        <th>Price</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $counter = 1;
                    @endphp

                    @foreach($bikes as $bike)
                        <tr class="gradeX">
                            <td>{{$counter}}</td>
                            <td class="center">{{$bike->name}}</td>
                            <td class="center">{{$bike->company->name}}</td>
                            <td class="center">{{$bike->model->name}}</td>
                            <td class="center">{{$bike->model_year}}</td>
                            <td class="center">{{$bike->reg_city_id}}</td>
                            <td class="center">{{$bike->body_type}}</td>
                            <td class="center">{{$bike->price}}</td>
                            <td class="center">{{$bike->user->name}}</td>
                            <td class="center" id="action_no_{{$bike->id}}">
                                @if ($bike->is_active)
                                <small class="label label-primary"><i class="fa"></i>Active</small>
                                @else
                                <small class="label label-danger"><i class="fa"></i>InActive</small>
                                @endif
                            </td>

                            <td>
                                <a target="_blank" href="{{ route('bike.show', $bike->id) }}">
                                    <small class="label label-primary"><i class="fa"></i>View</small>
                                </a>
                                <a onclick="changeStatus({{$bike->id}})">
                                    <small id="" class="label label-warning">Change Status</small>
                                </a>
                            </td>
                        </tr>

                        @php
                            $counter = $counter + 1;
                        @endphp
                    @endforeach


                    </tbody>
                    {{-- <tfoot>
                    <tr>
                    <th>No.</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Model</th>
                        <th>Model Year</th>
                        <th>Reg. City</th>
                        <th>Body Type</th>
                        <th>Price</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot> --}}
                    </table>
                        </div>

                    </div>
                </div>
            </div>
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
    <script src="{{asset('adminpanel')}}/js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="{{asset('adminpanel')}}/js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('adminpanel')}}/js/inspinia.js"></script>
    <script src="{{asset('adminpanel')}}/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [


                    {
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>

<script>
    function changeStatus(id) {
        $.ajax({
            method: 'GET',
            url: `{{url('/approve-bike-post')}}/` + id,
            success: function(data) {
                if (data.status) {
                    $('#action_no_' + id).html(`<small class="label label-primary"><i class="fa"></i>Active</small>`);
                } else {
                    $('#action_no_' + id).html(`<small id="" class="label label-danger">InActive</small>`);
                }
            }
        });
    }
</script>

</body>

</html>
