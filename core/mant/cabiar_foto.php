<?php
include '../conex/conexion.php';
include '../chek/check.php';
// Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$tipo       = $_FILES['imagen']['type'];
$tamano     = $_FILES['imagen']['size'];

//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !null) && ($_FILES['imagen']['size'] <= 200000)) {
    //indicamos los formatos que permitimos subir a nuestro servidor
    if (($_FILES["imagen"]["type"] == "image/gif")
        || ($_FILES["imagen"]["type"] == "image/jpeg")
        || ($_FILES["imagen"]["type"] == "image/jpg")
        || ($_FILES["imagen"]["type"] == "image/png")) {
        // Ruta donde se guardarán las imágenes que subamos
        $directorio = $_SERVER['DOCUMENT_ROOT'] . '/alumni3.1/production/images/';
        // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
        move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio . $nombre_img);
    } else {
        //si no cumple con el formato
        echo "No se puede subir una imagen con ese formato ";
    }
} else {
    //si existe la variable pero se pasa del tamaño permitido
    if ($nombre_img == !null) {
        echo "La imagen es demasiado grande ";
    }

}

/* en pasos anteriores deberíamos tener una conexión abierta a nuestra base de
datos para ejecutar nuestra sentencia SQL */

/* con la siguiente sentencia le asignamos a nuestro campo de la tabla ruta_imagen
el nombre de nuestra imagen */
$code_perfil = $_SESSION['cod_per'];
$sql         = "UPDATE perfil SET foto_per = '$nombre_img' WHERE id_perfil =  '$code_perfil'";
$result      = mysqli_query($enlace, $sql);

/* volvemos a la página principal para cargar la imagen que hemos subido */
header("Location: ../../production/perfil.php");
