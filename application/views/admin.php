<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio - MiPlaza</title>
	<link rel="stylesheet" href="<?= base_url() ?>public/bootstrap/css/bootstrap.min.css">
	<meta name="description"
		content="Información sobre el super mercado miplaza como lo es el catalago de miplaza, ubicacion de miplaza y valores de miplaza">
	<link rel="stylesheet" href="<?= base_url() ?>public/css/header.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/css/inicio/index.css">
	<link rel="icon" href="<?= base_url() ?>public/img/logp-tree.png" type="image/x-icon">
	<meta name="theme-color" content="#f7f7f7">
</head>

<body>
	<header class="p-0 position-fixed w-100 shadow-sm top-0">
		<nav>
			<nav class="nav nav-underline h-100">
				<img src="<?= base_url() ?>public/img/Trefoods logo-largo.jpg" alt="" class="img-fluid mt-3 ms-2"
					id="icon-nav">
				<ul class="navbar nav justify-content-center">
					<li class="nav-item me-5 ms-2">
						<a class="fs-5 nav-link m-0 link-warning" href="<?= base_url(); ?>index.php/Admin/inicio">Inicio</a>
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
		<section class="pt-3">
			<div class="row">
				<div class="col-6">
					<p class="fs-4 fw-medium">Exportadores:</p>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">An item<button
								class="float-end btn btn-outline-danger me-2 py-0">Eliminar</button>
							<button class="float-end btn btn-warning me-2 py-0">Editar</button>
						</li>
						<li class="list-group-item">An item<button
								class="float-end btn btn-outline-danger me-2 py-0">Eliminar</button>
							<button class="float-end btn btn-warning me-2 py-0">Editar</button>
						</li>
						<li class="list-group-item">An item<button
								class="float-end btn btn-outline-danger me-2 py-0">Eliminar</button>
							<button class="float-end btn btn-warning me-2 py-0">Editar</button>
						</li>
						<li class="list-group-item">An item<button
								class="float-end btn btn-outline-danger me-2 py-0">Eliminar</button>
							<button class="float-end btn btn-warning me-2 py-0">Editar</button>
						</li>
					</ul>
				</div>
				<div class="col-6  ps-5">
					<div class="container w-100 h-100 shadow-sm rounded-2 p-4">
						<p class="fs-4 fw-bold text-warning m-0">Alpina I</p>
						<div class="mb-2">
							<label for="exampleFormControlInput1" class="form-label fs-6 fw-medium">Usuario:</label>
							<input type="email" class="form-control focus-ring focus-ring-warning border-warning-subtle"
								id="exampleFormControlInput1" placeholder="Escriba un usuario. . .">
						</div>
						<div class="mb-2">
							<label for="exampleFormControlInput1" class="form-label fs-6 fw-medium">Contraseña:</label>
							<input type="text" class="form-control focus-ring focus-ring-warning border-warning-subtle"
								id="exampleFormControlInput1" placeholder="Escriba una contraseña. . .">
						</div>
						<div class="mb-2">
							<button class="float-end btn btn-warning m-3">Editar</button>
							<button class="float-end btn btn-warning m-3">Actualizar</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-4">

				<div class="col-6">
					<p class="fs-4 fw-medium">Productos:</p>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">An item<button
								class="float-end btn btn-outline-danger me-2 py-0">Eliminar</button>
							<button class="float-end btn btn-warning me-2 py-0">Editar</button>
						</li>
						<li class="list-group-item">An item<button
								class="float-end btn btn-outline-danger me-2 py-0">Eliminar</button>
							<button class="float-end btn btn-warning me-2 py-0">Editar</button>
						</li>
						<li class="list-group-item">An item<button
								class="float-end btn btn-outline-danger me-2 py-0">Eliminar</button>
							<button class="float-end btn btn-warning me-2 py-0">Editar</button>
						</li>
						<li class="list-group-item">An item<button
								class="float-end btn btn-outline-danger me-2 py-0">Eliminar</button>
							<button class="float-end btn btn-warning me-2 py-0">Editar</button>
						</li>
					</ul>
				</div>
				<div class="col-6  ps-5">
					<div class="container w-100 h-100 shadow-sm rounded-2 p-4">
						<p class="fs-4 fw-bold text-warning m-0">Alpina I</p>
						<div class="mb-2">
							<label for="exampleFormControlInput1" class="form-label fs-6 fw-medium">Usuario:</label>
							<input type="email" class="form-control focus-ring focus-ring-warning border-warning-subtle"
								id="exampleFormControlInput1" placeholder="Escriba un usuario. . .">
						</div>
						<div class="mb-2">
							<label for="exampleFormControlInput1" class="form-label fs-6 fw-medium">Contraseña:</label>
							<input type="text" class="form-control focus-ring focus-ring-warning border-warning-subtle"
								id="exampleFormControlInput1" placeholder="Escriba una contraseña. . .">
						</div>
					</div>
				</div>
			</div>

		</section>
	</main>

</body>

</html>
<script src="<?= base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>