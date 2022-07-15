@extends('frontend.app')
@section('content')



<div class="hero_area">

    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Mobile Shop
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Trang chủ <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Danh mục sản phẩm </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Thương hiệu </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Liên hệ</a>
              </li>
            </ul>
            <div class="user_option-box">
                  <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"  style="margin-top:4px"><i class="fa fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Tìm kiếm" type="text">
                        </div>
                    </div>
                </form>
              <a href="">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </a>

@if (!empty(auth()->user()->name))

<ul class="navbar-nav align-items-center d-none d-md-flex">
    <li class="nav-item dropdown">
        <a class="nav-link pr-0 pl-0 profile_link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <i class="fa fa-user" aria-hidden="true"></i>
                <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-md profile_span font-weight-bold"> {{ auth()->user()->name }}</span>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">{{ __('Xin chào!') }}</h6>
            </div>
            <a href="{{ route('profile.edit') }}" >
                <span class="profile_span">{{ __('Hồ sơ của tôi') }}</span>
            </a>

            <a href="#" >
                <span  class="profile_span">{{ __('Hoạt động') }}</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <span class="profile_span">{{ __('Đăng xuất') }}</span>
            </a>
        </div>
    </li>
</ul>
@else
<a href="{{ route('login') }}">
    <span class="profile_span">{{ __('Đăng nhập') }}</span>
</a>
@endif



            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
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
                     Sản phẩm
                    </h1>
                    <p>
                     scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit amet, lobortis semper quam.
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
                    <img src="{{asset('img/banner.jpg')}}" alt="">
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
                      Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit amet, lobortis semper quam.
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
                    <img src="{{asset('img/banner.jpg')}}" alt="">
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
                      Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit amet, lobortis semper quam.
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
                    <img src="{{asset('img/banner.jpg')}}" alt="">
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
                 Mới
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w2.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Samsung S22 Ultra
                </h6>
                <h6>
                  Giá:
                  <span>
                    $1500
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
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w3.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Iphone 13
                </h6>
                <h6>
                  Giá:
                  <span>
                    $110
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
        {{-- Iphone --}}

        <div class="heading">
            <h2>
              Điện thoại
            </h2>
          </div>
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
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w5.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Iphone 13
                </h6>
                <h6>
                  Giá:
                  <span>
                    $195
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
        <div class="col-sm-6  col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w6.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Iphone 13
                </h6>
                <h6>
                  Giá:
                  <span>
                    $170
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
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Iphone 13
                </h6>
                <h6>
                  Giá:
                  <span>
                    $230
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

       {{-- Máy tính bảng --}}
       <div class="heading">
        <h2>
          Máy tính bảng
        </h2>
      </div>
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
    <div class="col-sm-6 col-xl-3">
      <div class="box">
        <a href="">
          <div class="img-box">
            <img src="images/w5.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Iphone 13
            </h6>
            <h6>
              Giá:
              <span>
                $195
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
    <div class="col-sm-6  col-xl-3">
      <div class="box">
        <a href="">
          <div class="img-box">
            <img src="images/w6.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Iphone 13
            </h6>
            <h6>
              Giá:
              <span>
                $170
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
    <div class="col-sm-6 col-xl-3">
      <div class="box">
        <a href="">
          <div class="img-box">
            <img src="images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Iphone 13
            </h6>
            <h6>
              Giá:
              <span>
                $230
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
    {{-- Phụ kiện --}}
    <div class="heading">
        <h2>
          Phụ kiện
        </h2>
      </div>
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
    <div class="col-sm-6 col-xl-3">
      <div class="box">
        <a href="">
          <div class="img-box">
            <img src="images/w5.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Iphone 13
            </h6>
            <h6>
              Giá:
              <span>
                $195
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
    <div class="col-sm-6  col-xl-3">
      <div class="box">
        <a href="">
          <div class="img-box">
            <img src="images/w6.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Iphone 13
            </h6>
            <h6>
              Giá:
              <span>
                $170
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
    <div class="col-sm-6 col-xl-3">
      <div class="box">
        <a href="">
          <div class="img-box">
            <img src="images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Iphone 13
            </h6>
            <h6>
              Giá:
              <span>
                $230
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
    </div>
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
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
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
                <button >
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
              <div >
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
