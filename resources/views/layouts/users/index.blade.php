@extends('layouts.app')
@section('content')

<a href="{{route('users.create')}}" class="btn btn-success">Tạo thêm người dùng</a>
@if ($users->count())

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone number</th>
        <th scope="col">Address</th>
       
        <th scope="col">Acction</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone_number}}</td>
        <td>{{$user->address}}</td>

        <td>
            <a href="{{route('users.show',['user'=>$user->id])}}" class="btn btn-info">View</a>
            <a href="{{route('users.edit',['user'=>$user->id])}}" class="btn btn-primary">Edit</a>
            <form action="{{route('users.destroy',['user'=>$user->id])}}" method="POST" style="display: inline-block">
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
