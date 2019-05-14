@extends('layout.loginlayout')
@section('content')

<body background="{{asset('/images/wall3.png')}}" style="background-position:center">
	
	<div class="limiter">
		<div class="container-login100" style="padding-top:-35px;background-size: cover;">
			<div class="wrap-login100" >
				<!-- <div class="login100-pic js-tilt" data-tilt> -->
					<img src="images/Logo_UNPAR.png" alt="IMG" style="width:120px;height:120px;margin-left:27%;margin-top:13%;">
				<!-- </div> -->

				<form method="post" action="{{route('signIn')}}" class="login100-form validate-form" style="margin-top:-30px;">
					@csrf
					<span class="login100-form-title" style="padding-bottom:-40px;color: whitesmoke;font-family: 'Permanent Marker', cursive;font-size:27px;">
						Portal Dosen UNPAR
					</span>

					<div class="wrap-input100 " data-validate = "Valid email is required: ex@abc.xyz" style="margin-top:-30px;">

						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="false"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	


</body>
</html>

@endsection