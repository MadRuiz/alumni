<?php
include '../../production/conexion.php';
  $ofer_nombre =   $_GET['ofer_nombre'];
  $ofer_cargo =   $_GET['ofer_cargo'];
  $ofer_empresa =   $_GET['ofer_empresa'];
  $ofer_direccion =   $_GET['ofer_direccion'];
  $ofer_salmax =   $_GET['ofer_salmax'];
  $ofer_salmin =   $_GET['ofer_salmin'];
  $ofer_funciones =   $_GET['ofer_funciones'];
  $ofer_requisitos =   $_GET['ofer_requisitos'];
  $ofer_depto =   $_GET['ofer_depto'];
  $ofer_rubro =   $_GET['ofer_rubro'];
  $insert_ofer = "INSERT INTO `ofertas` (
                    `id_oferta`, 
                    `nombre_of`, 
                    `cargo_of`, 
                    `empresa_of`, 
                    `direccion_of`, 
                    `salariomin_of`, 
                    `salariomax_of`, 
                    `imagen_of`, 
                    `funciones_of`, 
                    `requisitos_of`, 
                    `deptos_of`, 
                    `categorias_of`, 
                    `estado_of`
                    ) VALUES (
                    '', 
                    '".$ofer_nombre."', 
                    '".$ofer_cargo."', 
                    '".$ofer_empresa."', 
                    '".$ofer_direccion."', 
                    '".$ofer_salmin."', 
                    '".$ofer_salmax."', 
                    '', 
                    '".$ofer_funciones."', 
                    '".$ofer_requisitos."', 
                    '".$ofer_depto."', 
                    '".$ofer_rubro."', 
                    '1'
                  );
                 ";
  if(mysqli_query($conexion, $insert_ofer)){
    header('Location: ../../admin/admin_bolsa.php');
   } else{
    echo "ERROR: Could not able to execute $insert_ofer. " . mysqli_error($conexion);
  }



mysqli_close($conexion);
?>
