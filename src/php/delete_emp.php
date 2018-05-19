<?php
include '../../production/conexion.php';
$emp_id = $_GET['emp_id'];
$borrar_emp="DELETE FROM emprendimientos WHERE id_emp = ".$emp_id."";
if(mysqli_query($conexion, $borrar_emp)){
 header('Location: ../../admin/admin_emprender.php');
 } else{
  echo "ERROR" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
