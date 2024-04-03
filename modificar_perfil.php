<?php
require 'db.php';

$grado = $_POST['grado'];
$descripcion = $_POST['descripcion'];

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
$id_usuario = 8; 

$query = mysqli_query($conexion, "UPDATE perfiles SET grado='$grado', descripcion='$descripcion', foto_perfil='$foto_perfil' WHERE usuario_id='$id_usuario'");


header('location: mostrarperfil.php');
?>