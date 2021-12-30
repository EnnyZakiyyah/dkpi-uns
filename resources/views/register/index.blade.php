{{-- @extends('layouts/main') --}}
@extends('login/layouts/main')

@section('title', 'Halaman Register')

@section('container')
<br />
<br />

<section class="sign-up">
    <div class="container2">
        <div class="signup-content">
            <div class="signin-image mt-5 pt-5">
                <figure><img src="{{url('/assets/img/login-bg.png')}}" alt="sing in image"></figure>
                
            </div>

            <div class="signin-form">
                <h2 class="form-title">Registration Form</h2>
                <form method="POST" class="register-form" id="login-form" action="/register">
                @csrf
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" placeholder="Enter your name" id="name" autofocus required value="{{ old('name') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="email" placeholder="Enter a valid email address" id="email" autofocus required value="{{ old('name') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                    </div>
                    <div class="row mb-4 px-3 mt-2"> <small class="font-weight-bold">Already registered? <a class="text-danger " href="/login">Login</a></small> </div>
                    <div class="form-group form-button">
                        @if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
</div>  
@endif
                        <input type="submit" class="form-submit" role="button" aria-pressed="true" value="Register"/>
                        {{-- <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5 pt-5">
                    <br />
                    <div class="row px-3 justify-content-center mt-5 mb-5 border-line"> <img src="{{ url('/assets/img/login-bg.png') }}" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <form action="/register" method="POST">
                            @csrf
                        <h3 class="mb-0 mr-4 mt-2 text-center">Registration Form</h3>
                    
                    <div class="row px-3"> 
                        <input class="mb-4 @error('name')is-invalid @enderror" type="text" name="name" placeholder="Enter name" id="name" value="{{ old('name') }}" required> </div>
                    <div class="row px-3"> <label class="mb-1" required >
                            <h6 class="mb-0 text-sm"></h6>
                        </label> --}}
                        {{-- <input class="mb-4" type="text" name="username" placeholder="Enter username" id="username" required value="{{ old('username') }}"> </div> --}}
                    {{-- <div class="row px-3">
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm"></h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address" id="email" required value="{{ old('email') }}"> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm"></h6>
                        </label> <input type="password" name="password" placeholder="Enter password" id="password" required> </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <button class="btn btn-blue text-center" role="button" aria-pressed="true">Register</button>
                    <div class="row mb-4 px-3 mt-2"> <small class="font-weight-bold">Already registered? <a class="text-danger " href="/login">Login</a></small> </div>
                </form>
                </div>
            </div>
        </div> --}}

        {{-- <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div> --}}
   
@endsection
