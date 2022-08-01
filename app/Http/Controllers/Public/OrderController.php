<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Events\CreateOrder;
use Session;

class OrderController extends Controller
{


    public function create()

    {
        return view('frontend.orders.order_create');
    }

    public function store(Request $request)
    {

        $data = [
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'address'=>$request->address,
            'note'=>$request->note,
            'total_price' => $request->total_price,
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
                'qty' => $qty,
            ];
            $product = Product::find($productId);
            $newInventory= $product->inventory - $qty;
            $product->update(['inventory' => $newInventory]);
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
