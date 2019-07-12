<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Edit About</title>

    <!-- Fontfaces CSS-->
    <link href="{{URL::asset('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{URL::asset('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{URL::asset('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    
    <link href="{{URL::asset('admin/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="../../admin/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>About</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../../admin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="#">
                                <i class="fas fa-table"></i>About</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                        <ul class="navbar-nav ml-auto">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../../admin/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a id="navbarDropdown" class="js-acc-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../../admin/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </a>
                            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Input</strong>
                                            </div>
                                            <form action="{{'/home/'.$edit->id.'/update'}}" method="post">
                                                @csrf
                                                <div class="card-body card-block">
                                                    <div class="has-success form-group">
                                                        <label for="description" class=" form-control-label">Description</label>
                                                        {{-- <input type="text" name="description" id="description" class="is-valid form-control-success form-control" value="{{$edit->description}}"> --}}
                                                            <textarea name="description" id="description" rows="9" class="form-control">{{$edit->description}}</textarea>
                                                        
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <a href="{{url('/home')}}" type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Back
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © <script>document.write(new Date().getFullYear());</script> Reynaldo. All rights reserved. <a href="#">Reynaldo</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../../admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../admin/vendor/slick/slick.min.js">
    </script>
    <script src="../../admin/vendor/wow/wow.min.js"></script>
    <script src="../../admin/vendor/animsition/animsition.min.js"></script>
    <script src="../../admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../../admin/js/main.js"></script>

</body>

</html>
<!-- end document-->