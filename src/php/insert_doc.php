<?php
include '../../production/conexion.php';
  $doc_id = $_GET['doc_id'];
  $doc_titulo = $_GET['doc_nombre'];
  $doc_institucion = $_GET['doc_ins'];
  $doc_programa = $_GET['doc_programa'];
  $doc_rubro = $_GET['doc_rubro'];
  $doc_duracion = $_GET['doc_duracion'];
  $doc_modalidad = $_GET['doc_modalidad'];
  $doc_descripcion = $_GET['doc_descripcion'];
  $insert_doc = "INSERT INTO `estudio`
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
                '".$doc_titulo."',
                4,
                ".$doc_institucion.",
                ".$doc_programa.",
                ".$doc_rubro.",
                '".$doc_duracion."',
                ".$doc_modalidad.",
                '".$doc_descripcion."'
                )";
                if(mysqli_query($conexion, $insert_doc)){
                  header('Location: ../../admin/admin_estudios.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_doc. " . mysqli_error($conexion);
                }
mysqli_close($conexion);
?>
