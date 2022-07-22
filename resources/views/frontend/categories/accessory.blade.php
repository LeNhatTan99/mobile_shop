@extends('frontend.app')
@section('content')
    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="heading_container heading_center">
                    <h2>
                        Phụ kiện
                    </h2>
                </div>
                @foreach ( $productAccessory as $product )
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="{{route('product.detail',[$product->slug])}}">
                            <div class="img-box">
                                <img src="{{ asset('storage/' . $product->thumbnail)}}" alt="">
                            </div>
                            <div>
                                <div class="product text-secondary">
                                    <span>
                                        {{$product->name}}
                                    </span>
                                </div>
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
                        </a>
                    </div>
                </div>
                @endforeach

        </div>
    </section>

    <!-- end shop section -->
    @include('frontend.footer');
@endsection
