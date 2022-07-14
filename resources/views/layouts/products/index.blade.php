@extends('layouts.app')
@section('content')

<a href="{{route('products.create')}}" class="btn btn-success">Tạo thêm sản phẩm</a>
@if ($products->count())

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Brand</th>
        <th scope="col">Price</th>
        <th scope="col">Discount</th>
        <th scope="col">Color</th>
        <th scope="col">Thumbnail</th>
        <th scope="col">Description</th>
        <th scope="col">Inventory</th>
        <th scope="col">Acction</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>
            @foreach ($product->categories as $category)
            {{ $category->name }} <br>
          @endforeach

        </td>
        <td>
            @foreach ($product->brands as $brand)
            {{ $brand->name }} <br>
          @endforeach

        </td>
        <td>{{$product->price}}</td>
        <td>{{$product->discount}}</td>
        <td>{{$product->color}}</td>
        <td>{{$product->thumbnail}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->inventory}}</td>
        <td>
            <a href="{{route('products.show',['product'=>$product->id])}}" class="btn btn-info">View</a>
            <a href="{{route('products.edit',['product'=>$product->id])}}" class="btn btn-primary">Edit</a>
            <form action="{{route('products.destroy',['product'=>$product->id])}}" method="POST" style="display: inline-block">
            @csrf
            @method('delete')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
      @endforeach
    </tbody>
  </table>
  {{$products->links('pagination')}}
  @else
  <h4>Chưa có sản phẩm nào được tạo!</h4>
@endif

  @endsection
