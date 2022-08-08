<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->

        <!-- User -->
        <a class=" navbar-brand pt-3" href="{{ route('admin') }}">
            <h1 class="text-danger"> Admin</h1>
        </a>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">

            <!-- Navigation -->
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="ni ni-circle-08 text-blue "></i> {{ __('Tài khoản người dùng') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('categories.index') }}">
                        <i class="ni ni-bullet-list-67 text-blue"></i> {{ __('Danh mục sản phẩm') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('brands.index') }}">
                      <i class="ni ni-palette text-blue"></i>
                      <span class="nav-link-text">Thương hiệu</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products.index')}}">
                        <i class="ni ni-folder-17 text-blue"></i> {{ __('Sản phẩm') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('orders.index')}}">
                        <i class="ni ni-single-copy-04 text-blue"></i> {{ __('Quản lý đơn hàng') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('feedbacks.index')}}">
                        <i class="ni ni-chat-round text-blue"></i> {{ __('Phản hồi') }}
                    </a>
                </li>


            </ul>

        </div>
    </div>
</nav>
