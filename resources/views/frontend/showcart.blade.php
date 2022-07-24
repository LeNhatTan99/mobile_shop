@extends('frontend.app')

@section('content')


  <div id="preloder">
    <div class="loader"></div>
</div>


<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <span> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng </span>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
            <div class="row">
              <div class="col-lg-12">
                    @if (Session::has("cart") != null)
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th class="p-name">Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Cập nhật</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach (Session::get('cart')->products as $product )

                            <div id="change-item-cart">
                            <tr>
                                <td class="cart-pic"><img src="{{ asset('storage/' . $product['productInfo']->thumbnail)}}" alt=""></td>
                                <td class="cart-title">
                                    <h5>{{$product['productInfo']->name}}</h5>
                                </td>
                                <td class="qua-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="number" min="1" value="{{$product['qty']}}" id="product_{{ $product['productInfo']->id }}">
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price">{{number_format($product['price'])}} &#8363;</td>
                                <td class="close-td"><a href="{{route('update.cart',[$product['productInfo']->id,$product['qty']])}}" class="btn btn-info update-item">Lưu</i></a></td>
                                <td class="close-td"><a href="{{route('delete.cart',$product['productInfo']->id)}}" class="btn btn-danger">X</a></td>
                            </tr>
                        </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-8">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="cart-total">Tổng tiền: <span>{{number_format(Session::get('cart')->totalPrice)}} &#8363;</span></li>
                            </ul>
                            <a href="#" class="proceed-btn">Đặt hàng</a>
                        </div>
                    </div>
                </div>
                @else <h4>Giỏ hàng chưa có sản phẩm nào!</h4>
                @endif
            </div>
        </div>
    </div>
</section>


@endsection


