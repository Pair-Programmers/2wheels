<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $checkWishlist=Wishlist::where('product_or_bike_id',$request->product_or_bike_id)
        ->where('user_id',Auth::user()->id)
        ->where('for_favourite',$request->for_favourite)
        ->first();


        if(!empty($checkWishlist)){
            return redirect()->back();
        }else{
        $wishlist=new Wishlist();
        $wishlist->user_id=Auth::user()->id;
        $wishlist->product_or_bike_id=$request->product_or_bike_id;
        $wishlist->for_favourite=$request->for_favourite;
        $wishlist->save();
        return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Wishlist::where('user_id',Auth::user()->id)->where('product_or_bike_id',$id)->delete();
        return redirect()->back();
    }
}
