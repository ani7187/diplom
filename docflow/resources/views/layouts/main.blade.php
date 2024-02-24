<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online docflow</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href=" {{ asset('assets/vendors/css/vendor.bundle.base.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }} ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} ">
    <!-- End layout styles -->
    <link rel="shortcut icon" href=" {{ asset('assets/images/favicon.ico') }} " />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @if(auth()->check())
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="{{route("writing.index")}}"><img src=" {{ asset('assets/images/logo.svg') }}" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="{{route("writing.index")}}"><img src=" {{ asset('assets/images/logo-mini.svg') }} " alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">--}}
{{--                        <i class="mdi mdi-bell-outline"></i>--}}
{{--                        <span class="count-symbol bg-danger"></span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">--}}
{{--                        <h6 class="p-3 mb-0">Notifications</h6>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-success">--}}
{{--                                    <i class="mdi mdi-calendar"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>--}}
{{--                                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-warning">--}}
{{--                                    <i class="mdi mdi-settings"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>--}}
{{--                                <p class="text-gray ellipsis mb-0"> Update dashboard </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-info">--}}
{{--                                    <i class="mdi mdi-link-variant"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>--}}
{{--                                <p class="text-gray ellipsis mb-0"> New admin wow! </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <h6 class="p-3 mb-0 text-center">See all notifications</h6>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="nav">
{{--                            <img src=" {{ asset('assets/images/faces/face1.jpg') }} " alt="image">--}}
                            <i class="mdi mdi-account-circle"></i>
{{--                            <span class="availability-status online"></span>--}}
                        </div>
                        <div class="nav-profile-text">
{{--                            {{ dd(auth()->user()) }}--}}
                            <p class="mb-1 text-black">{{ auth()->user()->name }}</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
{{--                        <a class="dropdown-item" href="#">--}}
{{--                            <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>--}}
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout me-2 text-primary"></i> {{ trans("menu.sign_out") }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    @endif
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @if(auth()->check())
            @include('includes.sidebar')
        @endif
        <!-- partial -->
        @yield('content')
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src=" {{ asset('assets/vendors/js/vendor.bundle.base.js') }} "></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=" {{ asset('assets/vendors/chart.js/Chart.min.js') }} "></script>
<script src=" {{ asset('assets/js/jquery.cookie.js') }} " type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=" {{ asset('assets/js/off-canvas.js') }} "></script>
<script src=" {{ asset('assets/js/hoverable-collapse.js') }} "></script>
<script src=" {{ asset('assets/js/misc.js') }} "></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src=" {{ asset('assets/js/dashboard.js') }} "></script>
<script src=" {{ asset('assets/js/todolist.js') }} "></script>
@yield('scripts')
<!-- End custom js for this page -->
</body>
</html>
