@extends('layouts.app')
@section('content')

<a href="{{route('images.create')}}" class="btn btn-success">Thêm hình ảnh sản phẩm</a>
@if ($product_images->count())

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name Product</th>
        <th scope="col">Thumbnail</th>
      <th scope="col">Acction</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($product_images as $product_image)
      <tr>
        <td>{{$product_image->id}}</td>
        <td>{{$product_image->product->name}}</td>
        <td>{{$product_image->image}}</td>
        {{-- <td>
            <a href="{{route('images.show',['product_image' => $product_image->id])}}" class="btn btn-info">View</a>
            <a href="{{route('images.edit',['product_image'=>$product_image->id])}}" class="btn btn-primary">Edit</a>
            <form action="{{route('images.destroy',['product_image'=>$product_image->id])}}" method="POST" style="display: inline-block">
            @csrf
            @method('delete')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td> --}}
    </tr>
      @endforeach
    </tbody>

  </table>

  @else
  <h4>Chưa có hình ảnh nào được thêm!</h4>
@endif
<div > {{ $product_images->links('pagination') }}</div>
  @endsection
