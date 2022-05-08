<?php


namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\OrderDetail;
use Session;
use View;

class OrderController extends Controller
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
        foreach(Session::get('cart')->getContents() as $key=> $product){
            $vendor_id[]=$product['product']->user_id;
        }
        $unique_vendor_id=array_unique($vendor_id);
        $order=new Order();
        $order->name=$request->name;
        $order->phone=$request->phone;
        $order->address=$request->address;
        $order->city_id=$request->city_id;
        $order->comment=$request->comments;
        $order->user_id=Auth::user()->id;
        $order->vendor_id=json_encode(array_values($unique_vendor_id));
        $order->total_ammount=Session::get('cart')->getTotalPrice();
        $order->total_quantity=Session::get('cart')->getTotalQty();
        $order->save();
        foreach($unique_vendor_id as $id){
            foreach(Session::get('cart')->getContents() as $key=> $product){
                if($product['product']->user_id==$id){
                    $order_detail=new OrderDetail();
                    $order_detail->order_id= $order->id;
                    $order_detail->product_id= $product['product']->id;
                    $order_detail->vendor_id= $id;
                    $order_detail->unit_price= $product['product']->price;
                    $order_detail->quantity= $product['qty'];
                    $order_detail->total_ammount= $product['price'];
                    $order_detail->save();
                }
            }
       }
       Session::forget('cart');
       return redirect('my_orders')->with('success','Your order placed successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $view = View::make('adminpanel/pages/order_show', ['order'=>$order]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
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

    public function myOrders()
    {
        // dd(Auth::user()->orders[0]->orderDetails[0]->orderDetailProducts);
        $orders=Auth::user()->orders;
        return view('pages/my_orders',compact('orders'));
    }

    public function ordersList()
    {
        $orders = Order::all();
        $view = View::make('adminpanel/pages/order_list', ['orders'=>$orders]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
    }

    public function changeStatus($id)
    {
        $order = Order::find($id);
        if( $order->status == 'Pending'){
            $order->status = 'Completed';
        }
        else{
            $order->status = 'Pending';
        }
        $order->save();

        return response()->json(['success'=>'done', 'status'=>$order->status]);
    }
}
