<?php
include '../../production/conexion.php';
  $finan_nombre = $_GET['finan_nombre'];
  $finan_descripcion = $_GET['finan_descripcion'];
  $finan_sponsor = $_GET['finan_sponsor'];
  $insert_finan = "INSERT INTO `financiamientos` (
                    `id_finan`, 
                    `nombre_finan`, 
                    `descripcion_finan`, 
                    `sponsor_finan`
                    ) VALUES (
                    NULL, 
                    '".$finan_nombre."', 
                    '".$finan_descripcion."', 
                    '".$finan_sponsor."'
                    );
                  ";
                if(mysqli_query($conexion, $insert_finan)){
                  header('Location: ../../admin/admin_emprender.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_finan. " . mysqli_error($conexion);
                }



mysqli_close($conexion);
?>
