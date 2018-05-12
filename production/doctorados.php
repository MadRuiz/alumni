<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Doctorados<small></small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a type="button" class="" data-toggle="modal" data-target=".nuevoDocForm"><i class="fa fa-plus"></i> Nuevo </a></li>
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <?php
      $contador = 0;
      $selectDoc = "SELECT estudio.id_est, estudio.nombre_est, estudio.descripcion_est, institucion.nombre_ins, rubros.nombre_tag, estudio.duracion_est, modalidades.tipo_mod, estudio.descripcion_est, programas.nombre_prog from estudio INNER JOIN institucion on estudio.inst_est = institucion.id_inst INNER JOIN rubros on estudio.rub_est = rubros.id_tag INNER JOIN modalidades on estudio.mod_est = modalidades.id_mod INNER JOIN programas on estudio.prog_est = programas.id_prog WHERE estudio.categ_est = 4";
      $rselectDoc = mysqli_query($conexion, $selectDoc);
      //count para id doctorados
      $selectNumDoc = "SELECT COUNT(*) from estudio";
      $rselectNumDoc = mysqli_query($conexion, $selectNumDoc);
      $nDocs = mysqli_fetch_array($rselectNumDoc);
      //select para escoger Institucion
      $selectIns = "SELECT institucion.id_inst, institucion.nombre_ins FROM institucion";
      $rselectIns = mysqli_query($conexion, $selectIns);
       ?>
      <table class='table table-striped' id="tabla_doc">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Institucion</th>
            <th>Rubro</th>
            <th>Duracion</th>
            <th>Modalidad</th>
            <th>Descripcion</th>
          </tr>
        </thead>
        <tbody>
      <?php
  // ---------------tabla---------------
        while ($fila = mysqli_fetch_array($rselectDoc)) {
          $contador++;
          echo "
          <tr>
            <th scope='row'>".$contador."</th>
            <td>".$fila['nombre_est']."</td>
            <td>".$fila['nombre_ins']."</td>
            <td>".$fila['nombre_tag']."</td>
            <td>".$fila['duracion_est']."</td>
            <td>".$fila['tipo_mod']."</td>
            <td>".$fila['descripcion_est']."</td>
            <td><a type='button' class='btn'><i class='fa fa-pencil'></i></a></td>
            <td><a type='button' class='btn' href='../src/php/delete_doc.php?id_doc=".$fila['id_est']."'>
                  <i class='fa fa-trash-o'></i>
                </a>
            </td>
          </tr>";
           }
          ?>
        </tbody>
      </table>
<!-- formulario ingreso doctorados-->
      <div class='modal fade nuevoDocForm' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Agregar doctorado</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal form-label-left" action="../src/php/insert_doc.php" method="get">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Id </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <?php
                      $nuevoId = $nDocs['0']+1;
                  echo "<input type='text' class='form-control' name='id_doc' id='id_doc' value='".$nuevoId."' readonly >";
                  ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Titulo</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" placeholder="Nombre del Doctorado" id="titulo_doc" name="titulo_doc">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Institucion que imparte</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="select2_single form-control" tabindex="-1" name="inst_doc">
                      <?php
                      $contador2 = 1;
                      while ($fila = mysqli_fetch_array($rselectIns)) {
                        echo "
                      <option value='".$fila['id_inst']."'>".$fila['nombre_ins']."</option>
                    ";
                    $contador2 = $contador2 + 1;
                    }
                    ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Programa de becas</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="select2_single form-control" tabindex="-1" name="prog_doc">
                      <?php
                      $contador3 = 1;
                      while ($fila = mysqli_fetch_array($rselectProg)) {
                        echo "
                      <option value='".$fila['id_prog']."'>".$fila['nombre_prog']."</option>
                    ";
                    $contador3 = $contador3 + 1;
                    }
                    ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Rubro al que pertenece</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="select2_single form-control" tabindex="-1" name="rub_doc">
                      <?php
                      $contador4 = 1;
                      while ($fila = mysqli_fetch_array($rselectRub)) {
                        echo "
                      <option value='".$fila['id_tag']."'>".$fila['nombre_tag']."</option>
                    ";
                    $contador4 = $contador4 + 1;
                    }
                    ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Duracion</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" placeholder="3 meses, 6 meses, 1 año, etc" name="duracion_doc">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Modalidad</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="select2_single form-control" tabindex="-1" name="mod_doc">
                      <?php
                      $contador5 = 1;
                      while ($fila = mysqli_fetch_array($rselectMod)) {
                        echo "
                      <option value='".$fila['id_mod']."'>".$fila['tipo_mod']."</option>
                    ";
                    $contador5 = $contador5 + 1;
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion del doctorado<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="form-control" rows="3" placeholder="..." name="descripcion_doc"></textarea>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
              <button type="submit" class="btn btn-primary" value="submit" onclick="">Guardar cambios</button>
                </form>
            </div>

          </div>
        </div>
      </div>
<!--formulario para actualizar-->

    </div>
  </div>
</div>
