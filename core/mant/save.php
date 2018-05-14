<?php
include '../conex/conexion.php';
if (empty($_POST)) {
    echo 'Post basio';
} else {
    $opcion = $_POST['opcion'];
    switch ($opcion) {

        case 'nper':
            $nom    = $_POST['name'];
            $apell  = $_POST['lastn'];
            $genero = $_POST['gender'];
            $cumple = $_POST['cumple'];
            $email  = $_POST['email'];
            $pass1  = sha1($_POST['pass1']);
            $pass2  = sha1($_POST['pass2']);

            if ($pass1 != $pass2) {
                echo 'Las claves no coinciden'; //header('Location: ../../new_perfil.php');
            } else {
                //Creamos el perfil del usuario
                $sql = "INSERT INTO perfil VALUES ('', '$nom', '$apell', '$genero', '$cumple', '')";
                if (mysqli_query($enlace, $sql)) {
                    //Sacamos el ultimo id ingresado
                    $cod = mysqli_insert_id($enlace);
                    //Creamos la cuenta de usuario
                    mysqli_query($enlace, "INSERT INTO usuario VALUES ('', '$email', '$pass1', 1,  3, '$cod')") or die(mysqli_error($enlace));

                    header('Location: ../../index.php');
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
                }
            }
            break;

        default:
            # code...
            break;
    }

}
