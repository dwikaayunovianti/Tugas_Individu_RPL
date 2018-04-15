<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/png" href="http://www.mcssl.com/content/219577/productImage/pawmaroon.jpg" />
    <title>NVIA Petshop ID</title>
    <link href="/Content/bootstrap.css" rel="stylesheet"/>
<link href="/Content/PublikSimak.css" rel="stylesheet"/>
<link href="/Content/flaticon.css" rel="stylesheet"/>
<link href="/Content/datepicker.css" rel="stylesheet"/>

    <script src="/Scripts/modernizr-2.6.2.js"></script>

    <script src="/Scripts/jquery-1.10.2.js"></script>

    <script src="/Scripts/bootstrap.js"></script>
<script src="/Scripts/app.js"></script>
<script src="/Scripts/jquery.slimscroll.js"></script>
<script src="/Scripts/jquery.backstretch.min.js"></script>
<script src="/Scripts/respond.js"></script>

    <link href="/Content/font-awesome.min.css" rel="stylesheet"/>
<link href="/Content/FontOpenSans.css" rel="stylesheet"/>

    



</head>

<body >
    <div class="top-content">
        <div class="inner-bg">


            
<div class="header-top" id="header-top">
    <!-- start:navbar -->
    <nav class="navbar navbar-inverse" role="navigation" style="margin-bottom: 0">

        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <img src="https://cdn4.iconfinder.com/data/icons/aami-flat-fingerprints/64/fingerprint-16-512.png" height=" 350">
                    <strong style="margin-left:5px;">
                    
                    </strong>
                </a>
            </div>
            <!-- start:navbar-header -->
            <div class="navbar-header">
                <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <strong>
                        <i class="fa fa-bars"></i> MENU 
                    </strong>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right top-menu" role="navigation">
                <li class="hidden-xs">
                    <a>
                        <i class="fa fa-calendar"></i>&nbsp;

                        <script type='text/javascript'>

                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay(),
                                thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);

                        </script>

                    </a>
                </li>
                        <li class="">
                            <a href="https://www.instagram.com/dwikaayunovianti/">
                                <div class="text-center">
                                    <i class="fa fa-phone"></i> Contact me
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://www.google.co.id/maps/place/Wisma+Oryza/@-6.5736292,106.7286242,13z/data=!4m8!1m2!2m1!1swisma+oryza+bogor%5C!3m4!1s0x0:0x7997c6170c00a035!8m2!3d-6.5583631!4d106.7318237">
                                <div class="text-center">
                                    <i class="fa fa-map"></i> Maps
                                </div>
                            </a>
                            <li class="hidden-xs">
                
                    <a>
                        <i class="fa fa-clock-o"></i> <span id="jamweke"></span>
                        <script type="text/javascript">
							<!--
							function startTime() {
								var today=new Date(),
									curr_hour=today.getHours(),
									curr_min=today.getMinutes(),
									curr_sec=today.getSeconds();
							 curr_hour=checkTime(curr_hour);
								curr_min=checkTime(curr_min);
								curr_sec=checkTime(curr_sec);
								document.getElementById('jamweke').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
							}
							function checkTime(i) {
								if (i<10) {
									i="0" + i;
								}
								return i;
							}
							setInterval(startTime, 500);
							//-->
                        </script>
                    </a>
                </li>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/home') }}" style="color:#e59437;"><b>Nvia </b>Petshop</a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Login</p>

        <form method="post" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
        <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>

    </div>
                    <!-- user login dropdown start-->

                </ul>
            </div>

        </div>
        
    </nav>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nvia Petshop</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
<marquee>
    <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-widget">
                        <div class="row">
                            <div class="col-sm-6">
                                  <p>
                                &copy; 2018 <strong>Dwika Ayu Novianti</strong></p>
                            </div>
</marque>
</body>
</html>
