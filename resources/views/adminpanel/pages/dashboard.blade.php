<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2Wheels | Dashboard</title>

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
            <div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                {{-- <span class="label label-success pull-right">Monthly</span> --}}
                                <h5>Registered Users</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$count_Dealers + $count_Non_Dealers}}</h1>
                                {{-- <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div> --}}
                                <small>Total Registered Users</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                {{-- <span class="label label-info pull-right">Annual</span> --}}
                                <h5>Dealers</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$count_Dealers}}</h1>
                                {{-- <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div> --}}
                                <small>Total Dealers</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                {{-- <span class="label label-info pull-right">Annual</span> --}}
                                <h5>Non-Dealers</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$count_Non_Dealers}}</h1>
                                {{-- <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div> --}}
                                <small>Total Non-Dealers</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                {{-- <span class="label label-primary pull-right">Today</span> --}}
                                <h5>Bike Posts</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$count_bike_posts}}</h1>
                                {{-- <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div> --}}
                                <small>Total Bike Posts</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                {{-- <span class="label label-danger pull-right">Low value</span> --}}
                                <h5>Product Posts</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$count_product_post}}</h1>
                                {{-- <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div> --}}
                                <small>Total Product Posts</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                {{-- <span class="label label-danger pull-right">Low value</span> --}}
                                <h5>Companies</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$count_Company}}</h1>
                                {{-- <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div> --}}
                                <small>Total Companies</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                {{-- <span class="label label-danger pull-right">Low value</span> --}}
                                <h5>Bike Models</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$count_Models}}</h1>
                                {{-- <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div> --}}
                                <small>Total Bike Models</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                {{-- <span class="label label-danger pull-right">Low value</span> --}}
                                <h5>Unique Visitors</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$count_VisitLog}}</h1>
                                {{-- <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div> --}}
                                <small>Total Unique Visitors</small>
                            </div>
                        </div>
                    </div>


                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">

                            <div class="col-lg-8">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Visitors By Last 12 Months</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <div>
                                            <canvas id="barChart" height="140"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
        </div>




                </div>
        <?=$footer; ?>
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


    <!-- ChartJS-->
    <script src="{{asset('adminpanel')}}/js/plugins/chartJs/Chart.min.js"></script>
    {{-- <script src="{{asset('adminpanel')}}/js/demo/chartjs-demo.js"></script> --}}

    <script>

var barData = {
        labels: @json($months),
        datasets: [

            {
                label: "My Second dataset",
                fillColor: "rgba(26,179,148,0.5)",
                strokeColor: "rgba(26,179,148,0.8)",
                highlightFill: "rgba(26,179,148,0.75)",
                highlightStroke: "rgba(26,179,148,1)",
                data: @json($visitLogByMonthally)
            }
        ]
    };

    var barOptions = {
        scaleBeginAtZero: true,
        scaleShowGridLines: true,
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleGridLineWidth: 1,
        barShowStroke: true,
        barStrokeWidth: 2,
        barValueSpacing: 5,
        barDatasetSpacing: 1,
        responsive: true
    }


    var ctx = document.getElementById("barChart").getContext("2d");
    var myNewChart = new Chart(ctx).Bar(barData, barOptions);
    </script>
</body>
</html>
