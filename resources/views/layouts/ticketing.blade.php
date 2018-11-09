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
  


				@yield('body')
        <div class="main">
          @yield('content')

</div>




<script src="{{url('/')}}/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="{{url('/')}}/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/js/popper.js" type="text/javascript"></script>
<script src="{{url('/')}}/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="{{url('/')}}/js/paper-kit.js?v=2.1.0"></script>
<script src="{{url('/')}}/js/openeven/framework.js"></script>
<script>
    window.OpenEven = new OpenEven('{{url('/')}}', '');
</script>
@yield('js')

</body><!-- Core JS Files --></html>
