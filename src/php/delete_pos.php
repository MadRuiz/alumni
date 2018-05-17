<?php
include '../../production/conexion.php';
$pos_id = $_GET['pos_id'];
$borrar_pos="DELETE FROM estudio WHERE id_est = ".$pos_id."";
if(mysqli_query($conexion, $borrar_pos)){
 header('Location: ../../admin/admin_estudios.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
