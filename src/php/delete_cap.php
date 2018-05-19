<?php
include '../../production/conexion.php';
$cap_id = $_GET['cap_id'];
$borrar_cap="DELETE FROM capacitaciones WHERE id_cap = ".$cap_id."";
if(mysqli_query($conexion, $borrar_cap)){
 header('Location: ../../admin/admin_emprender.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
