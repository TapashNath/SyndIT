<!DOCTYPE html>
<html lang="en">
@include('main.header')

<body class="hold-transition sidebar-mini pace-primary topc layout-navbar-fixed layout-fixed">
    <div class="wrapper">
        @include('main.navbar')
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    @section('container')
                    @show
                </div>
            </section>
        </div>
        @include('main.footer')
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    {{-- All Script --}}
    @stack('scripts')
    @include('main.script')
</body>
</html>
