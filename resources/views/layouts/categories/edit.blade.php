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
        <label  class="form-label">Tên danh mục</label>
        <input type="text" name="category_name" class="form-control" value="{{old('category_name',$category->category_name)}}" >
        @if ($errors->has('category_name'))
        <span class="text-danger">{{$errors->first('category_name')}}</span>
        @endif
      </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>
@endsection
