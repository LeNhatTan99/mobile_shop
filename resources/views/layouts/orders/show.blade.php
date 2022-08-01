@extends('layouts.app')
@section('content')

<div class="row">
    <h4>Thông tin đơn hàng</h4>
<div>
    <table class="table col-6">
        <tr>
            <td >Tên KH:</td>
            <td>{{$info['name']}}</td>
        </tr>
        <tr>
            <td >Địa chỉ:</td>
            <td>{{$info['address']}}</td>
        </tr>
        <tr>
            <td >Số điện thoại:</td>
            <td>{{$info['phone_number']}}</td>
        </tr>
        <tr>
            <td >Email:</td>
            <td>{{$info['email']}}</td>
        </tr>
        <tr>
            <td >Ngày đặt hàng:</td>
            <td>{{$info['created_at']}}</td>
        </tr>
        <tr>
            <td >Trạng thái:</td>
            <td>
                @if ($info['status'] == 0)
                <span>Đang xử lý</span>
                @else
                <span>Đã xử lý</span>
                @endif
            </td>
        </tr>
        <tr>
            <td >Ghi chú của KH:</td>
            <td>{{$info['note']}}</td>
        </tr>
    </table>
</div>

<div class="div">
    <table class="table col-6">
        <tr>
            <th >Tên sản phẩm</th>
            <th >Số lượng</th>
            <th >Đơn giá</th>
            <th >Thành tiền</th>
        </tr>
        @foreach ($products as $product )
        <tr>
        <td>{{$product->product_name}}</td>
        <td>{{$product->qty}}</td>
        @if($product->discount > 0)
        <td>{{number_format($product->discount)}} &#8363;</td>
        <td>{{number_format($product->discount * $product->qty)}} &#8363;</td>
        @else
        <td>{{number_format($product->price)}} &#8363;</td>
        <td>{{number_format($product->price * $product->qty)}} &#8363;</td>
        @endif
    </tr>
        @endforeach
        <tr>
            <th >Tổng thanh toán:</th>
            <th></th>
            <th></th>
            <th>{{$info['total_price']}} &#8363;</th>
        </tr>
    </table>
</div>
</div>
@endsection
