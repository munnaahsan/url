@extends('layouts.app')

@section('content')
<main class="main" id="top">
    <div class="container-fluid">
      <div class="row min-vh-100 flex-center no-gutters">
        <div class="col-lg-8 col-xxl-5 py-3"><img class="bg-auth-circle-shape" src="{{asset('img/illustrations/bg-shape.png')}}" alt="" width="250"><img class="bg-auth-circle-shape-2" src="{{asset('img/illustrations/shape-1.png')}}" alt="" width="150">
          <div class="card overflow-hidden z-index-1">
            <div class="card-body p-0">
              <div class="row no-gutters h-100">
                <div class="col-md-5 text-white text-center bg-card-gradient">
                  <div class="position-relative p-4 pt-md-5 pb-md-7">
                    <div class="bg-holder bg-auth-card-shape" 
                         style="background-image:url(../../assets/img/illustrations/half-circle.png);">
                    </div>
                    <!--/.bg-holder-->

                    <div class="z-index-1 position-relative"><a class="text-white mb-4 text-sans-serif font-weight-extra-bold fs-4 d-inline-block" href="">URL GENERATOR</a>
                      <p class="text-white opacity-75">With the power of URL GENERATOR, you can now focus only on GENERATOR custom Heavy URL! For any Purpose</p>
                    </div>
                  </div>
                  <div class="mt-3 mb-4 mt-md-4 mb-md-5">
                    <p>Don't have an account?<br><a class="text-white text-underline" href="">Get started!</a></p>
                    <p class="mb-0 mt-4 mt-md-5 fs--1 font-weight-semi-bold text-white opacity-75">Read our <a class="text-underline text-white" href="#!">terms</a> and <a class="text-underline text-white" href="#!">conditions </a></p>
                  </div>
                </div>
                <div class="col-md-7 d-flex flex-center">
                  <div class="p-4 p-md-5 flex-grow-1">
                    <h3>Account Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                         @csrf
                      <div class="form-group">
                        <label for="card-email">Email address</label>
                        {{-- <input class="form-control" id="card-email" type="email" /> --}}



                        <input 
                            id="email" 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autocomplete="email" 
                            autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                      </div>
                      <div class="form-group">
                        <div class="d-flex justify-content-between">
                          <label for="card-password">Password</label>
                          {{-- <a class="fs--1" href="../../authentication/card/forgot-password.html">Forgot Password?</a> --}}
                        </div>
                        {{-- <input class="form-control" id="card-password" type="password" /> --}}
                        <input 
                            id="password" 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            name="password" 
                            required 
                            autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="card-checkbox" checked="checked" />
                        <label class="custom-control-label" for="card-checkbox">Remember me</label>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Log in</button>
                      </div>
                    </form>
                    <div class="w-100 position-relative mt-4">
                      <hr class="text-300" />
                      <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or log in with</div>
                    </div>
                    <div class="form-group mb-0">
                      <div class="row no-gutters">
                        <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-google-plus btn-sm btn-block mt-2" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
                        <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="#"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection













{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
