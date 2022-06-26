<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suntic - Prueba</title>
    <link rel="stylesheet" href="./static/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
</head>
<body>

    <div class="content-1">
        <h1>Suntic</h1>
        <p>Prueba</p>
    </div>
    <div class="content-2">
        <div class="login">
            <h2>Ingresar</h2>
            <form action="validarLogin.php" method="post">
                <label for="">Correo electrónico</label>
                <input type="email" name="usuario" required>
                <label for="">Contraseña</label>
                <input type="password" name="password" required>
                <input type="submit" value="Ingresar">
            </form>
            <p>¿No tienes cuenta?<a href="registro.php">Registrate aquí</a></p>
        </div>
    </div>


</body>
</html>