<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BikeReview;
use App\Models\Company;
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
        $reviews = BikeReview::all();
        $bike_models = BikeModel::orderby('no_of_reviews', 'DESC')->paginate(4);
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

            $model = BikeModel::find($request->model_id);
            $no_of_reviews = $model->no_of_reviews;
            $model->update(['no_of_reviews'=>$no_of_reviews+1]);
        
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
        $reviews = BikeReview::all();
        $bike_models = BikeModel::orderby('no_of_reviews', $request->sortby)->paginate(4);
        return view('pages/review_list', compact('reviews', 'bike_models'));
    }
}
