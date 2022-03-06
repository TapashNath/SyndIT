<!-- Navbar -->
<nav class="main-header navbar navbar-expand mb-1 navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('admin/dashboard')}}" class="nav-link">Home</a>
        </li>
    </ul> <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        @if (in_array('viewNotification', json_decode(Session()->get('permission'), true)))
            <!-- Notification Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
        @endif
        <!-- Messages Dropdown Menu -->
        @if (in_array('viewSupport', json_decode(Session()->get('permission'), true)))
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>


</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-5">
    <!-- Brand Logo -->
    @php
        $user = App\Models\AdminData::where('user_id', Session()->get('id'))->value('image');
        $name = App\Models\Admin::where('id', Session()->get('id'))->value('name');
    @endphp

    <a href="{{route('admin/dashboard')}}" class="brand-link">
        <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->

        <div class="form-inline mt-2">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item @php if($siteName == " User"){ echo "menu-open" ;} @endphp">
                    <a href="#" class="nav-link @php if($subName == " Edit Profile" ){ echo "active" ;} @endphp">
                        @if ($user != null)
                            @if (file_exists(public_path() . '/images/admin/' . $user))
                                <img width="30" height="30" src="{{ asset('/images/admin/' . $user) }}"
                                    class="img-circle elevation-2" alt="User Image">
                            @else
                                <img width="30" height="30" src="{{ asset('dist/img/boxed-bg.jpg') }}"
                                    class="img-circle elevation-2" alt="User Image">
                            @endif
                        @else
                            <img width="30" height="30" src="{{ asset('dist/img/boxed-bg.jpg') }}"
                                class="img-circle elevation-2" alt="User Image">
                        @endif

                        <p>{{ $name }} <i class="fas fa-angle-left right"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin/editProfile')}}" class="nav-link @php if($subName == " Edit Profile"
                                ){ echo "active" ;} @endphp">
                                <i class="fas fa-user nav-icon text-success"></i>
                                <p class="text-success">Edit Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin/logout')}}" class="nav-link">
                                <i class="fas nav-icon fa-lg fa-power-off text-danger"></i>
                                <p class="text-danger">Logout</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @if (in_array('viewDashboard', json_decode(Session()->get('permission'), true)))
                    <li class="nav-item @php if($siteName == " Dashboard"){ echo "menu-open" ;} @endphp">
                        <a href="/" class="nav-link @php if($siteName == " Dashboard"){ echo "active" ;} @endphp">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p> Dashboard </p>
                        </a>
                    </li>
                @endif


                @if (in_array('viewUser', json_decode(Session()->get('permission'), true)))
                    <li class="nav-item">
                        <a href="{{route('admin/customer')}}" class="nav-link @php if($siteName == " Customer"){
                            echo "active" ;} if($siteName==" Customer Details" ){ echo "active" ;}@endphp">
                            <i class="fa fa-user nav-icon"></i>
                            <p>Customer</p><span class="badge badge-info right"></span>
                        </a>
                    </li>
                @endif

                @if (in_array('viewFeedback', json_decode(Session()->get('permission'), true)))
                    <li class="nav-item">
                        <a href="{{route('admin/feedback')}}" class="nav-link @php if($siteName == " Feedbacks"){
                            echo "active" ;} @endphp">
                            <i class="fas fa-comments nav-icon"></i>
                            <p>Feedbacks</p><span class="badge badge-info right"></span>
                        </a>
                    </li>
                @endif


                {{-- @if (in_array('viewUser', json_decode(Session()->get('permission'), true)))
                    <li class="nav-item @php if($siteName == " System Users"){ echo "menu-open" ;} @endphp">
                        <a href="#" class="nav-link @php if($siteName == " System Users" ){ echo "active" ;} @endphp">
                            <i class="nav-icon fa fa-cogs"></i>
                            <p>System Users <i class="right fas fa-angle-left"></i></p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin/roleView')}}" class="nav-link @php if($subName == " Role
                                    Management"){ echo "active" ;} @endphp">
                                    <i class="fa fa-wrench nav-icon"></i>
                                    <p>Role Management</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin/systemUser')}}" class="nav-link @php if($subName == " User
                                    Management"){ echo "active" ;} @endphp">
                                    <i class="fas fa-wrench nav-icon"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif --}}

                @if (in_array('viewSettings', json_decode(Session()->get('permission'), true)))
                    <li class="nav-item  {{ $siteName == ' Panel Settings' ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link  @php
                                if($siteName==" Panel
                            Settings"){ echo "active" ; } @endphp">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Panel Setting
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{route('admin/notification')}}"
                                    class="nav-link @php
                                                                    if($subName=="
                                    Notification Settings"){ echo "active" ; } @endphp">
                                    <i class="far fas fa-bell nav-icon"></i>
                                    <p>Notification Settings</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('admin/termsnconditions')}}"
                                    class="nav-link @php
                                        if($subName==" Terms &
                                    Conditions"){ echo "active" ; } @endphp">
                                    <i class="far fas fa-file-signature nav-icon"></i>
                                    <p>Terms & Conditons</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('admin/privacynpolicy')}}"
                                    class="nav-link @php
                                        if($subName==" Privacy
                                    & Policy"){ echo "active" ; } @endphp">
                                    <i class="far fas fa-user-shield nav-icon"></i>
                                    <p>Privacy & Policy</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="{{route('admin/aboutus')}}"
                                    class="nav-link @php
                                        if($subName==" About
                                    Us"){ echo "active" ; } @endphp">
                                    <i class="far fas fa-address-card nav-icon"></i>
                                    <p>About Us</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('admin/contactus')}}"
                                    class="nav-link @php
                                        if($subName==" Contact
                                    Us"){ echo "active" ; } @endphp">
                                    <i class="far fas fa-phone-square nav-icon"></i>
                                    <p>Contact Us</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                @endif

                <li class="nav-item">
                    <p></p>
                </li>
                <li class="nav-item">
                    <p></p>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
