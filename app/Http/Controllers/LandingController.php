<?php

namespace App\Http\Controllers;
use App\Models\Bike;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Company;
use App\Models\BikeModel;

use Illuminate\Http\Request;
use VisitLog;

class LandingController extends Controller
{
    private $paginate_qty = 16;

    public function index()
    {

        VisitLog::save();
        $models = BikeModel::all();

        $companies = Company::all();

        $bikes = Bike::all();
        foreach ($bikes as $key => $bike) {
            $model = BikeModel::find($bike->model_id);
            $company = Company::find($bike->company_id);
            $bike->name = $company->name . ' ' . $model->name . ' ' . $bike->model_year;
            $bike->save();
        }

        $newBikes = Bike::where('is_active', true)->where('category', 'New Bike')->orderby('created_at', 'DESC')->get();
        $usedBikes = Bike::where('is_active', true)->where('category', 'Used Bike')->orderby('created_at', 'DESC')->get();

        $searchedbikes = Bike::where('is_active', true)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
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

        $bikes = Bike::where('is_active', true)->where('category', $request->category)
        ->when($request->filled('keyword') , function ($query) use ($request){
            return $query->where('name', 'like', '%'.$request->keyword.'%');
        })
        ->when($request->filled('min_price') , function ($query) use ($request){
            return $query->where('price' , '>=', $request->min_price);
        })
        ->when($request->filled('max_price') , function ($query) use ($request){
            return $query->where('price' , '<=', $request->max_price);
        })->paginate($this->paginate_qty);

        $request->flash();
        $bikesPriceHighToLow = $bikes;
        $bikesPriceLowToHigh = $bikes;
        $bikesDateOld = $bikes;
        $bikesPriceLowToHigh = $bikes;
        $bikesDateRecent = $bikes;

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        // if($request->city != null && $request->price_range != null && $request->company_model != null){
        //     $bikes = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->paginate($this->paginate_qty);
        //     $bikesPriceHighToLow = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        //     $bikesPriceLowToHigh = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->paginate($this->paginate_qty);
        //     $bikesDateOld = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        //     $bikesDateRecent = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        //     return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        //     'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        // }
        // elseif($request->city == null && $request->price_range != null && $request->company_model != null){
        //     $bikes = Bike::where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->paginate($this->paginate_qty);
        //     $bikesPriceHighToLow = Bike::where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        //     $bikesPriceLowToHigh = Bike::where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->paginate($this->paginate_qty);
        //     $bikesDateOld = Bike::where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        //     $bikesDateRecent = Bike::where('name', 'like', '%'.$request->company_model.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        //     return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        //     'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        // }
        // elseif($request->city != null && $request->price_range == null && $request->company_model != null){
        //     $bikes = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->paginate($this->paginate_qty);
        //     $bikesPriceHighToLow = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->orderby('price', 'DESC')->paginate($this->paginate_qty);
        //     $bikesPriceLowToHigh = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->paginate($this->paginate_qty);
        //     $bikesDateOld = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        //     $bikesDateRecent = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('name', 'like', '%'.$request->company_model.'%')->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        //     return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        //     'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        // }
        // elseif($request->city != null && $request->price_range != null && $request->company_model == null){
        //     $bikes = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('price', '<=', $request->price_range)->paginate($this->paginate_qty);
        //     $bikesPriceHighToLow = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('price', '<=', $request->price_range)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        //     $bikesPriceLowToHigh = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('price', '<=', $request->price_range)->paginate($this->paginate_qty);
        //     $bikesDateOld = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        //     $bikesDateRecent = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->where('price', '<=', $request->price_range)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        //     return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        //     'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        // }

        // elseif($request->city == null && $request->price_range != null && $request->company_model == null){
        //     $bikes = Bike::where('price', '<=', $request->price_range)->paginate($this->paginate_qty);
        //     $bikesPriceHighToLow = Bike::where('price', '<=', $request->price_range)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        //     $bikesPriceLowToHigh = Bike::where('price', '<=', $request->price_range)->paginate($this->paginate_qty);
        //     $bikesDateOld = Bike::where('price', '<=', $request->price_range)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        //     $bikesDateRecent = Bike::where('price', '<=', $request->price_range)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        //     return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        //     'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        // }
        // elseif($request->city != null && $request->price_range == null && $request->company_model == null){
        //     $bikes = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->paginate($this->paginate_qty);
        //     $bikesPriceHighToLow = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->orderby('price', 'DESC')->paginate($this->paginate_qty);
        //     $bikesPriceLowToHigh = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->paginate($this->paginate_qty);
        //     $bikesDateOld = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        //     $bikesDateRecent = Bike::where('reg_city_id', 'like', '%'.$request->city.'%')->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        //     return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        //     'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        // }
        // elseif($request->city == null && $request->price_range == null && $request->company_model != null){
        //     $bikes = Bike::where('name', 'like', '%'.$request->company_model.'%')->paginate($this->paginate_qty);
        //     $bikesPriceHighToLow = Bike::where('name', 'like', '%'.$request->company_model.'%')->orderby('price', 'DESC')->paginate($this->paginate_qty);
        //     $bikesPriceLowToHigh = Bike::where('name', 'like', '%'.$request->company_model.'%')->paginate($this->paginate_qty);
        //     $bikesDateOld = Bike::where('name', 'like', '%'.$request->company_model.'%')->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        //     $bikesDateRecent = Bike::where('name', 'like', '%'.$request->company_model.'%')->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        //     return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        //     'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
        // }
        // elseif($request->city == null && $request->price_range == null && $request->company_model == null){
        //     return redirect()->back();
        // }
    }

    public function searchBikeIndex(Request $request)
    {

        $models = BikeModel::all();

        $companies = Company::all();
        $newBikes = Bike::where('is_active', true)->where('category', 'New Bike')->orderby('created_at', 'DESC')->get();
        $usedBikes = Bike::where('is_active', true)->where('category', 'Used Bike')->orderby('created_at', 'DESC')->get();

        if($request->max_price == null && $request->min_price == null){
            $searchedbikes = Bike::where('name', 'like', '%'.$request->keyword.'%')->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        }
        elseif($request->max_price != null && $request->min_price == null){
            $searchedbikes = Bike::where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        }
        elseif($request->max_price == null && $request->min_price != null){
            $searchedbikes = Bike::where('name', 'like', '%'.$request->keyword.'%')->where('price', '>=', $request->min_price)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        }
        else{
            $searchedbikes = Bike::where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->where('price', '>=', $request->min_price)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        }


        $latestProducts = Product::orderby('created_at', 'DESC')->get();
        $blogs = Blog::orderby('created_at', 'DESC')->paginate(3);
        $request->flash();
        return view('pages/index', compact('newBikes', 'usedBikes', 'latestProducts', 'blogs', 'searchedbikes', 'companies', 'models'));
    }
    public function searchBikeBikelisting(Request $request)
    {
        $models = BikeModel::all();
        $companies = Company::all();
        if($request->max_price == null && $request->min_price == null){
            $searchedbikes = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            $bikesPriceHighToLow = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->orderby('price', 'DESC')->paginate($this->paginate_qty);
            $bikesPriceLowToHigh = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->orderby('price', 'ASC')->paginate($this->paginate_qty);
            $bikesDateOld = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
            $bikesDateRecent = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        }
        elseif($request->max_price != null && $request->min_price == null){
            $searchedbikes = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            $bikesPriceHighToLow = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->orderby('price', 'DESC')->paginate($this->paginate_qty);
            $bikesPriceLowToHigh = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->orderby('price', 'ASC')->paginate($this->paginate_qty);
            $bikesDateOld = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
            $bikesDateRecent = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        }
        elseif($request->max_price == null && $request->min_price != null){
            $searchedbikes = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '>=', $request->min_price)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            $bikesPriceHighToLow = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '>=', $request->min_price)->orderby('price', 'DESC')->paginate($this->paginate_qty);
            $bikesPriceLowToHigh = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '>=', $request->min_price)->orderby('price', 'ASC')->paginate($this->paginate_qty);
            $bikesDateOld = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '>=', $request->min_price)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
            $bikesDateRecent = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '>=', $request->min_price)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        }
        else{
            $searchedbikes = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->where('price', '>=', $request->min_price)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            $bikesPriceHighToLow = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->where('price', '>=', $request->min_price)->orderby('price', 'DESC')->paginate($this->paginate_qty);
            $bikesPriceLowToHigh = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->where('price', '>=', $request->min_price)->orderby('price', 'ASC')->paginate($this->paginate_qty);
            $bikesDateOld = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->where('price', '>=', $request->min_price)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
            $bikesDateRecent = Bike::where('is_active', true)->where('name', 'like', '%'.$request->keyword.'%')->where('price', '<=', $request->max_price)->where('price', '>=', $request->min_price)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        }


        $request->flash();
        return view('pages/bike_listing', ['bikes'=>$searchedbikes, 'companies'=>$companies, 'models'=>$models, 'bikesPriceHighToLow'=>$bikesPriceHighToLow, 'bikesPriceLowToHigh'=>$bikesPriceLowToHigh, 'bikesDateOld'=>$bikesDateOld, 'bikesDateRecent'=>$bikesDateRecent]);

        //return view('pages/index', compact('newBikes', 'usedBikes', 'latestProducts', 'blogs', 'searchedbikes', 'companies', 'models'));
    }

    public function searchBikeSidebarIndex(Request $request)
    {
        //return $request;
        $models = BikeModel::all();

        $companies = Company::all();
        $newBikes = Bike::where('is_active', true)->where('category', 'New Bike')->orderby('created_at', 'DESC')->get();
        $usedBikes = Bike::where('is_active', true)->where('category', 'Used Bike')->orderby('created_at', 'DESC')->get();


        $searchedbikes = Bike::where('is_active', true)->when($request->filled('city') , function ($query) use ($request){
            return $query->whereIn('reg_city_id', $request->city);
        })
        ->when($request->filled('price_from') , function ($query) use ($request){
            return $query->where('model_year' , '>=', $request->price_from);
        })
        ->when($request->filled('price_to') , function ($query) use ($request){
            return $query->where('model_year' , '<=', $request->price_to);
        })
        ->when($request->filled('body_type') , function ($query) use ($request){
            return $query->whereIn('body_type' , $request->body_type);
        })
        ->when($request->filled('companies') , function ($query) use ($request){
            return $query->whereIn('company_id' , $request->companies);
        })
        ->when($request->filled('models') , function ($query) use ($request){
            return $query->whereIn('model_id' , $request->models);
        });

        if($request->category != 'Both'){
            $searchedbikes = $searchedbikes->where('category', $request->category)->paginate($this->paginate_qty);
        }
        else{
            $searchedbikes = $searchedbikes->paginate($this->paginate_qty);
        }


        $latestProducts = Product::orderby('created_at', 'DESC')->get();
        $blogs = Blog::orderby('created_at', 'DESC')->paginate(3);
        $request->flash();
        return view('pages/index', compact('newBikes', 'usedBikes', 'latestProducts', 'blogs', 'searchedbikes', 'models', 'companies'));
    }

    public function searchBikeSidebarBikelisting(Request $request)
    {
        //return $request;
        $models = BikeModel::all();
        $companies = Company::all();

        if($request->category == 'Both'){
            if($request->price_from == null && $request->price_to == null){
                $searchedbikes = Bike::where('is_active', true)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('is_active', true)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('is_active', true)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('is_active', true)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('is_active', true)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            }elseif($request->price_from != null && $request->price_to == null){
                $searchedbikes = Bike::where('is_active', true)->where('model_year', '>=', $request->price_from)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('is_active', true)->where('model_year', '>=', $request->price_from)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('is_active', true)->where('model_year', '>=', $request->price_from)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('is_active', true)->where('model_year', '>=', $request->price_from)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('is_active', true)->where('model_year', '>=', $request->price_from)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            }
            elseif($request->price_from == null && $request->price_to != null){
                $searchedbikes = Bike::where('is_active', true)->where('model_year', '<=', $request->price_to)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('is_active', true)->where('model_year', '<=', $request->price_to)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('is_active', true)->where('model_year', '<=', $request->price_to)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('is_active', true)->where('model_year', '<=', $request->price_to)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('is_active', true)->where('model_year', '<=', $request->price_to)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            }
            else{
                $searchedbikes = Bike::where('is_active', true)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('is_active', true)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('is_active', true)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('is_active', true)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('is_active', true)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            }

        }
        else{
            if($request->price_from == null && $request->price_to == null){
                $searchedbikes = Bike::where('is_active', true)->where('category', $request->category)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('is_active', true)->where('category', $request->category)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('is_active', true)->where('category', $request->category)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('is_active', true)->where('category', $request->category)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('is_active', true)->where('category', $request->category)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            }elseif($request->price_from != null && $request->price_to == null){
                $searchedbikes = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '>=', $request->price_from)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '>=', $request->price_from)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '>=', $request->price_from)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '>=', $request->price_from)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '>=', $request->price_from)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            }
            elseif($request->price_from == null && $request->price_to != null){
                $searchedbikes = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '<=', $request->price_to)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '<=', $request->price_to)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '<=', $request->price_to)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '<=', $request->price_to)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '<=', $request->price_to)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
            }
            else{
                $searchedbikes = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('is_active', true)->where('category', $request->category)->where('model_year', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
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
                $searchedbikes->forget($key);
                $bikesPriceHighToLow->forget($key);
                $bikesPriceLowToHigh->forget($key);
                $bikesDateOld->forget($key);
                $bikesDateRecent->forget($key);
            }





        }



        $request->flash();
        return view('pages/bike_listing', ['bikes'=>$searchedbikes, 'companies'=>$companies, 'models'=>$models, 'bikesPriceHighToLow'=>$bikesPriceHighToLow, 'bikesPriceLowToHigh'=>$bikesPriceLowToHigh, 'bikesDateOld'=>$bikesDateOld, 'bikesDateRecent'=>$bikesDateRecent]);

        //return view('pages/index', compact('newBikes', 'usedBikes', 'latestProducts', 'blogs', 'searchedbikes', 'models', 'companies'));
    }
}
