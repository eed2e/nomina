<?php
session_start();
if (empty($_SESSION['active'])) {
	header('location: ../');
}
include "includes/functions.php";
include "../conexion.php";
if ($_SESSION['rol'] == 1) {
// datos Empresa
$dni = '';
$nombre_empresa = '';
$razonSocial = '';
$emailEmpresa = '';
$telEmpresa = '';
$dirEmpresa = '';
$igv = '';
 
$query_empresa = mysqli_query($conexion, "SELECT * FROM configuracion");
$row_empresa = mysqli_num_rows($query_empresa);
if ($row_empresa > 0) {
	if ($infoEmpresa = mysqli_fetch_assoc($query_empresa)) {
		$dni = $infoEmpresa['dni'];
		$nombre_empresa = $infoEmpresa['nombre'];
		$razonSocial = $infoEmpresa['razon_social'];
		$telEmpresa = $infoEmpresa['telefono'];
		$emailEmpresa = $infoEmpresa['email'];
		$dirEmpresa = $infoEmpresa['direccion'];
		$igv = $infoEmpresa['igv'];
	}
}
$query_data = mysqli_query($conexion, "CALL data();");
$result_data = mysqli_num_rows($query_data);
if ($result_data > 0) {
	$data = mysqli_fetch_assoc($query_data);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Sistema de Inventario 
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/now-ui-dashboard.min.css" rel="stylesheet" />
	
<!--	<script>
	function TiempoActividad()
	{
	    setTimeout("DestruirSesion()", 600000);
	}
	function DestruirSesion()
	{
	    location.href = "salir.php";
	}
	</script>-->
	
</head>

<body  class="">
	<div class="wrapper ">
		<div class="sidebar" data-color=#ffffff>
			<!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
			<div class="logo">
			<a href="index.php" class="simple-text logo-mini">
					.
				</a>
				<a href="index.php" class="simple-text logo-normal">
				DigitalNet
				</a>
			</div>
			<div class="sidebar-wrapper" id="sidebar-wrapper">
				<ul class="nav">
					<li class="">
						<a href="nueva_venta.php">
							<i class="now-ui-icons design_app"></i>
							<p>Pedidos</p>
						</a>
					</li>
					<li>
						<a href="lista_productos.php">
							<i class="now-ui-icons education_atom"></i>
							<p>Productos</p>
						</a>
					</li>
					<li>
						<a href="lista_cliente.php">
							<i class="now-ui-icons location_map-big"></i>
							<p>Tecnicos</p>
						</a>
					</li>
					<li>
						<a href="lista_usuarios.php">
							<i class="now-ui-icons ui-1_bell-53"></i>
							<p>Usuarios</p>
						</a>
					</li>
					<li>
						<a href="lista_historico.php">
							<i class="now-ui-icons design_bullet-list-67"></i>
							<p>Historico</p>
						</a>
					</li><li>
						<a href="inventario.php">
							<i class="now-ui-icons design_bullet-list-67"></i>
							<p>Inventario</p>
						</a>
					</li>

				</ul>
			</div>
		</div>
		<div class="main-panel" id="main-panel">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-dark  bg-secondary  navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<div class="navbar-toggle">
							<button type="button" class="navbar-toggler">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</button>
						</div>
						<a class="navbar-brand" href="#">Sistema Inventario</a>
						<strong><?php echo fechaPeru(); ?></strong>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="now-ui-icons location_world"></i>
									<p>
										<span class="d-lg-none d-md-block">Some Actions</span>
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									
									<a class="dropdown-item" href="salir.php">Salir</a>
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			</nav>
			<?php } else {?>
				<?php

// datos Empresa
$dni = '';
$nombre_empresa = '';
$razonSocial = '';
$emailEmpresa = '';
$telEmpresa = '';
$dirEmpresa = '';
$igv = '';

$query_empresa = mysqli_query($conexion, "SELECT * FROM configuracion");
$row_empresa = mysqli_num_rows($query_empresa);
if ($row_empresa > 0) {
	if ($infoEmpresa = mysqli_fetch_assoc($query_empresa)) {
		$dni = $infoEmpresa['dni'];
		$nombre_empresa = $infoEmpresa['nombre'];
		$razonSocial = $infoEmpresa['razon_social'];
		$telEmpresa = $infoEmpresa['telefono'];
		$emailEmpresa = $infoEmpresa['email'];
		$dirEmpresa = $infoEmpresa['direccion'];
		$igv = $infoEmpresa['igv'];
	}
}
$query_data = mysqli_query($conexion, "CALL data();");
$result_data = mysqli_num_rows($query_data);
if ($result_data > 0) {
	$data = mysqli_fetch_assoc($query_data);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Sistema de Inventario 
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/now-ui-dashboard.min.css" rel="stylesheet" />
</head>

<body class="">
	<div class="wrapper ">
		<div class="sidebar" data-color=#ffffff>
			<!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
			<div class="logo">
				<a href="" class="simple-text logo-mini">
					.
				</a>

				DigitalNet
			</div>
			<div class="sidebar-wrapper" id="sidebar-wrapper">
				<ul class="nav">
				    <li class="">
						<a href="almacen.php">
							<i class="now-ui-icons design_app"></i>
							<p>Pedidos</p>
						</a>
					</li>
					<li>
						<a href="lista_almacen.php">
							<i class="now-ui-icons education_atom"></i>
							<p>Productos</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="main-panel" id="main-panel">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-dark  bg-secondary  navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<div class="navbar-toggle">
							<button type="button" class="navbar-toggler">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</button>
						</div>
						<a class="navbar-brand" href="#">Sistema Inventario</a>
						<strong><?php echo fechaPeru(); ?></strong>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="now-ui-icons location_world"></i>
									<p>
										<span class="d-lg-none d-md-block">Some Actions</span>
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									
									<a class="dropdown-item" href="salir.php">Salir</a>
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			</nav>

			<?php } ?>
			<!-- End Navbar -->
			<!-- End Navbar -->