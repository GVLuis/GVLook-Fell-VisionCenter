<!DOCTYPE html>
<html lang="es">
	<!-- Head -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vision Center</title>

		<!-- Global stylesheets -->
		<link href="global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
		<link href="global_assets/css/libraries/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="global_assets/css/main.css" rel="stylesheet" type="text/css">
		<!-- /global stylesheets -->

		<!-- Global JS files -->
		<script src="global_assets/js/libraries/jquery.min.js"></script>
		<script src="global_assets/js/libraries/bootstrap.min.js"></script>
		<!-- <script src="global_assets/js/global-functions.js"></script> -->
		<!-- /global JS files -->

		<!-- Local stylesheets -->
		<link href="local_assets/login/css/style-login.css" rel="stylesheet" type="text/css">
		<!-- /local stylesheets -->

		<!-- Local JS files -->
		<script src="local_assets/welcome/js/local-functions-welcome.js"></script> <!-- Local functionallity -->
		<!-- /local JS files --> 
	</head>
	<!-- /head -->
	
	<body class="login-container">

		<!-- Page container -->
		<div class="page-container login-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main content -->
				<div class="content-wrapper">

					<!-- Content area -->
					<div class="content">

					<!-- Login -->
					<form action="#">
						<div class="panel panel-body login-form">
							<div class="text-center">
							<img src="global_assets/img/alpha-logo.png" class="img-responsive img-login">
								<h1>Iniciar Sesión</h1>
							</div>
							<div class="form-group has-feedback has-feedback-left">
								<label>Usuario</label>
								<input type="text" class="form-control" autocomplete="username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>
							<div class="form-group has-feedback has-feedback-left">
								<label>Contraseña</label>
								<input type="password" class="form-control" autocomplete="current-password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>
							<div class="form-group has-feedback has-feedback-left">
								<label>Sucursal</label>
								<input type="number" class="form-control">
								<div class="form-control-feedback">
									<i class="icon-office text-muted"></i>
								</div>
							</div>
							<div class="form-group text-center">
								<a href="welcome.php" class="btn btn-alpha-log w50">Entrar</a>
							</div>
						</div>
					</form>
					<!-- /login -->

					<!-- Footer -->
					<?php include 'global_assets/includes/footer.php';?>
					<!-- /footer -->

					</div>
					<!-- /content area -->

				</div>
				<!-- /main content -->

			</div>
			<!-- /page content -->

		</div>
		<!-- /page container -->

	</body>
</html>
