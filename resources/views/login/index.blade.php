{{-- @extends('layouts/main') --}}
@extends('login/layouts/main')

@section('title', 'Halaman Login')

@section('container')
<br />
<br />

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
</div>  
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
</div>  
@endif

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
          
            <div class="col-lg-6">
                <div class="card1 pb-5 pt-5">
                    <br />
                    <div class="row px-3 justify-content-center mt-5 mb-5 border-line"> <img src="{{ url('/assets/img/login-bg.png') }}" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
               <form action="/login" method="POST">
                @csrf
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                        <div class="facebook2 text-center mr-3">
                            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                        </div>
                        <div class="twitter2 text-center mr-3">
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        </div>
                        <div class="instagram2 text-center mr-3">
                            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Enter a valid email address" id="email" autofocus required value="{{ old('email') }}"> </div>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                            @enderror
                        <div class="row px-3">  <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" placeholder="Enter password" id="password" required> </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <button class="btn btn-blue text-center" role="button" aria-pressed="true">Login</button>
                    <div class="row mb-4 px-3 mt-2"> <small class="font-weight-bold">Don't have an account? <a class="text-danger " href="/register">Register</a></small> </div>
                </div>
            </form>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
@endsection