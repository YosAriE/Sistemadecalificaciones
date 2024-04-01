<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/stylelogin.css">
</head>

<body>
    <form action="validar.php" method="post">
        <h2>SISTEMA DE REGISTRO <br> DE CALIFICACIONES</h2>
        <img src="imagenes/team.png" alt="" style="width: 100px; height: 100px; margin-left: auto; margin-right: auto;">
        <label>
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Usuario" name="usuario">
        </label>
        <label>
            <i class="bi bi-key-fill"></i>
            <input type="password" placeholder="Contraseña" name="contraseña">
        </label>
    <a href="recuperarcontraseña.php" class="link">¿Olvidaste tu contraseña?</a>
        <div>
            <button name="btningresar" id="button" class="btn" type="submit" value="ingresar">Ingresar</button><br><br>
            <a href="registro_usuario.php" class="link">Crea una nueva cuenta</a>
    </div>
    </form>

    <script src="main.js"></script>
</body>

</html>