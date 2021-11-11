
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

 <!-- Sing in  Form -->
 <section class="sign-in">
            <div class="container2">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('assets3/images/why-us.png')}}" alt="sing in image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="/login">
                        @csrf
                            <div class="form-group @error('email') is-invalid @enderror">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" placeholder="Enter a valid email address" id="email" autofocus required value="{{ old('email') }}"/>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection