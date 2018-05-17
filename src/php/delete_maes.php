<?php
include '../../production/conexion.php';
$maes_id = $_GET['maes_id'];
$borrar_maes="DELETE FROM estudio WHERE id_est = ".$maes_id."";
if(mysqli_query($conexion, $borrar_maes)){
 header('Location: ../../admin/admin_estudios.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
