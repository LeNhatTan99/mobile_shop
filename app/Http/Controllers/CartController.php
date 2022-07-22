<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
   public function Index()
    {
        $products = DB::table('products')->get();
        return view('frontend.app', ['products' => $products]);
    }


    public function addCart(Request $request,$id){
        $product = DB::table('products')->where('id',$id)->first();
        if($product != null){
            $cart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($cart);
            $newCart->addCart($product,$id);
            $request->session()->put('cart',$newCart);

        }
        return view('frontend.cart',['newCart'=>$newCart]);


    }


    public function   deleteItemCart(Request $request,$id){

            $cart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($cart);
            $newCart->deleteItemCart($id);
           if(Count($newCart->products)>0){
            $request->session()->put('cart',$newCart);
           }else {
            $request->session()->forget('cart');
           }


        return view('frontend.cart',['newCart'=>$newCart]);


    }



}
