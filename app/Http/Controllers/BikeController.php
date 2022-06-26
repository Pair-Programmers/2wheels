<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;
use App\Models\BikeModel;
use App\Models\Company;
use App\Models\BikeReview;
use App\Models\User;
use App\Models\Blog;
use App\Models\Wishlist;
use Auth;

class BikeController extends Controller
{
    private $paginate_qty = 15;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newbikeprices($company='all')
    {
        return view('pages/newbikeprices', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(Auth::check()){
            $models = BikeModel::all();
            $companies = Company::all();
            return view('pages/bike_create', compact('companies', 'models'));
        }else{
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        if($request->hasfile('images'))
         {

            foreach($request->file('images') as $key => $image)
            {
                $name=time().'_'. $key . '_'.$image->getClientOriginalName();
                $image->move(public_path().'/storage/images/bikes', $name);
                $data[] = $name;
            }
         }

         unset($inputs['user']);
         unset($inputs['used_bike']);

         $user = User::find(Auth::id());
         $company = Company::find($request->company_id);
         $model = BikeModel::find($request->model_id);

         $no_of_posts = $user->no_of_post_bike;
        $inputs['name'] = $company->name . ' ' . $model->name . ' ' . $request->model_year;
        $inputs['user_id'] = Auth::id();
        $inputs['images'] = json_encode($data);
        $inputs['additional_info'] = json_encode($request->additional_info);
        //return  $inputs;
         if(Auth::user()->type == 'Dealer'){
            if($user->no_of_post_bike > 5){
                return redirect()->back()->with('error', 'Maximum Post Reaches, You canot Post More');
            }else{
                Bike::create($inputs);

                $user->update(['no_of_post_bike'=>($no_of_posts+1)]);
                return redirect()->back()->with('success', 'Post Submitted Successfully');
            }
         }
         else{
            if($user->no_of_post_bike > 3){
                return redirect()->back()->with('error', 'Maximum Post Reaches, You canot Post More');
            }else{
                Bike::create($inputs);
                $user->update(['no_of_post_bike'=>($no_of_posts+1)]);
                return redirect()->back()->with('success', 'Post Submitted Successfully');
            }
         }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bike = Bike::find($id);
        return view('pages/bike_show', compact('bike'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bike = Bike::find($id);
        $models = BikeModel::all();
        $companies = Company::all();
        return view('pages/bike_edit', compact('bike', 'models', 'companies'));
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
        $inputs = $request->all();

        if($request->hasfile('images'))
         {

            foreach($request->file('images') as $key => $image)
            {
                $name=time().'_'. $key . '_'.$image->getClientOriginalName();
                $image->move(public_path().'/storage/images/bikes', $name);
                $data[] = $name;

            }

            $inputs['images'] = json_encode($data);
         }

         unset($inputs['user']);
         unset($inputs['used_bike']);

         $company = Company::find($request->company_id);
         $model = BikeModel::find($request->model_id);
         $inputs['name'] = $company->name . ' ' . $model->name . ' ' . $request->model_year;

        $inputs['user_id'] = Auth::id();
        $inputs['additional_info'] = json_encode($request->additional_info);

        $bike = Bike::find($id);
        $bike->update($inputs);
        return redirect()->back()->with('success', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bike = Bike::find($id);
        $bike->delete();
        return redirect()->back()->with('success', 'Post Updated Successfully');

    }

    public function usedBikes()
    {
        $companies = Company::all();
        $usedBikes = Bike::where('category', 'Used Bike')->get();
        $popularUsedBikes = Bike::where('category', 'Used Bike')->where('rating', '>=', 4)->get();
        return view('pages/usedbikes', compact('usedBikes','popularUsedBikes', 'companies'));
    }

    public function newBikes()
    {
        $reviews = BikeReview::paginate(2);
        $companies = Company::all();
        $popularNewBikes = Bike::where('category', 'New Bike')->where('rating', '>=', 4)->get();
        return view('pages/newbike', compact('popularNewBikes', 'companies', 'reviews'));
    }

    ///////////////////////////////////

    public function usedBikesByMake($make)//ok
    {
        $models = BikeModel::all();
        $companies = Company::all();
        $search_result = Company::find($make)->name;

        $bikes = Bike::where('category', 'Used Bike')->where('company_id', $make)->paginate($this->paginate_qty);
        $bikesPriceHighToLow = Bike::where('category', 'Used Bike')->where('company_id', $make)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceLowToHigh = Bike::where('category', 'Used Bike')->where('company_id', $make)->orderby('price', 'ASC')->paginate($this->paginate_qty);
        $bikesDateOld = Bike::where('category', 'Used Bike')->where('company_id', $make)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        $bikesDateRecent = Bike::where('category', 'Used Bike')->where('company_id', $make)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wishlist'));
    }

    public function usedBikesByBodyType($body_type)//ok
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $search_result = $body_type;

        $bikes = Bike::where('category', 'Used Bike')->where('body_type', $body_type)->paginate($this->paginate_qty);
        $bikesPriceHighToLow = Bike::where('category', 'Used Bike')->where('body_type', $body_type)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceLowToHigh = Bike::where('category', 'Used Bike')->where('body_type', $body_type)->orderby('price', 'ASC')->paginate($this->paginate_qty);
        $bikesDateOld = Bike::where('category', 'Used Bike')->where('body_type', $body_type)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        $bikesDateRecent = Bike::where('category', 'Used Bike')->where('body_type', $body_type)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wishlist'));
    }

    public function usedBikesByCity($city)//ok
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $search_result = $city;

        $bikes = Bike::where('category', 'Used Bike')->where('reg_city_id', $city)->paginate($this->paginate_qty);
        $bikesPriceHighToLow = Bike::where('category', 'Used Bike')->where('reg_city_id', $city)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceLowToHigh = Bike::where('category', 'Used Bike')->where('reg_city_id', $city)->orderby('price', 'ASC')->paginate($this->paginate_qty);
        $bikesDateOld = Bike::where('category', 'Used Bike')->where('reg_city_id', $city)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        $bikesDateRecent = Bike::where('category', 'Used Bike')->where('reg_city_id', $city)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wishlist'));
    }

    public function usedBikesByPrice($price)//
    {
        $models = BikeModel::all();

        $companies = Company::all();
        switch ($price) {
            case '1':
                $search_result = 'below 20000';
                $bikes = Bike::where('category', 'Used Bike')->where('price', '<', 20000)->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('category', 'Used Bike')->where('price', '<', 20000)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('category', 'Used Bike')->where('price', '<', 20000)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('category', 'Used Bike')->where('price', '<', 20000)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('category', 'Used Bike')->where('price', '<', 20000)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                break;
            case '2':
                $search_result = '20000 to 40000';
                $bikes = Bike::where('category', 'Used Bike')->where('price', '>=', 20000)->where('price', '<=', 40000)->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('category', 'Used Bike')->where('price', '>=', 20000)->where('price', '<=', 40000)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('category', 'Used Bike')->where('price', '>=', 20000)->where('price', '<=', 40000)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('category', 'Used Bike')->where('price', '>=', 20000)->where('price', '<=', 40000)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('category', 'Used Bike')->where('price', '>=', 20000)->where('price', '<=', 40000)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                break;
            case '3':
                $search_result = '40000 to 60000';
                $bikes = Bike::where('category', 'Used Bike')->where('price', '>=', 40000)->where('price', '<=', 60000)->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('category', 'Used Bike')->where('price', '>=', 40000)->where('price', '<=', 60000)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('category', 'Used Bike')->where('price', '>=', 40000)->where('price', '<=', 60000)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('category', 'Used Bike')->where('price', '>=', 40000)->where('price', '<=', 60000)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('category', 'Used Bike')->where('price', '>=', 40000)->where('price', '<=', 60000)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                break;
            case '4':
                $search_result = '60000 to 100000';
                $bikes = Bike::where('category', 'Used Bike')->where('price', '>=', 60000)->where('price', '<=', 100000)->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('category', 'Used Bike')->where('price', '>=', 60000)->where('price', '<=', 100000)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('category', 'Used Bike')->where('price', '>=', 60000)->where('price', '<=', 100000)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('category', 'Used Bike')->where('price', '>=', 60000)->where('price', '<=', 100000)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('category', 'Used Bike')->where('price', '>=', 60000)->where('price', '<=', 100000)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                break;
            case '5':
                $search_result = '100000 to 100000';
                $bikes = Bike::where('category', 'Used Bike')->where('price', '>=', 100000)->where('price', '<=', 140000)->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('category', 'Used Bike')->where('price', '>=', 100000)->where('price', '<=', 140000)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('category', 'Used Bike')->where('price', '>=', 100000)->where('price', '<=', 140000)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('category', 'Used Bike')->where('price', '>=', 100000)->where('price', '<=', 140000)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('category', 'Used Bike')->where('price', '>=', 100000)->where('price', '<=', 140000)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                break;
            case '6':
                $search_result = 'above 1400000';
                $bikes = Bike::where('category', 'Used Bike')->where('price', '>', 1400000)->paginate($this->paginate_qty);
                $bikesPriceHighToLow = Bike::where('category', 'Used Bike')->where('price', '>', 1400000)->orderby('price', 'DESC')->paginate($this->paginate_qty);
                $bikesPriceLowToHigh = Bike::where('category', 'Used Bike')->where('price', '>', 1400000)->orderby('price', 'ASC')->paginate($this->paginate_qty);
                $bikesDateOld = Bike::where('category', 'Used Bike')->where('price', '>', 1400000)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
                $bikesDateRecent = Bike::where('category', 'Used Bike')->where('price', '>', 1400000)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
                break;
            default:
                $vendors = array();
          }

          if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

          return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
          'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wishlist'));
    }

    public function newBikesByMake($make)//ok
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $search_result = Company::find($make)->name;

        $bikes = Bike::where('category', 'New Bike')->where('company_id', $make)->paginate($this->paginate_qty);
        $bikesPriceHighToLow = Bike::where('category', 'New Bike')->where('company_id', $make)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceLowToHigh = Bike::where('category', 'New Bike')->where('company_id', $make)->orderby('price', 'ASC')->paginate($this->paginate_qty);
        $bikesDateOld = Bike::where('category', 'New Bike')->where('company_id', $make)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        $bikesDateRecent = Bike::where('category', 'New Bike')->where('company_id', $make)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wishlist'));
    }

    public function bikesByMake($make)//ok
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $search_result = Company::find($make)->name;

        $bikes = Bike::where('company_id', $make)->paginate($this->paginate_qty);
        $bikesPriceHighToLow = Bike::where('company_id', $make)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceLowToHigh = Bike::where('company_id', $make)->orderby('price', 'ASC')->paginate($this->paginate_qty);
        $bikesDateOld = Bike::where('company_id', $make)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        $bikesDateRecent = Bike::where('company_id', $make)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wishlist'));
    }

    public function newBikesByModel($model)//
    {
        $bike = Bike::where('category', 'New Bike')->where('model_id', $model)->get()->first();

        return view('pages/bike_new_show', compact('bike'));

        //old sce
        // $models = BikeModel::all();

        // $companies = Company::all();
        // $search_result = BikeModel::find($model)->name;

        // $bikes = Bike::where('category', 'New Bike')->where('model_id', $model)->paginate($this->paginate_qty);
        // $bikesPriceHighToLow = Bike::where('category', 'New Bike')->where('model_id', $model)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        // $bikesPriceLowToHigh = Bike::where('category', 'New Bike')->where('model_id', $model)->orderby('price', 'ASC')->paginate($this->paginate_qty);
        // $bikesDateOld = Bike::where('category', 'New Bike')->where('model_id', $model)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        // $bikesDateRecent = Bike::where('category', 'New Bike')->where('model_id', $model)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);


        // return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        // 'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models'));
    }

    public function usedBikesByModel($model)//ok
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $search_result = BikeModel::find($model)->name;

        $bikes = Bike::where('category', 'Used Bike')->where('model_id', $model)->paginate($this->paginate_qty);
        $bikesPriceHighToLow = Bike::where('category', 'Used Bike')->where('model_id', $model)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceLowToHigh = Bike::where('category', 'Used Bike')->where('model_id', $model)->orderby('price', 'ASC')->paginate($this->paginate_qty);
        $bikesDateOld = Bike::where('category', 'Used Bike')->where('model_id', $model)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        $bikesDateRecent = Bike::where('category', 'Used Bike')->where('model_id', $model)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wishlist'));
    }

    public function bikesByModel($model)//ok
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $search_result = BikeModel::find($model)->name;

        $bikes = Bike::where('model_id', $model)->paginate($this->paginate_qty);
        $bikesPriceHighToLow = Bike::where('model_id', $model)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceLowToHigh = Bike::where('model_id', $model)->orderby('price', 'ASC')->paginate($this->paginate_qty);
        $bikesDateOld = Bike::where('model_id', $model)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        $bikesDateRecent = Bike::where('model_id', $model)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wislist'));
    }


    public function bikeListing()//
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $search_result = '';

        $bikes = Bike::orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceHighToLow = Bike::orderby('price', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceLowToHigh = Bike::orderby('price', 'ASC')->paginate($this->paginate_qty);
        $bikesDateOld = Bike::orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        $bikesDateRecent = Bike::orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
         'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wishlist'));

    }

    public function search_by_word(Request $request)//
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $search_result = $request->searchbyname;

        $bikes = Bike::where('name', 'like', '%'.$request->searchbyname.'%')->orderby('created_at', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceHighToLow = Bike::where('name', 'like', '%'.$request->searchbyname.'%')->orderby('price', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceLowToHigh = Bike::where('name', 'like', '%'.$request->searchbyname.'%')->orderby('price', 'ASC')->paginate($this->paginate_qty);
        $bikesDateOld = Bike::where('name', 'like', '%'.$request->searchbyname.'%')->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        $bikesDateRecent = Bike::where('name', 'like', '%'.$request->searchbyname.'%')->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
         'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wishlist'));

    }

    public function search_by_price_range(Request $request)//
    {
        $models = BikeModel::all();

        $companies = Company::all();
        $search_result = $request->price_from . '  -  ' . $request->price_to;

        $bikes = Bike::where('price', '>=', $request->price_from)->where('price', '<=', $request->price_to)->paginate($this->paginate_qty);
        $bikesPriceHighToLow = Bike::where('price', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('price', 'DESC')->paginate($this->paginate_qty);
        $bikesPriceLowToHigh = Bike::where('price', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('price', 'ASC')->paginate($this->paginate_qty);
        $bikesDateOld = Bike::where('price', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'ASC')->paginate($this->paginate_qty);
        $bikesDateRecent = Bike::where('price', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'DESC')->paginate($this->paginate_qty);

        if(Auth::user()){
            $wishlist = Wishlist::where('for_favourite', 'bike')->where('user_id', Auth::id())->get();
        }
        else{
            $wishlist = null;
        }

        return view('pages/bike_listing', compact('bikes', 'bikesPriceHighToLow',
        'bikesPriceLowToHigh', 'bikesDateOld', 'bikesDateRecent', 'search_result', 'companies', 'models', 'wishlist'));

    }

    public function myBikeAdds()
    {
        $bikes = Bike::where('user_id', Auth::id())->orderby('created_at', 'DESC')->get();
        return view('pages/my_bike_adds', compact('bikes'));
    }

    public function myFavBikes()
    {
        //do ur code
        $bikes = Auth::user()->wishlists->where('for_favourite','bike');
        return view('pages/my_fav_bikes', compact('bikes'));
    }


    public function bikeComperison()
    {
        $companies = Company::all();
        return view('pages/bikecomparison', compact('companies'));
    }

    public function doBikeComperison(Request $request)
    {
        $count = count($request->models);
        if(count($request->models)==3){
            $model1 = BikeModel::find($request->models[0]);
            $model2 = BikeModel::find($request->models[1]);
            $model3 = BikeModel::find($request->models[2]);

            return view('pages/bikecomparisondetail', compact('count', 'model1', 'model2', 'model3' ));

        }
        else{
            $model1 = BikeModel::find($request->models[0]);
            $model2 = BikeModel::find($request->models[1]);

            return view('pages/bikecomparisondetail', compact('count', 'model1', 'model2'));

        }

    }

    public function viewBikeComperison($no)
    {
        if($no == 1){
            $model1 = BikeModel::find(2);
            $model2 = BikeModel::find(16);
        }
        elseif($no == 2){
            $model1 = BikeModel::find(7);
            $model2 = BikeModel::find(4);
        }
        elseif($no == 3){
            $model1 = BikeModel::find(8);
            $model2 = BikeModel::find(6);
        }
        $count = 2;
        return view('pages/bikecomparisondetail', compact('count', 'model1', 'model2'));


    }

    public function bikeimport()
    {

        $models = BikeModel::all();
        $companies = Company::all();
        $allnews = Blog::orderby('created_at', 'DESC')->paginate(3);

        return view('pages/bikeimport', compact('models', 'companies', 'allnews'));

    }
    public function bikefinance()
    {

        $models = BikeModel::all();
        $companies = Company::all();

        return view('pages/bikefinance', compact('models', 'companies'));

    }

    public function mtmispak()
    {

        $models = BikeModel::all();
        $companies = Company::all();

        return view('pages/mtmispak', compact('models', 'companies'));

    }
}
