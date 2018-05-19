<?php
include '../../production/conexion.php';
  $emp_id = $_GET['emp_id'];
  $emp_nombre = $_GET['emp_nombre'];
  $emp_responsable = $_GET['emp_responsable'];
  $emp_rubro = $_GET['emp_rubro'];
  $emp_tiempo = $_GET['emp_tiempo'];
  $emp_descripcion = $_GET['emp_descripcion'];
  $insert_ins = "INSERT INTO `emprendimientos` (
                  `id_emp`, 
                  `nombre_emp`, 
                  `responsable_emp`, 
                  `rubro_emp`, 
                  `tiempo_emp`, 
                  `descripcion_emp`
                  ) VALUES (
                  NULL, 
                  '".$emp_nombre."', 
                  '".$emp_responsable."', 
                  '".$emp_rubro."', 
                  '".$emp_tiempo."', 
                  '".$emp_descripcion."');
                ";
  if(mysqli_query($conexion, $insert_ins)){
    header('Location: ../../admin/admin_emprender.php');
   } else{
    echo "ERROR: Could not able to execute $insert_ins. " . mysqli_error($conexion);
  }



mysqli_close($conexion);
?>
