<?php
$titulo = "Contacto";
require_once "includes/header_publico.php";
?>

<main class="container py-5">
    <h1>Contacto</h1>
    <p>Para contactarnos completá este formulario. Nos pondremos en contacto lo antes posible:</p>

    <form action="#" method="post" class="row g-3">
        <div class="col-12 col-md-6">
            <label for="nombre" class="form-label">Nombre y apellido</label>
            <input id="nombre" name="nombre" type="text" class="form-control" required>
        </div>

        <div class="col-12 col-md-6">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control" required>
        </div>

        <div class="col-12 col-md-6">
            <label for="telefono" class="form-label">Teléfono</label>
            <input id="telefono" name="telefono" type="tel" class="form-control" minlength="10" required>
        </div>

        <div class="col-12 col-md-6">
            <label for="area" class="form-label">Área de la empresa</label>
            <select id="area" name="area" class="form-select" required>
                <option value="">Seleccionar</option>
                <option value="ventas">Ventas</option>
                <option value="administracion">Administración</option>
                <option value="atencion">Atención al cliente</option>
                <option value="rrhh">Recursos Humanos</option>
            </select>
        </div>

        <div class="col-12">
            <label for="comentario" class="form-label">Comentario</label>
            <textarea id="comentario" name="comentario" class="form-control" rows="5" required></textarea>
        </div>

        <div class="col-12">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>
</main>

<?php require_once "includes/footer_publico.php"; ?>
