@extends('frontend.app')
@section('content')

<div class="container">
    <div class="wrapper">
        <div class="product-img">
          <img src="{{ asset('storage/' . $product->thumbnail) }}" height="auto" width="327" >
        </div>
        <div class="product-info">
          <div class="product-text">
            <h1>
                    {{ $product->name }}
            </h1>

             <p>{{$product->description}}</p>
          </div>
          <div class="price">
            <p><span>{{number_format($product->price)}} &#8363;</span></p>
          </div>
          <div class="product-price-btn">
            {{-- <a onclick="addCart({{$product->id}})" href="{{route()}}" type="button" class="add_to_cart">Mua Ngay</a> --}}
            <a onclick="addCart({{$product->id}})" href="javascript:" type="button" class="add_to_cart">Mua Ngay</a>
          </div>
        </div>
      </div>

</div>

@endsection

