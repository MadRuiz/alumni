<?php
include '../../production/conexion.php';
  $ins_nombre = $_GET['nombre_ins'];
  $ins_pais = $_GET['pais_ins'];
  $ins_ciudad = $_GET['ciudad_ins'];
  $ins_telefono = $_GET['tel_ins'];
  $insert_ins = "INSERT INTO `institucion`
                (`id_inst`,
                  `nombre_ins`,
                  `pais_ins`,
                  `ciudad_ins`,
                  `tel_ins`
                )
                VALUES
                (NULL,
                  '".$ins_nombre."',
                  '".$ins_pais."',
                  '".$ins_ciudad."',
                  ".$ins_telefono."
                )";
                if(mysqli_query($conexion, $insert_ins)){
                  header('Location: ../../production/administrar.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_ins. " . mysqli_error($conexion);
                }



mysqli_close($conexion);
?>
