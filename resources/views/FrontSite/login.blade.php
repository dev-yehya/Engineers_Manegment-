@extends('FrontSite.layout.master')
@section('content')
<!-- Start Account Page  -->
<div class="account-page">
    <div class="container">
        {{-- @dump($errors) --}}
        {{-- @if($errors->any())
        <div class="alert alert_danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('images/eng2.webp') }}" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm" action="{{route('account.login')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="  User Name" name="name" required value="{{old('name')}}"
                        class="name @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="invalid-feedback">
                            <i data-feather="alert-circle"></i>{{$message}}</div>
                        @enderror
                        <input type="password" placeholder="  Password" name="password" required value="{{old('password')}}"
                        class="password @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="invalid-feedback">
                            <i data-feather="alert-circle"></i>{{$message}}</div>
                        @enderror
                        <button type="submit" class="btn">Login</button>
                        <a href="#" class="forget-pass">Forget Password</a>

                    </form>
                    <form id="RegForm" action="{{route('account.register')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="  User Name" name="name" required value="{{old('name')}}"
                        class="name @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="invalid-feedback">
                            <i data-feather="alert-circle"></i>{{$message}}</div>
                        @enderror
                        <input type="email" placeholder="  Email" name="email" required value="{{old('email')}}"
                        class="email @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">
                            <i data-feather="alert-circle"></i>{{$message}}</div>
                        @enderror
                        <input type="password" placeholder="  Password" name="password"
                        class="password @error('password') is-invalid @enderror">
                        @error('password')
                        <div class="invalid-feedback">
                            <i data-feather="alert-circle"></i>{{$message}}</div>
                        @enderror
                        <input type="password" placeholder="  Confirm Password" name="password_confirmation"
                        class="password_confirmation @error('password_confirmation') is-invalid @enderror">
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            <i data-feather="alert-circle"></i>{{$message}}</div>
                        @enderror
                        <button type="submit" class="btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Account Page  -->
@endsection
@section('title','Login')

