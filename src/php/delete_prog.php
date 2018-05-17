<?php
include '../../production/conexion.php';
$id_prog = $_GET['id_prog'];
$borrar_prog="DELETE FROM programas WHERE id_prog = ".$id_prog."";
if(mysqli_query($conexion, $borrar_prog)){
 header('Location: ../../admin/admin_estudios.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
