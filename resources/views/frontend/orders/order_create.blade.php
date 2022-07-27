@extends('frontend.app')

@section('content')

<body>
    <!-- header -->
@if (isset(Session::get('cart')->products))
<main role="main">
    <div class="container margin-bottom mt-4">
        {{-- form order --}}
        <form class="needs-validation" method="post"
            action="{{route('checkout')}}">
        @csrf
        @method('GET')
            <div class="py-5 text-center">
                <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                <h2>Thanh toán</h2>
                <p class="lead">Vui lòng nhập, kiểm tra thông tin trước khi Đặt hàng.</p>
            </div>
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span>Giỏ hàng</span>
                    </h4>
                    @foreach (Session::get('cart')->products as $product )
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                              <div class="product_name">
                                <input type="hidden" value="{{$product['productInfo']->name}}" name="product_name">
                                <h6 class="my-0">{{$product['productInfo']->name}}</h6>
                              </div>
                               <div class="product_qty">
                                <input type="hidden" value="{{$product['qty']}}" name="qty">
                                <small class="text-muted">{{number_format($product['price'])}} x {{$product['qty']}}</small>
                               </div>
                            </div>
                            <div class="total_price">
                                <span class="bold">{{number_format($product['price'])}} &#8363;</span>
                            </div>
                        </li>
                    </ul>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Tổng tiền</strong>
                        <div class="total_price">
                            <input type="hidden" value="{{number_format(Session::get('cart')->totalPrice)}}" name="total_price">
                            <strong>{{number_format(Session::get('cart')->totalPrice)}} &#8363;</strong>
                        </div>
                    </li>

                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Thông tin khách hàng</h4>
                    @if (auth()->check())
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name">Họ tên</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{auth()->user()->name}}" readonly="" >
                            </div>
                            <div class="col-md-12">
                                <label for="address">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    value="{{auth()->user()->address}}" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="phone_number">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone_number" id="phone_number"
                                    value="{{auth()->user()->phone_number}}" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    value="{{auth()->user()->email}}" readonly="">
                            </div>
                        </div>
                    @else
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name">Họ tên</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{old('name')}}" >
                        </div>
                        <div class="col-md-12">
                            <label for="address">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" id="address"
                                value="{{old('address')}}" >
                        </div>
                        <div class="col-md-12">
                            <label for="phone_number">Số điện thoại</label>
                            <input type="number" class="form-control" name="phone_number" id="phone_number"
                                value="{{old('phone_number')}}" >
                        </div>
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{old('email')}}" >
                        </div>
                    </div>
                    @endif
                    <div class="col-md-12">
                        <label for="note">Ghi chú</label>
                        <input type="text" class="form-control" name="note" id="note"
                                value="{{old('note')}}">

                    </div>
                    <hr class="mb-4">
                    <button type="submit" class="proceed-btn checkout-btn">Đặt hàng</button>
                </div>
            </div>
        </form>

    </div>
    <!-- End block content -->
</main>

@else

   <div class="item-order">
    <div class="py-5 text-center">
        <p class="lead">Không có sản phẩm nào trong giỏ hàng, vui lòng quay lại.</p>
    </div>
    <div class="btn-box box-center">
        <a href="{{route('home')}}" class="btn1">
            Quay lại trang chủ
        </a>
    </div>
   </div>
@endif

</body>

@endsection
