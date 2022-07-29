@extends('frontend.app')
@section('content')

<div class="header-table-cart">
    <h4>Đơn hàng đã đặt</h4>
  </div>

@foreach ($orders as $order )
@if (auth()->user()->email == $order->email)

  <div class="header-table-cart">

        <strong>Thông tin đơn hàng {{$order->id}}</strong>
        <div class="thumbnail-info-order">
            <div class="info-order">
                <p>Người đặt hàng: {{$order->name}}</p>
                <p>Địa chỉ: {{$order->address}}</p>
                <p>Số điện thoại: {{$order->phone_number}}</p>
                <p>Email: {{$order->email}}</p>
                <p>Tên sản phẩm: {{$order->product_name}}</p>
                <p>Số lượng: {{$order->qty}}</p>
                <p>Tổng tiền: {{$order->total_price}}</p>
                <p>Ngày đặt: {{$order->created_at}}</p>
                <p>Trạng thái:  @if ($order->status == 0)
                    <span>Đang xử lý</span>
                    @else
                    <span>Đã xử lý</span>
                    @endif
                </p>
                 <p>Ghi chú: {{$order->note}}</p>
            </div>
        </div>

    </div>
    @endif
    @endforeach
@if (auth()->user()->email != $order->email)
    <div class="header-table-cart">
        <h4>Bạn chưa đặt đơn hàng nào!</h4>
       </div>

@endif
@endsection
