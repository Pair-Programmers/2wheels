<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Byou Management | Order List</title>

    <link href="{{asset('adminpanel')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{asset('adminpanel')}}/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="{{asset('adminpanel')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <?= $sidebar; ?>

        <div id="page-wrapper" class="gray-bg">
            <?= $header; ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <!-- List of Orders -->
                    <h2>List of Order</h2>
                    <ol class="breadcrumb">
                        <li>
                            <!-- Home -->
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <!-- orders -->
                            <a>Order</a>
                        </li>
                        <li class="active">
                            <!-- List -->
                            <strong>
                                List</strong>
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
                                <h5>order list</h5>{{-- order list --}}
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <!-- Config option 1 -->
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <!-- Config option 2 -->
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
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Customer</th>
                                                <th>Dealer</th>
                                                <th>Date</th>
                                                <th>Qty</th>
                                                <th>Amount</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $counter = 1;
                                            @endphp

                                            @foreach($orders as $order)
                                            <tr class="gradeX" id="orderRowAction{{$order->id}}">
                                                <td>{{$counter}}</td>
                                                <td class="center">{{$order->id}}</td>
                                                <td class="center">{{$order->customer->name}}</td>
                                                <td class="center">{{$order->vendor->name}}</td>
                                                <td class="center">{{$order->created_at}}</td>
                                                <td class="center">{{$order->total_quantity}}</td>
                                                <td class="center">{{$order->total_ammount}}</td>
                                                <td class="center">{{$order->status}}</td>
                                                
                                            </tr>

                                            @php
                                            $counter = $counter + 1;
                                            @endphp

                                            
                                            @endforeach


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <<th>Order #</th>
                                                <th>Customer</th>
                                                <th>Dealer</th>
                                                <th>Date</th>
                                                <th>Qty</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $footer ?>

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
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    // {extend: 'copy'},
                    // {extend: 'csv'},
                    // {extend: 'excel', title: 'ExampleFile'},
                    // {extend: 'pdf', title: 'ExampleFile'},

                    {
                        extend: 'print',
                        customize: function(win) {
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
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function(sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function(value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"
            ]);

        }
    </script>

    <script>
        function changeOrderStatusInDB(id) {
            console.log(id);
            $.ajax({
                method: 'GET',
                url: `{{url('admin/change_order_status_admin')}}/` + id,

                success: function(data) {
                    $('#orderRowAction' + id).remove();
                }
            });
        }
    </script>

</body>

</html>