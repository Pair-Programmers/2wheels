<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;


class ProductCategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductCategory::all();
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        if (ProductCategory::create($request->all())) {
            return ['message' => 'Creted Successfully'];
        } 
        else {
            return ['message' => 'Error While Creating'];
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
        return ProductCategory::find($id);
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
        

        if($user = ProductCategory::find($id)){
            if($user->update($request->all())){
                return ['message'=>'Succefuly updated'];;
            }else{
                return ['message'=>"Error while updating"];
            }
        }else{
            return ['message'=>"Record not found"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (ProductCategory::destroy($id)) {
            return ['message' => 'deleted successfully'];
        } else {
            return ['message' => 'This ID does not exists'];
        }
    }
}
