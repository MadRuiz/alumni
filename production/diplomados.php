<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Diplomados<small></small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a type="button" class="" data-toggle="modal" data-target=".nuevoDipForm"><i class="fa fa-plus"></i> Nuevo </a></li>
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class='table table-striped' id="tabla_dip">
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

            </tbody>
      </table>
      <!-- formulario ingreso doctorados-->
            <div class='modal fade nuevoDipForm' tabindex='-1' role='dialog' aria-hidden='true'>
              <div class='modal-dialog modal-lg'>
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Agregar diplomado</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal form-label-left" action="../src/php/inserts.php" method="get">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Id </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php
                            $nuevoId = $count1['0']+1;
                        echo "<input type='text' class='form-control' name='id_maes' value='".$nuevoId."' readonly >";
                        ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Titulo</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nombre de la maestria" name="titulo_maes">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Institucion que imparte</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="inst_maes">
                            <?php
                            $contador2 = 1;
                            while ($fila = mysqli_fetch_array($rselect5)) {
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
                          <select class="select2_single form-control" tabindex="-1" name="prog_maes">
                            <?php
                            $contador3 = 1;
                            while ($fila = mysqli_fetch_array($rselect8)) {
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
                          <select class="select2_single form-control" tabindex="-1" name="rub_maes">
                            <?php
                            $contador4 = 1;
                            while ($fila = mysqli_fetch_array($rselect6)) {
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
                          <input type="text" class="form-control" placeholder="3 meses, 6 meses, 1 año, etc" name="duracion_maes">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Modalidad</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="mod_maes">
                            <?php
                            $contador5 = 1;
                            while ($fila = mysqli_fetch_array($rselect7)) {
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion de la maestria<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="..." name="descripcion_maes"></textarea>
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
    </div>
  </div>
</div>
