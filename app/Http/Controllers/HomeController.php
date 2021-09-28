<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;
use App\Models\Product;
use App\Models\Blog;
use App\Models\BikeModel;
use App\Models\Company;

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
        
        $models = BikeModel::all();

        $companies = Company::all();

        $newBikes = Bike::where('category', 'New Bike')->orderby('created_at', 'DESC')->get();
        $usedBikes = Bike::where('category', 'Used Bike')->orderby('created_at', 'DESC')->get();

        $searchedbikes = Bike::orderby('created_at', 'DESC')->get();

        $latestProducts = Product::orderby('created_at', 'DESC')->get();
        $blogs = Blog::orderby('created_at', 'DESC')->paginate(3);

        return view('pages/index', compact('newBikes', 'usedBikes', 'latestProducts', 'blogs',
         'searchedbikes', 'models', 'companies'));
    }
}
