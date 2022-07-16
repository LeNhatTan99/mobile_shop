@extends('frontend.app')

@section('content')

<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">

          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
            <div>
              <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                    class="fas fa-angle-down mt-1"></i></a></p>
            </div>
          </div>



          <div class="card rounded-3 mb-4">

             <div class="card mb-4">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <p class="lead fw-normal mb-2">Hinh anh</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                  <p class="lead fw-normal mb-2">San pham</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <p class="lead fw-normal mb-2">So luong</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <p class="lead fw-normal mb-2">Gia</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <p class="lead fw-normal mb-2">Hanh dong</p>
                </div>
              </div>
          </div>

            <div class="card-body p-4">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                  <p class="lead fw-normal mb-2">Iphone 13 Pro Max</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                  <button class="btn btn-link "
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    -
                  </button>

                  <input id="form1" min="0" name="quantity" value="2" type="number"
                    class="form-control form-control-sm" />

                  <button class="btn btn-link "
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    +
                  </button>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                  <h5 class="mb-0"></h5>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                  <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-warning btn-block btn-lg">Dat hang</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection
