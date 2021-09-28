<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required|max:15',
            'email' => 'email|unique|required',
            'password' => 'required|password',
            'phone' => 'required|max:15',
            'address' => 'required|max:30',
        ]);



        if (User::create($request->all())) {
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
        return User::find($id);
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
        $request->validate([
            'type' => 'required',
            'name' => 'required|max:15',
            'email' => 'email|unique|required',
            'password' => 'required|password',
            'phone' => 'required|max:15',
            'address' => 'required|max:30',
        ]);

        if($user = User::find($id)){
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
        if (User::destroy($id)) {
            return ['message' => 'deleted successfully'];
        } else {
            return ['message' => 'This ID does not exists'];
        }
    }
}
