<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::paginate(6);
        $viewData=[
            'orders'=>$orders,
        ];
        return view('layouts.orders.index',$viewData);
    }



    public function show($id)
    {
        $col = ['order_product.qty','orders.*' ,DB::raw('products.name as product_name,price,discount')];
        $products = Order::join('order_product','orders.id','=','order_product.order_id')
                        ->join('products','products.id','=','order_product.product_id')
                        ->where('orders.id',$id)
                        ->get($col) ;
               $info=[];
            foreach($products as $order){
             $info = [
                       'name'=> $order->name,
                       'address'=> $order->address,
                        'phone_number'=>$order->phone_number,
                        'email'=>$order->email,
                        'created_at'=>$order->created_at,
                        'status'=>$order->status,
                        'note'=>$order->note,
                    ];
           };

         return view('layouts.orders.show',['products'=>$products,'info'=>$info]);
    }


    public function edit(Order $order)
    {
        return view('layouts.orders.edit',['order'=>$order]);
    }


    public function update(Request $request, Order $order)
    {
        $data=[
            'status'=>$request->status,
         ];
           DB::beginTransaction();
           try {
               $order->update($data);
               DB::commit();
            return redirect()->route('orders.index')->with('success', 'Cập nhật trạng thái đơn hàng thành công');;
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            return back()->with('error', 'Cập nhật trạng thái đơn hàng thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
