@extends('layouts.app')
@section('content')
<div>
    @if (session('error'))
<div class="alert alert-danger" role="alert" >
    {{session('error')}}
</div>
@endif
<form action="{{route('categories.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Tên danh mục</label>
        <input type="text" name="category_name" class="form-control" value="{{old('category_name')}}">
        @if ($errors->has('category_name'))
        <span class="text-danger">{{$errors->first('category_name')}}</span>
        @endif
      </div>
    <button type="submit" class="btn btn-primary">Tạo </button>
  </form>
</div>
@endsection
