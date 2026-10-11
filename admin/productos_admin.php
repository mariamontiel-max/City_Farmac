<?php
$titulo = "Administrar productos";
require_once __DIR__ . "/../includes/header_admin.php";
?>

<main class="container py-5">

    <h1>Productos</h1>

    <!-- FILTROS -->
    <section class="mb-4">

        <div class="row g-3">

            <div class="col-12 col-md-4">

                <label for="filtro-categoria" class="form-label">
                    Categoría
                </label>

                <select
                    id="filtro-categoria"
                    class="form-select">

                    <option value="">Todas</option>
                    <option>Cuidado personal</option>
                    <option>Cabello</option>
                    <option>Higiene</option>
                    <option>Perfumería</option>

                </select>

            </div>


            <div class="col-12 col-md-4">

                <label for="filtro-subcategoria" class="form-label">
                    Subcategoría
                </label>

                <select
                    id="filtro-subcategoria"
                    class="form-select">

                    <option value="">Todas</option>
                    <option>Protección solar</option>
                    <option>Limpieza facial</option>
                    <option>Hidratación</option>
                    <option>Shampoo</option>
                    <option>Desodorantes</option>
                    <option>Perfumes</option>

                </select>

            </div>

        </div>

    </section>


    <!-- TABLA -->
    <section class="mb-5">

        <div class="table-responsive">

            <table class="table table-bordered align-middle">

                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th>Destacado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- PRODUCTO 1 -->
                    <tr>

                        <td>
                            <img
                                src="<?= BASE_URL ?>assets/img/protector-solar.jpg"
                                alt="Protector Solar Facial FPS 50"
                                class="img-thumbnail">
                        </td>

                        <td>
                            Protector Solar Facial FPS 50
                        </td>

                        <td>
                            Cuidado personal
                        </td>

                        <td>
                            Dermaglós
                        </td>

                        <td>
                            $18.500
                        </td>

                        <td>
                            Activo
                        </td>

                        <td>
                            Sí
                        </td>

                        <td>

                            <div class="d-flex gap-2 flex-wrap">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalProducto1">
                                    Modificar
                                </button>

                                <form action="#" method="POST">

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-secondary">
                                        Activar/Inactivar
                                    </button>

                                </form>

                                <a
                                    href="<?= BASE_URL ?>admin/comentarios_admin.php"
                                    class="btn btn-sm btn-info">
                                    Ver comentarios
                                </a>

                            </div>

                        </td>

                    </tr>


                    <!-- PRODUCTO 2 -->
                    <tr>

                        <td>
                            <img
                                src="<?= BASE_URL ?>assets/img/agua-micelar.jpg"
                                alt="Agua Micelar"
                                class="img-thumbnail">
                        </td>

                        <td>
                            Agua Micelar Skin Active x 400 ml
                        </td>

                        <td>
                            Cuidado personal
                        </td>

                        <td>
                            Garnier
                        </td>

                        <td>
                            $24.990
                        </td>

                        <td>
                            Activo
                        </td>

                        <td>
                            Sí
                        </td>

                        <td>

                            <div class="d-flex gap-2 flex-wrap">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalProducto2">
                                    Modificar
                                </button>

                                <form action="#" method="POST">

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-secondary">
                                        Activar/Inactivar
                                    </button>

                                </form>

                                <a
                                    href="<?= BASE_URL ?>admin/comentarios_admin.php"
                                    class="btn btn-sm btn-info">
                                    Ver comentarios
                                </a>

                            </div>

                        </td>

                    </tr>


                    <!-- PRODUCTO 3 -->
                    <tr>

                        <td>
                            <img
                                src="<?= BASE_URL ?>assets/img/shampoo-anticaida.jpg"
                                alt="Shampoo Anticaida"
                                class="img-thumbnail">
                        </td>

                        <td>
                            Shampoo Anticaída x 300 ml
                        </td>

                        <td>
                            Cabello
                        </td>

                        <td>
                            Pantene
                        </td>

                        <td>
                            $12.023
                        </td>

                        <td>
                            Activo
                        </td>

                        <td>
                            No
                        </td>

                        <td>

                            <div class="d-flex gap-2 flex-wrap">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalProducto3">
                                    Modificar
                                </button>

                                <form action="#" method="POST">

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-secondary">
                                        Activar/Inactivar
                                    </button>

                                </form>

                                <a
                                    href="<?= BASE_URL ?>admin/comentarios_admin.php"
                                    class="btn btn-sm btn-info">
                                    Ver comentarios
                                </a>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- ALTA DE PRODUCTO -->

    <section id="alta-producto">

        <h2 class="h4 mb-3">
            Alta de producto
        </h2>

        <form
            action="#"
            method="POST"
            class="row g-3">

            <div class="col-12 col-md-6">

                <label for="nombre" class="form-label">
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

                <label for="precio" class="form-label">
                    Precio
                </label>

                <input
                    id="precio"
                    name="precio"
                    type="number"
                    min="0"
                    class="form-control"
                    required>

            </div>


            <div class="col-12">

                <label for="descripcion" class="form-label">
                    Descripción
                </label>

                <textarea
                    id="descripcion"
                    name="descripcion"
                    class="form-control"
                    rows="4"
                    required></textarea>

            </div>


            <div class="col-12 col-md-6">

                <label for="categoria" class="form-label">
                    Categoría
                </label>

                <select
                    id="categoria"
                    name="categoria"
                    class="form-select"
                    required>

                    <option value="">
                        Seleccionar
                    </option>

                    <option>Cuidado personal</option>
                    <option>Cabello</option>
                    <option>Higiene</option>
                    <option>Perfumería</option>

                </select>

            </div>


            <div class="col-12 col-md-6">

                <label for="subcategoria" class="form-label">
                    Subcategoría
                </label>

                <select
                    id="subcategoria"
                    name="subcategoria"
                    class="form-select"
                    required>

                    <option value="">
                        Seleccionar
                    </option>

                    <option>Protección solar</option>
                    <option>Limpieza facial</option>
                    <option>Hidratación</option>
                    <option>Shampoo</option>
                    <option>Desodorantes</option>
                    <option>Perfumes</option>

                </select>

            </div>


            <div class="col-12 col-md-6">

                <label for="marca" class="form-label">
                    Marca
                </label>

                <select
                    id="marca"
                    name="marca"
                    class="form-select"
                    required>

                    <option value="">
                        Seleccionar
                    </option>

                    <option>Dermaglós</option>
                    <option>Garnier</option>
                    <option>Pantene</option>
                    <option>Nivea</option>
                    <option>Dove</option>

                </select>

            </div>


            <div class="col-12 col-md-6">

                <label for="modelo" class="form-label">
                    Modelo
                </label>

                <input
                    id="modelo"
                    name="modelo"
                    type="text"
                    class="form-control"
                    required>

            </div>


            <div class="col-12 col-md-6">

                <label for="imagen" class="form-label">
                    Imagen
                </label>

                <input
                    id="imagen"
                    name="imagen"
                    type="file"
                    class="form-control"
                    accept="image/*">

            </div>


            <div class="col-12 col-md-6">

                <div class="form-check mt-4">

                    <input
                        id="destacado"
                        name="destacado"
                        type="checkbox"
                        class="form-check-input">

                    <label
                        for="destacado"
                        class="form-check-label">
                        Producto destacado
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


<!-- MODAL PRODUCTO 1 -->

<div
    class="modal fade"
    id="modalProducto1"
    tabindex="-1"
    aria-labelledby="modalProducto1Titulo"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalProducto1Titulo">
                    Modificar producto
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <form
                    action="#"
                    method="POST"
                    enctype="multipart/form-data"
                    class="row g-3">

                    <div class="col-12 col-md-6">

                        <label
                            for="producto1-nombre"
                            class="form-label">
                            Nombre
                        </label>

                        <input
                            id="producto1-nombre"
                            name="nombre"
                            type="text"
                            class="form-control"
                            value="Protector Solar Facial FPS 50"
                            required>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto1-precio"
                            class="form-label">
                            Precio
                        </label>

                        <input
                            id="producto1-precio"
                            name="precio"
                            type="number"
                            min="0"
                            class="form-control"
                            value="18500"
                            required>

                    </div>


                    <div class="col-12">

                        <label
                            for="producto1-descripcion"
                            class="form-label">
                            Descripción
                        </label>

                        <textarea
                            id="producto1-descripcion"
                            name="descripcion"
                            class="form-control"
                            rows="4"
                            required>Efecto seco y matificante. De rápida absorción e hidratación inmediata.</textarea>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto1-categoria"
                            class="form-label">
                            Categoría
                        </label>

                        <select
                            id="producto1-categoria"
                            name="categoria"
                            class="form-select"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option selected>
                                Cuidado personal
                            </option>

                            <option>
                                Cabello
                            </option>

                            <option>
                                Higiene
                            </option>

                            <option>
                                Perfumería
                            </option>

                        </select>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto1-subcategoria"
                            class="form-label">
                            Subcategoría
                        </label>

                        <select
                            id="producto1-subcategoria"
                            name="subcategoria"
                            class="form-select"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option selected>
                                Protección solar
                            </option>

                            <option>
                                Limpieza facial
                            </option>

                            <option>
                                Hidratación
                            </option>

                            <option>
                                Shampoo
                            </option>

                            <option>
                                Desodorantes
                            </option>

                            <option>
                                Perfumes
                            </option>

                        </select>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto1-marca"
                            class="form-label">
                            Marca
                        </label>

                        <select
                            id="producto1-marca"
                            name="marca"
                            class="form-select"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option selected>
                                Dermaglós
                            </option>

                            <option>
                                Garnier
                            </option>

                            <option>
                                Pantene
                            </option>

                            <option>
                                Nivea
                            </option>

                            <option>
                                Dove
                            </option>

                        </select>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto1-modelo"
                            class="form-label">
                            Modelo
                        </label>

                        <input
                            id="producto1-modelo"
                            name="modelo"
                            type="text"
                            class="form-control"
                            value="FPS 50"
                            required>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto1-imagen"
                            class="form-label">
                            Cambiar imagen
                        </label>

                        <input
                            id="producto1-imagen"
                            name="imagen"
                            type="file"
                            class="form-control"
                            accept="image/*">

                    </div>


                    <div class="col-12 col-md-6">

                        <div class="form-check mt-4">

                            <input
                                id="producto1-destacado"
                                name="destacado"
                                type="checkbox"
                                class="form-check-input"
                                checked>

                            <label
                                for="producto1-destacado"
                                class="form-check-label">
                                Producto destacado
                            </label>

                        </div>

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



<!-- MODAL PRODUCTO 2 -->

<div
    class="modal fade"
    id="modalProducto2"
    tabindex="-1"
    aria-labelledby="modalProducto2Titulo"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalProducto2Titulo">
                    Modificar producto
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <form
                    action="#"
                    method="POST"
                    enctype="multipart/form-data"
                    class="row g-3">

                    <div class="col-12 col-md-6">

                        <label
                            for="producto2-nombre"
                            class="form-label">
                            Nombre
                        </label>

                        <input
                            id="producto2-nombre"
                            name="nombre"
                            type="text"
                            class="form-control"
                            value="Agua Micelar Skin Active x 400 ml"
                            required>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto2-precio"
                            class="form-label">
                            Precio
                        </label>

                        <input
                            id="producto2-precio"
                            name="precio"
                            type="number"
                            min="0"
                            class="form-control"
                            value="24990"
                            required>

                    </div>


                    <div class="col-12">

                        <label
                            for="producto2-descripcion"
                            class="form-label">
                            Descripción
                        </label>

                        <textarea
                            id="producto2-descripcion"
                            name="descripcion"
                            class="form-control"
                            rows="4"
                            required>Agua micelar para limpieza facial. Limpia y remueve impurezas de la piel.</textarea>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto2-categoria"
                            class="form-label">
                            Categoría
                        </label>

                        <select
                            id="producto2-categoria"
                            name="categoria"
                            class="form-select"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option selected>
                                Cuidado personal
                            </option>

                            <option>
                                Cabello
                            </option>

                            <option>
                                Higiene
                            </option>

                            <option>
                                Perfumería
                            </option>

                        </select>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto2-subcategoria"
                            class="form-label">
                            Subcategoría
                        </label>

                        <select
                            id="producto2-subcategoria"
                            name="subcategoria"
                            class="form-select"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option>
                                Protección solar
                            </option>

                            <option selected>
                                Limpieza facial
                            </option>

                            <option>
                                Hidratación
                            </option>

                            <option>
                                Shampoo
                            </option>

                            <option>
                                Desodorantes
                            </option>

                            <option>
                                Perfumes
                            </option>

                        </select>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto2-marca"
                            class="form-label">
                            Marca
                        </label>

                        <select
                            id="producto2-marca"
                            name="marca"
                            class="form-select"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option>
                                Dermaglós
                            </option>

                            <option selected>
                                Garnier
                            </option>

                            <option>
                                Pantene
                            </option>

                            <option>
                                Nivea
                            </option>

                            <option>
                                Dove
                            </option>

                        </select>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto2-modelo"
                            class="form-label">
                            Modelo
                        </label>

                        <input
                            id="producto2-modelo"
                            name="modelo"
                            type="text"
                            class="form-control"
                            value="Skin Active 400 ml"
                            required>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto2-imagen"
                            class="form-label">
                            Cambiar imagen
                        </label>

                        <input
                            id="producto2-imagen"
                            name="imagen"
                            type="file"
                            class="form-control"
                            accept="image/*">

                    </div>


                    <div class="col-12 col-md-6">

                        <div class="form-check mt-4">

                            <input
                                id="producto2-destacado"
                                name="destacado"
                                type="checkbox"
                                class="form-check-input"
                                checked>

                            <label
                                for="producto2-destacado"
                                class="form-check-label">
                                Producto destacado
                            </label>

                        </div>

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



<!-- MODAL PRODUCTO 3 -->

<div
    class="modal fade"
    id="modalProducto3"
    tabindex="-1"
    aria-labelledby="modalProducto3Titulo"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title fs-5"
                    id="modalProducto3Titulo">
                    Modificar producto
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>

            </div>

            <div class="modal-body">

                <form
                    action="#"
                    method="POST"
                    enctype="multipart/form-data"
                    class="row g-3">

                    <div class="col-12 col-md-6">

                        <label
                            for="producto3-nombre"
                            class="form-label">
                            Nombre
                        </label>

                        <input
                            id="producto3-nombre"
                            name="nombre"
                            type="text"
                            class="form-control"
                            value="Shampoo Anticaída x 300 ml"
                            required>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto3-precio"
                            class="form-label">
                            Precio
                        </label>

                        <input
                            id="producto3-precio"
                            name="precio"
                            type="number"
                            min="0"
                            class="form-control"
                            value="12023"
                            required>

                    </div>


                    <div class="col-12">

                        <label
                            for="producto3-descripcion"
                            class="form-label">
                            Descripción
                        </label>

                        <textarea
                            id="producto3-descripcion"
                            name="descripcion"
                            class="form-control"
                            rows="4"
                            required>Shampoo anticaída para uso diario.</textarea>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto3-categoria"
                            class="form-label">
                            Categoría
                        </label>

                        <select
                            id="producto3-categoria"
                            name="categoria"
                            class="form-select"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option>
                                Cuidado personal
                            </option>

                            <option selected>
                                Cabello
                            </option>

                            <option>
                                Higiene
                            </option>

                            <option>
                                Perfumería
                            </option>

                        </select>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto3-subcategoria"
                            class="form-label">
                            Subcategoría
                        </label>

                        <select
                            id="producto3-subcategoria"
                            name="subcategoria"
                            class="form-select"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option>
                                Protección solar
                            </option>

                            <option>
                                Limpieza facial
                            </option>

                            <option>
                                Hidratación
                            </option>

                            <option selected>
                                Shampoo
                            </option>

                            <option>
                                Desodorantes
                            </option>

                            <option>
                                Perfumes
                            </option>

                        </select>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto3-marca"
                            class="form-label">
                            Marca
                        </label>

                        <select
                            id="producto3-marca"
                            name="marca"
                            class="form-select"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option>
                                Dermaglós
                            </option>

                            <option>
                                Garnier
                            </option>

                            <option selected>
                                Pantene
                            </option>

                            <option>
                                Nivea
                            </option>

                            <option>
                                Dove
                            </option>

                        </select>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto3-modelo"
                            class="form-label">
                            Modelo
                        </label>

                        <input
                            id="producto3-modelo"
                            name="modelo"
                            type="text"
                            class="form-control"
                            value="Anticaída 300 ml"
                            required>

                    </div>


                    <div class="col-12 col-md-6">

                        <label
                            for="producto3-imagen"
                            class="form-label">
                            Cambiar imagen
                        </label>

                        <input
                            id="producto3-imagen"
                            name="imagen"
                            type="file"
                            class="form-control"
                            accept="image/*">

                    </div>


                    <div class="col-12 col-md-6">

                        <div class="form-check mt-4">

                            <input
                                id="producto3-destacado"
                                name="destacado"
                                type="checkbox"
                                class="form-check-input">

                            <label
                                for="producto3-destacado"
                                class="form-check-label">
                                Producto destacado
                            </label>

                        </div>

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
require_once __DIR__ . "/../includes/footer_admin.php";
?>