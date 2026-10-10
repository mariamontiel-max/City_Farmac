<?php
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
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body class="bg-light">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="admin_inicio.php">City Farmac - Admin</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuAdmin" aria-controls="menuAdmin" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuAdmin">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="panel_admin.php">Panel</a></li>
                    <li class="nav-item"><a class="nav-link active" href="productos_admin.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link active" href="categorias_admin.php">Categorías</a></li>
                    <li class="nav-item"><a class="nav-link active" href="marcas_admin.php">Marcas</a></li>
                    <li class="nav-item"><a class="nav-link active" href="comentarios_admin.php">Comentarios</a></li>
                    <li class="nav-item"><a class="nav-link active" href="usuarios_admin.php">Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link active" href="perfiles_admin.php">Perfiles</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>