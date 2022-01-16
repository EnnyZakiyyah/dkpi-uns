@extends('login/layouts/main')

@section('title', 'Halaman Login')

@section('container')
<br />
<br />
<div class="container3">
    <input type="checkbox" id="flip">
    <div class="cover">
        <div class="front">
            <img src="{{asset('assets3/images/login.jpg')}}" alt="">
            <div class="text">
                <span class="text-1">DKPI - UNS</span>
            </div>
        </div>
        <div class="back">
            <img class="backImg" src="{{asset('assets3/images/login.jpg')}}" alt="">
            <div class="text">
                <span class="text-1">DKPI - UNS</span>
            </div>
        </div>
    </div>
    <div class="forms">
        <div class="form-content">
            <div class="login-form">
                <div class="title">Login</div>
                <form method="POST" action="/login" enctype="multipart/form-data">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box @error('email') is-invalid @enderror">
                            <i class="bi bi-envelope-fill"></i>
                            <input type="text" name="email" placeholder="Enter a valid email address" id="email"
                                autofocus required value="{{ old('email') }}" />
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <i class="bi bi-lock-fill"></i>
                            <input type="password" name="password" id="password" placeholder="Password" required />
                        </div>
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
                        <div class="button input-box">
                            <input type="submit" name="signin" value="Sumbit">
                        </div>
                        {{-- <div class="text sign-up-text">Don't have an account? <label for="flip"><a href="/register"> Sigup now</a></label></div> --}}
                    </div>
                </form>
            </div>
            <div class="signup-form">
                <div class="title">Signup</div>
                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="bi bi-person-fill"></i>
                            <input class="@error('name')is-invalid @enderror" type="text" name="name"
                                placeholder="Enter name" id="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="input-box">
                            <i class="bi bi-envelope-fill"></i>
                            <input type="text" name="email" placeholder="Enter a valid email address" id="email"
                                autofocus required value="{{ old('email') }}" />
                        </div>
                        <div class="input-box">
                            <i class="bi bi-lock-fill"></i>
                            <input type="password" name="password" id="password" placeholder="Password" required />
                        </div>
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="button input-box">
                            <input type="submit" value="Sumbit">
                        </div>
                        <div class="text sign-up-text">Already have an account? <label for="flip"><a
                                    class="text-danger " href="/login">Login</a></label></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
