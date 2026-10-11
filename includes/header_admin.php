<?php
require_once __DIR__ . "/../config/ruta.php";

if (!isset($titulo)) {
    $titulo = "Panel Admin City Farmac";
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css" />
</head>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand fw-bold" href="<?= BASE_URL ?>admin/panel_admin.php">City Farmac - Admin</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuAdmin" aria-controls="menuAdmin" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menuAdmin">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="<?= BASE_URL ?>admin/panel_admin.php">Panel</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?= BASE_URL ?>admin/productos_admin.php">Productos</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?= BASE_URL ?>admin/categorias_admin.php">Categorías</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?= BASE_URL ?>admin/marcas_admin.php">Marcas</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?= BASE_URL ?>admin/comentarios_admin.php">Comentarios</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?= BASE_URL ?>admin/usuarios_admin.php">Usuarios</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?= BASE_URL ?>admin/perfiles_admin.php">Perfiles</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?= BASE_URL ?>admin/login.php">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>