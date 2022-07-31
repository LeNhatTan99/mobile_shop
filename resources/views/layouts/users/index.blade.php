@extends('layouts.app')
@section('content')

<a href="{{route('users.create')}}" class="btn btn-success">Tạo thêm người dùng</a>
@if ($users->count())

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên</th>
        <th scope="col">Role</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Địa chỉ</th>

        <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone_number}}</td>
        <td>{{$user->address}}</td>

        <td>
            <a href="{{route('users.show',['user'=>$user->id])}}" class="btn btn-info">Xem</a>
            <a href="{{route('users.edit',['user'=>$user->id])}}" class="btn btn-primary">Sửa</a>
            <form action="{{route('users.destroy',['user'=>$user->id])}}" method="POST" style="display: inline-block">
            @csrf
            @method('delete')
                <button class="btn btn-danger" type="submit">Xoá</button>
            </form>
        </td>
    </tr>
      @endforeach
    </tbody>
  </table>

{{ $users->links() }}
  @else
  <h4>Chưa có người dùng nào được tạo!</h4>
@endif

  @endsection
