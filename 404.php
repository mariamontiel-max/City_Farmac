<?php
$titulo = "Página no encontrada";
require_once __DIR__ . "/includes/header_publico.php";
?>

<main class="container py-5 text-center">

    <h1 class="display-4">404</h1>

    <p class="lead">
        La página que buscás no existe.
    </p>

    <a
        href="<?= BASE_URL ?>index.php"
        class="btn btn-success">
        Volver al inicio
    </a>

</main>

<?php
require_once __DIR__ . "/includes/footer_publico.php";
?>