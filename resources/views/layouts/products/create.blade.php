@extends('layouts.app')
@section('content')
<div>
    @if (session('error'))
<div class="alert alert-danger" role="alert" >
    {{session('error')}}
</div>
@endif
<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" name="name" class="form-control" >
        @if ($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
      </div>

      <div class="mb-3">
        <label  class="form-label">Price</label>
        <input type="number" name="price" class="form-control" >
        @if ($errors->has('price'))
        <span class="text-danger">{{$errors->first('price')}}</span>
        @endif
      </div>

      <div class="mb-3">
        <label  class="form-label">Discount</label>
        <input type="number" name="discount" class="form-control" >
        @if ($errors->has('discount'))
        <span class="text-danger">{{$errors->first('discount')}}</span>
        @endif
      </div>
      <div class="mb-3">
        <label  class="form-label">Color</label>
        <input type="text" name="color" class="form-control" >
        @if ($errors->has('color'))
        <span class="text-danger">{{$errors->first('color')}}</span>
        @endif
      </div>

      <div class="mb-3">
        <label  class="form-label">Thumbnail</label>
        <input type="file" name="thumbnail" class="form-control" >
        @if ($errors->has('thumbnail'))
        <span class="text-danger">{{$errors->first('thumbnail')}}</span>
        @endif
      </div>

      <div class="mb-3">
        <label  class="form-label">Description</label>
        <textarea name="description"  cols="30" rows="10" class="form-control"></textarea>
        @if ($errors->has('description'))
        <span class="text-danger">{{$errors->first('description')}}</span>
        @endif
      </div>

      <div class="mb-3">
        <label  class="form-label">Inventory</label>
        <input type="number" name="inventory" class="form-control" >
        @if ($errors->has('inventory'))
        <span class="text-danger">{{$errors->first('inventory')}}</span>
        @endif
      </div>
      <label  class="form-label">Danh mục sản phẩm:</label>
      @if ($categories->count())
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            @foreach ($categories as $category)
            <div class="form-check">
                <input id="flexCheckCheckedCategory{{$category->id}}" class="form-check-input" type="radio" value="{{ $category->id }}" name="categoryIds[]">
                <label class="form-check-label" for="flexCheckCheckedCategory{{$category->id}}">
                  {{ $category->name }}
                </label>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      @endif
      <label  class="form-label">Thương hiệu:</label>
      @if ($brands->count())
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            @foreach ($brands as $brand)
              <div class="form-check">
                <input id="flexCheckCheckedBrand{{$brand->id}}" class="form-check-input" type="radio" value="{{ $brand->id }}" name="brandIds[]">
                <label class="form-check-label" for="flexCheckCheckedBrand{{$brand->id}}">
                  {{ $brand->name }}
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
