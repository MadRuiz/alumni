<?php
  include 'conexion.php';
  //select de doctorados

  //select de postgrados
  $select3 = "SELECT estudio.id_est, estudio.nombre_est, estudio.descripcion_est, institucion.nombre_ins, rubros.nombre_tag, estudio.duracion_est, modalidades.tipo_mod, estudio.descripcion_est, programas.nombre_prog from estudio INNER JOIN institucion on estudio.inst_est = institucion.id_inst INNER JOIN rubros on estudio.rub_est = rubros.id_tag INNER JOIN modalidades on estudio.mod_est = modalidades.id_mod INNER JOIN programas on estudio.prog_est = programas.id_prog WHERE estudio.categ_est = 2";
  $rselect3 = mysqli_query($conexion, $select3);
  //select de diplomados
  $select4 = "SELECT estudio.id_est, estudio.nombre_est, estudio.descripcion_est, institucion.nombre_ins, rubros.nombre_tag, estudio.duracion_est, modalidades.tipo_mod, estudio.descripcion_est, programas.nombre_prog from estudio INNER JOIN institucion on estudio.inst_est = institucion.id_inst INNER JOIN rubros on estudio.rub_est = rubros.id_tag INNER JOIN modalidades on estudio.mod_est = modalidades.id_mod INNER JOIN programas on estudio.prog_est = programas.id_prog WHERE estudio.categ_est = 1";
  $rselect4 = mysqli_query($conexion, $select4);
  //select para escoger Institucion
  $select5 = "SELECT institucion.id_inst, institucion.nombre_ins FROM institucion";
  $rselect5 = mysqli_query($conexion, $select5);
  //select para escoger Rubro
  $select6 = "SELECT rubros.id_tag, rubros.nombre_tag FROM rubros";
  $rselect6 = mysqli_query($conexion, $select6);
  //select para escoger Modalidades
  $select7 = "SELECT modalidades.id_mod, modalidades.tipo_mod FROM modalidades";
  $rselect7 = mysqli_query($conexion, $select7);
  //select para escoger Programas
  $select8 = "SELECT programas.id_prog, programas.nombre_prog FROM programas";
  $rselect8 = mysqli_query($conexion, $select8);

?>
