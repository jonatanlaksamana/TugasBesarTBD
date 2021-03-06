<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('/css/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/util.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	
@yield('content')


<script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/js/popper.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/js/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/js/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('/js/mainlogin.js')}}"></script>
</body>
</html>