<?php
$titulo = "Inicio del panel";
require_once "../includes/header_admin.php";
?>

<main class="container py-5">
    <h1>Panel de administración</h1>

    <div class="row g-4 mt-2">
        <div class="col-12 col-md-6 col-lg-4"><a class="card card-link p-4" href="productos_admin.php">Productos</a></div>
        <div class="col-12 col-md-6 col-lg-4"><a class="card card-link p-4" href="categorias_admin.php">Categorías</a></div>
        <div class="col-12 col-md-6 col-lg-4"><a class="card card-link p-4" href="marcas_admin.php">Marcas</a></div>
        <div class="col-12 col-md-6 col-lg-4"><a class="card card-link p-4" href="comentarios_admin.php">Comentarios</a></div>
        <div class="col-12 col-md-6 col-lg-4"><a class="card card-link p-4" href="usuarios_admin.php">Usuarios</a></div>
        <div class="col-12 col-md-6 col-lg-4"><a class="card card-link p-4" href="perfiles_admin.php">Perfiles</a></div>
    </div>
</main>

<?php require_once "../includes/footer_admin.php"; ?>