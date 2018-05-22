<?php 
include '../../production/conexion.php';
$upinsId = $_GET['ins_id'];
$upinsNombre = $_GET['upins_nombre'];
$upinsPais = $_GET['upins_pais'];
$upinsciudad = $_GET['upins_ciudad'];
$upinsTelefono = $_GET['upins_telefono'];
$upinsCorreo = $_GET['upins_correo'];
$upinsSitio = $_GET['upins_sitio'];
$update_ins = "UPDATE `institucion` SET `nombre_ins` = '".$upinsNombre."', 
`pais_ins` = '".$upinsNombre."', 
`ciudad_ins` = '".$upinsciudad."', 
`telefono_ins` = '".$upinsTelefono."', 
`correo_ins` = '".$upinsCorreo."', 
`sitio_ins` = '".$upinsSitio."' 
WHERE `institucion`.`id_inst` = ".$upinsId.";";

      if(mysqli_query($conexion, $update_ins)){
                  header('Location: ../../admin/admin_estudios.php');
                 } else{
                  echo "ERROR: Could not able to execute $update_ins. " . mysqli_error($conexion);
                }

?>