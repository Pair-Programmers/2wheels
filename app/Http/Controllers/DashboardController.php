<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\BikeModel;
use App\Models\Bike;
use App\Models\Product;
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

            $view = View::make('adminpanel/pages/dashboard', compact('count_VisitLog', 'count_Dealers', 'count_Non_Dealers', 'count_product_post',
             'count_bike_posts', 'count_Models', 'count_Company'));
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
