<!DOCTYPE html>
<html lang="en">
<head>
	<title>Crear Nuevo Usuario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="{{asset('plugins/ColorLib/img/logo.png')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/vendor/animate/animate.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/vendor/select2/select2.min.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/crearLogin/css/main.css')}}">
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('plugins/Login/images/piscina3.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Registrar Usuario
					</span>

					<div class="wrap-input100 validate-input" data-validate="Nombre Completo">
						<span class="label-input100">Nombre Completo</span>
						<input class="input100" type="text" name="name" placeholder="Nombre...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingresar un Correo Valido: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Ingresar Email...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Necesita un Usuario">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="username" placeholder="Usuario...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Necesita una Contraseña">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="text" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repetir la Contraseña">
						<span class="label-input100">Repetir Contraseña</span>
						<input class="input100" type="text" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Acepto las condiciones
									<a href="#" class="txt2 hov1">
										de Usuario
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Registrate
							</button>
						</div>

						<a href="ingreso.html" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Inicia Sesion
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<script src="{{asset('plugins/crearLogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('plugins/crearLogin/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('plugins/crearLogin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('plugins/crearLogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('plugins/crearLogin/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('plugins/crearLogin/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('plugins/crearLogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('plugins/crearLogin/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('plugins/crearLogin/js/main.js')}}"></script>

</body>
</html>