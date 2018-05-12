<?php
include '../../production/conexion.php';
$doc_id = $_GET['id_doc'];
$borrar_doc="DELETE FROM estudio WHERE id_est = ".$doc_id."";
if(mysqli_query($conexion, $borrar_doc)){
 header('Location: ../../production/administrar.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

 ?>
