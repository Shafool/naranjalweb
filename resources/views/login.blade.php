@extends('layouts.login')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inicio Sesion "El Naranjal"</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="icon" type="image/png" href="{{asset('plugins/ColorLib/img/logo.png')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/Login/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/Login/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/Login/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/Login/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/Login/vendor/select2/select2.min.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/Login/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/Login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/Login/css/main.css')}}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('plugins/Login/images/piscina3.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Inicio de Sesion
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Ingresar Usuario">
						<input class="input100" type="text" name="Nombre de Usuario" placeholder="Nombre de Usuario">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingresar Contraseña">
						<input class="input100" type="password" name="Contraseña" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Iniciar Sesion
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="{{asset('plugins/Login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('plugins/Login/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('plugins/Login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('plugins/Login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('plugins/Login/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('plugins/Login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('plugins/Login/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('plugins/Login/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('plugins/Login/js/main.js')}}"></script>

</body>
</html>