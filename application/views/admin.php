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
	<link rel="stylesheet" href="<?= base_url() ?>public/css/admin/card-pop.css">
	<link rel="icon" href="<?= base_url() ?>public/img/Trefoods logo.png" type="image/x-icon">
	<meta name="theme-color" content="#f7f7f7">
</head>

<body>
	<header class="p-0 position-fixed w-100 shadow-sm top-0">
		<nav>
			<nav class="nav nav-underline h-100">
				<li class="nav-item my-auto">
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
		<section class="input-group my-3">
			<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
				<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
				<label class="btn btn-outline-warning h-auto rounded-pill rounded-end-0"
					for="btnradio1">Exportadores</label>

				<input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
				<label class="btn btn-outline-warning h-auto rounded-pill rounded-start-0"
					for="btnradio2">Productos</label>
			</div>
		</section>

		<div class="div-1">
			<p class="fs-4 fw-medium">Exportadores:</p>
			<button class="btn btn-primary showPopUp">Show Pop-up</button>

			<ul class="list-group list-group-flush" id="list-exp"></ul>
		</div>

		<div class="overlay"></div>

		<div class="pop-up rounded-4 bg-light p-5">
			<p class="fs-4 fw-medium">Exportadores:</p>
			<div class="mb-2">
				<label for="nombre_exp" class="form-label fw-bolder">Nombre:</label>
				<input type="text" class="form-control border-warning focus-ring focus-ring-warning rounded-pill"
					id="nombre_exp" placeholder="Nombre del Exportador. . .">
			</div>
			<div class="mb-2">
				<label for="usuario_exp" class="form-label fw-bolder">Usuario:</label>
				<input type="text" class="form-control border-warning focus-ring focus-ring-warning rounded-pill"
					id="usuario_exp" placeholder="Usuario del Exportador. . .">
			</div>
			<div class="mb-2">
				<label for="contrasena_exp" class="form-label fw-bolder">Contraseña:</label>
				<input type="text" class="form-control border-warning focus-ring focus-ring-warning rounded-pill"
					id="contrasena_exp" placeholder="Contraseña del Exportador. . .">
			</div>
			<button class="closePopUp border border-0 bg-light position-absolute top-0 end-0 p-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#E0CA00"
					class="bi bi-x-circle-fill" viewBox="0 0 16 16">
					<path
						d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
				</svg>
			</button>
			<button type="button" class="btn btn-outline-warning rounded-pill w-100">Nuevo</button>
		</div>

		<div class="div-2">
			<p class="fs-4 fw-medium" id="add-item-btn">Productos:</p>

		</div>
	</main>

	<script src="<?= base_url(); ?>public/js/jquery-3.7.1.min.js"></script>
	<script src="<?= base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>public/js/admin.js"></script>
	<script src="<?= base_url(); ?>public/js/home.js"></script>
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

			// Mostrar el pop-up
			$('.showPopUp').click(function () {
				$('.pop-up').css('display', 'block');
				setTimeout(function () {
					$('.pop-up').addClass('active');
				}, 10); // Un pequeño retraso para activar la transición de CSS
				$('.overlay').addClass('active');

				// Deshabilitar inputs fuera del pop-up
				$('body').find('input').not('.pop-up input').attr('disabled', true);
			});

			// Cerrar el pop-up
			$('.closePopUp').click(function () {
				$('.pop-up').removeClass('active');
				$('.overlay').removeClass('active');

				// Habilitar todos los inputs
				$('body').find('input').attr('disabled', false);

				setTimeout(function () {
					$('.pop-up').css('display', 'none');
				}, 300); // Duración de la transición de CSS
			});

			// Cerrar el pop-up al hacer clic en la superposición
			$('.overlay').click(function () {
				$('.pop-up').removeClass('active');
				$('.overlay').removeClass('active');

				// Habilitar todos los inputs
				$('body').find('input').attr('disabled', false);

				setTimeout(function () {
					$('.pop-up').css('display', 'none');
				}, 300); // Duración de la transición de CSS
			});
		});


	</script>
</body>

</html>