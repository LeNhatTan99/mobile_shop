@extends('layouts.app')
@section('content')


@if ($orders->count())

<table class="table">
    <thead>
      <tr>
        <th scope="col">Mã đơn hàng</th>
        <th scope="col">Tên KH</th>
        <th scope="col">Ngày đặt</th>
        <th scope="col">Trạng thái</th>
      <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
      <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->name}}</td>
        <td>{{$order->created_at}}</td>
        <td>
            @if ($order->status == 0)
            <span>Đang xử lý</span>
            @else
            <span>Đã xử lý</span>
            @endif
        </td>
        <td>
            <a href="{{route('orders.show',['order'=>$order->id])}}" class="btn btn-info">Chi tiết</a>
            <a href="{{route('orders.edit',['order'=>$order->id])}}" class="btn btn-primary">Cập nhật</a>
            <form action="{{route('orders.destroy',['order'=>$order->id])}}" method="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Xoá </button>
            </form>
        </td>
    </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <h4>Hiện chưa có đơn hàng nào</h4>
@endif
{{ $orders->links() }}
  @endsection
