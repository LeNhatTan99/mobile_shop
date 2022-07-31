@extends('layouts.app')
@section('content')

@if ($feedbacks->count())

<table class="table">
    <h2>Phản hồi của khách hàng</h2>
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
            <a href="{{route('feedbacks.show',['feedback'=>$feedback->id])}}" class="btn btn-info">View</a>
            <form action="{{route('feedbacks.destroy',['feedback'=>$feedback->id])}}" method="POST" style="display: inline-block">
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
  <h4>Chưa có phản hồi nào!</h4>
@endif

  @endsection
