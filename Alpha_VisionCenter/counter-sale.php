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
		<script src="global_assets/js/libraries/jquery.min.js"></script> <!-- Menus collapse / Panels collapse / Sidebars collapse -->
		<script src="global_assets/js/libraries/bootstrap.min.js"></script> <!-- Modals -->
		<script src="global_assets/js/jquery_ui/widgets.min.js"></script> <!--- .affix (sticky sidebar) / .datepicker / .autocomplete / .reziseble / .tooltip -->
		<script src="global_assets/js/nicescroll/nicescroll.min.js"></script> <!-- Scroll function -->
		<script src="global_assets/js/animatescroll/animatescroll.js"></script> <!-- Animate scroll -->
		<script src="global_assets/js/global-functions.js"></script> <!-- Global functionallity -->
		<!-- /global JS files -->
		
		<!-- Local stylesheets -->
		<link href="local_assets/counter-sale/css/easy-numpad.css" rel="stylesheet" type="text/css">
		<!-- /local stylesheets -->

		<!-- Local JS files -->
		<script src="local_assets/counter-sale/js/easy-numpad/easy-numpad.js"></script> <!-- Numpad -->
		<script src="local_assets/counter-sale/js/local-functions-counter-sale.js"></script> <!-- Local functionallity -->
	</head>
	<!-- /head -->

	<body class="has-detached-right sidebar-xs">

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
								<h3><span class="text-semibold">Venta Mostrador</span></h3>
							</div>
						</div>

						<div class="breadcrumb-line">
							<ul class="breadcrumb">
								<li><a href="welcome.php"><i class="icon-home2 position-left"></i> Inicio</a></li>
								<li class="active">Venta Mostrador</li>
							</ul>
						</div>
					</div>
					<!-- /page header -->
					
					<!-- Content area -->
					<div class="content">

						<!-- Detached content -->
						<div class="container-detached">
							<div class="content-detached">
								<div id="advanced-serach-section" class="noDisplay">
									<!-- Advance Search section (No display)-->
									<div class="panel panel-alpha mb0">
										<div class="panel-heading bb0 pb0">
											<h5 class="panel-title">Búsqueda Avanzada
												<span class="text-muted">Ingresa por lo menos una de las opciones</span>
											</h5>
										</div>
										<div class="panel-body pb0">
											<form action="#">
												<div class="row">
													<div class="col-sm-4">
														<label>SKU</label>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-sm-4">
														<label>Modelo</label>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-sm-4">
														<label>Tipo de artículo</label>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-sm-4">
														<label>Marca</label>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-sm-4">
														<label>Color</label>
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
										<div class="panel-heading bb0 pb0">
											<h5 class="panel-title">Filtro</h5>
										</div>
										<div class="panel-body pb0">
											<form action="#">
												<div class="row">
													<div class="col-sm-4">
														<label>Descripción</label>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-sm-4">
														<label>Precio</label>
														<div class="form-group">
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-sm-4">
														<label></label>
														<div class="form-group">
															<label class="el-switch mt5 pull-left">
																<input type="checkbox" name="switch" checked>
																<span class="el-switch-style"></span>
															</label>
															<label class="label-checkbox">Solo con existencias</label>
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
															<th>SKU</th>
															<th class="w100">Descripción</th>
															<th>Precio</th>
															<th>Existencia</th>
															<th>Acción</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>0276984</td>
															<td>Lorem ipsum dolor.</td>
															<td>$2,750.ºº</td>
															<td class="text-center"><i class="icon-checkmark3"></i></td>
															<td>
																<div class="btn-group btn-action">
																	<button type="button" class="btn btn-xs btn-alpha btn-rounded">Agregar</button>
																	<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																	<ul class="action-submenu dropdown-menu dropdown-menu-right">
																		<li><a href="#" data-toggle="modal" data-target="#modal-availability">Disponibilidad</a></li>
																	</ul>
																</div>
															</td>
														</tr>
														<tr>
															<td>0276984</td>
															<td>Lorem ipsum dolor.</td>
															<td>$2,750.ºº</td>
															<td class="text-center"><i class="icon-checkmark3"></i></td>
															<td>
																<div class="btn-group btn-action">
																	<button type="button" class="btn btn-xs btn-alpha btn-rounded">Agregar</button>
																	<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																	<ul class="action-submenu dropdown-menu dropdown-menu-right">
																		<li><a href="#" data-toggle="modal" data-target="#modal-availability">Disponibilidad</a></li>
																	</ul>
																</div>
															</td>
														</tr>
														<tr>
															<td>0276984</td>
															<td>Lorem ipsum dolor.</td>
															<td>$2,750.ºº</td>
															<td class="text-center"><i class="icon-checkmark3"></i></td>
															<td>
																<div class="btn-group btn-action">
																	<button type="button" class="btn btn-xs btn-alpha btn-rounded">Agregar</button>
																	<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																	<ul class="action-submenu dropdown-menu dropdown-menu-right">
																		<li><a href="#" data-toggle="modal" data-target="#modal-availability">Disponibilidad</a></li>
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
												<button type="button" class="btn btn-alpha btn-rounded btn-std">Buscar</button>
											</div>
											<div id="btn-close-advanced-search" class="form-group pull-right">
												<button type="button" class="btn btn-alpha-border btn-rounded btn-std">Cerrar</button>
											</div>
										</div>									
									</div>
								</div>
							
								<!-- Products section -->
								<div class="panel panel-alpha">
									<div class="panel-heading">
										<h5 class="panel-title">Productos</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body">
										<div class="table-responsive all-tables">
											<table class="table table-framed">
												<thead>
													<tr>
														<th>SKU</th>
														<th class="w100">Descripción</th>
														<th>Cantidad</th>
														<th>Precio</th>
														<th class="text-center">Total</th>
														<th>Promoción/Descuento</th>
														<th>Acción</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>1</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td>
															<div class="btn-group btn-action">
																<button type="button" class="btn btn-xs btn-alpha btn-rounded" data-toggle="modal" data-target="#modal-edit-quantity">Editar cantidad</button>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-offer">Agregar promoción</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-discount">Agregar descuento</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-delete-item">Eliminar</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>1</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td>
															<div class="btn-group btn-action">
																<button type="button" class="btn btn-xs btn-alpha btn-rounded" data-toggle="modal" data-target="#modal-edit-quantity">Editar cantidad</button>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-offer">Agregar promoción</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-discount">Agregar descuento</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-delete-item">Eliminar</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>1</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td>
															<div class="btn-group btn-action">
																<button type="button" class="btn btn-xs btn-alpha btn-rounded" data-toggle="modal" data-target="#modal-edit-quantity">Editar cantidad</button>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-offer">Agregar promoción</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-discount">Agregar descuento</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-delete-item">Eliminar</a></li>
																</ul>
															</div>
														</td>
													</tr>

												</tbody>
											</table>
										</div>									
									</div>
								</div>

								<!-- Discounts section -->
								<div class="panel panel-alpha">
									<div class="panel-heading">
										<h5 class="panel-title">Descuentos</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body">
										<div class="table-responsive all-tables">
											<table class="table table-framed">
												<thead>
													<tr>
														<th>Folio</th>
														<th>Descripción</th>
														<th>Monto mínimo</th>
														<th>Subtotal</th>
														<th class="text-center">Descuento</th>
														<th class="text-center">Total</th>
														<th class="text-center">Eliminar</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td class="text-center">2</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td class="text-center"><button type="button" class="btn btn-delete-tr btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></button></td>
													</tr>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td class="text-center">2</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td class="text-center"><button type="button" class="btn btn-delete-tr btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></button></td>
													</tr>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td class="text-center">3</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td class="text-center"><button type="button" class="btn btn-delete-tr btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></button></td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
								</div>

								<!-- Payment & comments section -->
								<div class="row">
									<div class="col-sm-7">
										<div class="panel panel-alpha">
											<div class="panel-heading">
												<h5 class="panel-title">Pagos</h5>
												<div class="heading-elements">
													<ul class="icons-list">
														<li><a data-action="collapse"></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body">
												<div class="table-responsive all-tables">
													<table class="table table-framed">
														<thead>
															<tr>
																<th>Fecha</th>
																<th>Descripción</th>
																<th>Monto</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>12/08/19</td>
																<td>Lorem ipsum dolor.</td>
																<td>$2,750.ºº</td>
															</tr>
															<tr>
																<td>12/08/19</td>
																<td>Lorem ipsum dolor.</td>
																<td>$2,750.ºº</td>
															</tr>
															<tr>
																<td>12/08/19</td>
																<td>Lorem ipsum dolor.</td>
																<td>$2,750.ºº</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="panel panel-alpha">
											<div class="panel-heading">
												<h5 class="panel-title">Observaciones</h5>
												<div class="heading-elements">
													<ul class="icons-list">
														<li><a data-action="collapse"></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body">
												<form action="#">
													<div class="form-group">
														<textarea rows="6" cols="5" class="form-control"></textarea>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /detached content -->

						<!-- Sidebar -->
						<?php include 'local_assets/counter-sale/includes/sidebar-counter-sale.php';?>
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

		<!-- Modals -->
		<?php include 'local_assets/counter-sale/includes/modal-payment.php';?>
		<?php include 'local_assets/counter-sale/includes/modal-edit-quantity.php';?>
		<?php include 'local_assets/counter-sale/includes/modal-add-offer.php';?>
		<?php include 'local_assets/counter-sale/includes/modal-add-discount.php';?>
		<?php include 'local_assets/counter-sale/includes/modal-receipt.php';?>
		<?php include 'local_assets/counter-sale/includes/modal-availability.php';?>
		<!-- /modals -->
	</body>
</html>
