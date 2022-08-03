@extends('layouts.app')
@section('content')
<h2 class="my-4 text-center text-uppercase">Quản lý danh mục sản phẩm</h2>
<a href="{{route('categories.create')}}" class="btn btn-success">Tạo thêm danh mục sản phẩm</a>
@if ($categories->count())

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên danh mục</th>
      <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->category_name}}</td>
        <td>
            <a href="{{route('categories.show',['category'=>$category->id])}}" class="btn btn-info">Xem</a>
            <a href="{{route('categories.edit',['category'=>$category->id])}}" class="btn btn-primary">Sửa</a>
            <form action="{{route('categories.destroy',['category'=>$category->id])}}" method="POST" style="display: inline-block">
            @csrf
            @method('delete')
                <button class="btn btn-danger" type="submit">Xoá</button>
            </form>
        </td>
    </tr>
      @endforeach
    </tbody>
  </table>
  {{$categories->links()}}
  @else
  <h4>Chưa có người dùng nào được tạo!</h4>
@endif

  @endsection
