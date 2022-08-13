<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;
use App\Models\Product;
use App\Models\Blog;
use App\Models\BikeModel;
use App\Models\Company;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        VisitLog::save();
        $models = BikeModel::all();

        $companies = Company::all();

        $newBikes = Bike::where('is_active', true)->where('category', 'New Bike')->orderby('created_at', 'DESC')->get();
        $usedBikes = Bike::where('is_active', true)->where('category', 'Used Bike')->orderby('created_at', 'DESC')->get();

        $searchedbikes = Bike::where('is_active', true)->orderby('created_at', 'DESC')->paginate(16);

        $latestProducts = Product::orderby('created_at', 'DESC')->get();
        $blogs = Blog::orderby('created_at', 'DESC')->paginate(3);

        return view('pages/index', compact('newBikes', 'usedBikes', 'latestProducts', 'blogs',
         'searchedbikes', 'models', 'companies'));
    }
}
