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

    public function addCart(  $product,$id){
        $newProduct = ['qty'=> 0,'price'=>$product->price ,'productInfo'=> $product];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                $newProduct = $this->products[$id] ;
            };
        }
        $newProduct['qty']++;
        $newProduct['price'] =$newProduct['qty']*$product->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->price;
        $this->totalQty++;
    }
    public function deleteItemCart($id){
        $this->totalQty -= $this->products[$id]['qty'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

}
