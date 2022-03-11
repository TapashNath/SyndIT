<!DOCTYPE html>
<html lang="en">
@php
$subname = 'Login';
@endphp
@include('frontend.common.header')

<body>
    <div class="wrapper" id="wrap">
        <div class="login_register">
            <!-- /.content-header -->
            @if (session('sucsess'))
                <div class="alert alert-success alert-dismissible my-2 mx-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    {{ session('sucsess') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible my-2 mx-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    {{ session('error') }}
                </div>
            @endif

            <div class="login_page">
                <div class="img_side">
                    <div class="overlayer"></div>
                    <div class="img_content">
                        <div class="logo">
                            <h2>SyndIT</h2>
                        </div>
                        <h1>Welcome back !</h1>
                        <p>We are glad to see you again! Instant deposites, withdrawls & payouts trusted by millions
                            worlwide</p>
                    </div>
                </div>
                <div class="form_side">
                    <div class="form_overlay"></div>
                    <div class="form_box">

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <h1>Log In</h1>
                            <div class="input_box">
                                <h5>Email Address</h5>
                                <span style="color: red">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="text" name="email" placeholder="Enter Your Email" required>
                            </div>
                            <div class="input_box">
                                <h5>Password</h5>
                                <span style="color: red">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="password" name="password" placeholder="Enter Password" required min="8">
                            </div>
                            <div class="set_section">
                                <div class="remember">
                                    <input type="checkbox" name="remember" id="choice1">
                                    <label for="choice1">Remember Me</label>
                                </div>
                                <div class="forgot">
                                    <a href="#">Forgot Password ?</a>
                                </div>
                            </div>
                            <button type="submit">Login</button>
                            <div class="signup_btn">
                                <p>Don't have an account? <a href="#" onclick="signupregister()">Signup</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="registration_page">
                <div class="form_side">
                    <div class="form_overlay"></div>
                    <div class="form_box">
                        <form action="{{ route('signup') }}" method="POST">
                            @csrf
                            <h1>Sign Up</h1>
                            <div class="input_box">
                                <h5>Full Name</h5>
                                <input type="text" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="input_box">
                                <h5>Email Address</h5>
                                <input type="text" name="email" placeholder="Enter Your Email" required>
                            </div>
                            <div class="input_box">
                                <h5>Password</h5>
                                <input type="password" name="password" placeholder="Enter a Password" required>
                            </div>
                            <button type="submit">Sign Up</button>
                            <div class="signup_btn">
                                <p>Already have an account? <a href="#" onclick="signupregister()">Log In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="img_side">
                    <div class="overlayer"></div>
                    <div class="img_content">
                        <div class="logo">
                            <h2>SyndIT</h2>
                        </div>
                        <h1>Get Verified</h1>
                        <p>Everyday, SyndIT makes thousands of customers happy. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- /.login-box -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
@toastr_js
@toastr_render
<script src="{{ asset('frontend/js/active.js') }}"></script>

</html>
