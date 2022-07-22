@extends('layouts.app')
@section('content')
<table class="table col-6">
    <h4>Thông tin người dùng</h4>
<tr>
    <td >Tên người dùng:</td>
    <td>{{$user->name}}</td>
</tr>
<tr>
    <td >Role:</td>
    <td>{{$user->role->name}}</td>
</tr>
<tr>
    <td >Email:</td>
    <td>{{$user->email}}</td>
</tr>
<tr>
    <td >Số điện thoại:</td>
    <td>{{$user->phone_number}}</td>
</tr>
<tr>
    <td >Địa chỉ:</td>
    <td>{{$user->address}}</td>
</tr>
<tr>
    <td >Mật khẩu:</td>
    <td>{{$user->password}}</td>
</tr>
</table>
<a href="{{route('users.index')}}" class="btn btn-success">Quay lại</a>
@endsection
