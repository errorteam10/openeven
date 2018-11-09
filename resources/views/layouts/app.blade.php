<html lang="en"><head>
	<meta charset="utf-8">
    <link href="{{url('/')}}/img/favicon.ico" rel="icon" type="image/png">
    <link href="{{url('/')}}/img/apple-icon.png" rel="apple-touch-icon" sizes="76x76">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>OpenEven</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="viewport" content="width=device-width">

	<!-- Bootstrap core CSS     -->
	<link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{url('/')}}/css/paper-kit.css?v=2.1.0" rel="stylesheet">

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="{{url('/')}}/css/demo.css" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,300,700" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('/')}}/css/nucleo-icons.css" rel="stylesheet">
    @yield('css')
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" color-on-scroll="300">
        <div class="container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="https://www.creative-tim.com">
          <img src="{{url('/img/openeven/logo.svg')}}" class="img-fluid">
        </a>
	            <button class="navbar-toggler navbar-toggler-right navbar-burger" aria-expanded="false" aria-controls="navbarTogglerDemo02" aria-label="Toggle navigation" type="button" data-target="#navbarToggler" data-toggle="collapse">
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
	            </button>
			</div>
	        <div class="collapse navbar-collapse" id="navbarToggler">
	            <ul class="navbar-nav ml-auto">
					<li class="nav-item">
	                    <a class="nav-link" href="../index.html"><i class="nc-icon nc-layout-11"></i>Discover</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="../documentation/tutorial-components.html" target="_blank"><i class="nc-icon nc-book-bookmark"></i>Libraries</a>
	                </li>
									<div class="nav-item dropdown">
					                <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" href="#pk" role="button" aria-haspopup="true" aria-expanded="false">Users</a>
					                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					                    <a class="dropdown-item" href="{{url('/')}}/login">Login</a>
					                    <a class="dropdown-item" href="{{url('/')}}/register">Register</a>
															<div class="dropdown-divider"></div>
					                    <a class="dropdown-item" href="{{url('/')}}/business_register">Host An Event</a>
					                </ul>
					            </div>
	            </ul>
	        </div>
		</div>
    </nav>


				@yield('body')
        <div class="main">
          @yield('content')

</div>

	<footer class="footer section-dark" id="get_started">
		<div class="container">
			<div class="row">
				<nav class="footer-nav">
					<ul>
						<li><a href="https://www.creative-tim.com">Creative Tim</a></li>
						<li><a href="http://blog.creative-tim.com">Blog</a></li>
						<li><a href="https://www.creative-tim.com/license">Licenses</a></li>
					</ul>
				</nav>
				<div class="credits ml-auto">
					<span class="copyright">
						© <script>document.write(new Date().getFullYear())</script>2018, made with <i class="fa fa-heart heart"></i> by Creative Tim
					</span>
				</div>
			</div>
		</div>
	</footer>



<script src="{{url('/')}}/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="{{url('/')}}/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/js/popper.js" type="text/javascript"></script>
<script src="{{url('/')}}/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="{{url('/')}}/js/paper-kit.js?v=2.1.0"></script>

@yield('js')

</body><!-- Core JS Files --></html>
