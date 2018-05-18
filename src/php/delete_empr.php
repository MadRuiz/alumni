<?php
include '../../production/conexion.php';
$id_empr = $_GET['id_empresa'];
$borrar_empr="DELETE FROM empresas WHERE id_empresa = ".$id_empr."";
if(mysqli_query($conexion, $borrar_empr)){
 header('Location: ../../admin/admin_bolsa.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
