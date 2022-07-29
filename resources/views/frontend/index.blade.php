@extends('frontend.app')
@section('content')
    <div class="hero_area">
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            iPhone 13 Pro
                                        </h1>
                                        <p>
                                            iPhone 13 Pro  màn hình được trang bị công nghệ ProMotion 120 Hz cực mượt.
                                            Nâng cấp lớn nhất đối với màn hình iPhone 13 Pro Max chính là công nghệ
                                            ProMotion mới.
                                            Màn hình 6.7 inch này có thể tự động điều chỉnh tốc độ làm mới từ 10 Hz đến 120
                                            Hz, mang lại hiệu suất tổng thể và hình ảnh động mượt mà hơn
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/banner.jpg') }}" alt="">
                                    </div>
                                </div>
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
            <div class="row">
                    @foreach ( $products as $category=> $items  )

                    <div class="heading_container " id="danhmucid1">
                        <h2>
                            {{$category}}
                        </h2>
                    </div>
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
    @include('frontend.feedback');
    @include('frontend.footer');
@endsection
