<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('gentelella/production/images/favicon.ico') }}" type="image/ico" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('gentelella/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('gentelella/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('gentelella/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('gentelella/build/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gentelella/build/css/style.css') }}" rel="stylesheet">

    {{-- CK EDITOR --}}
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ asset('/home') }}" class="site_title"><i class="fa fa-paw"></i> <span>Admin |
                                Himed</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <hr>


                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="{{ asset('tentang') }}"><i class="fa fa-desktop"></i>Tentang Himed</a>
                                </li>
                                <li><a href="{{ asset('layanan') }}"><i class="fa fa-desktop"></i>Layanan Himed</a>
                                </li>
                                <li><a href="{{ asset('fitur') }}"><i class="fa fa-desktop"></i>Fitur Himed</a></li>
                                <li><a href="{{ asset('paket') }}"><i class="fa fa-bar-chart-o"></i>Paket Himed</a>
                                </li>
                                <li><a><i class="fa fa-laptop"></i>Blog <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ asset('/post') }}">Post </a></li>
                                        <li><a href="{{ asset('/category') }}">Kategori </a></li>
                                        <li><a href="{{ asset('/tag') }}">tag </a></li>
                                        <li><a href="{{ asset('/komentar') }}">Komentar </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <span class="name_navbar">{{ $login->name }}</span>
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/uploads/profiles/{{ $login->img_profile }}" alt="img_null">
                                </a>
                                <div class=" dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('akun') }}">AKUN</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"><i
                                            class="fa fa-sign-out pull-right"></i>KELUAR</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row">
                    {{-- the contents of the page | Isi Konten --}}
                    @yield('container')
                    {{-- /the contents of the page | Isi Konten --}}
                </div>
                <!-- /page content -->

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('gentelella/vendors/fastclick/lib/fastclick.js') }}"></script>
        <!-- NProgress -->
        <script src="{{ asset('gentelella/vendors/nprogress/nprogress.js') }}"></script>
        <!-- Chart.js -->
        <script src="{{ asset('gentelella/vendors/Chart.js/dist/Chart.min.js') }}"></script>
        <!-- gauge.js -->
        <script src="{{ asset('gentelella/vendors/gauge.js/dist/gauge.min.js') }}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{ asset('gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ asset('gentelella/vendors/iCheck/icheck.min.js') }}"></script>
        <!-- Skycons -->
        <script src="{{ asset('gentelella/vendors/skycons/skycons.js') }}"></script>
        <!-- Flot -->
        <script src="{{ asset('gentelella/vendors/Flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('gentelella/vendors/Flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('gentelella/vendors/Flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('gentelella/vendors/Flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('gentelella/vendors/Flot/jquery.flot.resize.js') }}"></script>
        <!-- Flot plugins -->
        <script src="{{ asset('gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
        <script src="{{ asset('gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
        <script src="{{ asset('gentelella/vendors/flot.curvedlines/curvedLines.js') }}"></script>
        <!-- DateJS -->
        <script src="{{ asset('gentelella/vendors/DateJS/build/date.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('gentelella/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
        <script src="{{ asset('gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="{{ asset('gentelella/vendors/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{ asset('gentelella/build/js/custom.min.js') }}"></script>

</body>

</html>
