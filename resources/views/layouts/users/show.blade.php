@extends('layouts.app')
@section('content')
<table class="table col-6">
    <h4>Thông tin người dùng</h4>
<tr>
    <td >Name:</td>
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
    <td >Phone number:</td>
    <td>{{$user->phone_number}}</td>
</tr>
<tr>
    <td >Address:</td>
    <td>{{$user->address}}</td>
</tr>
<tr>
    <td >password:</td>
    <td>{{$user->password}}</td>
</tr>
</table>
<a href="{{route('users.index')}}" class="btn btn-success">Quay lại</a>
@endsection
