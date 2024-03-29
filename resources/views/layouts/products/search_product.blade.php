@extends('layouts.app')
@section('content')
<h2 class="my-4 text-center text-uppercase">Tìm kiếm sản phẩm</h2>
@if ($products->count())
<h4 class="my-3">Tìm thấy {{$products->count()}} sản phẩm</h4>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Danh mục</th>
        <th scope="col">Thương hiệu</th>
        <th scope="col">Giá</th>
        <th scope="col">Giá KM</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Số lượng</th>
        <th scope="col">hành động</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>
            @foreach ($product->categories as $category)
            {{ $category->category_name }} <br>
          @endforeach

        </td>
        <td>
            @foreach ($product->brands as $brand)
            {{ $brand->name }} <br>
          @endforeach

        </td>
        <td>{{$product->price}}</td>
        <td>{{$product->discount}}</td>
        <td >
            @if ($product->status != 1)
                <span>Bình thường</span>
            @else
            <span>Mới</span>
            @endif

            </td>
        <td>{{$product->inventory}}</td>
        <td>
            <a href="{{route('products.show',['product'=>$product->id])}}" class="btn btn-info">Xem</a>
            <a href="{{route('products.edit',['product'=>$product->id])}}" class="btn btn-primary">Sửa</a>
            <form action="{{route('products.destroy',['product'=>$product->id])}}" method="POST" style="display: inline-block">
            @csrf
            @method('delete')
                <button class="btn btn-danger" type="submit">Xoá</button>
            </form>
        </td>
    </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <h4>Không tìm thấy sản phẩm nào!</h4>
@endif
  @endsection
