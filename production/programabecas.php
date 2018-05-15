<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Programas de becas <small>de las diferentes organizaciones/entidades</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a type="button" class="" data-toggle="modal" data-target=".nuevoProgForm"><i class="fa fa-plus"></i> Nuevo </a></li>
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <?php
        $contador = 0;
        $selectProg = "SELECT programas.*, sponsor.nombre_spon FROM programas INNER JOIN sponsor WHERE programas.sponsor_prog = sponsor.id_spon";
        $rselectProg = mysqli_query($conexion, $selectProg);
      ?>
      <table class='table table-striped' id="tabla_prog">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Organizacion</th>
            <th>Descripcion</th>
          </tr>
        </thead>
        <tbody>
        <?php
          // ---------------tabla---------------
          while ($fila = mysqli_fetch_array($rselectProg)) {
            $contador++;
            echo "
              <tr>
                <th scope='row'>".$contador."</th>
                <td>".$fila['nombre_prog']."</td>
                <td>".$fila['nombre_spon']."</td>
                <td>".$fila['descripcion_prog']."</td>
                <td><a type='button' class='btn'><i class='fa fa-pencil'></i></a></td>
                <td><a type='button' class='btn' href='../src/php/delete_prog.php?id_prog=".$fila['id_prog']."'>
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
            <div class='modal fade nuevoProgForm' tabindex='-1' role='dialog' aria-hidden='true'>
              <div class='modal-dialog modal-lg'>
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Programa de Becas</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal form-label-left" action="../src/php/insert?prog.php" method="get">
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
