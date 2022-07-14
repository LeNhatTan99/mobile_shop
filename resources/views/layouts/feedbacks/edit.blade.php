@extends('layouts.app')
@section('content')
@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{session('error')}}
</div>
@endif
<form action="{{route('brands.update',['brand'=>$brand->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name',$brand->name)}}" >
        @if ($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
      </div>

      <div class="mb-3">
        <label  class="form-label">Logo</label>
        <input type="file" name="logo" class="form-control" value="{{old('name',$brand->logo)}}" >
        @if ($errors->has('logo'))
        <span class="text-danger">{{$errors->first('logo')}}</span>
        @endif
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
