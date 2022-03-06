<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{{ csrf_token() }}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content='{{config(' app.name')}}' />
    <meta property="og:description" content='{{config(' app.name')}}' />
    <title>{{config('app.name')}} | @php echo $subName @endphp</title>

    <link rel="shortcut icon" href="{{asset('images/logo/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/logo/logo.png')}}" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- All css-->
    @include('main.css')
    @stack('css')
    <!-- toster -->
    @toastr_css
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

</head>
