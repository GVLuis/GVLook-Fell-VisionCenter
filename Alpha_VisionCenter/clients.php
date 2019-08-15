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
		<link href="global_assets/css/navbar.css" rel="stylesheet" type="text/css">
		<link href="global_assets/css/nav-sidebar.css" rel="stylesheet" type="text/css">
		<link href="global_assets/css/header.css" rel="stylesheet" type="text/css">
		<link href="global_assets/css/sidebar.css" rel="stylesheet" type="text/css">
		<link href="global_assets/css/jquery_ui/widgets.css" rel="stylesheet" type="text/css">		
		<link href="global_assets/css/main.css" rel="stylesheet" type="text/css">
		<!-- /global stylesheets -->

		<!-- Global JS files -->
		<script src="global_assets/js/libraries/jquery.min.js"></script>
		<script src="global_assets/js/libraries/bootstrap.min.js"></script>
		<script src="global_assets/js/jquery_ui/widgets.min.js"></script> <!--- Functions (.affix / .datepicker / .autocomplete / .reziseble / .tooltip) -->
		<script src="global_assets/js/formatter/formatter.min.js"></script> <!--- Format for some fields -->
		<script src="global_assets/js/nicescroll/nicescroll.min.js"></script> <!-- Scroll function -->
		<script src="global_assets/js/global-functions.js"></script> <!-- Global functionallity -->
		<!-- /global JS files -->

		<!-- Local JS files -->
		<script src="local_assets/clients/js/browser-district.js"></script> <!-- Autocomplete fields -->
		<script src="local_assets/clients/js/popular-mails.js"></script> <!-- Autocomplete fields -->
		<script src="local_assets/clients/js/local-functions-clients.js"></script> <!-- Local functionallity -->
		<!-- /local JS files --> 

	</head>
	<!-- /head -->

	<body class="has-detached-right sidebar-xs"> <!--sidebar-xs-->

		<!-- Main navbar -->
		<?php include 'global_assets/includes/main-navbar.php';?>
		<!-- /main navbar -->

		<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main sidebar -->
				<?php include 'global_assets/includes/main-sidebar.php';?>
				<!-- /main sidebar -->

				<!-- Main content -->
				<div class="content-wrapper">

					<!-- Page header -->
					<div class="page-header page-header-default">
						<div class="page-header-content">
							<div class="page-title">
								<h4><span class="text-semibold">Clientes</span> - Búsqueda</h4>
							</div>
						</div>

						<div class="breadcrumb-line">
							<ul class="breadcrumb">
								<li><a href="welcome.php"><i class="icon-home2 position-left"></i> Inicio</a></li>
								<li><a href="clients.php">Clientes</a></li>
								<li class="active">Búsqueda</li>
							</ul>
						</div>
					</div>
					<!-- /page header -->
					

					<!-- Content area -->
					<div class="content">

						<!-- Detached content -->
						<div class="container-detached">
							<div class="content-detached">
								<!-- Search section -->
								<div class="panel panel-alpha mb0">
									<div class="panel-heading">
										<h5 class="panel-title">Búsqueda</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body pb0">
										<form action="#">
											<div class="row">
												<div class="col-sm-4">
													<label>DNI</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Apellido paterno</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Apellido materno</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Nombre</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</form>									
									</div>
								</div>
								<!-- Filter section -->
								<div class="panel panel-alpha mb0">
									<div class="panel-heading">
										<h5 class="panel-title">Filtro</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body pb0">
										<form action="#">
											<div class="row">
												<div class="col-sm-4">
													<label>Sucursal</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
												<label>Fecha de nacimiento</label>
													<div class="form-group">
														
														<input type="text" class="form-control" name="format-date" placeholder="DD/MM/AAAA">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Apellido paterno</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Apellido materno</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Nombre</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Celular</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<!-- Results section -->
								<div class="panel panel-alpha mb0">
									<div class="panel-heading bb0 pb0">
										<h5 class="panel-title">Resultados</h5>
									</div>
									<div class="panel-body pb0">
										<div class="table-responsive all-tables">
											<table class="table table-framed">
												<thead>
													<tr>
														<th>Sucursal</th>
														<th>Nº Doc.</th>
														<th>Fecha de nacimiento</th>
														<th>Nombre</th>
														<th>Apellido paterno</th>
														<th>Apellido materno</th>
														<th>Celular</th>
														<th>Acción</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>6342</td>
														<td>6345356342</td>
														<td>12/04/1984</td>
														<td>Jorh</td>
														<td>Doe</td>
														<td>Doe</td>
														<td>5523456789</td>
														<td>
															<div class="btn-group btn-action">
																<a href="counter-sale.php" type="button" class="btn btn-xs btn-alpha btn-rounded">Ir a venta</a>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-edit-client">Editar registro</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>6342</td>
														<td>6345356342</td>
														<td>12/04/1984</td>
														<td>Jorh</td>
														<td>Doe</td>
														<td>Doe</td>
														<td>5523456789</td>
														<td>
															<div class="btn-group btn-action">
																<a href="counter-sale.php" type="button" class="btn btn-xs btn-alpha btn-rounded">Ir a venta</a>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-edit-client">Editar registro</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>6342</td>
														<td>6345356342</td>
														<td>12/04/1984</td>
														<td>Jorh</td>
														<td>Doe</td>
														<td>Doe</td>
														<td>5523456789</td>
														<td>
															<div class="btn-group btn-action">
															<a href="counter-sale.php" type="button" class="btn btn-xs btn-alpha btn-rounded">Ir a venta</a>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-edit-client">Editar registro</a></li>
																</ul>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<!-- Pagination -->
										<div class="row mt20">
											<div class="col-md-12 text-center">
												<ul class="pagination pagination-separated pagination-rounded">
													<li><a href="#">&lsaquo;</a></li>
													<li class="active"><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li class="disabled"><a href="#">4</a></li>
													<li><a href="#">5</a></li>
													<li><a href="#">&rsaquo;</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="panel-footer pb0">
										<div class="form-group ml10 pull-right">
											<button type="button" class="btn btn-alpha btn-std btn-rounded w100">Buscar</button>
										</div>
									</div>									
								</div>							
							</div>
						</div>

						<!-- Sidebar -->
						<?php include 'local_assets/clients/includes/sidebar-clients.php';?>
						<!-- /sidebar -->

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

		<!-- Modals sidebar -->
		<?php include 'local_assets/clients/includes/modal-add-client.php';?>
		<?php include 'local_assets/clients/includes/modal-edit-client.php';?>
		<!-- /modals sidebar -->
	</body>
</html>
