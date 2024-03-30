<?php
require 'db.php';

$grado = $_POST['grado'];
$descripcion = $_POST['descripcion'];

// Verificar si se ha enviado una imagen
if (isset($_FILES["foto_perfil"])) {
    $file = $_FILES["foto_perfil"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "fotos/";

    if ($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif') {
        echo "Error, el archivo no es una imagen";
        exit;
    } else if ($size > 3*1024*1024) {
        echo "Error, el tamaño máximo permitido es de 3MB";
        exit;
    } else {
        $src = $carpeta . $nombre;
        move_uploaded_file($ruta_provisional, $src);
        $foto_perfil = "fotos/" . $nombre;
    }
}

// Obtener el id_usuario del usuario cuyo perfil se está modificando (puedes obtenerlo de la sesión o de alguna otra forma)
$id_usuario = 1; // Esto es un ejemplo, debes reemplazarlo con el valor correcto

$query = mysqli_query($conexion, "UPDATE perfiles SET grado='$grado', descripcion='$descripcion', foto_perfil='$foto_perfil' WHERE usuario_id='$id_usuario'");


header('location: mostrarperfil.php');
?>