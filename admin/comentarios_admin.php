<?php
$titulo = "Administrar comentarios";
require_once __DIR__ . "/../includes/header_admin.php";
?>

<main class="container py-5">

    <h1>Comentarios</h1>

    <section class="mb-4">

        <label for="estado" class="form-label">
            Filtrar por estado
        </label>

        <select id="estado" class="form-select w-auto">
            <option>Todos</option>
            <option>Activos</option>
            <option>Inactivos</option>
        </select>

    </section>


    <section>

        <div class="table-responsive">

            <table class="table table-bordered align-middle">

                <thead>
                    <tr>
                        <th>Comentario</th>
                        <th>Ranking</th>
                        <th>Fecha</th>
                        <th>Producto</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>
                            Muy buen producto. Se absorbe rápido y no deja la piel grasosa.
                        </td>

                        <td>
                            ★★★★★
                        </td>

                        <td>
                            08/10/2026
                        </td>

                        <td>
                            Protector Solar Facial FPS 50
                        </td>

                        <td>
                            Activo
                        </td>

                        <td>
                            <form action="#" method="POST">

                                <button
                                    type="submit"
                                    class="btn btn-sm btn-secondary">
                                    Aprobar/Desaprobar
                                </button>

                            </form>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            Me gustó mucho para uso diario.
                        </td>

                        <td>
                            ★★★★☆
                        </td>

                        <td>
                            06/10/2026
                        </td>

                        <td>
                            Protector Solar Facial FPS 50
                        </td>

                        <td>
                            Activo
                        </td>

                        <td>
                            <form action="#" method="POST">

                                <button
                                    type="submit"
                                    class="btn btn-sm btn-secondary">
                                    Aprobar/Desaprobar
                                </button>

                            </form>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            El producto llegó bien pero esperaba otro resultado.
                        </td>

                        <td>
                            ★★★☆☆
                        </td>

                        <td>
                            05/10/2026
                        </td>

                        <td>
                            Shampoo Anticaída x 300 ml
                        </td>

                        <td>
                            Inactivo
                        </td>

                        <td>
                            <form action="#" method="POST">

                                <button
                                    type="submit"
                                    class="btn btn-sm btn-secondary">
                                    Aprobar/Desaprobar
                                </button>

                            </form>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>

</main>

<?php
require_once __DIR__ . "/../includes/footer_admin.php";
?>