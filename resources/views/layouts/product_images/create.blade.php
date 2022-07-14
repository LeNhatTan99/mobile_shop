@extends('layouts.app')
@section('content')
<div>
    @if (session('error'))
<div class="alert alert-danger" role="alert" >
    {{session('error')}}
</div>
@endif
<form action="{{route('images.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

      <div class="mb-3">
        <label  class="form-label">Image</label>
        <input type="file" name="image" class="form-control" >
        @if ($errors->has('image'))
        <span class="text-danger">{{$errors->first('image')}}</span>
        @endif
      </div>

      <label  class="form-label">Tên sản phẩm:</label>
      @if ($products->count())
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            @foreach ($products as $product)
              <div class="form-check">
                <input id="flexCheckCheckedBrand{{$product->id}}" class="form-check-input" type="radio" value="{{ $product->id }}" name="product_id">
                <label class="form-check-label" for="flexCheckCheckedBrand{{$product->id}}">
                  {{ $product->name }}
                </label>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      @endif

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
