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
          <?php
            include '../src/php/selects.php';
            // ---------------tabla---------------
            $contador = 0;
            $selectDip = "SELECT 
                            estudio.id_est, 
                            estudio.nombre_est, 
                            estudio.descripcion_est, 
                            institucion.nombre_ins, 
                            rubros.nombre_tag, 
                            estudio.duracion_est, 
                            modalidades.tipo_mod 
                            from estudio 
                            INNER JOIN institucion on estudio.inst_est = institucion.id_inst 
                            INNER JOIN rubros on estudio.rub_est = rubros.id_tag 
                            INNER JOIN modalidades on estudio.mod_est = modalidades.id_mod 
                            WHERE estudio.categ_est = 3
                          ";
            $rselectDip = mysqli_query($conexion, $selectDip);
            $nDip = $nDip['0']+1;
            $nEst = $nEst['0']+1;
            while ($fila = mysqli_fetch_array($rselectDip)) {
                $contador ++;
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
                    <td><a type='button' class='btn' href='../src/php/delete_dip.php?dip_id=".$fila['id_est']."'>
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
            <div class='modal fade nuevoDipForm' tabindex='-1' role='dialog' aria-hidden='true'>
              <div class='modal-dialog modal-lg'>
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Agregar diplomado</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal form-label-left" action="../src/php/insert_dip.php" method="get">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Id:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php
                        echo "<input type='text' class='form-control' name='dip_id' value='".$nEst."' readonly >";
                        ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Título del diplomado:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="" name="dip_titulo">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Institución que imparte:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="dip_ins">
                          <?php 
                            while ($fila = mysqli_fetch_array($rselectIns)) {
                              echo "
                                <option value='".$fila['id_inst']."'>".$fila['nombre_ins']."</option>
                              ";
                            }
                          ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">¿Programa de becas?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="dip_programa">
                          <?php 
                            while ($fila = mysqli_fetch_array($rselectPro)) {
                              echo "
                                <option value='".$fila['id_prog']."'>".$fila['nombre_prog']."</option>
                              ";
                            }
                          ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Rubro: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="dip_rubro">
                          <?php 
                            while ($fila = mysqli_fetch_array($rselectRub)) {
                              echo "
                                <option value='".$fila['id_tag']."'>".$fila['nombre_tag']."</option>
                              ";
                            }
                          ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Duración: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="" name="dip_duracion">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Modalidad: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="dip_modalidad">
                          <?php 
                            while ($fila = mysqli_fetch_array($rselectMod)) {
                              echo "
                                <option value='".$fila['id_mod']."'>".$fila['tipo_mod']."</option>
                              ";
                            }
                          ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="..." name="dip_descripcion"></textarea>
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
