@extends('frontend.app')
@section('content')

    <div class="header-table-cart">
    <h1 class="text-center text-uppercase">Đơn hàng đã đặt</h1>
  </div>
  @if ($orders->count())
        <div class="header-table-cart">
            @foreach ($orders as $order=>$products )
            <div class="info-order">
                <section class="shopping-cart spad">
                    <div class="container">
                            <h3><strong>Thông tin đơn hàng {{$order}} </strong></h3>
                                <div class="row">
                                  <div class="col-lg-12">
                                        <div class="cart-table">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Hình ảnh</th>
                                                        <th class="p-name">Tên sản phẩm</th>
                                                        <th>Số lượng</th>
                                                        <th>Đơn giá</th>
                                                        <th>Thành tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($products as $product )
                                                <div id="change-item-cart">
                                                <tr>
                                                    <td class="cart-pic"><img src="{{ asset('storage/' . $product->thumbnail)}}" alt=""></td>
                                                    <td class="cart-title">
                                                        <h5>{{$product->product_name}}  </h5>
                                                    </td>
                                                    <td class="cart-title text-center">
                                                        <h5>{{$product->qty}}  </h5>
                                                    </td>
                                                     </div>
                                                     @if($product->discount > 0)
                                                     <td class="total-price">{{number_format($product->discount)}} &#8363;</td>
                                                     <td class="total-price">{{number_format($product->discount * $product->qty)}} &#8363;</td>
                                                     @else
                                                     <td class="total-price">{{number_format($product->price)}} &#8363;</td>
                                                     <td class="total-price">{{number_format($product->price * $product->qty)}} &#8363;</td>
                                                     @endif
                                                </tr>
                                            </div>
                                                @endforeach

                                            </tbody>
                                        </table>

                                            <div class="col-lg-4 offset-lg-8">
                                                <div class="proceed-checkout">
                                                    <ul>
                                                        <li class="cart-total">Tổng tiền: <span>{{$product->total_price}} &#8363;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

          </div>
            @endforeach
            </div>
            @else

    <div class="header-table-cart">
        <h4>Bạn chưa đặt đơn hàng nào!</h4>
       </div>
       @endif



    @endsection



