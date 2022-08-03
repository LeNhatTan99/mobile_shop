@extends('frontend.app')
@section('content')
    <div class="hero_area">
        <!-- slider section -->
        <section class="slider_section ">
                <div class="carousel-inner">

                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Galaxy S22
                                        </h1>
                                        <p>
                                            Siêu phẩm Galaxy S22 nay đã có thêm màu tím Bora Purple hoàn toàn mới, tôn lên vẻ đẹp thời thượng
                                            của chiếc điện thoại vốn đã là biểu tượng thời trang của làng công nghệ 2022. Phiên bản màu tím được làm nhẹ nhàng, tinh tế,
                                             bao phủ toàn bộ thân máy, kể cả phần cụm camera hay khung viền mang đến sự thu hút, sang chảnh hơn bao giờ hết.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/samsungs22.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- shop section -->

    <section class="shop_section layout_padding">
        @if ($products->count())
        <div class="container">
            <div class="heading_container heading_center">
                <h1>
                    Sản phẩm nổi bật
                </h1>
            </div>
            <div class="row">
                    @foreach ( $products as $category=> $items  )
                    <div class="heading_container ">
                        <h2>
                            {{$category}}
                        </h2>
                    </div>
                    @foreach ($items->take(8) as $product)
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
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @endforeach

        </div>
        @else
        <h1 class="text-warning"><span >Hiện chưa có sản phẩm nào!</span></h1>
        @endif
    </section>

    <!-- end shop section -->

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6 col-lg-5 ">
                    <div class="img-box">
                        <img src="{{ asset('assets/img/image-about.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Giới thiệu
                            </h2>
                        </div>
                    </div>
                    <p>
                       MobileShop là hệ thống bán lẻ điện thoại, máy tính bảng, phụ kiện chính hãng.
                       Giá rẻ, trả góp 0%, giao hàng miễn phí. Chúng tôi đã, đang và sẽ tiếp tục nỗ lực đem đến các sản phẩm
                       công nghệ chính hãng đa dạng, phong phú đi kèm mức giá tốt nhất phục vụ nhu cầu của quý khách hàng.
                       <br>
                    Hỗ trợ mua hàng và tư vấn Online, cam kết mang đến những sản phẩm chất lượng và chế độ bảo hành uy tín,
                        sẵn sàng hỗ trợ khách hàng trong thời gian nhanh nhất.<br></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
    @include('frontend.feedback')
    @include('frontend.footer')
@endsection
