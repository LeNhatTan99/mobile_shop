@extends('layouts.app')
@section('content')
@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{session('error')}}
</div>
@endif
<form action="{{route('users.update',['user'=>$user->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label  class="form-label">Tên</label>
        <input type="text" name="name" class="form-control" value="{{old('name',$user->name)}}" >
        @if ($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
      </div>
      <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{old('email',$user->email)}}">
        @if ($errors->has('email'))
        <span class="text-danger">{{$errors->first('email')}}</span>
        @endif
      </div>

      <div class="mb-3">
        <label  class="form-label">Số điện thoại</label>
        <input type="text" name="phone_number" class="form-control" value="{{old('phone_number',$user->phone_number)}}">
        @if ($errors->has('phone_number'))
        <span class="text-danger">{{$errors->first('phone_number')}}</span>
        @endif
      </div>

      <div class="mb-3">
        <label  class="form-label">Địa chỉ</label>
        <input type="text" name="address" class="form-control" value="{{old('address',$user->address)}}">
        @if ($errors->has('address'))
        <span class="text-danger">{{$errors->first('address')}}</span>
        @endif
      </div>

      <div class="mb-3">
        <label  class="form-label">Mật khẩu</label>
        <input type="password" name="password" class="form-control" value="{{old('password',$user->password)}}">
        @if ($errors->has('password'))
        <span class="text-danger">{{$errors->first('password')}}</span>
        @endif
      </div>
      <div class="mb-3">
        <label  class="form-label">Role ID</label>
        <input type="number" name="role_id" class="form-control" value="{{old('role_id',$user->role_id)}}">
        @if ($errors->has('role_id'))
        <span class="text-danger">{{$errors->first('role_id')}}</span>
        @endif
      </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>
@endsection
