<?php
include '../../production/conexion.php';
$doc_id = $_GET['id_doc'];

/*echo $doc_id."\n";
echo $doc_titulo."\n";
echo $doc_institucion."\n";
echo $doc_programa."\n";
echo $doc_rubro."\n";
echo $doc_duracion."\n";
echo $doc_modalidad."\n";
echo $doc_descripcion."\n";
*/
/*$update_doc="UPDATE `estudio` SET
              `id_est` = '".$doc_id."',
              `nombre_est` = '".$doc_titulo."',
              `inst_est` = '".$doc_programa."',
              `prog_est` = '4',
              `rub_est` = '".$doc_rubro."',
              `duracion_est` = '".$doc_duracion."',
              `mod_est` = '".$doc_modalidad."',
              `descripcion_est` = '".$doc_descripcion."'
              WHERE `estudio`.`id_est` = ".$doc_id." ;";*/
//if(mysqli_query($conexion, $update_doc)){
  echo "registro actualizado";
 //header('Location: ../../production/administrar.php');
// } else{
//  echo "ERROR" . mysqli_error($conexion);
//}
mysqli_close($conexion);

 ?>
