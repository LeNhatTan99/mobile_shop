@extends('layouts.app')
@section('content')
@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{session('error')}}
</div>
@endif
<form action="{{route('categories.update',['category'=>$category->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name',$category->name)}}" >
        @if ($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
