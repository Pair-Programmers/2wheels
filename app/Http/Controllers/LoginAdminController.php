<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    
    public function create()
    {
        return view('adminpanel.pages.login');
    }

    
    public function doLogin(Request $request)
    {
        //return $request->all();
        $user = User::where('email', $request->email)->where('type' ,'Admin')->where('password', $request->password)->first();
        if($user){
            Session::put('adminLogin', '1');
            Session::put('name', $user->name);
            return redirect()->route('admin_dashboard_page');
        }else{
            return redirect()->back()->with('error','No user find');
        }
         
    }

    
    public function doLogout()
    {
        Session::forget('adminLogin');
        Session::forget('name');
        return view('adminpanel.pages.login');
    }
}
