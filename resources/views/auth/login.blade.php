

@extends('frontend.app')
@section('content')
<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center thumbnail-form">
            <div class="col-md-12 col-lg-10">

                    <div class=" p-4 p-lg-5 col-12">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-4 text-center"><strong>Đăng nhập</strong></h3>
                      </div>
                  </div>
                        <form role="form" method="POST" action="{{ route('login') }}" class="signin-form">
                        @csrf
                      <div class="mb-3 form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                        <label class="label" for="name"><strong>Email</strong></label>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" value="admin@argon.com" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                <div class="mb-3 form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label class="label" for="name"><strong>Mật khẩu</strong></label>
              <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Mật khẩu') }}" type="password"  required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="form-control btn btn-login submit px-3"><strong>Đăng nhập</strong></button>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                        <input checked class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheckLogin">
                            <span class="">{{ __('Lưu đăng nhập') }}</span>
                        </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
                                </div>
                </div>
                         <hr>
                        <a href="{{ route('register') }}" class="form-control btn btn-success "><strong>Tạo tải khoản</strong></a>
              </form>

          </div>
            </div>

    </div>
</section>
@endsection



