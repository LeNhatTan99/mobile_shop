@extends('layouts.app')
@section('content')
<table class="table col-6">
    <h4>Thông tin thương hiệu</h4>
<tr>
    <td >Tên thương hiệu:</td>
    <td>{{$brand->name}}</td>
</tr>
<tr>
    <td >Logo:</td>
    <td>{{$brand->logo}}</td>
</tr>
</table>
<a href="{{route('brands.index')}}" class="btn btn-success">Quay lại</a>
@endsection
