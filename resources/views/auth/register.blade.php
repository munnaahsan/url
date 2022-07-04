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
                    <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../assets/img/illustrations/half-circle.png);">
                    </div>
                    <!--/.bg-holder-->

                    <div class="z-index-1 position-relative"><a class="text-white mb-4 text-sans-serif font-weight-extra-bold fs-4 d-inline-block" href="">URL GENERATOR</a>
                      <p class="text-white opacity-75">With the power of Falcon, you can now focus only on functionaries for your digital products, while leaving the UI design on us!</p>
                    </div>
                  </div>
                  <div class="mt-3 mb-4 mt-md-4 mb-md-5">
                    <p class="pt-3">Have an account?<br><a class="btn btn-outline-light mt-2 px-4" href="">Log In</a></p>
                  </div>
                </div>
                <div class="col-md-7 d-flex flex-center">
                  <div class="p-4 p-md-5 flex-grow-1">
                    <h3>Register</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="form-group">
                        <label for="card-name">Name</label>
                        {{-- <input class="form-control" type="text" id="card-name" /> --}}
                        <input 
                            id="name" 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            name="name" value="{{ old('name') }}" 
                            required 
                            autocomplete="name" 
                            autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="form-group">
                        <label for="card-email">Email address</label>
                        {{-- <input class="form-control" type="email" id="card-email" /> --}}
                        <input id="email" 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" 
                                required 
                                autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="form-row">
                        <div class="form-group col-6">
                          <label for="card-password">Password</label>
                          {{-- <input class="form-control" type="password" id="card-password" /> --}}
                          <input id="password" 
                                 type="password" 
                                 class="form-control @error('password') is-invalid @enderror" 
                                 name="password" 
                                 required 
                                 autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group col-6">
                          <label for="card-confirm-password">Confirm Password</label>
                          {{-- <input class="form-control" type="password" id="card-confirm-password" /> --}}
                          <input id="password-confirm" 
                                 type="password" 
                                 class="form-control" 
                                 name="password_confirmation" 
                                 required 
                                 autocomplete="new-password">
                        </div>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="card-register-checkbox" />
                        <label class="custom-control-label" for="card-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block mt-3">{{ __('Register') }}</button>
                        {{-- <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Register</button> --}}
                      </div>
                    </form>
                    <div class="w-100 position-relative mt-4">
                      <hr class="text-300" />
                      <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or register with</div>
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
