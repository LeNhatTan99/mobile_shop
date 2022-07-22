{{-- @extends('frontend.app')

@section('content')

 @if ($newCart != null)
  <div id="preloder">
    <div class="loader"></div>
</div>


<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <span> <h4>Giỏ hàng</h4></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th class="p-name">Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newCart->products as $product)
                            <div id="change-item-cart">
                            <tr>
                                <td class="cart-pic"><img src="assets/img/{{$product['productInfo']->thumbnail}}" alt=""></td>
                                <td class="cart-title">
                                    <h5>{{$product['productInfo']->name}}</h5>
                                </td>
                                <td class="qua-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="{{$product['qty']}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price">{{number_format($product['productInfo']->price)}} &#8363;</td>
                                <td class="close-td"><button data-id="{{$product['productInfo']->id}}">X</button></td>
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
                                <li class="cart-total">Tổng tiền: <span>{{number_format($newCart->totalPrice)}} &#8363;</span></li>
                            </ul>
                            <a href="#" class="proceed-btn">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else <h2>Giỏ hàng chưa có sản phẩm nào</h2>
@endif


<!-- Js Plugins -->

@endsection --}}
@if ($newCart != null )
<p>ok</p>
@endif
<div class="select-items">
    <table>
        <tbody>
            <tr>
                <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>₫60.00 x 1</p>
                        <h6>Kabino Bedside Table</h6>
                    </div>
                </td>
                <td class="si-close">
                    <i class="ti-close"></i>
                </td>
            </tr>

        </tbody>
    </table>
</div>
<div class="select-total">
    <span>Tổng:</span>
    <h5>₫120.00</h5>
</div>

