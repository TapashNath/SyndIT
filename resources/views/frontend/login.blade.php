<!DOCTYPE html>
<html lang="en">
    @php
        $subname = "Login";
    @endphp
    @include('frontend.common.header')

<body>
    <div class="wrapper" id="wrap">
        <div class="login_register">
            <div class="login_page" >
                <div class="img_side">
                    <div class="overlayer"></div>
                    <div class="img_content">
                        <div class="logo">
                            <h2>SyndIT</h2>
                        </div>
                        <h1>Welcome back !</h1>
                        <p>We are glad to see you again! Instant deposites, withdrawls & payouts trusted by millions worlwide</p>
                    </div>
                </div>
                <div class="form_side">
                    <div class="form_overlay"></div>
                    <div class="form_box">
                        <form >
                            <h1>Log In</h1>
                            <div class="input_box">
                                <h5>Email Address</h5>
                                <input type="text" placeholder="Enter Your Email">
                            </div>
                            <div class="input_box">
                                <h5>Password</h5>
                                <input type="password" placeholder="Enter Password">
                            </div>
                            <div class="set_section">
                                <div class="remember">
                                    <input type="checkbox" id="choice1">
                                    <label for="choice1">Remember Me</label>
                                </div>
                                <div class="forgot">
                                    <a href="#">Forgot Password ?</a>
                                </div>
                            </div>
                            <button>Login</button>
                            <div class="signup_btn">
                                <p>Don't have an account? <a href="#" onclick="signupregister()">Signup</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="registration_page" >
                <div class="form_side">
                    <div class="form_overlay"></div>
                    <div class="form_box">
                        <form >
                            <h1>Sign Up</h1>
                            <div class="input_box">
                                <h5>Full Name</h5>
                                <input type="text" placeholder="Enter Your Name">
                            </div>
                            <div class="input_box">
                                <h5>Email Address</h5>
                                <input type="text" placeholder="Enter Your Email">
                            </div>
                            <div class="input_box">
                                <h5>Password</h5>
                                <input type="password" placeholder="Enter a Password">
                            </div>
                            <button>Sign Up</button>
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
<script src="{{asset('frontend/js/active.js')}}"></script>
</html>
