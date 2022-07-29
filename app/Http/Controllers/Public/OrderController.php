<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Events\CreateOrder;


class OrderController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('frontend.orders.order_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'address'=>$request->address,
            'note'=>$request->note,
            'slug' => Str::slug($request->name),
        ];

        DB::beginTransaction();
        try {
          $order =  Order::create($data);
          $orderId = $order->id;
          $data = [];
          foreach ($request->products_qty as $productId => $qty) {
            $data[] = [
                'order_id' => $orderId,
                'product_id' => $productId,
                'qty' => $qty
            ];
          }
          $order->products()->sync($data);
            DB::commit();
            event(new CreateOrder($order,$data));
            $request->session()->forget('cart');
            return redirect()->route('checkout.success');
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            DB::rollBack();
            return back()->with('error', 'Đặt hàng thất bại');
        }
    }

    public function checkoutSuccess(){
        return view('frontend.orders.order_success');
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
