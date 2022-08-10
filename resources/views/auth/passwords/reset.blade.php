
@extends('frontend.app')
@section('content')
<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center thumbnail-form">
            <div class="col-md-12 col-lg-10">

                    <div class=" p-4 p-lg-5 col-12">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-4 text-center"><strong>Reset mật khẩu</strong></h3>
                      </div>
                  </div>
                        <form role="form" method="POST" action="{{ route('password.update') }}" class="signin-form">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Mật khẩu') }}" type="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                        <input class="form-control" placeholder="{{ __('Nhập lại mật khẩu') }}" type="password" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="form-control btn btn-login submit px-3"><strong>Reset mật khẩu</strong></button>
                </div>
              </form>

          </div>
            </div>

    </div>
</section>
@endsection


