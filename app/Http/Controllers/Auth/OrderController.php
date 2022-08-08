<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function showProfileOrder(){
        $col = ['order_product.qty','orders.*' ,DB::raw('products.name as product_name,price,discount,thumbnail')];
        $orders = Order::join('order_product','orders.id','=','order_product.order_id')
                        ->join('products','products.id','=','order_product.product_id')
                        ->where('orders.email',auth()->user()->email)
                        ->get($col) ;
    return view('profile.profile_cart',['orders'=>$orders->groupBy('id')]);
    }

}
