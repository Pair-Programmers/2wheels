<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;


class BikeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bike::all();
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        if (Bike::create($request->all())) {
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
        return Bike::find($id);
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
        

        if($user = Bike::find($id)){
            if($user->update($request->all())){
                return ['message'=>'Succefuly updated'];;
            }else{
                return ['message'=>"Error while updating"];
            }
        }else{
            return ['message'=>"User not found"];
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
        if (Bike::destroy($id)) {
            return ['message' => 'deleted successfully'];
        } else {
            return ['message' => 'This ID does not exists'];
        }
    }
}
