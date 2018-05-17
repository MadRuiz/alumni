<?php
include '../../production/conexion.php';
  $maes_id = $_GET['maes_id'];
  $maes_titulo = $_GET['maes_titulo'];
  $maes_institucion = $_GET['maes_ins'];
  $maes_programa = $_GET['maes_programa'];
  $maes_rubro = $_GET['maes_rubro'];
  $maes_duracion = $_GET['maes_duracion'];
  $maes_modalidad = $_GET['maes_modalidad'];
  $maes_descripcion = $_GET['maes_descripcion'];
  $insert_maes = "INSERT INTO `estudio`
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
                '".$maes_titulo."',
                1,
                ".$maes_institucion.",
                ".$maes_programa.",
                ".$maes_rubro.",
                '".$maes_duracion."',
                ".$maes_modalidad.",
                '".$maes_descripcion."'
                )";
                if(mysqli_query($conexion, $insert_maes)){
                  header('Location: ../../admin/admin_estudios.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_maes. " . mysqli_error($conexion);
                }
mysqli_close($conexion);
?>
