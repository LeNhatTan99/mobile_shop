@extends('frontend.app')
@section('content')

<div class="thumbnail-info-order ">

    <div class="header-table-cart">
    <h3 class="text-center">Đơn hàng đã đặt</h3>
  </div>
        <div class="header-table-cart">
            @foreach ($orders as $order=>$products )
            <div class="info-order">
                <strong>Thông tin đơn hàng {{$order}}</strong>
                <div class="row ">

                               <div class="col-4"><strong> Tên sản phẩm</strong> </div>
                               <div class="col-2"> <strong>Số lượng</strong> </div>
                               <div class="col-3"> <strong>Đơn giá</strong>  </div>
                                <div class="col-3"> <strong>Thành tiền</strong> </div>
                                @foreach ($products as $product)
                                <div class="col-4"> {{$product->product_name}} </div>
                                <div class="col-2 text-center"> {{$product->qty}} </div>
                                @if($product->discount > 0)
                                <div class="col-3"> {{number_format($product->discount)}} đ </div>
                                <div class="col-3"> {{number_format($product->discount * $product->qty)}} đ </div>
                                @else
                                <div class="col-3"> {{number_format($product->price)}} đ </div>
                                <div class="col-3"> {{number_format($product->price * $product->qty)}} đ </div>
                                @endif
                                @endforeach
                                <hr class="my-4">

                    </div>

                </div>
            @endforeach

            </div>


    {{--
    <div class="header-table-cart">
        <h4>Bạn chưa đặt đơn hàng nào!</h4>
       </div> --}}

    </div>

    @endsection
