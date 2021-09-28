<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use App\Models\Cart;
use App\Models\User;
use App\Models\ProductCategory;
use App\Models\Company;
use Session;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        $categories = ProductCategory::all();
        $products = Product::all();
        $productsPriceHighToLow = Product::orderby('price', 'DESC')->get();
        $productsPriceLowToHigh = Product::orderby('price', 'ASC')->get();
        $productsDateOld = Product::orderby('created_at', 'ASC')->get();
        $productsDateRecent = Product::orderby('created_at', 'DESC')->get();
        return view('pages/product_list', compact('products', 'productsPriceHighToLow',
         'productsPriceLowToHigh', 'productsDateOld', 'productsDateRecent', 'categories', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();

        if(Auth::check()){
            $categories = ProductCategory::all();
            return view('pages/product_create', compact('categories', 'companies'));
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

        if($request->hasfile('images'))
         {

            foreach($request->file('images') as $key => $image)
            {
                $name=time().'_'. $key . '_'.$image->getClientOriginalName();
                $image->move(public_path().'/storage/images/products', $name);
                $data[] = $name;
            }
         }


        $inputs['user_id'] = Auth::id();
        $inputs['images'] = json_encode($data);
        $inputs['additional_info'] = json_encode($request->additional_info);
        //return  $inputs;

        if(Auth::user()->type == 'Dealer'){
            if(Auth::user()->no_of_post_product > 5){
                return redirect()->back()->with('error', 'Maximum Post Reaches, You canot Post More');
            }else{
                Product::create($inputs);
                return redirect()->back()->with('success', 'Product Submitted Successfully');
            }
         }
         else{
            if(Auth::user()->no_of_post_product > 3){
                return redirect()->back()->with('error', 'Maximum Post Reaches, You canot Post More');
            }else{
                Product::create($inputs);
                return redirect()->back()->with('success', 'Product Submitted Successfully');
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
        $companies = Company::all();

        $product = Product::find($id);
        return view('pages/product_show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = ProductCategory::all();

        $companies = Company::all();
        $product = Product::find($id);
        return view('pages/product_edit', compact('product', 'categories', 'companies'));

        
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
                $image->move(public_path().'/storage/images/products', $name);
                $data[] = $name;
                $inputs['images'] = json_encode($data);

            }
         }


        $inputs['user_id'] = Auth::id();
        $inputs['additional_info'] = json_encode($request->additional_info);
        $product = Product::find($id);
        $product->update($inputs);
        return redirect()->back()->with('success', 'Product Updated Successfully');
         
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

    public function addToCart(Request $request, $quantity=null){

        $product=Product::find($request->product_id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $quantity=$request->quantity ? $request->quantity : 1;
        $cart=new Cart($oldCart);
        $cart->addProduct($product , $quantity);
        Session::put('cart',$cart);
        return redirect()->back()->with('success', $product->name . ' Added Successfully!');

    }

    public function updateCart(Request $request){
        $product=Product::find($request->product_id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;

        $cart=new Cart($oldCart);
        $cart->updateProduct($product , $request->quantity);
        Session::put('cart',$cart);
        return redirect()->back();

    }

    public function removeProductFromCart($id){

        $product=Product::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->removeProduct($product);
        Session::put('cart',$cart);
        return redirect()->back();


    }

    public function myProductAdds()
    {
        $products = Product::where('user_id', Auth::id())->orderby('created_at', 'DESC')->get();
        return view('pages/my_product_adds', compact('products'));
    }

    public function myFavProducts()
    {
        //do ur code

        $products = Auth::user()->wishlists->where('for_favourite','product');

        return view('pages/my_fav_products', compact('products'));
    }

    public function search_product_by_word(Request $request)
    {
        //return $request->searchbyname;
        $companies = Company::all();

        $categories = ProductCategory::all();
        $products = Product::where('name', 'like', '%'.$request->searchbyname.'%')->orderby('price', 'DESC')->get();
        $productsPriceHighToLow = Product::where('name', 'like', '%'.$request->searchbyname.'%')->orderby('price', 'DESC')->get();
        $productsPriceLowToHigh = Product::where('name', 'like', '%'.$request->searchbyname.'%')->orderby('price', 'ASC')->get();
        $productsDateOld = Product::where('name', 'like', '%'.$request->searchbyname.'%')->orderby('created_at', 'ASC')->get();
        $productsDateRecent = Product::where('name', 'like', '%'.$request->searchbyname.'%')->orderby('created_at', 'DESC')->get();
        return view('pages/product_list', compact('products', 'productsPriceHighToLow',
         'productsPriceLowToHigh', 'productsDateOld', 'productsDateRecent', 'categories', 'companies'));
    }


    public function search_by_price_range(Request $request)//
    {
        $companies = Company::all();
       
        $categories = ProductCategory::all();
        $products = Product::where('price', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('price', 'DESC')->get();
        $productsPriceHighToLow = Product::where('price', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('price', 'DESC')->get();
        $productsPriceLowToHigh = Product::where('price', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('price', 'ASC')->get();
        $productsDateOld = Product::where('price', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'ASC')->get();
        $productsDateRecent = Product::where('price', '>=', $request->price_from)->where('price', '<=', $request->price_to)->orderby('created_at', 'DESC')->get();
        return view('pages/product_list', compact('products', 'productsPriceHighToLow',
         'productsPriceLowToHigh', 'productsDateOld', 'productsDateRecent', 'categories', 'companies'));

    }

    public function search_product_by_brand($brand)//
    {
        $companies = Company::all();
       
        $categories = ProductCategory::all();
        $products = Product::where('brand', 'like', '%'.$brand.'%')->orderby('price', 'DESC')->get();
        $productsPriceHighToLow = Product::where('brand', 'like', '%'.$brand.'%')->orderby('price', 'DESC')->get();
        $productsPriceLowToHigh = Product::where('brand', 'like', '%'.$brand.'%')->orderby('price', 'ASC')->get();
        $productsDateOld = Product::where('brand', 'like', '%'.$brand.'%')->orderby('created_at', 'ASC')->get();
        $productsDateRecent = Product::where('brand', 'like', '%'.$brand.'%')->orderby('created_at', 'DESC')->get();
        return view('pages/product_list', compact('products', 'productsPriceHighToLow',
         'productsPriceLowToHigh', 'productsDateOld', 'productsDateRecent', 'categories', 'companies'));

    }

    public function search_product_by_category($id)//
    {
        $companies = Company::all();
       
        $categories = ProductCategory::all();
        $products = Product::where('category_id', $id)->orderby('price', 'DESC')->get();
        $productsPriceHighToLow = Product::where('category_id', $id)->orderby('price', 'DESC')->get();
        $productsPriceLowToHigh = Product::where('category_id', $id)->orderby('price', 'ASC')->get();
        $productsDateOld = Product::where('category_id', $id)->orderby('created_at', 'ASC')->get();
        $productsDateRecent = Product::where('category_id', $id)->orderby('created_at', 'DESC')->get();
        return view('pages/product_list', compact('products', 'productsPriceHighToLow',
         'productsPriceLowToHigh', 'productsDateOld', 'productsDateRecent', 'categories', 'companies'));

    }
}
