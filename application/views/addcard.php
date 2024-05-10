<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Pagina para administrar los datos de los empleados en miplaza">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Miplaza</title>
    <link rel="stylesheet" href="<?= base_url() ?>public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/addcard/index.css">
    <link rel="icon" href="<?= base_url() ?>public/img/miplaza-logo.png" type="image/x-icon">
</head>

<body class="overflow-y-auto">
    <header class="shadow">
        <ul class="nav justify-content-center position-relative bg-danger p-2">
            <li>
                <a href="<?= base_url() ?>index.php/bienvenido/" title="regresar"><img
                        src="<?= base_url() ?>public/img/miplaza-logo.png" alt=""
                        class="img-fluid position-absolute top-50 start-0 translate-middle-y mx-2" id="icon-nav"
                        style="width:45px"></a>
            </li>
            <li class="nav-item">
                <p class="fw-low fs-4 m-1 text-light">Administrador</p>
            </li>
        </ul>
        <ul class="nav justify-content-center position-relative bg-light">
            <li>
                <a class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-danger position-absolute top-50 start-0 translate-middle-y mx-2"
                    title="regresar" style="--bs-icon-link-transform: translate3d(-2.5px,0, 0);"
                    href="<?= base_url() ?>index.php/Admin/" onclick="cleanstorage();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 14 14">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    <span class="d-none d-sm-block">
                        Cerrar sesión
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <p class="nav-link py-2 text-danger m-0">Tarjetas</p>
            </li>
        </ul>
    </header>
    <div
        class="conteiner h-auto m-md-4 p-md-4 m-sm-0 p-sm-4 w-auto h-auto bg-light bg-opacity-75 rounded shadow  text-danger">
        <div class="row w-100 h-100 m-0">
            <div class="col-lg-6 col-sm-12 bg-light shadow p-0 text-center rounded-bottom">

                <p class="fs-3 badge bg-danger text-wrap text-light m-0 rounded rounded-0 w-100 mb-4">Formulario para
                    agregar tarjetas de personal</p>
                <form class="row" id="formData">
                    <div class="col-md-6 col-sm-12 h-100">
                        <div class="mb-3  px-3">
                            <label for="formFile" class="form-label fw-medium mb-0">Imagen de personal:<img
                                    class="img-fluid w-100 h-100 rounded-top border border-1 border-danger"
                                    for="formFile" src="<?= base_url() ?>public/img/imagenDefault.jpg" alt=""
                                    id="imagePreview"></label>

                            <input class="d-none form-control focus-ring focus-ring-light " type="file" id="formFile"
                                name="formFile" onchange="previewImage(this)">
                            <label
                                class="border-danger w-100 icon-link icon-link-hover input-group-text rounded-0 rounded-bottom border"
                                for="formFile"
                                style="--bs-icon-link-transform: translate3d(0, -2.5px, 0); cursor: pointer;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#dc3545"
                                    class="bi bi-upload mx-2" viewBox="0 0 16 16" id="fileIconSvg">

                                    <path class="inactive d-block " fill="#dc3545"
                                        d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                    <path class="active d-none" fill="#dc3545"
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    <path class="invalid d-none" fill="#dc3545"
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                                <p id="svgId" class="m-0 d-inline-block text-truncate text-danger"
                                    style="max-width: 100%;"></p>
                            </label>
                        </div>
                        <div class="mb-3  px-3 ">
                            <label for="" class="form-label fw-medium">Actividades del puesto de
                                trabajo:</label>
                            <!-- Campos de actividades laborales -->
                            <!-- Act1 -->
                            <div class="input-group mb-2">
                                <span class="input-group-text border-danger text-danger" id="formAct1l">Act1:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 border-danger rounded-end"
                                    id="formAct1" name="formAct1" placeholder="Alguna actividad del personal">
                            </div>
                            <!-- Act2 -->
                            <div class="input-group mb-2">
                                <span class="input-group-text border-danger text-danger" id="formAct2l">Act2:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 border-danger rounded-end"
                                    id="formAct2" name="formAct2" placeholder="Alguna actividad del personal">
                            </div>
                            <!-- Act3 -->
                            <div class="input-group mb-2">
                                <span class="input-group-text  border-danger text-danger" id="formAct3l">Act3:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 border-danger rounded-end"
                                    id="formAct3" name="formAct3" placeholder="Alguna actividad del personal">
                            </div>
                            <!-- Act4 -->
                            <div class="input-group mb-2">
                                <span class="input-group-text border-danger text-danger" id="formAct4l">Act4:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 border-danger rounded-end"
                                    id="formAct4" name="formAct4" placeholder="Alguna actividad del personal">
                            </div>
                            <!-- Act5 -->
                            <div class="input-group mb-2">
                                <span class="input-group-text border-danger text-danger" id="formAct5l">Act5:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 border-danger rounded-end"
                                    id="formAct5" name="formAct5" placeholder="Última actividad del personal">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 h-100">
                        <!-- Título principal -->
                        <div class="mb-4 mx-3">
                            <label for="formTittle" class="form-label fw-medium">Título principal:</label>
                            <input type="text" class="form-control focus-ring focus-ring-light  rounded-1 border-danger"
                                id="formTittle" name="formTittle" placeholder="Nombre del puesto">
                        </div>
                        <!-- Título en navegador -->
                        <div class="mb-4 mx-3">
                            <label for="formTittle-nav" class="form-label fw-medium">Título en navegador:</label>
                            <input type="text" class="form-control focus-ring focus-ring-light  rounded-1 border-danger"
                                id="formTittle-nav" name="formTittle-nav" placeholder="Un nombre de puesto mas corto">
                        </div>
                        <!-- Descripción del personal -->
                        <div class="mb-4 mx-3">
                            <label for="formArea" class="form-label fw-medium">Descripción del personal:</label>
                            <textarea
                                class="form-control rounded-1 focus-ring focus-ring-light  rounded-1 border-danger"
                                id="formArea" name="formArea" rows="10"
                                placeholder="Una breve descripción del puesto. . ."></textarea>
                        </div>
                        <!-- Color de fondo -->
                        <div class="mb-4 row mx-3">
                            <label for="formColor" class="form-label fw-medium">Color de fondo:</label>
                            <input type="color"
                                class="form-control form-control-color col-5 border-danger rounded-0 rounded-start w-25 focus-ring focus-ring-light"
                                id="formColor" name="formColor" value="#dc3545" title="Choose your color">
                            <div class="bg-light col-6 w-75 rounded-end border border-1 border-danger">
                                <div class="row h-100">
                                    <!-- Principal Color -->
                                    <div class="col-6 text-dark p-1 fw-medium" id="principal-color">Título</div>
                                    <!-- Secundario Color -->
                                    <div class="col-6 text-dark p-1 fw-medium" id="secundario-color">Fondo</div>
                                </div>
                            </div>
                        </div>
                        <!-- Botones -->
                        <div class="row text-center px-5" id="switchBtn">
                            <div class="d-block p-0 w-100 inactive">
                                <button type="button" class="btn btn-outline-danger col-5 m-1 fw-medium"
                                    onclick="cleanInputs()">Borrar</button>
                                <button type="button" class="btn btn-outline-danger col-5 m-1 fw-medium"
                                    onclick="saveData()">Guardar</button>
                            </div>

                            <div class="d-none active">
                                <button type="button" class="btn btn-outline-danger col-5 m-1 fw-medium"
                                    onclick="deleteCards()">Eliminar</button>
                                <button type="button" class="btn btn-outline-danger col-5 m-1 fw-medium"
                                    onclick="upload()">Actualizar</button>
                                <button type="button" class="btn btn-outline-danger col-12 m-1 fw-medium"
                                    onclick="newJob()">Nuevo puesto</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-sm-12  overflow-y-auto h-100 rounded-1 lista-elementos" id="contenedor">
            </div>
        </div>
    </div>
    </div>
</body>
<script src="<?= base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>public/js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="<?= base_url(); ?>public/js/admin.js"></script>


</html>