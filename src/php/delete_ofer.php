<?php
include '../../production/conexion.php';
$ofer_id = $_GET['id_oferta'];
$borrar_ofer="DELETE FROM ofertas WHERE id_oferta = ".$ofer_id."";
if(mysqli_query($conexion, $borrar_ofer)){
 header('Location: ../../admin/admin_bolsa.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
