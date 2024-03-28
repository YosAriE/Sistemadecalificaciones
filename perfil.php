<?php
include 'db.php';

session_start();

if(isset($_SESSION['nombreUsuario'])) {
    $nombreUsuario = $_SESSION['nombreUsuario'];

    $sql = "SELECT nombre, carrera, grado, descripcion FROM usuarios WHERE nombreUsuario = '$nombreUsuario'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $nombreUsuario = $fila['nombre'];
        $carreraUsuario = $fila['carrera'];
        $gradoUsuario = $fila['grado'];
        $descripcionUsuario = $fila['descripcion'];
    } else {

        $nombreUsuario = "Usuario Inválido";
        $carreraUsuario = "";
        $gradoUsuario = "";
        $descripcionUsuario = "";
    }
} else {
    
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Bienvenido, <?php echo $nombreUsuario; ?></h2>

    <div class="perfil-container">
        <div class="info-perfil">
            <form action="db.php" method="get"></form>
            <p><strong>Nombre:</strong> <?php echo $nombreUsuario; ?></p>
            <p><strong>Carrera:</strong> <?php echo $carreraUsuario; ?></p>
            <p><strong>Grado:</strong> <?php echo $gradoUsuario; ?></p>
            <p><strong>Descripción:</strong> <?php echo $descripcionUsuario; ?></p>
        </div>
    </div>
</body>
</html>
