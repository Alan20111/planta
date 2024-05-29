<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin - Trefoods</title>
	<link rel="stylesheet" href="<?= base_url() ?>public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/css/header.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/css/inicio/index.css">
	<link rel="icon" href="<?= base_url() ?>public/img/Trefoods logo.png" type="image/x-icon">
	<meta name="theme-color" content="#f7f7f7">
</head>

<body>
	<header class="p-0 position-fixed w-100 shadow-sm top-0">
		<nav>
			<nav class="nav nav-underline h-100">
				<li class="nav-item  my-auto">
					<button type="button" class="btn btn-outline-warning rounded-end-5" onclick="close_session()">Cerrar
						sesión</button>
				</li>
				<img src="<?= base_url() ?>public/img/Trefoods logo-largo.jpg" alt="" class="img-fluid mt-3 ms-2"
					id="icon-nav">
				<ul class="navbar nav justify-content-center">
					<li class="nav-item me-5 ms-2">
						<a class="fs-5 nav-link m-0 link-warning"
							href="<?= base_url(); ?>index.php/Admin/inicio">Inicio</a>
					</li>
					<li class="nav-item me-0">
						<a class="fs-5 nav-link m-0 link-warning"
							href="<?= base_url(); ?>index.php/Admin/admin">Admin</a>
					</li>
				</ul>
			</nav>
		</nav>
	</header>

	<main class="mx-auto">
		<section class="input-group my-3 ">
			<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
				<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
				<label class="btn btn-outline-warning h-auto  rounded-pill rounded-end-0"
					for="btnradio1">Exportadores</label>

				<input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
				<label class="btn btn-outline-warning h-auto rounded-pill rounded-start-0"
					for="btnradio2">Productos</label>
			</div>


		</section>
		<div class="row">
			<div class="col-6">
				<div class="div-1">
					<p class="fs-4 fw-medium" id="add-item-btn">Exportadores:</p>
					<ul class="list-group list-group-flush" id="list-exp">
					</ul>
				</div>

				<div class="div-2">
					<p class="fs-4 fw-medium" id="add-item-btn">Exportadores:</p>
					<ul class="list-group list-group-flush" id="list-pro">
					</ul>
				</div>

			</div>
			<div class="col-6">

			</div>

		</div>
	</main>

	<script src="<?= base_url(); ?>public/js/jquery-3.7.1.min.js"></script>
	<script>
		$(document).ready(function () {
			// Ocultar todos los divs menos el primero al cargar la página
			$('[class^="div-"]').not('.div-1').hide();

			// Manejar el cambio de radio button
			$('input[name="btnradio"]').change(function () {
				// Ocultar todos los divs
				$('[class^="div-"]').hide();
				// Mostrar el div correspondiente al radio button seleccionado
				$('.div-' + $(this).attr('id').replace('btnradio', '')).show();
			});
		});
	</script>


	<script src="<?= base_url(); ?>public/js/jquery-3.7.1.min.js"></script>
	<script src="<?= base_url(); ?>public/js/home.js"></script>
	<script src="<?= base_url(); ?>public/js/admin.js"></script>
	<script src="<?= base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>