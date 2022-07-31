@extends('frontend.app')
@section('content')
<section class="shop_section layout_padding">
    <div class="container">

        <div class="heading_container heading_center">
                <h1>
                    Samsung
                </h1>
            </div>
        @if ($products->count())
        <div class="row">
            @foreach ( $products as $category => $items )
                <h2>{{$category}}</h2>
                @foreach ($items as $product)
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
                                    <div class="new">
                                        <p>
                                            Giảm giá
                                        </p>
                                    </div>
                                    @else
                                    <div class="text-center">
                                        <span>
                                            {{number_format($product->price)}}&#8363;
                                        </span>
                                    </div>
                                    @endif
                                </div>
                                <div class="tag">
                                    @if ($product->inventory == 0)
                                    <div class="old">
                                        <p>
                                            Hết hàng
                                        </p>
                                    </div>
                                    @endif
                                    @if ($product->status == 1)
                                    <div class="new">
                                        <p>
                                            Mới
                                        </p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
        @else
        <h1>Hiện tại chưa có sản phẩm nào!</h1>
        @endif
</div>
</section>

    @include('frontend.footer');
@endsection
