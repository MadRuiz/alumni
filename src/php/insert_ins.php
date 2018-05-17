<?php
include '../../production/conexion.php';
  $ins_nombre = $_GET['ins_nombre'];
  $ins_pais = $_GET['ins_pais'];
  $ins_ciudad = $_GET['ins_ciudad'];
  $ins_telefono = $_GET['ins_telefono'];
  $ins_correo = $_GET['ins_correo'];
  $ins_sitio = $_GET['ins_sitio'];
  $insert_ins = "INSERT INTO `institucion` (
                  `id_inst`, 
                  `nombre_ins`, 
                  `pais_ins`, 
                  `ciudad_ins`, 
                  `telefono_ins`, 
                  `correo_ins`, 
                  `sitio_ins`
                  ) VALUES (
                  NULL,
                  '".$ins_nombre."', 
                  '".$ins_pais."', 
                  '".$ins_ciudad."', 
                  '".$ins_telefono."', 
                  '".$ins_correo."', 
                  '".$ins_sitio."'
                  );
                ";
  if(mysqli_query($conexion, $insert_ins)){
    header('Location: ../../admin/admin_estudios.php');
   } else{
    echo "ERROR: Could not able to execute $insert_ins. " . mysqli_error($conexion);
  }



mysqli_close($conexion);
?>
