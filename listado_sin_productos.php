<?php
$titulo = "Listado de Productos";
require_once __DIR__ . "/includes/header_publico.php";
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

        <section class="col-12 col-lg-9" aria-labelledby="productos-titulo">

            <div class="alert alert-secondary mt-4">
                No hay productos para mostrar.
            </div>

        </section>

    </div>

</main>

<?php
require_once __DIR__ . "/includes/footer_publico.php";
?>