<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Emprendimientos<small></small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a type="button" class="" data-toggle="modal" data-target=".nuevoEmpForm"><i class="fa fa-plus"></i> Nuevo </a></li>
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class='table table-striped' id="tabla_doc">
        <thead>
          <tr>
            <th>#</th>
            <th>Emprendimiento</th>
            <th>Emprendedor</th>
            <th>Rubro</th>
            <th>Tiempo en funciones</th>
            <th>Descripcion</th>
          </tr>
        </thead>
        <tbody>
      <?php
        include '../src/php/selects.php';
        // ---------------tabla---------------
        $contador = 0;
        $selectEmpr = "SELECT emprendimientos.id_emp, 
                              emprendimientos.nombre_emp, 
                              emprendimientos.responsable_emp, 
                              emprendimientos.tiempo_emp, 
                              emprendimientos.descripcion_emp, 
                              rubros.nombre_tag 
                        FROM emprendimientos 
                        INNER JOIN rubros 
                        ON emprendimientos.rubro_emp = rubros.id_tag
                      ";
        $rselectEmpr = mysqli_query($conexion, $selectEmpr);
          while ($fila = mysqli_fetch_array($rselectEmpr)) {
            $contador ++;
            echo "
              <tr>
                <th scope='row'>".$contador."</th>
                <td>".$fila['nombre_emp']."</td>
                <td>".$fila['responsable_emp']."</td>
                <td>".$fila['nombre_tag']."</td>
                <td>".$fila['tiempo_emp']."</td>
                <td>".$fila['descripcion_emp']."</td>
                <td><a type='button' class='btn'><i class='fa fa-pencil'></i></a></td>
                <td><a type='button' class='btn' href='../src/php/delete_empr.php?id_empr=".$fila['id_emp']."'>
                      <i class='fa fa-trash-o'></i>
                    </a>
                </td>
              </tr>
            ";
          }
      ?>
        </tbody>
      </table>
<!-- formulario ingreso doctorados-->
      <div class='modal fade nuevoEmpForm' tabindex='-1' role='dialog' aria-hidden='true'>
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
                    $contador = $contador + 1;
                  echo "<input type='text' class='form-control' name='id_maes' value='".$contador."' readonly >";
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
                        echo "
                      <option value='".$fila['id_inst']."'>".$fila['nombre_ins']."</option>
                    ";
                    $contador2 = $contador2 + 1;
                      
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
