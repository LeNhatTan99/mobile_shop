@extends('frontend.app')
@section('content')
<div class="wrapper">
    <div class="product-img">
      <img src="https://cdn.tgdd.vn/Products/Images/42/223602/iphone-13-1-4.jpg" height="auto" width="327" >
    </div>
    <div class="product-info">
      <div class="product-text">
        {{-- <td>
                {{ $product->name }}
        </td> --}}
        <h2>by studio and friends</h2>
        {{-- <p>{{$product->description}}</p> --}}
      </div>
      <div class="product-price-btn">
        {{-- <p><span>{{number_format($product->price)}} &#8363;</span></p> --}}
        <a type="button" class="add_to_cart">Mua Ngay</a>
      </div>
    </div>
  </div>

  <script>
    function addTocart(event){
        event.preventDefault();
        alert(123);
    }
    $(function(){
        $('.add_to_cart').on('click',addTocart);
    }

    );
</script>
@endsection

