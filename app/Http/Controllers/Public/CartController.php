<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{

    public function addCart(Request $request,$id){
        $product = DB::table('products')->where('id',$id)->first();
        if($product != null){
            $cart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($cart);
            $newCart->addCart($product,$id);
            $request->session()->put('cart',$newCart);
        }
        $viewData = [
            'newCart'=> $newCart,
        ];
       return back()->with('success', 'Đã thêm '. $product->name .' vào giỏ hàng thành công');
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
           $viewData = [
            'newCart'=> $newCart,
        ];
        return back()->with('success', 'Đã xoá sản phẩm thành công');
    }

public function   updateItemCart(Request $request,$id,$qty){

    $cart = Session('cart') ? Session('cart') : null;
    $newCart = new Cart($cart);
    $newCart->updateItemCart($id,$qty);
    $request->session()->put('cart',$newCart);

    return view('frontend.showcart')->with('success', 'Đã cập nhật số lượng thành công');;
}

public function showCart(){
    return view('frontend.showcart');
}

}
