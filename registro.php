<?php

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="login-signup-container">
        <div class="formulario-corto">
            <h1 class="mb-4">Crear cuenta</h1>

            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input id="nombre" name="nombre" type="text" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input id="password" name="password" type="password" class="form-control" required minlength="6">
                </div>

                <div class="mb-3">
                    <label for="confirmacion" class="form-label">Confirmar contraseña</label>
                    <input id="confirmacion" name="confirmacion" type="password" class="form-control" required minlength="6">
                </div>

                <button class="btn btn-success w-100" type="submit">Registrarse</button>
            </form>

            <p class="mt-3"><a href="login.php">Ya tengo una cuenta</a></p>
        </div>
    </main>
</body>