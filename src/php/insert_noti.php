<?php
include '../../production/conexion.php';
  $noti_cod = $_GET['cod_noticia'];
  $noti_titulo = $_GET['Titulo'];
  $uploadedfile = $_GET['Imagen'];
  $noti_contenido = $_GET['Contenido'];
  $noti_cat = $_GET['cat_noti'];
  $insert_noti = "INSERT INTO `noticias`
                (`cod_noticia`,
                  `Titulo`,
                  `Imagen`,
                  `Contenido`,
                  `cat_noti`
                )
                VALUES
                (".$noti_cod.",
                '".$noti_titulo."',
                ".$uploadedfile.",
                ".$noti_contenido.",
                "1"
                )";
                if(mysqli_query($conexion, $insert_doc)){
                  header('Location: ../../production/Crear_noti.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_noti. " . mysqli_error($conexion);
                }
mysqli_close($conexion);
?>