<?php
include '../../production/conexion.php';
  $dip_id = $_GET['dip_id'];
  $dip_titulo = $_GET['dip_titulo'];
  $dip_institucion = $_GET['dip_ins'];
  $dip_programa = $_GET['dip_programa'];
  $dip_rubro = $_GET['dip_rubro'];
  $dip_duracion = $_GET['dip_duracion'];
  $dip_modalidad = $_GET['dip_modalidad'];
  $dip_descripcion = $_GET['dip_descripcion'];
  $insert_dip = "INSERT INTO `estudio`
                (`id_est`,
                  `nombre_est`,
                  `categ_est`,
                  `inst_est`,
                  `prog_est`,
                  `rub_est`,
                  `duracion_est`,
                  `mod_est`,
                  `descripcion_est`
                )
                VALUES
                (NULL,
                '".$dip_titulo."',
                3,
                ".$dip_institucion.",
                ".$dip_programa.",
                ".$dip_rubro.",
                '".$dip_duracion."',
                ".$dip_modalidad.",
                '".$dip_descripcion."'
                )";
                if(mysqli_query($conexion, $insert_dip)){
                  header('Location: ../../admin/admin_estudios.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_dip. " . mysqli_error($conexion);
                }
mysqli_close($conexion);
?>
