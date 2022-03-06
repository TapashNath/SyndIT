<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name'). ' | Reset Password' }} </title>
    <link rel="shortcut icon" type="image/jpg" href="{{asset('images/site_image/logo.png')}}" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
     @toastr_css
</head>

<body class="hold-transition login-page">


    <div class="login-box">

        <div class="card ">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{route('admin/login')}}" class="h1"><b>{{ config('app.name')}}</b></a>
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">

                        <div class="position-relative">
                            <div class=" p-2 text-center">
                                <h6>Please enter the email & one time password <br> to verify your account</h6>
                                <form action="{{route('admin/reset')}}" method="post">
                                    @csrf
                                    <span style="color: red">@error('email'){{$message}}@enderror</span>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            value="@if (session('data')){{ session('data') }} @endif">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <span style="color: red">@error('otp'){{$message}}@enderror</span>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control text-center" placeholder="0 0 0 0 0 0 0"
                                            name="otp">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-eye"></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mt-3"> <button class="btn btn-primary px-5 validate">Validate</button>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="mt-3 mb-1">
                                        <a href="{{route('admin/login')}}">Login now</a>
                                    </p>
                                </div>
                                <!-- /.col -->

                                <div class="col-6">

                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.login-box -->


    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}">
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

        function OTPInput() {
        const inputs = document.querySelectorAll('#otp > *[id]');
        for (let i = 0; i < inputs.length; i++)
        {
            inputs[i].addEventListener('keydown', function(event)
        { if (event.key==="Backspace" )
         { inputs[i].value='' ;
         if (i !==0) inputs[i - 1].focus(); }
          else { if (i===inputs.length - 1 && inputs[i].value !=='' )
          { return true; } else if (event.keyCode> 47 && event.keyCode < 58)
          { inputs[i].value=event.key;
            if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); }
            else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode);
                if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput(); });
    </script>

    @toastr_js
    @toastr_render
</body>

</html>
