<?php
include '../../production/conexion.php';
  $pos_id = $_GET['pos_id'];
  $pos_titulo = $_GET['pos_titulo'];
  $pos_institucion = $_GET['pos_ins'];
  $pos_programa = $_GET['pos_programa'];
  $pos_rubro = $_GET['pos_rubro'];
  $pos_duracion = $_GET['pos_duracion'];
  $pos_modalidad = $_GET['pos_modalidad'];
  $pos_descripcion = $_GET['pos_descripcion'];
  $insert_pos = "INSERT INTO `estudio`
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
                '".$pos_titulo."',
                2,
                ".$pos_institucion.",
                ".$pos_programa.",
                ".$pos_rubro.",
                '".$pos_duracion."',
                ".$pos_modalidad.",
                '".$pos_descripcion."'
                )";
                if(mysqli_query($conexion, $insert_pos)){
                  header('Location: ../../admin/admin_estudios.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_pos. " . mysqli_error($conexion);
                }
mysqli_close($conexion);
?>
