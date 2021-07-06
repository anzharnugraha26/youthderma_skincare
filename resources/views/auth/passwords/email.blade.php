<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset Password</title>
	<link rel="icon" href="{{asset('image/logo/logo3.png')}}" type="image/png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('loggin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form" action="{{ route('password.email') }}" method="POST">
                    
                    @csrf
					{{-- <div>
					<img src="{{asset('image/logo/logo.png')}}" height="33px" width="200px"> --}}
					<span class="login100-form-title p-b-43">
						<img src="{{asset('image/logo/logo.png')}}" height="33px" width="200px">
					</span>
					<span class="login100-form-title p-b-43">
						Reset Password
					</span>
					{{-- </div> --}}
					@if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                    @endif
					<div class="wrap-input100 validate-input">
						
                        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
                        
					</div>
					<div>
						@error('email')
                            <span role="alert">
                                <strong style="color: red">{{ $message }}</strong>
                            </span>
                        @enderror
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Send Password Link
						</button>
					</div>
					
				</form>

				<div class="login100-more" style="background-image: url('{{asset('loggin/images/bg-01.jpg')}}');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('loggin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('loggin/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loggin/js/main.js')}}"></script>

</body>
</html>
