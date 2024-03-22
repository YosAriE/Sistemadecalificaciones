<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/CSS/stylelogin.css">
</head>

<body>
    <form action="validar.php" method="post">
        <img src="/imagenes/team.png" alt="">
        <h1 class="title">Bienvenido(a)</h1>

        <label>
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Usuario" name="usuario">
        </label>
        <label>
            <i class="bi bi-key-fill"></i>
            <input type="password" placeholder="Contraseña" name="contraseña">
        </label>
    <a href="#" class="link">¿Olvidaste tu contraseña?</a>
        <input name="btningresar" id="button" class="btn" type="submit" value="ingresar">
        <a href="#" class="link">Crea una nueva cuenta</a>
    </form>

    <script src="main.js"></script>
</body>

</html>