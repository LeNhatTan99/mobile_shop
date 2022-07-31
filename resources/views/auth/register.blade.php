
@extends('frontend.app')
@section('content')
<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center thumbnail-form register-form">
            <div class="col-md-12 col-lg-10">

                 <div class="  p-lg-5 col-12">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-4 text-center"><strong>Đăng ký tài khoản</strong></h3>
                      </div>
                  </div>
                        <form role="form" method="POST" action="{{ route('register') }}" class="signin-form">
                        @csrf
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Họ và tên') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('phone_number') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" placeholder="{{ __('Số điện thoại') }}" type="text" name="phone_number" value="{{ old('phone_number') }}" required autofocus>
                @if ($errors->has('phone_number'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                <input class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Địa chỉ') }}" type="text" name="address" value="{{ old('address') }}" required autofocus>
            @if ($errors->has('address'))
                <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Mật khẩu') }}" type="password" name="password" value="{{ old('password') }}" required autofocus>
        @if ($errors->has('password'))
            <span class="invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        </div>

        <div class="form-group">
                <input class="form-control" placeholder="{{ __('Nhập lại mật khẩu') }}" type="password" name="password_confirmation" required>
        </div>

        <div class="row my-4">
            <div class="col-12">
                <div class="custom-control custom-control-alternative custom-checkbox" >
                    <input class="custom-control-input" id="customCheckRegister" type="checkbox" required>
                    <label class="custom-control-label" for="customCheckRegister" >
                        <span class="text-muted">{{ __('Tôi đồng ý với') }} <a href="#!">{{ __('điều khoản sử dụng') }}</a></span>
                    </label>
                </div>
            </div>
        </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-login submit px-3"><strong>Đăng ký</strong></button>
                </div>

              </form>
               </div>
          </div>
            </div>

    </div>
</section>

@endsection
