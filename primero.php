<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
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
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 20px;
            border-radius: 8px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #dddddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bf0;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 10px;
        }

        a.button:hover {
            background-color: #0056b3;
        }
        h1 {
            text-align: center;
        }
        .botones {
            text-align: end;
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
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="primero.php">Calificaciones</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <br><br>
    <h1>CALIFICACIONES DE OCTAVO SEMESTRE</h1>
    <div>
        <form class="botones" action="buscar.php" method="post">
            <a href="nuevo1.php" class="button"><i class="bi bi-plus-circle"></i> Agregar Materia</a>
            <a href="fpdf/pruebaH.php" target="_blank" class="button" class="btn btn-success"><i class="bi bi-filetype-pdf"></i> Generar PDF</a>
        </form> <br>
    </div>
    <div class="container">
        <table>
            <tr>
                
                <th>ID</th>
                <th>Materia</th>
                <th>Parcial I</th>
                <th>Parcial II</th>
                <th>Ordinario I</th>
                <th>Ordinario II</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            <?php
            require 'db.php';
            $sql = "SELECT id, materia, parcial1, parcial2, ordinario1, ordinario2 FROM primero";
            $resultado = mysqli_query($conexion, $sql); 
            while ($mostrar = mysqli_fetch_row($resultado)) {
                ?>
                <tr>
                    <td><?php echo $mostrar[0]?></td>
                    <td><?php echo $mostrar[1]?></td>
                    <td><?php echo $mostrar[2]?></td>
                    <td><?php echo $mostrar[3]?></td>
                    <td><?php echo $mostrar[4]?></td>
                    <td><?php echo $mostrar[5]?></td>
                    <td>
                        <a href="editar1.php?id=<?php echo $mostrar[0] ?>&materia=<?php echo $mostrar[1] ?>&parcial1=<?php echo $mostrar[2] ?>&parcial2=<?php echo $mostrar[3] ?>&ordinario1=<?php echo $mostrar[4] ?>&ordinario2=<?php echo $mostrar[5] ?>" class="button"><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <a href="eliminar1.php?id=<?php echo $mostrar[0] ?>" class="button red"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>

</html>
