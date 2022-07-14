@extends('layouts.app')
@section('content')
<div>
    @if (session('error'))
<div class="alert alert-danger" role="alert" >
    {{session('error')}}
</div>
@endif
<form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" name="name" class="form-control" >
        @if ($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
      </div>

      <div class="mb-3">
        <label  class="form-label">Logo</label>
        <input type="file" name="logo" class="form-control" >
        @if ($errors->has('logo'))
        <span class="text-danger">{{$errors->first('logo')}}</span>
        @endif
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
