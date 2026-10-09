<?php
$titulo = "Detalle de producto";
require_once "includes/header_publico.php";
?>

<main class="container py-5">

    <section class="row g-5 align-items-center">

        <div class="col-12 col-md-5">

            <div class="detalle-imagen shadow-sm">

                <img
                    src="assets/img/protector-solar.jpg"
                    class="img-fluid"
                    alt="Protector Solar Facial FPS 50">

            </div>

        </div>


        <div class="col-12 col-md-7">

            <div class="detalle-info">

                <h1>
                    Protector Solar Facial FPS 50
                </h1>

                <p class="descripcion-producto">
                    Efecto seco y matificante. De rápida absorción e hidratación inmediata.
                    Previene manchas y arrugas. Dermatológica y oftalmológicamente testeado.
                    Hipoalergénico. No comedogénico. Sin TACC. Sin parabenos.
                    Resistente al agua. Protege contra la luz azul.
                </p>

                <p>
                    <strong>Marca:</strong>
                    Dermaglós
                </p>

                <p>
                    <strong>Modelo:</strong>
                    FPS 50
                </p>

                <p class="precio detalle-precio">
                    $18.500
                </p>

                <p class="calificacion" aria-label="5 de 5 estrellas">
                    ★★★★★
                    <span>(5 calificaciones)</span>
                </p>

                <button
                    class="btn btn-success btn-lg w-100">
                    Agregar
                </button>

            </div>

        </div>

    </section>


    <section class="mt-5" aria-labelledby="comentarios-titulo">

        <h2 id="comentarios-titulo">
            Comentarios
        </h2>


        <article class="border rounded p-3 mb-3">

            <p class="mb-1">
                Muy buen producto. Se absorbe rápido y no deja la piel grasosa.
            </p>

            <small>
                Valoración: ★★★★★ · 08/10/2026
            </small>

        </article>


        <article class="border rounded p-3 mb-3">

            <p class="mb-1">
                Me gustó mucho para uso diario.
            </p>

            <small>
                Valoración: ★★★★☆ · 06/10/2026
            </small>

        </article>

    </section>


    <section class="mt-5" aria-labelledby="form-comentario-titulo">

        <h2 id="form-comentario-titulo">
            Dejar un comentario
        </h2>

        <form action="#" method="post" class="row g-3">

            <div class="col-12 col-md-6">

                <label
                    for="email"
                    class="form-label">
                    Email
                </label>

                <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control"
                    required>

            </div>


            <div class="col-12 col-md-6">

                <label
                    for="valoracion"
                    class="form-label">
                    Valoración
                </label>

                <select
                    id="valoracion"
                    name="valoracion"
                    class="form-select"
                    required>

                    <option value="">
                        Seleccionar
                    </option>

                    <option value="1">
                        ★ (1)
                    </option>

                    <option value="2">
                        ★★ (2)
                    </option>

                    <option value="3">
                        ★★★ (3)
                    </option>

                    <option value="4">
                        ★★★★ (4)
                    </option>

                    <option value="5">
                        ★★★★★ (5)
                    </option>

                </select>

            </div>


            <div class="col-12">

                <label
                    for="comentario"
                    class="form-label">
                    Comentario
                </label>

                <textarea
                    id="comentario"
                    name="comentario"
                    class="form-control"
                    rows="5"
                    required></textarea>

            </div>


            <div class="col-12">

                <button
                    class="btn btn-success"
                    type="submit">
                    Enviar comentario
                </button>

            </div>

        </form>

    </section>

</main>

<?php
require_once "includes/footer_publico.php";
?>