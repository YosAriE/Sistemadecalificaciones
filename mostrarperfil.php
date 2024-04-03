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
        }

        .container {
            padding: 30px;
            width: 100%;
            display: flex;
            max-width: 1100px;
            margin: 5%;
            display: flex;
            justify-content: center;
            margin: 0 auto;
            margin-bottom: 20px;

        }

        .card {
            width: 100%;
            margin: 20px;
            border-radius: 6px;
            overflow: hidden;
            background: rgba(255, 253, 253, 0.5);
            box-shadow: 0px 1px 10px rgba(238, 236, 236, 0.2);
            cursor: default;
            transition: all 400ms ease;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card:hover {
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
            transform: translateY(-3%);
        }

        .card img {
            padding: 15px;
            margin-left: 15px;
            align-items: center;
        }

        .card .contenido {
            padding: 15px;
            text-align: center;
        }

        .card .contenido p {
            line-height: 1.5;
            color: #000000;
        }

        .card .contenido h3 {
            margin-bottom: 15px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffa500; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #000; 
        }

        .perfil {
            background-color: #fff; 
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .perfil p {
            margin: 0;
            font-size: 16px;
        }

        .perfil p b {
            font-weight: bold;
        }
        .perfil-card {
            background-color: #ff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .perfil-img {
            width: 100px; 
            height: 100px;  
            border-radius: 50%;  
            margin-bottom: 10px;
        }

        .perfil-info {
            text-align: center;
            font-family: Arial, sans-serif; 
            color: #333; 
            font-size: 16px; 
            line-height: 1.6; 
        }

        .perfil-info p {
            margin: 0; 
        }

        .perfil-info b {
            font-weight: bold; 
        }

        .perfil-info input[type="submit"] {
            background-color: #007bff; 
            color: white; 
            border: none; 
            padding: 10px 20px; 
            font-size: 16px;
            cursor: pointer; 
            border-radius: 5px; 
            transition: background-color 0.3s ease; 
        }

         .perfil-info input[type="submit"]:hover {
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
    <div class="container">
        <?php
        $inc = include("db.php");
        if ($inc) {
            $consulta = "SELECT p.nombre, p.grado, p.descripcion, p.foto_perfil, c.nombre AS carrera 
                FROM perfiles p
                INNER JOIN carreras c ON p.carrera_id = c.carrera_id";
            $resultado = mysqli_query($conexion, $consulta);
            if($resultado) {
                while($row = $resultado->fetch_array()){
                    $nombre = $row['nombre'];
                    $carrera = $row['carrera']; 
                    $grado = $row['grado'];
                    $descripcion = $row['descripcion'];
                    $foto_perfil = $row['foto_perfil'];
        ?>
        <div class="perfil-card">
            <h2><?php echo $nombre; ?> </h2> <br>
            <img src="<?php echo $foto_perfil; ?>" alt="Foto de perfil" style="width: 200px; height: 200px; border-radius: 50%;">
            <div class="perfil-info">
                <p>
                    <b>Carrera:</b> <br> <?php echo $carrera; ?><br> 
                    <b>Grado:</b> <br> <?php echo $grado; ?><br>
                    <b>Descripción:</b> <br>  <?php echo $descripcion; ?>
                </p><br>
                <form action="form_modificar_perfil.php">
                    <input type="submit" value="Modificar perfil">
                </form>
            </div>
        </div>
        <?php
                }
            }
        }
        ?>
    </div>