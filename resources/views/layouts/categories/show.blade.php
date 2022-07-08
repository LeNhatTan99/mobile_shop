@extends('layouts.app')
@section('content')
<table class="table col-6">
    <h4>Thông tin danh mục sản phẩm</h4>
<tr>
    <td >Name:</td>
    <td>{{$category->name}}</td>
</tr>
</table>
<a href="{{route('categories.index')}}" class="btn btn-success">Quay lại</a>
@endsection
