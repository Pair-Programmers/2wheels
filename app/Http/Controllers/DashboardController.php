<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\BikeModel;
use App\Models\Bike;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use View;
use Session;
use VisitLog;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('adminLogin')){



            $count_Dealers = User::where('type', 'Dealer')->count();
            $count_Non_Dealers = User::where('type', 'Non-Dealer')->count();
            $count_product_post = Product::count();
            $count_bike_posts = Bike::count();
            $count_Models = BikeModel::count();
            $count_Company = Company::count();
            $visitLog = VisitLog::all();
            $count_VisitLog = count($visitLog);

            $months = [
                Carbon::now()->subMonth(11)->format('F'),
                Carbon::now()->subMonth(10)->format('F'),
                Carbon::now()->subMonth(9)->format('F'),
                Carbon::now()->subMonth(8)->format('F'),
                Carbon::now()->subMonth(7)->format('F'),
                Carbon::now()->subMonth(6)->format('F'),
                Carbon::now()->subMonth(5)->format('F'),
                Carbon::now()->subMonth(4)->format('F'),
                Carbon::now()->subMonth(3)->format('F'),
                Carbon::now()->subMonth(2)->format('F'),
                Carbon::now()->subMonth(1)->format('F'),
                Carbon::now()->format('F')
            ];

             $last12MonthsDates = [
                ['start_date'=>Carbon::now()->subMonth(11)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(11)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->subMonth(10)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(10)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->subMonth(9)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(9)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->subMonth(8)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(8)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->subMonth(7)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(7)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->subMonth(6)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(6)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->subMonth(5)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(5)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->subMonth(4)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(4)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->subMonth(3)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(3)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->subMonth(2)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(2)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->subMonth(1)->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->subMonth(1)->endOfMonth()->endOfDay()],
                ['start_date'=>Carbon::now()->startOfMonth()->startOfDay(),'end_date'=>Carbon::now()->endOfMonth()->endOfDay()],
            ];

            $visitLogByMonthally = array();
            foreach ($last12MonthsDates as $key => $value) {
                $count = DB::table('visitlogs')->where('created_at', '>=', $value['start_date'])
                ->where('created_at', '<=', $value['end_date'])->count('id');
                array_push($visitLogByMonthally, $count);
            }
            
            $view = View::make('adminpanel/pages/dashboard', compact('count_VisitLog', 'count_Dealers', 'count_Non_Dealers', 'count_product_post',
             'count_bike_posts', 'count_Models', 'count_Company', 'months', 'visitLogByMonthally'));
            $view->nest('sidebar','adminpanel/partials/sidebar');
            $view->nest('header','adminpanel/partials/header');
            $view->nest('footer','adminpanel/partials/footer');
        }else{
            $view = View::make('adminpanel/pages/login');
        }

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function visitlog()
    {
        return $visitLogs = VisitLog::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
