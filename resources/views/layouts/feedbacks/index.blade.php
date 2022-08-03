@extends('layouts.app')
@section('content')
<h2 class="my-4 text-center text-uppercase">Quản lý phản hồi của khách hàng</h2>
@if ($feedbacks->count())

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên</th>
        <th scope="col">Email</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Nội dung</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($feedbacks as $feedback)
      <tr>
        <td>{{$feedback->id}}</td>
          <td>{{$feedback->name}}</td>
          <td>{{$feedback->email}}</td>
          <td >{{$feedback->phone_number}}</td>
          <td><span class="description">{{$feedback->content}}</span></td>

        <td>
            <a href="{{route('feedbacks.show',['feedback'=>$feedback->id])}}" class="btn btn-info">Xem</a>
            <form action="{{route('feedbacks.destroy',['feedback'=>$feedback->id])}}" method="POST" style="display: inline-block">
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
  <h4>Chưa có phản hồi nào!</h4>
@endif

  @endsection
