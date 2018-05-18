<?php
include '../../production/conexion.php';
$id_carg = $_GET['id_carg'];
$borrar_carg="DELETE FROM cargos WHERE id_carg = ".$id_carg."";
if(mysqli_query($conexion, $borrar_carg)){
 header('Location: ../../admin/admin_bolsa.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
