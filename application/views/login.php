<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - MiPlaza</title>
    <link rel="stylesheet" href="<?= base_url() ?>public/bootstrap/css/bootstrap.min.css">
    <meta name="description"
        content="Información sobre el super mercado miplaza como lo es el catalago de miplaza, ubicacion de miplaza y valores de miplaza">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/login.css">
    <link rel="icon" href="<?= base_url() ?>public/img/Trefoods logo.png" type="image/x-icon">

    <meta name="theme-color" content="#f7f7f7">
</head>

<body class="position-relative">
    <div class="position-absolute top-0 start-50 translate-middle-x child row">
        <div class="col-12 h-25 position-relative">
            <img src="<?= base_url() ?>public/img/Trefoods logo-largo.jpg" alt=""
                class="img-fluid w-100 position-absolute top-50 start-50 translate-middle  p-5" id="icon-nav">
        </div>
        <div class="col-12 h-75">
            <div class="w-100 h-100 shadow-sm p-5 m-0 rounded-top-5 bgback border border-warning-subtle">
                <h1 class="fs-2 fw-normal text-warning text-center mb-3">Ingresar al administrador:</h1>
                <div class="mb-3">
                    <label for="usuario" class="form-label fs-6 fw-medium">Usuario:</label>
                    <input type="text" class="form-control focus-ring focus-ring-warning border-warning-subtle"
                        id="usuario" name="usuario" placeholder="Ingrese su usuario">
                </div>
                <div class="mb-3">
                    <label for="contrasena" class="form-label fs-6 fw-medium">Contraseña:</label>
                    <input type="password" class="form-control focus-ring focus-ring-warning border-warning-subtle"
                        id="contrasena" name="contrasena" placeholder="Ingrese su contraseña">
                </div>
                <div class="mb-3">
                    <button class="float-end btn btn-warning my-3 w-100 icon-link-hover"
                        onclick="loginUser()">Ingresar<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-right mx-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg></button>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>

</html>

<script src="<?= base_url(); ?>public/js/jquery-3.7.1.min.js"></script>
<script src="<?= base_url(); ?>public/js/login.js"></script>
<script src="<?= base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>