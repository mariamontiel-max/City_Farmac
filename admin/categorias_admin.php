<?php
$titulo = "Administrar categorías";
require_once "../includes/header_admin.php";
?>

<main class="container py-5">

    <h1>Categorías</h1>

    <section class="mb-5">

        <div class="table-responsive">

            <table class="table table-bordered align-middle">

                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- CATEGORÍA 1 -->
                    <tr>
                        <td>Cuidado personal</td>
                        <td>Activa</td>

                        <td>
                            <div class="d-flex gap-2 align-items-center flex-wrap">

                                <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                    <label for="categoria-1" class="visually-hidden">
                                        Nombre de la categoría Cuidado personal
                                    </label>

                                    <input
                                        id="categoria-1"
                                        type="text"
                                        name="nombre_categoria"
                                        class="form-control"
                                        value="Cuidado personal"
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

                                <button
                                    type="button"
                                    class="btn btn-sm btn-info"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalCuidadoPersonal">
                                    Ver subcategorías
                                </button>

                            </div>
                        </td>
                    </tr>


                    <!-- CATEGORÍA 2 -->
                    <tr>
                        <td>Cabello</td>
                        <td>Activa</td>

                        <td>
                            <div class="d-flex gap-2 align-items-center flex-wrap">

                                <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                    <label for="categoria-2" class="visually-hidden">
                                        Nombre de la categoría Cabello
                                    </label>

                                    <input
                                        id="categoria-2"
                                        type="text"
                                        name="nombre_categoria"
                                        class="form-control"
                                        value="Cabello"
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

                                <button
                                    type="button"
                                    class="btn btn-sm btn-info"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalCabello">
                                    Ver subcategorías
                                </button>

                            </div>
                        </td>
                    </tr>


                    <!-- CATEGORÍA 3 -->
                    <tr>
                        <td>Higiene</td>
                        <td>Activa</td>

                        <td>
                            <div class="d-flex gap-2 align-items-center flex-wrap">

                                <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                    <label for="categoria-3" class="visually-hidden">
                                        Nombre de la categoría Higiene
                                    </label>

                                    <input
                                        id="categoria-3"
                                        type="text"
                                        name="nombre_categoria"
                                        class="form-control"
                                        value="Higiene"
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

                                <button
                                    type="button"
                                    class="btn btn-sm btn-info"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalHigiene">
                                    Ver subcategorías
                                </button>

                            </div>
                        </td>
                    </tr>


                    <!-- CATEGORÍA 4 -->
                    <tr>
                        <td>Perfumería</td>
                        <td>Inactiva</td>

                        <td>
                            <div class="d-flex gap-2 align-items-center flex-wrap">

                                <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                    <label for="categoria-4" class="visually-hidden">
                                        Nombre de la categoría Perfumería
                                    </label>

                                    <input
                                        id="categoria-4"
                                        type="text"
                                        name="nombre_categoria"
                                        class="form-control"
                                        value="Perfumería"
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

                                <button
                                    type="button"
                                    class="btn btn-sm btn-info"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalPerfumeria">
                                    Ver subcategorías
                                </button>

                            </div>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- FORMULARIO DE ALTA -->

    <section id="form-categoria">

        <h2 class="h4">
            Alta de categoría
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


            <div class="col-12 col-md-6">

                <label
                    for="categoria_padre"
                    class="form-label">
                    Categoría padre
                </label>

                <select
                    id="categoria_padre"
                    name="categoria_padre"
                    class="form-select">

                    <option value="">
                        Sin categoría padre
                    </option>

                    <option value="cuidado-personal">
                        Cuidado personal
                    </option>

                    <option value="cabello">
                        Cabello
                    </option>

                    <option value="higiene">
                        Higiene
                    </option>

                    <option value="perfumeria">
                        Perfumería
                    </option>

                </select>

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


<!-- MODAL CUIDADO PERSONAL -->

<div
    class="modal fade"
    id="modalCuidadoPersonal"
    tabindex="-1"
    aria-labelledby="modalCuidadoPersonalTitulo"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalCuidadoPersonalTitulo">
                    Subcategorías de Cuidado personal
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <div class="table-responsive">

                    <table class="table table-bordered align-middle">

                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Protección solar</td>
                                <td>Activa</td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center flex-wrap">

                                        <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                            <label for="categoria-1-sub-1" class="visually-hidden">
                                                Nombre de la subcategoría Protección solar
                                            </label>

                                            <input
                                                id="categoria-1-sub-1"
                                                type="text"
                                                name="nombre_subcategoria"
                                                class="form-control"
                                                value="Protección solar"
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
                                <td>Limpieza facial</td>
                                <td>Activa</td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center flex-wrap">

                                        <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                            <label for="categoria-1-sub-2" class="visually-hidden">
                                                Nombre de la subcategoría Limpieza facial
                                            </label>

                                            <input
                                                id="categoria-1-sub-2"
                                                type="text"
                                                name="nombre_subcategoria"
                                                class="form-control"
                                                value="Limpieza facial"
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
                                <td>Hidratación</td>
                                <td>Activa</td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center flex-wrap">

                                        <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                            <label for="categoria-1-sub-3" class="visually-hidden">
                                                Nombre de la subcategoría Hidratación
                                            </label>

                                            <input
                                                id="categoria-1-sub-3"
                                                type="text"
                                                name="nombre_subcategoria"
                                                class="form-control"
                                                value="Hidratación"
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

            </div>

        </div>

    </div>

</div>


<!-- MODAL CABELLO -->

<div
    class="modal fade"
    id="modalCabello"
    tabindex="-1"
    aria-labelledby="modalCabelloTitulo"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalCabelloTitulo">
                    Subcategorías de Cabello
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <div class="table-responsive">

                    <table class="table table-bordered align-middle">

                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Shampoo</td>
                                <td>Activa</td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center flex-wrap">

                                        <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                            <label for="categoria-2-sub-1" class="visually-hidden">
                                                Nombre de la subcategoría Shampoo
                                            </label>

                                            <input
                                                id="categoria-2-sub-1"
                                                type="text"
                                                name="nombre_subcategoria"
                                                class="form-control"
                                                value="Shampoo"
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
                                <td>Acondicionador</td>
                                <td>Activa</td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center flex-wrap">

                                        <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                            <label for="categoria-2-sub-2" class="visually-hidden">
                                                Nombre de la subcategoría Acondicionador
                                            </label>

                                            <input
                                                id="categoria-2-sub-2"
                                                type="text"
                                                name="nombre_subcategoria"
                                                class="form-control"
                                                value="Acondicionador"
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

            </div>

        </div>

    </div>

</div>


<!-- MODAL HIGIENE -->

<div
    class="modal fade"
    id="modalHigiene"
    tabindex="-1"
    aria-labelledby="modalHigieneTitulo"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalHigieneTitulo">
                    Subcategorías de Higiene
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <div class="table-responsive">

                    <table class="table table-bordered align-middle">

                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Desodorantes</td>
                                <td>Activa</td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center flex-wrap">

                                        <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                            <label for="categoria-3-sub-1" class="visually-hidden">
                                                Nombre de la subcategoría Desodorantes
                                            </label>

                                            <input
                                                id="categoria-3-sub-1"
                                                type="text"
                                                name="nombre_subcategoria"
                                                class="form-control"
                                                value="Desodorantes"
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
                                <td>Jabones</td>
                                <td>Activa</td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center flex-wrap">

                                        <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                            <label for="categoria-3-sub-2" class="visually-hidden">
                                                Nombre de la subcategoría Jabones
                                            </label>

                                            <input
                                                id="categoria-3-sub-2"
                                                type="text"
                                                name="nombre_subcategoria"
                                                class="form-control"
                                                value="Jabones"
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

            </div>

        </div>

    </div>

</div>


<!-- MODAL PERFUMERÍA -->

<div
    class="modal fade"
    id="modalPerfumeria"
    tabindex="-1"
    aria-labelledby="modalPerfumeriaTitulo"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalPerfumeriaTitulo">
                    Subcategorías de Perfumería
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <div class="table-responsive">

                    <table class="table table-bordered align-middle">

                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Perfumes</td>
                                <td>Inactiva</td>

                                <td>
                                    <div class="d-flex gap-2 align-items-center flex-wrap">

                                        <form action="#" method="POST" class="d-flex gap-2 align-items-center">

                                            <label for="categoria-4-sub-1" class="visually-hidden">
                                                Nombre de la subcategoría Perfumes
                                            </label>

                                            <input
                                                id="categoria-4-sub-1"
                                                type="text"
                                                name="nombre_subcategoria"
                                                class="form-control"
                                                value="Perfumes"
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

            </div>

        </div>

    </div>

</div>


<?php
require_once "../includes/footer_admin.php";
?>