<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BikeReview;
use App\Models\Company;
use App\Models\Bike;
use Auth;
use App\Models\BikeModel;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bikes = Bike::all();
        // foreach ($bikes as $key => $value) {
        //     $model = BikeModel::find($value->model_id);
        //     $model->update(['body_type'=>$value->body_type]);
        // }
        $reviews = BikeReview::paginate(15);
        $bike_models = BikeModel::orderby('no_of_reviews', 'DESC')->get();

        return view('pages/review_list', compact('reviews', 'bike_models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            $companies = Company::all();
            $models = BikeModel::all();
            return view('pages/review_create', compact('companies', 'models'));
        }
        else{
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
        if(Auth::check()){
            $inputs = $request->all();
            $inputs['user_id'] = Auth::id();
            BikeReview::create($inputs);

            $ratingFromUser = ($request->style + $request->comfort + $request->performance
             + $request->value_for_money + $request->fuel_economy) / 5;

            $model = BikeModel::find($request->model_id);
            $no_of_reviews = $model->no_of_reviews;
            $rating = $model->no_of_reviews;
            $model->update(['no_of_reviews'=>$no_of_reviews+1, 'rating'=>(($ratingFromUser + $rating)/2)]);

            //
            $bikes = Bike::where('category', 'New Bike')->where('model_id', $model->id)->get();
            foreach ($bikes as $key => $bike) {
               $bike->update(['no_of_reviews'=>$no_of_reviews+1, 'rating'=>(($ratingFromUser + $rating)/2)]);
            }

            return redirect()->back()->with('success', 'Review Saved Successfully !');
        }
        else{
            return redirect()->route('login');

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

    public function searchByReviewOrder(Request $request)
    {
        $reviews = BikeReview::orderby('created_at', $request->sortby ? 'DESC' : 'ASC')->paginate(1);
        $bike_models = BikeModel::orderby('no_of_reviews', 'DESC')->paginate(15);
        return view('pages/review_list', compact('reviews', 'bike_models'));
    }
}
