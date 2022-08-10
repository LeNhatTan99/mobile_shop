<?php

namespace App;


class Cart
{
    public $products = null;
    public $totalPrice = 0;
    public $totalQty = 0;

    public function __construct($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQty = $cart->totalQty;
        }
    }

    public function addCart( $product,$id){
        if($product->discount > 0 ){
            $price = $product->discount;
        } else {
            $price = $product->price;
        }
        $newProduct = ['qty'=> 0,'price'=>$price ,'productInfo'=> $product];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                // $newProduct = $this->products[$id] ;
                return back()->with('error','Sản phẩm đã có trong giỏ hàng');
            };
        }
        $newProduct['qty']++;
        $newProduct['price'] =$newProduct['qty']*$price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $price;
        $this->totalQty++;
    }
    public function deleteItemCart($id){
            $this->totalQty -= $this->products[$id]['qty'];
            $this->totalPrice -= $this->products[$id]['price'];
            unset($this->products[$id]);
    }

    public function updateItemCart($id,$qty){

        $product = $this->products[$id]['productInfo'];

        if($product->discount > 0){
            $price = $product->discount;
        } else $price = $product->price;
        $this->totalQty -= $this->products[$id]['qty'];
        $this->totalPrice -= $this->products[$id]['price'];

        $this->products[$id]['qty'] = $qty;
        $this->products[$id]['price'] =$qty* $price;

        $this->totalQty += $this->products[$id]['qty'];
        $this->totalPrice += $this->products[$id]['price'];

}


}
