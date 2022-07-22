@extends('layouts.app')
@section('content')

<a href="{{route('brands.create')}}" class="btn btn-success">Tạo thêm thương hiệu</a>
@if ($brands->count())

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên thương hiệu</th>
        <th scope="col">Logo</th>
      <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($brands as $brand)
      <tr>
        <td>{{$brand->id}}</td>
        <td>{{$brand->name}}</td>
        <td>{{$brand->logo}}</td>
        <td>
            <a href="{{route('brands.show',['brand'=>$brand->id])}}" class="btn btn-info">Xem</a>
            <a href="{{route('brands.edit',['brand'=>$brand->id])}}" class="btn btn-primary">Sửa</a>
            <form action="{{route('brands.destroy',['brand'=>$brand->id])}}" method="POST" style="display: inline-block">
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
  <h4>Chưa có thương hiệu nào được tạo!</h4>
@endif

  @endsection
