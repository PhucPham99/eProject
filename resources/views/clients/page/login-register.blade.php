@extends('clients.master')
<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:21:15 GMT -->
@section('title' , 'Login page')
@section('content')
            <!-- breadcrumb-area start -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="{{route('page.home')}}">Home</a></li>
                                <li class="breadcrumb-item active">login &amp; register</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area end -->
    
            <!-- main-content-wrap start -->
            <div class="main-content-wrap section-ptb lagin-and-register-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 m-auto">
                            <div class="login-register-wrapper">
                                <!-- login-register-tab-list start -->
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-bs-toggle="tab" href="#lg1">
                                        <h4> login </h4>
                                    </a>
                                    <a data-bs-toggle="tab" href="#lg2">
                                        <h4> register </h4>
                                    </a>
                                </div>
                                <!-- login-register-tab-list end -->
                                @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                  @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                  @endforeach
                                </div>
                                @endif
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                                <form action="{{route('page.login')}}" method="post">
                                                    @csrf
                                                    <div class="login-input-box">
                                                        <input type="email" name="email" placeholder="Email">
                                                        <input type="password" name="password" placeholder="Password">
                                                    </div>
                                                    <div class="button-box">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox">
                                                            <label>Remember me</label>
                                                            <a href="#">Forgot Password?</a>
                                                        </div>
                                                        <div class="button-box">
                                                            <button class="login-btn btn" type="submit"><span>Login</span></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                                <form action="{{route('page.register')}}" method="post">
                                                    @csrf
                                                    <div class="login-input-box">
                                                        <input type="email" name="email" placeholder="Email">
                                                        <input type="password" name="password" placeholder="Password">
                                                        <input type="password" name="password_confirmation" placeholder="Password Confirmation">
                                                        <select name="level" style="display: none;">
                                                            <option value="4">Member</option>
                                                        </select>
                                                        <input name="phone" placeholder="Phone" type="text">
                                                        <input name="fullname" placeholder="Full name" type="text">
                                                        <select name="status" style="display: none;">
                                                            <option value="1">Show</option>
                                                        </select>
                                                    </div>
                                                    <div class="button-box">
                                                        <button class="register-btn btn" type="submit"><span>Register</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-content-wrap end -->
@endsection