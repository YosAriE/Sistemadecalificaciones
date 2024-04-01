<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["email"]) || empty($_POST["usuario"]) || empty($_POST["contraseña"])) {
        echo 'Uno de los campos está vacío';
    } else {
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

        $sql = $conexion->query("INSERT INTO usuarios (email, usuario, contraseña) VALUES ('$email','$usuario','$contraseña')");
        if ($sql) {
            echo 'Usuario registrado correctamente';
        } else {
            echo 'Error al registrar';
        }
    }
}
?>

