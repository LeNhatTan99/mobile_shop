@extends('layouts.app')
@section('content')
<table class="table col-6">
    <h4>Thông tin đơn hàng</h4>
<tr>
    <td >Tên KH:</td>
    <td>{{$order->name}}</td>
</tr>
<tr>
    <td >Địa chỉ:</td>
    <td>{{$order->address}}</td>
</tr>
<tr>
    <td >Số điện thoại:</td>
    <td>{{$order->phone_number}}</td>
</tr>
<tr>
    <td >Email:</td>
    <td>{{$order->email}}</td>
</tr>
<tr>
    <td >Tên sản phẩm:</td>
    <td>{{$order->product_name}}</td>
</tr>
<tr>
    <td >Số lượng:</td>
    <td>{{$order->qty}}</td>
</tr>
<tr>
    <td >Tổng tiền:</td>
    <td>{{$order->total_price}}</td>
</tr>
<tr>
    <td >Ngày đặt:</td>
    <td>{{$order->created_at}}</td>
</tr>
<tr>
    <td >Trạng thái:</td>
    <td>
        @if ($order->status == 0)
        <span>Đang xử lý</span>
        @else
        <span>Đã xử lý</span>
        @endif
    </td>
</tr>
<tr>
    <td >Ghi chú của KH:</td>
    <td>{{$order->note}}</td>
</tr>
</table>

@endsection
