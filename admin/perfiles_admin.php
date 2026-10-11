<?php
$titulo = "Administrar perfiles";
require_once __DIR__ . "/../includes/header_admin.php";
?>

<main class="container py-5">

    <h1>Perfiles</h1>

    <section class="mb-5">

        <div class="table-responsive">

            <table class="table table-bordered align-middle">

                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Accesos</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- PERFIL 1 -->
                    <tr>

                        <td>Administrador</td>

                        <td>
                            Productos, Categorías, Marcas, Comentarios, Usuarios y Perfiles
                        </td>

                        <td>
                            Activo
                        </td>

                        <td>

                            <div class="d-flex gap-2 flex-wrap">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalPerfil1">
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


                    <!-- PERFIL 2 -->
                    <tr>

                        <td>Editor</td>

                        <td>
                            Productos, Categorías y Marcas
                        </td>

                        <td>
                            Activo
                        </td>

                        <td>

                            <div class="d-flex gap-2 flex-wrap">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalPerfil2">
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


                    <!-- PERFIL 3 -->
                    <tr>

                        <td>Moderador</td>

                        <td>
                            Comentarios
                        </td>

                        <td>
                            Inactivo
                        </td>

                        <td>

                            <div class="d-flex gap-2 flex-wrap">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalPerfil3">
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


    <!-- ALTA DE PERFIL -->

    <section id="alta-perfil">

        <h2 class="h4 mb-3">
            Alta de perfil
        </h2>

        <form
            action="#"
            method="POST"
            class="row g-3">

            <div class="col-12 col-md-6">

                <label
                    for="nombre"
                    class="form-label">
                    Nombre del perfil
                </label>

                <input
                    id="nombre"
                    name="nombre"
                    type="text"
                    class="form-control"
                    required>

            </div>


            <div class="col-12">

                <h3 class="h5">
                    Secciones permitidas
                </h3>

                <div class="form-check">

                    <input
                        id="productos"
                        name="permisos[]"
                        value="productos"
                        type="checkbox"
                        class="form-check-input">

                    <label
                        for="productos"
                        class="form-check-label">
                        Productos
                    </label>

                </div>


                <div class="form-check">

                    <input
                        id="categorias"
                        name="permisos[]"
                        value="categorias"
                        type="checkbox"
                        class="form-check-input">

                    <label
                        for="categorias"
                        class="form-check-label">
                        Categorías
                    </label>

                </div>


                <div class="form-check">

                    <input
                        id="marcas"
                        name="permisos[]"
                        value="marcas"
                        type="checkbox"
                        class="form-check-input">

                    <label
                        for="marcas"
                        class="form-check-label">
                        Marcas
                    </label>

                </div>


                <div class="form-check">

                    <input
                        id="comentarios"
                        name="permisos[]"
                        value="comentarios"
                        type="checkbox"
                        class="form-check-input">

                    <label
                        for="comentarios"
                        class="form-check-label">
                        Comentarios
                    </label>

                </div>


                <div class="form-check">

                    <input
                        id="usuarios"
                        name="permisos[]"
                        value="usuarios"
                        type="checkbox"
                        class="form-check-input">

                    <label
                        for="usuarios"
                        class="form-check-label">
                        Usuarios
                    </label>

                </div>


                <div class="form-check">

                    <input
                        id="perfiles"
                        name="permisos[]"
                        value="perfiles"
                        type="checkbox"
                        class="form-check-input">

                    <label
                        for="perfiles"
                        class="form-check-label">
                        Perfiles
                    </label>

                </div>

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


<!-- MODAL PERFIL 1 -->

<div
    class="modal fade"
    id="modalPerfil1"
    tabindex="-1"
    aria-labelledby="modalPerfil1Titulo"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalPerfil1Titulo">
                    Modificar perfil
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <form action="#" method="POST">

                    <div class="mb-3">

                        <label
                            for="perfil1-nombre"
                            class="form-label">
                            Nombre del perfil
                        </label>

                        <input
                            id="perfil1-nombre"
                            name="nombre"
                            type="text"
                            class="form-control"
                            value="Administrador"
                            required>

                    </div>


                    <h3 class="h6">
                        Secciones permitidas
                    </h3>


                    <div class="form-check">

                        <input
                            id="perfil1-productos"
                            name="permisos[]"
                            value="productos"
                            type="checkbox"
                            class="form-check-input"
                            checked>

                        <label
                            for="perfil1-productos"
                            class="form-check-label">
                            Productos
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil1-categorias"
                            name="permisos[]"
                            value="categorias"
                            type="checkbox"
                            class="form-check-input"
                            checked>

                        <label
                            for="perfil1-categorias"
                            class="form-check-label">
                            Categorías
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil1-marcas"
                            name="permisos[]"
                            value="marcas"
                            type="checkbox"
                            class="form-check-input"
                            checked>

                        <label
                            for="perfil1-marcas"
                            class="form-check-label">
                            Marcas
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil1-comentarios"
                            name="permisos[]"
                            value="comentarios"
                            type="checkbox"
                            class="form-check-input"
                            checked>

                        <label
                            for="perfil1-comentarios"
                            class="form-check-label">
                            Comentarios
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil1-usuarios"
                            name="permisos[]"
                            value="usuarios"
                            type="checkbox"
                            class="form-check-input"
                            checked>

                        <label
                            for="perfil1-usuarios"
                            class="form-check-label">
                            Usuarios
                        </label>

                    </div>


                    <div class="form-check mb-3">

                        <input
                            id="perfil1-perfiles"
                            name="permisos[]"
                            value="perfiles"
                            type="checkbox"
                            class="form-check-input"
                            checked>

                        <label
                            for="perfil1-perfiles"
                            class="form-check-label">
                            Perfiles
                        </label>

                    </div>


                    <button
                        type="submit"
                        class="btn btn-warning">
                        Guardar cambios
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>


<!-- MODAL PERFIL 2 -->

<div
    class="modal fade"
    id="modalPerfil2"
    tabindex="-1"
    aria-labelledby="modalPerfil2Titulo"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalPerfil2Titulo">
                    Modificar perfil
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <form action="#" method="POST">

                    <div class="mb-3">

                        <label
                            for="perfil2-nombre"
                            class="form-label">
                            Nombre del perfil
                        </label>

                        <input
                            id="perfil2-nombre"
                            name="nombre"
                            type="text"
                            class="form-control"
                            value="Editor"
                            required>

                    </div>


                    <h3 class="h6">
                        Secciones permitidas
                    </h3>


                    <div class="form-check">

                        <input
                            id="perfil2-productos"
                            name="permisos[]"
                            value="productos"
                            type="checkbox"
                            class="form-check-input"
                            checked>

                        <label
                            for="perfil2-productos"
                            class="form-check-label">
                            Productos
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil2-categorias"
                            name="permisos[]"
                            value="categorias"
                            type="checkbox"
                            class="form-check-input"
                            checked>

                        <label
                            for="perfil2-categorias"
                            class="form-check-label">
                            Categorías
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil2-marcas"
                            name="permisos[]"
                            value="marcas"
                            type="checkbox"
                            class="form-check-input"
                            checked>

                        <label
                            for="perfil2-marcas"
                            class="form-check-label">
                            Marcas
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil2-comentarios"
                            name="permisos[]"
                            value="comentarios"
                            type="checkbox"
                            class="form-check-input">

                        <label
                            for="perfil2-comentarios"
                            class="form-check-label">
                            Comentarios
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil2-usuarios"
                            name="permisos[]"
                            value="usuarios"
                            type="checkbox"
                            class="form-check-input">

                        <label
                            for="perfil2-usuarios"
                            class="form-check-label">
                            Usuarios
                        </label>

                    </div>


                    <div class="form-check mb-3">

                        <input
                            id="perfil2-perfiles"
                            name="permisos[]"
                            value="perfiles"
                            type="checkbox"
                            class="form-check-input">

                        <label
                            for="perfil2-perfiles"
                            class="form-check-label">
                            Perfiles
                        </label>

                    </div>


                    <button
                        type="submit"
                        class="btn btn-warning">
                        Guardar cambios
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>


<!-- MODAL PERFIL 3 -->

<div
    class="modal fade"
    id="modalPerfil3"
    tabindex="-1"
    aria-labelledby="modalPerfil3Titulo"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalPerfil3Titulo">
                    Modificar perfil
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <form action="#" method="POST">

                    <div class="mb-3">

                        <label
                            for="perfil3-nombre"
                            class="form-label">
                            Nombre del perfil
                        </label>

                        <input
                            id="perfil3-nombre"
                            name="nombre"
                            type="text"
                            class="form-control"
                            value="Moderador"
                            required>

                    </div>


                    <h3 class="h6">
                        Secciones permitidas
                    </h3>


                    <div class="form-check">

                        <input
                            id="perfil3-productos"
                            name="permisos[]"
                            value="productos"
                            type="checkbox"
                            class="form-check-input">

                        <label
                            for="perfil3-productos"
                            class="form-check-label">
                            Productos
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil3-categorias"
                            name="permisos[]"
                            value="categorias"
                            type="checkbox"
                            class="form-check-input">

                        <label
                            for="perfil3-categorias"
                            class="form-check-label">
                            Categorías
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil3-marcas"
                            name="permisos[]"
                            value="marcas"
                            type="checkbox"
                            class="form-check-input">

                        <label
                            for="perfil3-marcas"
                            class="form-check-label">
                            Marcas
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil3-comentarios"
                            name="permisos[]"
                            value="comentarios"
                            type="checkbox"
                            class="form-check-input"
                            checked>

                        <label
                            for="perfil3-comentarios"
                            class="form-check-label">
                            Comentarios
                        </label>

                    </div>


                    <div class="form-check">

                        <input
                            id="perfil3-usuarios"
                            name="permisos[]"
                            value="usuarios"
                            type="checkbox"
                            class="form-check-input">

                        <label
                            for="perfil3-usuarios"
                            class="form-check-label">
                            Usuarios
                        </label>

                    </div>


                    <div class="form-check mb-3">

                        <input
                            id="perfil3-perfiles"
                            name="permisos[]"
                            value="perfiles"
                            type="checkbox"
                            class="form-check-input">

                        <label
                            for="perfil3-perfiles"
                            class="form-check-label">
                            Perfiles
                        </label>

                    </div>


                    <button
                        type="submit"
                        class="btn btn-warning">
                        Guardar cambios
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>


<?php
require_once __DIR__ . "/../includes/footer_admin.php";
?>