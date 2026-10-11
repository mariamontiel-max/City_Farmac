<?php
$titulo = "Administrar usuarios";
require_once "../includes/header_admin.php";
?>

<main class="container py-5">

    <h1>Usuarios</h1>

    <section class="mb-5">

        <div class="table-responsive">

            <table class="table table-bordered align-middle">

                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- USUARIO 1 -->
                    <tr>
                        <td>Juan Pérez</td>
                        <td>juan@cityfarmac.com</td>
                        <td>Administrador</td>
                        <td>Activo</td>

                        <td>
                            <div class="d-flex gap-2 flex-wrap">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalUsuario1">
                                    Modificar
                                </button>

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


                    <!-- USUARIO 2 -->
                    <tr>
                        <td>María Gómez</td>
                        <td>maria@cityfarmac.com</td>
                        <td>Editor</td>
                        <td>Activo</td>

                        <td>
                            <div class="d-flex gap-2 flex-wrap">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalUsuario2">
                                    Modificar
                                </button>

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


                    <!-- USUARIO 3 -->
                    <tr>
                        <td>Carlos López</td>
                        <td>carlos@cityfarmac.com</td>
                        <td>Moderador</td>
                        <td>Inactivo</td>

                        <td>
                            <div class="d-flex gap-2 flex-wrap">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalUsuario3">
                                    Modificar
                                </button>

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


    <!-- ALTA DE USUARIO -->

    <section id="alta-usuario">

        <h2 class="h4 mb-3">
            Alta de usuario
        </h2>

        <form
            action="#"
            method="POST"
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
                    for="password"
                    class="form-label">
                    Contraseña
                </label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control"
                    minlength="6"
                    required>

            </div>


            <div class="col-12 col-md-6">

                <label
                    for="perfil"
                    class="form-label">
                    Perfil
                </label>

                <select
                    id="perfil"
                    name="perfil"
                    class="form-select"
                    required>

                    <option value="">
                        Seleccionar
                    </option>

                    <option>
                        Administrador
                    </option>

                    <option>
                        Editor
                    </option>

                    <option>
                        Moderador
                    </option>

                </select>

            </div>


            <div class="col-12">

                <button
                    type="submit"
                    class="btn btn-dark">
                    Guardar
                </button>

            </div>

        </form>

    </section>

</main>


<!-- MODAL USUARIO 1 -->

<div
    class="modal fade"
    id="modalUsuario1"
    tabindex="-1"
    aria-labelledby="modalUsuario1Titulo"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalUsuario1Titulo">
                    Modificar usuario
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <form action="#" method="POST" class="row g-3">

                    <div class="col-12">

                        <label
                            for="usuario1-nombre"
                            class="form-label">
                            Nombre
                        </label>

                        <input
                            id="usuario1-nombre"
                            name="nombre"
                            type="text"
                            class="form-control"
                            value="Juan Pérez"
                            required>

                    </div>


                    <div class="col-12">

                        <label
                            for="usuario1-email"
                            class="form-label">
                            Email
                        </label>

                        <input
                            id="usuario1-email"
                            name="email"
                            type="email"
                            class="form-control"
                            value="juan@cityfarmac.com"
                            required>

                    </div>


                    <div class="col-12">

                        <label
                            for="usuario1-password"
                            class="form-label">
                            Contraseña
                        </label>

                        <input
                            id="usuario1-password"
                            name="password"
                            type="password"
                            class="form-control"
                            value="123456"
                            minlength="6"
                            required>

                    </div>


                    <div class="col-12">

                        <label
                            for="usuario1-perfil"
                            class="form-label">
                            Perfil
                        </label>

                        <select
                            id="usuario1-perfil"
                            name="perfil"
                            class="form-select"
                            required>

                            <option selected>
                                Administrador
                            </option>

                            <option>
                                Editor
                            </option>

                            <option>
                                Moderador
                            </option>

                        </select>

                    </div>


                    <div class="col-12">

                        <button
                            type="submit"
                            class="btn btn-warning">
                            Guardar cambios
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<!-- MODAL USUARIO 2 -->

<div
    class="modal fade"
    id="modalUsuario2"
    tabindex="-1"
    aria-labelledby="modalUsuario2Titulo"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalUsuario2Titulo">
                    Modificar usuario
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <form action="#" method="POST" class="row g-3">

                    <div class="col-12">

                        <label for="usuario2-nombre" class="form-label">
                            Nombre
                        </label>

                        <input
                            id="usuario2-nombre"
                            name="nombre"
                            type="text"
                            class="form-control"
                            value="María Gómez"
                            required>

                    </div>


                    <div class="col-12">

                        <label for="usuario2-email" class="form-label">
                            Email
                        </label>

                        <input
                            id="usuario2-email"
                            name="email"
                            type="email"
                            class="form-control"
                            value="maria@cityfarmac.com"
                            required>

                    </div>


                    <div class="col-12">

                        <label for="usuario2-password" class="form-label">
                            Contraseña
                        </label>

                        <input
                            id="usuario2-password"
                            name="password"
                            type="password"
                            class="form-control"
                            value="123456"
                            minlength="6"
                            required>

                    </div>


                    <div class="col-12">

                        <label for="usuario2-perfil" class="form-label">
                            Perfil
                        </label>

                        <select
                            id="usuario2-perfil"
                            name="perfil"
                            class="form-select"
                            required>

                            <option>
                                Administrador
                            </option>

                            <option selected>
                                Editor
                            </option>

                            <option>
                                Moderador
                            </option>

                        </select>

                    </div>


                    <div class="col-12">

                        <button
                            type="submit"
                            class="btn btn-warning">
                            Guardar cambios
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<!-- MODAL USUARIO 3 -->

<div
    class="modal fade"
    id="modalUsuario3"
    tabindex="-1"
    aria-labelledby="modalUsuario3Titulo"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalUsuario3Titulo">
                    Modificar usuario
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <form action="#" method="POST" class="row g-3">

                    <div class="col-12">

                        <label for="usuario3-nombre" class="form-label">
                            Nombre
                        </label>

                        <input
                            id="usuario3-nombre"
                            name="nombre"
                            type="text"
                            class="form-control"
                            value="Carlos López"
                            required>

                    </div>


                    <div class="col-12">

                        <label for="usuario3-email" class="form-label">
                            Email
                        </label>

                        <input
                            id="usuario3-email"
                            name="email"
                            type="email"
                            class="form-control"
                            value="carlos@cityfarmac.com"
                            required>

                    </div>


                    <div class="col-12">

                        <label for="usuario3-password" class="form-label">
                            Contraseña
                        </label>

                        <input
                            id="usuario3-password"
                            name="password"
                            type="password"
                            class="form-control"
                            value="123456"
                            minlength="6"
                            required>

                    </div>


                    <div class="col-12">

                        <label for="usuario3-perfil" class="form-label">
                            Perfil
                        </label>

                        <select
                            id="usuario3-perfil"
                            name="perfil"
                            class="form-select"
                            required>

                            <option>
                                Administrador
                            </option>

                            <option>
                                Editor
                            </option>

                            <option selected>
                                Moderador
                            </option>

                        </select>

                    </div>


                    <div class="col-12">

                        <button
                            type="submit"
                            class="btn btn-warning">
                            Guardar cambios
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<?php
require_once "../includes/footer_admin.php";
?>