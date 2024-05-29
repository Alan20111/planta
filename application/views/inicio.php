<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio - TreFoods</title>
	<link rel="stylesheet" href="<?= base_url() ?>public/bootstrap/css/bootstrap.min.css">
	<meta name="description"
		content="Información sobre el super mercado miplaza como lo es el catalago de miplaza, ubicacion de miplaza y valores de miplaza">
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
				<button type="button" class="btn btn-outline-warning rounded-end-5" onclick="close_session()">Cerrar sesíon</button>
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
		<div class="input-group my-3">
			<span class="input-group-text border-warning  rounded-pill rounded-end-0" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
					width="16" height="16" fill="#E2B500" class="bi bi-table" viewBox="0 0 16 16">
					<path
						d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z" />
				</svg>
				<p class="p-0 m-0 ms-2">Fecha</p>
			</span>
			<input type="date" class="form-control border-warning focus-ring focus-ring-warning"
				placeholder="Busqueda. . ." aria-label="Username" aria-describedby="basic-addon1" id="date-input">
			<span class="input-group-text border-warning" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
					width="16" height="16" fill="#E2B500" class="bi bi-person-fill-up" viewBox="0 0 16 16">
					<path
						d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
					<path
						d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
				</svg>
				<p class="p-0 m-0 ms-2">Exportador</p>
			</span>
			<select class="form-select border-warning focus-ring focus-ring-warning rounded-pill rounded-start-0"
				aria-label="Default select example" id="exp">
				<option value="" selected>Todos</option>
				<option value="Alpes I">Alpes I</option>
				<option value="Alpes II">Alpes II</option>
				<option value="ALpina">Alpina</option>
			</select>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="me-3" id="list-data">
				</div>
			</div>
			<div class="col-6">
				<div class="container aside border border-warning rounded-3">

				</div>
			</div>
		</div>
	</main>



</body>

</html>
<script src="<?= base_url(); ?>public/js/jquery-3.7.1.min.js"></script>
<script src="<?= base_url(); ?>public/js/home.js"></script>
<script src="<?= base_url(); ?>public/js/inicio.js"></script>
<script src="<?= base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>