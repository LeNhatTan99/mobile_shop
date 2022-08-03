@extends('frontend.app', ['title' => __('User Profile')])

@section('content')

        <div class="container py-5 h-100"></div>
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
              <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                  <div class="col-md-4 gradient-custom text-center text-white"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                      alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                    <h5> <i class="ni location_pin mr-2"></i>{{ auth()->user()->name}}</h5>
                    <p>  {{ auth()->user()->address}}</p>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body p-4">
                      <h6>Thông tin</h6>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Email</h6>
                          <p class="text-muted">{{ auth()->user()->email}}</p>
                        </div>
                        <div class="col-6 mb-3">
                          <h6>
                            Số điện thoại</h6>
                          <p class="text-muted">{{ auth()->user()->phone_number}}</p>
                        </div>
                      </div>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                      </div>
                      </div>
                      </div>
                      </div>
                    </div>
                            <div class="card mb-3" style="border-radius: .5rem;">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="row align-items-center">
                                        <h3 class="mb-0">{{ __('Chỉnh sửa thông tin') }}</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                                        @csrf
                                        @method('put')

                                        <h6 class="heading-small text-muted mb-4">{{ __('Thông tin người dùng') }}</h6>

                                        @if (session('status'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('status') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif


                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Tên') }}</label>
                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                                <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('phone_number') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('Số điện thoại') }}</label>
                                                <input type="text" name="phone_number" id="input-email" class="form-control form-control-alternative{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" placeholder="{{ __('Số điện thoại') }}" value="{{ old('phone_number', auth()->user()->phone_number) }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">{{ __('Địa chỉ') }}</label>
                                                <input type="text" name="address" id="input-email" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Địa chỉ') }}" value="{{ old('address', auth()->user()->address   ) }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success mt-4">{{ __('Lưu') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                    <hr class="my-4" />
                                    <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                                        @csrf
                                        @method('put')

                                        <h6 class="heading-small text-muted mb-4">{{ __('Mật khẩu') }}</h6>

                                        @if (session('password_status'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('password_status') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-current-password">{{ __('Mật khẩu hiện tại') }}</label>
                                                <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Mật khẩu hiện tại') }}" value="" required>

                                                @if ($errors->has('old_password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('old_password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-password">{{ __('Mật khẩu mới') }}</label>
                                                <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Mật khẩu mới') }}" value="" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-password-confirmation">{{ __('Nhập lại mật khẩu mới') }}</label>
                                                <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Nhập lại mật khẩu mới') }}" value="" required>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success mt-4">{{ __('Đổi mật khẩu') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

@endsection

