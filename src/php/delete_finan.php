<?php
include '../../production/conexion.php';
$finan_id = $_GET['id_finan'];
$borrar_finan="DELETE FROM financiamientos WHERE id_finan= ".$finan_id."";
if(mysqli_query($conexion, $borrar_finan)){
 header('Location: ../../admin/admin_emprender.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
