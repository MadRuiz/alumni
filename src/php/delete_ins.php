<?php
include '../../production/conexion.php';
$ins_id = $_GET['id_inst'];
$borrar_ins="DELETE FROM institucion WHERE id_inst = ".$ins_id."";
if(mysqli_query($conexion, $borrar_ins)){
 header('Location: ../../admin/admin_estudios.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
