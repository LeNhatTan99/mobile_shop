@extends('layouts.app')
@section('content')
<table class="table col-6">
    <h4>Chi tiết phản hồi</h4>
<tr>
    <td >Name:</td>
    <td>{{$feedback->name}}</td>
</tr>
<tr>
    <td >Email:</td>
    <td>{{$feedback->email}}</td>
</tr>
<tr>
    <td >Số điện thoại:</td>
    <td>{{$feedback->phone_number}}</td>
</tr>
<tr>
    <td >Nội dung:</td>
    <td>{{$feedback->content}}</td>
</tr>
</table>
<a href="{{route('feedbacks.index')}}" class="btn btn-success">Quay lại</a>
@endsection
