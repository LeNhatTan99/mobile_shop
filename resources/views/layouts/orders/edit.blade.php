@extends('layouts.app')
@section('content')
@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{session('error')}}
</div>
@endif
<form action="{{route('orders.update',['order'=>$order->id])}}" method="POST">
    <h4>Cập nhật trạng thái đơn hàng</h4>
    @csrf
    @method('PUT')
      <div class="mb-3">
        <label  class="form-label">Trạng thái ( 0: Đang xử lý | 1: Đã xử lý)</label>
        <input type="number" name="status" class="form-control" value="{{old('status',$order->status)}}" placeholder=" 0: Đang xử lý | 1: Đã xử lý">
        @if ($errors->has('status'))
        <span class="text-danger">{{$errors->first('status')}}</span>
        @endif
      </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>
@endsection
