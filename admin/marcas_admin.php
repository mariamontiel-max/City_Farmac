<?php
$titulo = "Administrar marcas";
require_once "../includes/header_admin.php";
?>

<main class="container py-5">

    <h1>Marcas</h1>

    <section class="mb-5">

        <div class="table-responsive">

            <table class="table table-bordered align-middle tabla-marcas">

                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Dermaglós</td>
                        <td>Activa</td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <form action="#" method="POST" class="d-flex gap-2 align-items-center">
                                    <label for="marca-1" class="visually-hidden">
                                        Nombre de la marca Dermaglós
                                    </label>
                                    <input
                                        id="marca-1"
                                        type="text"
                                        name="nombre_marca"
                                        class="form-control"
                                        value="Dermaglós"
                                        required>

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-warning">
                                        Modificar
                                    </button>

                                </form>

                                <form action="#" method="POST">

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-secondary">
                                        Activar/Inactivar
                                    </button>

                                </form>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Garnier</td>
                        <td>Activa</td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <form action="#" method="POST" class="d-flex gap-2 align-items-center">
                                    <label for="marca-2" class="visually-hidden">
                                        Nombre de la marca Garnier
                                    </label>
                                    <input
                                        id="marca-2"
                                        type="text"
                                        name="nombre_marca"
                                        class="form-control"
                                        value="Garnier"
                                        required>

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-warning">
                                        Modificar
                                    </button>

                                </form>

                                <form action="#" method="POST">

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-secondary">
                                        Activar/Inactivar
                                    </button>

                                </form>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Pantene</td>
                        <td>Activa</td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <form action="#" method="POST" class="d-flex gap-2 align-items-center">
                                    <label for="marca-3" class="visually-hidden">
                                        Nombre de la marca Pantene
                                    </label>
                                    <input
                                        id="marca-3"
                                        type="text"
                                        name="nombre_marca"
                                        class="form-control"
                                        value="Pantene"
                                        required>

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-warning">
                                        Modificar
                                    </button>

                                </form>

                                <form action="#" method="POST">

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-secondary">
                                        Activar/Inactivar
                                    </button>

                                </form>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Nivea</td>
                        <td>Activa</td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <form action="#" method="POST" class="d-flex gap-2 align-items-center">
                                    <label for="marca-4" class="visually-hidden">
                                        Nombre de la marca Nivea
                                    </label>
                                    <input
                                        id="marca-4"
                                        type="text"
                                        name="nombre_marca"
                                        class="form-control"
                                        value="Nivea"
                                        required>

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-warning">
                                        Modificar
                                    </button>

                                </form>

                                <form action="#" method="POST">

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-secondary">
                                        Activar/Inactivar
                                    </button>

                                </form>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Dove</td>
                        <td>Activa</td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <form action="#" method="POST" class="d-flex gap-2 align-items-center">
                                    <label for="marca-5" class="visually-hidden">
                                        Nombre de la marca Dove
                                    </label>
                                    <input
                                        id="marca-5"
                                        type="text"
                                        name="nombre_marca"
                                        class="form-control"
                                        value="Dove"
                                        required>

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-warning">
                                        Modificar
                                    </button>

                                </form>

                                <form action="#" method="POST">

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-secondary">
                                        Activar/Inactivar
                                    </button>

                                </form>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Women Secret</td>
                        <td>Inactiva</td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <form action="#" method="POST" class="d-flex gap-2 align-items-center">
                                    <label for="marca-6" class="visually-hidden">
                                        Nombre de la marca Women Secret
                                    </label>
                                    <input
                                        id="marca-6"
                                        type="text"
                                        name="nombre_marca"
                                        class="form-control"
                                        value="Women Secret"
                                        required>

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-warning">
                                        Modificar
                                    </button>

                                </form>

                                <form action="#" method="POST">

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-secondary">
                                        Activar/Inactivar
                                    </button>

                                </form>
                            </div>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <section id="form-marca">

        <h2 class="h4">
            Alta de marca
        </h2>

        <form
            action="#"
            method="post"
            class="row g-3">

            <div class="col-12 col-md-6">

                <label
                    for="nombre"
                    class="form-label">
                    Nombre
                </label>

                <input
                    id="nombre"
                    name="nombre"
                    type="text"
                    class="form-control"
                    required>

            </div>

            <div class="col-12">

                <button
                    class="btn btn-dark"
                    type="submit">
                    Guardar
                </button>

            </div>

        </form>

    </section>

</main>

<?php
require_once "../includes/footer_admin.php";
?>