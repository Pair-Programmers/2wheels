<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Company;
use App\Models\BikeModel;

class BikeModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = BikeModel::all();

        $view = View::make('adminpanel/pages/blog_list', ['models'=>$models]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $models = BikeModel::all();

        $view = View::make('adminpanel/pages/model_add_list', ['companies'=>$companies, 'models'=>$models]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
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
        if($request->hasfile('image'))
        {
            $image = $request->image;
            $name=time() . '_'. $request->name . '.'. $image->getClientOriginalExtension();
            $image->move(public_path().'/storage/images/bikemodels/', $name);
            $inputs['image'] = $name;
        }else{
            $inputs['image'] = 'xyz.png';
        }



        BikeModel::create($inputs);
        return redirect()->route('model.create');
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
        $model = BikeModel::find($id);
        $companies = Company::all();

        $view = View::make('adminpanel/pages/model_edit', ['model'=>$model, 'companies'=>$companies]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
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
        $model = BikeModel::find($id);

        $inputs = $request->all();
        if($request->hasfile('image'))
        {
            $image = $request->image;
            $name=time() . '_'. $request->name . '.'. $image->getClientOriginalExtension();
            $image->move(public_path().'/storage/images/bikemodels/', $name);
            $inputs['image'] = $name;
        }



        $model->update($inputs);
        return redirect()->route('model.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BikeModel::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfuly !');
    }

    public function getModel($id)
    {
        $models = BikeModel::where('company_id', $id)->get();
        return response()->json(['models'=>$models]);
    }


}
