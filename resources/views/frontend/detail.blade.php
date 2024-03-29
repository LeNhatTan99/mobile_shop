@extends('frontend.app')
@section('content')

<div class="thumbnail-detail">

    <div class="row product-detail">
        <div class="col-sm-6">
            <div class="product-img">
                <img src="{{ asset('storage/' . $product->thumbnail) }}" height="auto" width="327" >
              </div>
        </div>
        <div class="col-sm-6" >
            <div class="product-info">
                <div class="product-text">
                  <h1>
                          {{ $product->name }}
                  </h1>
                  <span>{{$product->description}}</span>
                </div>
                <div class="product-text">

                    <button onclick="clickShowHiden()" class="btn btn-info">Thông số chi tiết</button>
                    <div id="click" style="display:none">
                   <p> {{$product->parameter}}</p>
                    </div>
                </div>

                <div class="price">
                    <div class="price product ">
                        @if ($product->discount != 0 && $product->discount < $product->price)
                        <div class="row">
                            <div class="col-6">
                                <span>
                                    {{number_format($product->discount)}}&#8363;
                                  </span>
                                </div>
                                <div class="col-6">
                                <span class="text-secondary">
                                    <del> {{ number_format( $product->price) }}&#8363;</del>
                                </span>
                            </div>
                        </div>
                        @else
                        <div class="text-center">
                            <span>
                                {{number_format($product->price)}}&#8363;
                              </span>
                        </div>
                        @endif
                    </div>
                </div>
                @if ($product->inventory == 0)
                <div class="product-price-btn">
                    <button class="out-of-stock">Hết hàng</button>
                  </div>
                @else
                <div class="product-price-btn">
                    <a href="{{route('add.cart',$product->id)}}" class="add-to-cart">Thêm vào giỏ</a>
                  </div>
                @endif

              </div>
        </div>
      </div>
</div>


@endsection

