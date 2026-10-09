<?php

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="login-signup-container">
        <div class="formulario-corto">
            <h1 class="mb-4">Iniciar sesión</h1>

            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="email_login" class="form-label">Email</label>
                    <input id="email_login" name="email" type="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password_login" class="form-label">Contraseña</label>
                    <input id="password_login" name="password" type="password" class="form-control" required minlength="6">
                </div>

                <button class="btn btn-success w-100" type="submit">Ingresar</button>
            </form>

            <p class="mt-3">¿No tenés cuenta? <a href="registro.php">Registrate</a></p>
        </div>
    </main>
</body>