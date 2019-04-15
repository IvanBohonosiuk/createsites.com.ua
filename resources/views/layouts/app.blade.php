 <!DOCTYPE html>
 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
 <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
 <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
 <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
 <head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="@yield("description")">
	<meta name="keywords" content="@yield("keywords")">
	<title>@yield("title")</title>
	<!-- Favicon
	================================================== -->
	<link rel="shortcut icon" href="/favicon.ico">
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<!-- CSS
	================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}"/>
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}"/>
	<!-- Animation -->
	<link rel="stylesheet" href="{{ URL::to('css/animate.css') }}" />
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ URL::to('css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ URL::to('css/owl.theme.css') }}"/>
	<!-- Pretty Photo -->
	<link rel="stylesheet" href="{{ URL::to('css/prettyPhoto.css') }}"/>
	<!-- Main color style -->
	<link rel="stylesheet" href="{{ URL::to('css/red.css') }}"/>
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ URL::to('css/custom.css') }}" />
	<!-- Responsive -->
	<link rel="stylesheet" href="{{ URL::to('css/responsive.css') }}" />
	<link rel="stylesheet" href="{{ URL::to('css/jquery.fancybox.css?v=2.1.5') }}" type="text/css" media="screen" />

	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500' rel='stylesheet' type='text/css'>
	@yield("styles")
</head>

<body  data-spy="scroll" data-target=".navbar-fixed-top">
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	@include('partials.header')

	@yield('content')

	@include('partials.footer')

	@yield("scripts")

</body>
</html>