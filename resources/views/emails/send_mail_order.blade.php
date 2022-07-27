<h1>Đã đặt hàng thành công </h1>
<h3>Xin chào <a href="">{{$order->name}}</a></h3>
<strong>Thông tin chi tiết đơn hàng</strong>
<div style="line-height: 1.4px">
 <p>Mã số đơn hàng: {{$order->id}}</p>
<p>Tên người đặt hàng: {{$order->name}}</p>
<p>Địa chỉ giao hàng: {{$order->address}}</p>
<p>Số điện thoại: {{$order->phone_number}}</p>
<p>Email: {{$order->email}}</p>
<p>Tên sản phẩm: {{$order->product_name}}</p>
<p>Số lượng: {{$order->qty}}</p>
<p>Tổng tiền: {{number_format($order->total_price)}}đ</p>
<p>Ghi chú: {{$order->note}}</p>
</div>
<p>Cảm ơn bạn đã sử dụng dịch vụ của Mobile Shop!</p>
