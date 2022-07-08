@extends('layouts.app')
@section('content')

<a href="{{route('categories.create')}}" class="btn btn-success">Tạo thêm danh mục sản phẩm</a>
@if ($categories->count())

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
      <th scope="col">Acction</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>
            <a href="{{route('categories.show',['category'=>$category->id])}}" class="btn btn-info">View</a>
            <a href="{{route('categories.edit',['category'=>$category->id])}}" class="btn btn-primary">Edit</a>
            <form action="{{route('categories.destroy',['category'=>$category->id])}}" method="POST" style="display: inline-block">
            @csrf
            @method('delete')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <h4>Chưa có người dùng nào được tạo!</h4>
@endif

  @endsection
