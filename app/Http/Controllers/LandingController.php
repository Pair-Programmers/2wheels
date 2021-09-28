<?php

namespace App\Http\Controllers;
use App\Models\Bike;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Company;
use App\Models\BikeModel;

use Illuminate\Http\Request;

class LandingController extends Controller
{
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

    public function searchBike(Request $request)
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $search_result = $request->company_model . '  '. $request->city . '  ' . $request->price_range;

        if($request->city != null && $request->price_range != null && $request->company_model != null){
            $bikes = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->get();
            $bikesPriceHighToLow = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('price', 'DESC')->get();
            $bikesPriceLowToHigh = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->get();
            $bikesDateOld = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'ASC')->get();
            $bikesDateRecent = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'DESC')->get();
            return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
            'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        }
        elseif($request->city == null && $request->price_range != null && $request->company_model != null){
            $bikes = Bike::where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->get();
            $bikesPriceHighToLow = Bike::where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('price', 'DESC')->get();
            $bikesPriceLowToHigh = Bike::where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->get();
            $bikesDateOld = Bike::where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'ASC')->get();
            $bikesDateRecent = Bike::where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'DESC')->get();
            return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
            'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        }
        elseif($request->city != null && $request->price_range == null && $request->company_model != null){
            $bikes = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->get();
            $bikesPriceHighToLow = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->orderby('price', 'DESC')->get();
            $bikesPriceLowToHigh = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->get();
            $bikesDateOld = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->orderby('created_at', 'ASC')->get();
            $bikesDateRecent = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->orderby('created_at', 'DESC')->get();
            return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
            'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        }
        elseif($request->city != null && $request->price_range != null && $request->company_model == null){
            $bikes = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('price', '<=', $request->price_range)->get();
            $bikesPriceHighToLow = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('price', '<=', $request->price_range)->orderby('price', 'DESC')->get();
            $bikesPriceLowToHigh = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('price', '<=', $request->price_range)->get();
            $bikesDateOld = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'ASC')->get();
            $bikesDateRecent = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'DESC')->get();
            return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
            'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        }

        elseif($request->city == null && $request->price_range != null && $request->company_model == null){
            $bikes = Bike::where('price', '<=', $request->price_range)->get();
            $bikesPriceHighToLow = Bike::where('price', '<=', $request->price_range)->orderby('price', 'DESC')->get();
            $bikesPriceLowToHigh = Bike::where('price', '<=', $request->price_range)->get();
            $bikesDateOld = Bike::where('price', '<=', $request->price_range)->orderby('created_at', 'ASC')->get();
            $bikesDateRecent = Bike::where('price', '<=', $request->price_range)->orderby('created_at', 'DESC')->get();
            return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
            'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        }
        elseif($request->city != null && $request->price_range == null && $request->company_model == null){
            $bikes = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->get();
            $bikesPriceHighToLow = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->orderby('price', 'DESC')->get();
            $bikesPriceLowToHigh = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->get();
            $bikesDateOld = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->orderby('created_at', 'ASC')->get();
            $bikesDateRecent = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->orderby('created_at', 'DESC')->get();
            return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
            'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        }
        elseif($request->city == null && $request->price_range == null && $request->company_model != null){
            $bikes = Bike::where('name', 'like', '%'.$request->company_model.'%')->get();
            $bikesPriceHighToLow = Bike::where('name', 'like', '%'.$request->company_model.'%')->orderby('price', 'DESC')->get();
            $bikesPriceLowToHigh = Bike::where('name', 'like', '%'.$request->company_model.'%')->get();
            $bikesDateOld = Bike::where('name', 'like', '%'.$request->company_model.'%')->orderby('created_at', 'ASC')->get();
            $bikesDateRecent = Bike::where('name', 'like', '%'.$request->company_model.'%')->orderby('created_at', 'DESC')->get();
            return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
            'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        }
        elseif($request->city == null && $request->price_range == null && $request->company_model == null){
            return redirect()->back();
        }
    }

    public function searchBikeIndex(Request $request)
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $newBikes = Bike::where('category', 'New Bike')->orderby('created_at', 'DESC')->get();
        $usedBikes = Bike::where('category', 'Used Bike')->orderby('created_at', 'DESC')->get();

        if($request->max_price == null && $request->min_price == null){
            $searchedbikes = Bike::where('name', 'like', '%'.$request->keyword.'%')->orderby('created_at', 'DESC')->get();
        }
        elseif($request->max_price != null && $request->min_price == null){
            $searchedbikes = Bike::where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->orderby('created_at', 'DESC')->get();

        }
        elseif($request->max_price == null && $request->min_price != null){
            $searchedbikes = Bike::where('name', 'like', '%'.$request->keyword.'%')->where('price', '>=', $request->min_price)->orderby('created_at', 'DESC')->get();

        }
        else{
            $searchedbikes = Bike::where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->where('price', '>=', $request->min_price)->orderby('created_at', 'DESC')->get();
        }


        $latestProducts = Product::orderby('created_at', 'DESC')->get();
        $blogs = Blog::orderby('created_at', 'DESC')->paginate(3);

        return view('pages/index', compact('newBikes', 'usedBikes', 'latestProducts', 'blogs', 'searchedbikes', 'companies', 'models'));
    }

    public function searchBikeSidebarIndex(Request $request)
    {
        //return $request;
        $models = BikeModel::all();

        $companies = Company::all();
        $newBikes = Bike::where('category', 'New Bike')->orderby('created_at', 'DESC')->get();
        $usedBikes = Bike::where('category', 'Used Bike')->orderby('created_at', 'DESC')->get();

        if($request->category == 'Both'){
            if($request->price_from == null && $request->price_to == null){
                $searchedbikes = Bike::orderby('created_at', 'DESC')->get();
            }elseif($request->price_from != null && $request->price_to == null){
                $searchedbikes = Bike::where('model_year', '>=', $request->price_from)->orderby('created_at', 'DESC')->get();
            }
            elseif($request->price_from == null && $request->price_to != null){
                $searchedbikes = Bike::where('model_year', '<=', $request->price_to)->orderby('created_at', 'DESC')->get();
            }
            else{
                $searchedbikes = Bike::where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'DESC')->get();
            }

        }
        else{
            if($request->price_from == null && $request->price_to == null){
                $searchedbikes = Bike::where('category', $request->category)->orderby('created_at', 'DESC')->get();
            }elseif($request->price_from != null && $request->price_to == null){
                $searchedbikes = Bike::where('category', $request->category)->where('model_year', '>=', $request->price_from)->orderby('created_at', 'DESC')->get();
            }
            elseif($request->price_from == null && $request->price_to != null){
                $searchedbikes = Bike::where('category', $request->category)->where('model_year', '<=', $request->price_to)->orderby('created_at', 'DESC')->get();
            }
            else{
                $searchedbikes = Bike::where('category', $request->category)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'DESC')->get();
            }
        }


        foreach ($searchedbikes as $key => $value) {

            $is_body_type_found = true;
            $is_city_found = true;
            $is_make_found = true;
            $is_model_found = true;

            if($request->has('city')){
                foreach ($request->city as $city) {
                    if($value->reg_city_id == $city){
                        $is_city_found = true;
                        break;
                    }
                    else{
                        $is_city_found = false;
                    }
                }


            }


            if($request->has('body_type')){
                foreach ($request->body_type as $body_type) {
                    if($value->body_type == $body_type){
                        $is_body_type_found = true;
                        break;
                    }
                    else{
                        $is_body_type_found = false;
                    }
                }

            }

            if($request->has('companies')){
                foreach ($request->companies as $company) {
                    if($value->company_id == $company){
                        $is_body_type_found = true;
                        break;
                    }
                    else{
                        $is_body_type_found = false;
                    }
                }

            }





            if($is_city_found && $is_body_type_found && $is_body_type_found && $is_model_found){

            }
            else{
                $searchedbikes->forget($key);
            }





        }

        $latestProducts = Product::orderby('created_at', 'DESC')->get();
        $blogs = Blog::orderby('created_at', 'DESC')->paginate(3);

        return view('pages/index', compact('newBikes', 'usedBikes', 'latestProducts', 'blogs', 'searchedbikes', 'models', 'companies'));
    }
}
