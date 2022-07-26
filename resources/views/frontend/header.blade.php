

<header class="header_section sticky-top navbar-expand-lg">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <h1 class="navbar-brand" >
                <span>
                    Mobile Shop
                </span>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}"><i class="fa fa-home"></i> Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <ul class="navbar-nav align-items-center d-none d-md-flex">
                            <li class="nav-item dropdown ">
                                <a class="nav-link  profile_link" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Danh mục sản phẩm
                                </a>
                                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right text-center">
                                        @foreach ($categories as $category )
                                        <a href="{{route('get.list.product',[$category->slug])}}" >
                                            <span class="profile_span">{{ $category->category_name }}</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        @endforeach
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <ul class="navbar-nav align-items-center d-none d-md-flex">
                            <li class="nav-item dropdown ">
                                <a class="nav-link profile_link" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Thương hiệu
                                </a>
                                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right text-center">

                                     @foreach ($brands as $brand )
                                     <a href="{{route('brand.product',[$brand->slug])}}">
                                        <span class="profile_span">{{ $brand->name }}</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                     @endforeach
                                </div>
                            </li>
                        </ul>
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
                                    <span class="input-group-text" style="height:38px"><i
                                            class="fa fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Tìm kiếm" type="text">
                            </div>
                        </div>
                    </form>

                  <ul class="navbar-nav">
                      <li class="nav-item">
                        <ul class="navbar-nav align-items-center d-none d-md-flex">
                            <li class="nav-item dropdown ">
                                <a class="nav-link profile_link" href="{{route('show.list.cart')}}" role="button"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    @if(isset(Session::get('cart')->totalQty))
                                    <strong id="count">{{Session::get('cart')->totalQty}}</strong>
                                    @else <strong>0</strong>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </li>
                  </ul>

                    @if (!empty(auth()->user()->name))
                        <ul class="navbar-nav align-items-center d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0 pl-0 profile_link" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <strong class="mb-0 text-md profile_span font-weight-bold">
                                            {{ auth()->user()->name }}</strong>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right text-center">
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">{{ __('Xin chào!') }}</h6>
                                    </div>
                                    <a href="{{ route('profile.edit') }}">
                                        <span class="profile_span">{{ __('Hồ sơ của tôi') }}</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
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



