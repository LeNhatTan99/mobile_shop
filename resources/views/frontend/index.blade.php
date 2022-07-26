@extends('frontend.app')
@section('content')
    <div class="hero_area">
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    {{-- @for ($i=1;$i<3;$i++) --}}
                    <div class="carousel-item active">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            iPhone 13 Pro Max 
                                        </h1>
                                        <p>
                                            iPhone 13 Pro Max màn hình được trang bị công nghệ ProMotion 120 Hz cực mượt.
                                            Nâng cấp lớn nhất đối với màn hình iPhone 13 Pro Max chính là công nghệ
                                            ProMotion mới.
                                            Màn hình 6.7 inch này có thể tự động điều chỉnh tốc độ làm mới từ 10 Hz đến 120
                                            Hz, mang lại hiệu suất tổng thể và hình ảnh động mượt mà hơn
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Mua ngay
                                            </a>
                                        </div>
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
                    {{-- @endfor --}}

                    <div class="carousel-item ">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Sản phẩm
                                        </h1>
                                        <p>
                                            Galaxy S22 Ultra được ví như mắt thần của bóng đêm nhờ sở hữu hệ thống camera ấn
                                            tượng.
                                            Cảm biến 2.4 µm thu được nhiều ánh sáng và chi tiết hơn kết hợp ống kính Super
                                            Clear Glass cho phép người dùng quay được các video thiếu sáng sắc nét và không
                                            bị lóa.
                                            Chưa hết, máy còn được trang bị 2 camera tele gồm 12MP và 10MP có khả năng chụp
                                            zoom từ 10X đến 100x.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Mua ngay
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/sss22.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Oppo Find X4
                                        </h1>
                                        <p>
                                            Oppo Find X4 sở hữu ngôn ngữ thiết kế tinh tế và cao cấp theo đúng tiêu chuẩn mà
                                            Oppo đã đặt ra cho dòng flagship của mình.
                                            Những góc cạnh, đường nét tinh tế cùng với sự phối hợp giữa các loại vật liệu đã
                                            tạo nên kiểu dáng sang trọng và thu hút cho Oppo Find X4.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Mua ngay
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/oppofinx4.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>

        </section>
        <!-- end slider section -->
    </div>

    <!-- shop section -->

    <section class="shop_section layout_padding">
        @if ($products->count())

        <div class="container">
            <div class="row">
           @if ($productNew->count())
           <div class="heading_container heading_center">
            <h2>
                Sản phẩm mới
            </h2>
        </div>
           @foreach ($productNew as $product )
           <div class="col-sm-6 col-xl-3">
               <div class="box">
                   <a href="{{route('product.detail',[$product->slug])}}">
                       <div class="img-box">
                           <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="">
                       </div>
                       <div>
                           <div class="product text-secondary">
                               <span>
                                   {{$product->name}}
                               </span>
                           </div>
                           <div class="price product text-center">
                               <span>
                                 {{number_format($product->price)}} &#8363;
                                   </span>
                           </div>
                          </div>
                       <div class="new">
                           <span>
                               Mới
                           </span>
                       </div>
                   </a>
               </div>
           </div>

           @endforeach
           @endif

                {{-- phone --}}
                    <div class="heading_container " id="danhmucid1">
                        <h2>
                            Điện thoại
                        </h2>
                    </div>

                    @foreach ( $productMobile as $product )
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
                {{-- Máy tính bảng --}}

                    <div class="heading_container " id="danhmucid2">
                        <h2>
                            Máy tính bảng
                        </h2>
                    </div>
                    @foreach ( $productTablet as $product )

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

                {{-- Phụ kiện --}}

                    <div class="heading_container" id="danhmucid3">
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
                    </div>
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
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Giới thiệu
                            </h2>
                        </div>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration
                            in some form, by injected humour, or randomised words which don't look even slightly believable.
                            If you
                            are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                            hidden in
                            the middle of text. All
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->
    @include('frontend.feedback');
    @include('frontend.footer');
@endsection
