{{-- @extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest') --}}

    {{-- <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header  pb-0">
                        <div class="text-muted text-center mt-2 mb-3"><h3>{{ __('Đăng nhập') }}</h3></div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">

                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" value="admin@argon.com" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" value="secret" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted">{{ __('Lưu đăng nhập') }}</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Đăng nhập') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-light">
                                <small>{{ __('Quên mật khẩu?') }}</small>
                            </a>
                        @endif
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{ route('register') }}" class="text-light">
                            <small>{{ __('Tạo tài khoản mới') }}</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


{{-- @endsection --}}

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
              <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Mật khẩu') }}" type="password" value="secret" required>
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



