<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Login</title>

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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="admin/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" type="password" class="au-input au-input--full{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="admin/vendor/slick/slick.min.js">
    </script>
    <script src="admin/vendor/wow/wow.min.js"></script>
    <script src="admin/vendor/animsition/animsition.min.js"></script>
    <script src="admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="admin/js/main.js"></script>

</body>

</html>