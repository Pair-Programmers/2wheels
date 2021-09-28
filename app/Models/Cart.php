<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Cart
{
    private $contents;
    private $totalQty;
    private $totalPrice;

    public function __construct($oldCart){
        if ($oldCart){
            $this->contents=$oldCart->contents;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
        }
    }

    public function addProduct($product,$qty){
        $products=['qty'=>0, 'price'=>$product->price, 'product'=>$product];
        if ($this->contents){
            if (array_key_exists($product->id,$this->contents)){
                $products=$this->contents[$product->id];
            }
        }
        $products['qty']+=$qty;
        $products['price']=$product->price * $products['qty'];
        $this->contents[$product->id]=$products;
        $this->totalQty+=$qty;
        $this->totalPrice+=$product->price * $qty;

    }

    public function updateProduct($product,$qty){
        if ($this->contents){
            if (array_key_exists($product->id,$this->contents)){
                $products=$this->contents[$product->id];
            }
        }
        $this->totalQty-=$qty;
        $this->totalPrice-= $products['price'];
        $products['qty']=$qty;
        $products['price']=$product->price * $products['qty'];
        $this->totalQty+=$qty;
        $this->totalPrice+= $products['price'];
        $this->contents[$product->id]=$products;


    }

    public function removeProduct($product){
        if ($this->contents){
            if (array_key_exists($product->id,$this->contents)){
                $rProduct=$this->contents[$product->id];
                $this->totalQty-=$rProduct['qty'];
                $this->totalPrice-=$rProduct['price'];
                // Product::where('id',$product->id)->update(['quantity_available'=>$rProduct['qty']+$product->quantity_available]);
                Arr::forget($this->contents,$product->id);
            }
        }
    }

    public function getContents(){
        return $this->contents;
    }

    public function getTotalQty(){
        return $this->totalQty;
    }

    public function getTotalPrice(){
        return $this->totalPrice;
    }
}
