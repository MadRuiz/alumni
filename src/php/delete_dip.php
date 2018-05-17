<?php
include '../../production/conexion.php';
$dip_id = $_GET['dip_id'];
$borrar_dip="DELETE FROM estudio WHERE id_est = ".$dip_id."";
if(mysqli_query($conexion, $borrar_dip)){
 header('Location: ../../admin/admin_estudios.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
