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
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Sản phẩm mới nhất
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/w1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    Iphone 13 Pro Max
                                </h6>
                                <h6>
                                    Giá:
                                    <span>
                                        $2000
                                    </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    Bán chạy nhất
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                @for ($i=1;$i<=2;$i++)

                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/w4.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    Iphone 13
                                </h6>
                                <h6>
                                    Giá:
                                    <span>
                                        $145
                                    </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    Mới
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                @endfor

                {{-- Iphone --}}

                <div class="heading">
                    <h2>
                        Điện thoại
                    </h2>
                </div>
                @foreach ( $products as $product )
                @foreach ($product->categories as $category)
                @if ($category->id == 1)
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="{{route('detail',['product'=>$product->name])}}">
                            <div class="img-box">
                                <img src="{{$product->thumbnail}}" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    {{$product->name}}
                                </h6>
                                <h6>
                                    Giá:
                                    <span>
                                        {{number_format($product->price)}} &#8363;
                                    </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    Mới
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach

                {{-- Máy tính bảng --}}
                <div class="heading">
                    <h2>
                        Máy tính bảng
                    </h2>
                </div>
                @foreach ( $products as $product )
                @foreach ($product->categories as $category)
                @if ($category->id == 2)
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="{{route('detail',['product'=>$product->name])}}">
                            <div class="img-box">
                                <img src="{{$product->thumbnail}}" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    {{$product->name}}
                                </h6>
                                <h6>
                                    Giá:
                                    <span>
                                        {{number_format($product->price)}} &#8363;
                                    </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    Mới
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
                {{-- Phụ kiện --}}
                <div class="heading">
                    <h2>
                        Phụ kiện
                    </h2>
                </div>
                @foreach ( $products as $product )
                @foreach ($product->categories as $category)
                @if ($category->id == 3)
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="{{route('detail',['product'=>$product->name])}}">
                            <div class="img-box">
                                <img src="{{$product->thumbnail}}" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    {{$product->name}}
                                </h6>
                                <h6>
                                    Giá:

                                    <span>
                                        {{number_format($product->price)}} &#8363;
                                    </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    Mới
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
            <div class="btn-box">
                <a href="">
                    Xem tất cả
                </a>
            </div>
        </div>
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
                                About Us
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
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->


    <!-- contact section -->

    <section class="contact_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <div class="heading_container">
                            <h2>
                                Phản hồi
                            </h2>
                        </div>
                        <form action="">
                            <div>
                                <input type="text" placeholder="Họ và tên " />
                            </div>
                            <div>
                                <input type="email" placeholder="Email" />
                            </div>
                            <div>
                                <input type="text" placeholder="Số điện thoại" />
                            </div>
                            <div>
                                <input type="text" class="message-box" placeholder="Nội dung" />
                            </div>
                            <div class="d-flex ">
                                <button>
                                    Gửi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end contact section -->


    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_detail">
                        <h4 id="contact">
                            Liên hệ
                        </h4>

                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Tìm cửa hàng
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Đà Nẵng
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    0702471720
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    mobileshop@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Đăng ký nhận tin
                        </h4>
                        <form action="#">
                            <input type="text" placeholder="Nhập email" />
                            <button type="submit">
                                Đăng ký
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Thời gian mở cửa
                        </h4>
                        <div>
                            <p>Hàng ngày: 8.30 AM - 8.30 PM</p>
                            <p>Chủ nhật: 8.30 AM - 8.30 PM</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section -->
@endsection
