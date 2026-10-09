<?php
$titulo = "Listado de Productos";
require_once "includes/header_publico.php";
?>

<main class="container py-5">

    <h1 class="mb-4">Listado de productos</h1>

    <div class="row g-4">

        <!-- FILTROS -->
        <aside class="col-12 col-lg-3">

            <div class="card shadow-sm p-3">

                <h2 class="h4 mb-4">Filtros</h2>

                <h3 class="h6">Categoría</h3>

                <div class="accordion mb-3" id="categoriasAccordion">

                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#categoria1">
                                Cuidado personal
                            </button>
                        </h4>

                        <div
                            id="categoria1"
                            class="accordion-collapse collapse show"
                            data-bs-parent="#categoriasAccordion">
                            <div class="accordion-body">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="proteccion-solar">
                                    <label class="form-check-label" for="proteccion-solar">
                                        Protección solar
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="limpieza-facial">
                                    <label class="form-check-label" for="limpieza-facial">
                                        Limpieza facial
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="hidratacion">
                                    <label class="form-check-label" for="hidratacion">
                                        Hidratación
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#categoria2">
                                Cabello
                            </button>
                        </h4>

                        <div
                            id="categoria2"
                            class="accordion-collapse collapse"
                            data-bs-parent="#categoriasAccordion">
                            <div class="accordion-body">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="shampoo">
                                    <label class="form-check-label" for="shampoo">
                                        Shampoo
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="acondicionador">
                                    <label class="form-check-label" for="acondicionador">
                                        Acondicionador
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#categoria3">
                                Higiene
                            </button>
                        </h4>

                        <div
                            id="categoria3"
                            class="accordion-collapse collapse"
                            data-bs-parent="#categoriasAccordion">
                            <div class="accordion-body">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="desodorantes">
                                    <label class="form-check-label" for="desodorantes">
                                        Desodorantes
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="jabones">
                                    <label class="form-check-label" for="jabones">
                                        Jabones
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#categoria4">
                                Perfumería
                            </button>
                        </h4>

                        <div
                            id="categoria4"
                            class="accordion-collapse collapse"
                            data-bs-parent="#categoriasAccordion">
                            <div class="accordion-body">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="perfumes">
                                    <label class="form-check-label" for="perfumes">
                                        Perfumes
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <hr>

                <label for="marca" class="form-label">
                    Marca
                </label>

                <select id="marca" class="form-select mb-3">
                    <option>Todas las marcas</option>
                    <option>Dermaglós</option>
                    <option>Garnier</option>
                    <option>Pantene</option>
                    <option>Nivea</option>
                    <option>Dove</option>
                </select>

                <label for="orden" class="form-label">
                    Ordenar por
                </label>

                <select id="orden" class="form-select">
                    <option>Destacados</option>
                    <option>Ranqueados mayor a menor</option>
                    <option>A-Z</option>
                    <option>Z-A</option>
                </select>

            </div>

        </aside>


        <!-- PRODUCTOS -->
        <section class="col-12 col-lg-9" aria-labelledby="productos-titulo">

            <h2 id="productos-titulo" class="h4 mb-4">
                Productos
            </h2>

            <div class="row g-4">


                <!-- Producto 1 -->
                <article class="col-12 col-md-6 col-xl-4">

                    <div class="card h-100 shadow-sm">

                        <img
                            src="assets/img/protector-solar.jpg"
                            class="card-img-top producto-img"
                            alt="Protector Solar Facial">

                        <div class="card-body d-flex flex-column">

                            <h3 class="h5 card-title">
                                Protector Solar Facial FPS 50
                            </h3>

                            <p class="marca-texto">
                                Dermaglós
                            </p>

                            <div class="mt-auto">

                                <p class="precio">
                                    $18.500
                                </p>

                                <p
                                    class="calificacion" aria-label="5 de 5 estrellas">
                                    ★★★★★ <span>(5 calificaciones)</span>
                                </p>

                                <a
                                    href="producto.php"
                                    class="btn btn-outline-success w-100">
                                    Ver detalle
                                </a>

                            </div>

                        </div>

                    </div>

                </article>


                <!-- Producto 2 -->
                <article class="col-12 col-md-6 col-xl-4">

                    <div class="card h-100 shadow-sm">

                        <img
                            src="assets/img/agua-micelar.jpg"
                            class="card-img-top producto-img"
                            alt="Agua Micelar">

                        <div class="card-body d-flex flex-column">

                            <h3 class="h5 card-title">
                                Agua Micelar Skin Active x 400 ml
                            </h3>

                            <p class="marca-texto">
                                Garnier
                            </p>

                            <div class="mt-auto">

                                <p class="precio">
                                    $24.990
                                </p>

                                <p
                                    class="calificacion" aria-label="4 de 5 estrellas">
                                    ★★★★☆ <span>(10 calificaciones)</span>
                                </p>

                                <a
                                    href="producto.php"
                                    class="btn btn-outline-success w-100">
                                    Ver detalle
                                </a>

                            </div>

                        </div>

                    </div>

                </article>


                <!-- Producto 3 -->
                <article class="col-12 col-md-6 col-xl-4">

                    <div class="card h-100 shadow-sm">

                        <img
                            src="assets/img/shampoo-anticaida.jpg"
                            class="card-img-top producto-img"
                            alt="Shampoo Anticaída">

                        <div class="card-body d-flex flex-column">

                            <h3 class="h5 card-title">
                                Shampoo Anticaída x 300 ml
                            </h3>

                            <p class="marca-texto">
                                Pantene
                            </p>

                            <div class="mt-auto">

                                <p class="precio">
                                    $12.023
                                </p>

                                <p
                                    class="calificacion" aria-label="3 de 5 estrellas">
                                    ★★★☆☆ <span>(2 calificaciones)</span>
                                </p>

                                <a
                                    href="producto.php"
                                    class="btn btn-outline-success w-100">
                                    Ver detalle
                                </a>

                            </div>

                        </div>

                    </div>

                </article>


                <!-- Producto 4 -->
                <article class="col-12 col-md-6 col-xl-4">

                    <div class="card h-100 shadow-sm">

                        <img
                            src="assets/img/crema-corporal.jpg"
                            class="card-img-top producto-img"
                            alt="Crema Corporal">

                        <div class="card-body d-flex flex-column">

                            <h3 class="h5 card-title">
                                Crema Corporal Soft Milk 5 en 1 Piel Seca x 400 ml
                            </h3>

                            <p class="marca-texto">
                                Nivea
                            </p>

                            <div class="mt-auto">

                                <p class="precio">
                                    $12.762
                                </p>

                                <p
                                    class="calificacion" aria-label="1 de 5 estrellas">
                                    ★☆☆☆☆ <span>(100+ calificaciones)</span>
                                </p>

                                <a
                                    href="producto.php"
                                    class="btn btn-outline-success w-100">
                                    Ver detalle
                                </a>

                            </div>

                        </div>

                    </div>

                </article>


                <!-- Producto 5 -->
                <article class="col-12 col-md-6 col-xl-4">

                    <div class="card h-100 shadow-sm">

                        <img
                            src="assets/img/desodorante-antitranspirante.jpg"
                            class="card-img-top producto-img"
                            alt="Desodorante Antitranspirante">

                        <div class="card-body d-flex flex-column">

                            <h3 class="h5 card-title">
                                Desodorante Antitranspirante Original Roll-On x 50 ml
                            </h3>

                            <p class="marca-texto">
                                Dove
                            </p>

                            <div class="mt-auto">

                                <p class="precio">
                                    $3.765
                                </p>

                                <p
                                    class="calificacion" aria-label="5 de 5 estrellas">
                                    ★★★★★ <span>(5 calificaciones)</span>
                                </p>

                                <a
                                    href="producto.php"
                                    class="btn btn-outline-success w-100">
                                    Ver detalle
                                </a>

                            </div>

                        </div>

                    </div>

                </article>


                <!-- Producto 6 -->
                <article class="col-12 col-md-6 col-xl-4">

                    <div class="card h-100 shadow-sm">

                        <img
                            src="assets/img/protector-solar.jpg"
                            class="card-img-top producto-img"
                            alt="Protector Solar Facial">

                        <div class="card-body d-flex flex-column">

                            <h3 class="h5 card-title">
                                Protector Solar Facial FPS 50
                            </h3>

                            <p class="marca-texto">
                                Dermaglós
                            </p>

                            <div class="mt-auto">

                                <p class="precio">
                                    $18.500
                                </p>

                                <p
                                    class="calificacion" aria-label="5 de 5 estrellas">
                                    ★★★★★ <span>(5 calificaciones)</span>
                                </p>

                                <a
                                    href="producto.php"
                                    class="btn btn-outline-success w-100">
                                    Ver detalle
                                </a>

                            </div>

                        </div>

                    </div>

                </article>


            </div>

            <hr>

            <!-- Estado vacío -->
            <div class="alert alert-secondary mt-4">
                No hay productos para mostrar.
            </div>

        </section>

    </div>

</main>

<?php
require_once "includes/footer_publico.php";
?>