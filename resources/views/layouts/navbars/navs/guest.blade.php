<nav class="navbar navbar-horizontal navbar-expand-md navbar-dark">
    <div class="container px-4">
        <p class="navbar-brand">
            <a class="nav-link nav-link-icon">
                <span class="nav-link-inner--text">Mobile Shop</span>
            </a>
        </p>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('home') }}">
                        <i class="ni ni-shop"></i>
                        <span class="nav-link-inner--text">{{ __('Trang chủ') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('register') }}">
                        <i class="ni ni-circle-08"></i>
                        <span class="nav-link-inner--text">{{ __('Đăng ký') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                        <i class="ni ni-key-25"></i>
                        <span class="nav-link-inner--text">{{ __('Đăng nhập') }}</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>







