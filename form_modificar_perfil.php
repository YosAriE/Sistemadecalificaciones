<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./CSS/Style.css">
    <style>
        body {
            background-color: rgba(163, 239, 189, 0.405);
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            font-family: sans-serif; 
        }

        h1 {
            text-align: center; 
            margin-top: 30px; 
        }

        form {
            max-width: 400px; 
            margin: 0 auto; 
            padding: 20px;
            background-color: #ffa500; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block; 
            margin-bottom: 5px; 
            font-weight: bold; 
        }

        input[type="text"],
        input[type="file"],
        input[type="submit"] {
            width: 100%; 
            padding: 10px; 
            margin-bottom: 10px; 
            box-sizing: border-box; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }

        input[type="submit"] {
            background-color: #007bff; 
            color: white; 
            cursor: pointer; 
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; 
        }
    </style>
</head>

<body>
    <header>
        <img class="logo" src="./imagenes/logo_tesvg.png" alt="logo">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x-square-fill"></i></button>
            <ul class="nav-list">
                <li><a href="home.php">Inicio</a></li>
                <li><a href="mostrarperfil.php">Perfil</a></li>
                <li><a href="primero.php">Calificaciones</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <br><br>

    <form action="modificar_perfil.php" method="post" enctype="multipart/form-data">
    <h1>Modificar Datos:</h1> <br>
    <div style="text-align: center;">
        <img src="imagenes/user.png" alt="" style="width: 100px; height: 100px; margin: 0 auto;"><br>
    </div>
    <label for="grado">Grado:</label>
    <input type="text" id="grado" name="grado"><br>

    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="descripcion"><br>

    <label for="foto_perfil">Foto de perfil:</label>
    <input type="file" id="foto_perfil" name="foto_perfil"><br><br>

    <input type="submit" value="Guardar">
    
</form>
</body>
</html>