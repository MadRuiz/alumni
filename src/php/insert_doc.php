<?php
include '../../production/conexion.php';
  $doc_id = $_GET['id_doc'];
  $doc_titulo = $_GET['titulo_doc'];
  $doc_institucion = $_GET['inst_doc'];
  $doc_programa = $_GET['prog_doc'];
  $doc_rubro = $_GET['rub_doc'];
  $doc_duracion = $_GET['duracion_doc'];
  $doc_modalidad = $_GET['mod_doc'];
  $doc_descripcion = $_GET['descripcion_doc'];
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
                (".$doc_id.",
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
                  header('Location: ../../production/administrar.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_doc. " . mysqli_error($conexion);
                }



mysqli_close($conexion);
?>
