<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use View;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
          
        $view = View::make('adminpanel/pages/blog_list', ['blogs'=>$blogs]);
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
        $view = View::make('adminpanel/pages/blog_add');
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
            $image->move(public_path().'/storage/images/blogs/', $name); 
            $inputs['image'] = $name;
        }else{
            $inputs['image'] = 'xyz.png';
        }
        
        

        Blog::create($inputs);
        return redirect()->route('blog.index');
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
        $blog = Blog::find($id);

        $view = View::make('adminpanel/pages/blog_edit', ['blog'=>$blog]);
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
        $blog = Blog::find($id);

        $inputs = $request->all();
        if($request->hasfile('image'))
        {
            $image = $request->image;
            $name=time() . '_'. $request->name . '.'. $image->getClientOriginalExtension();
            $image->move(public_path().'/storage/images/blogs/', $name); 
            $inputs['image'] = $name;
        }

        

        $blog->update($inputs);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfuly !');
    }
}
