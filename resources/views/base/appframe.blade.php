<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nume Tracker</title>

		<!-- Bootstrap CSS -->
		{!! Html::style('assets/css/bootstrap.css') !!}
		<!-- Template styles -->
		{!! Html::style('assets/css/style.css') !!}
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'/>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
			@include('base.navbar')
			@yield('menu')
		</header>

		@yield('content')

		<footer>
			@include('base.footer')
		</footer>
 
		<!-- SCRIPTS -->
		<!-- jQuery -->
		{!! Html::script('assets/js/jquery-1.11.3.js') !!}
		<!--superfish.js-->
		{!! Html::script('assets/js/superfish.js') !!}
		<!-- Bootstrap JavaScript -->
		{!! Html::script('assets/js/bootstrap.js') !!}
	</body>
</html>