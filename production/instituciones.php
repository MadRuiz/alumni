<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Instituciones / Universidades <small>que imparten lo diferentes estudios</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a type="button" class="" data-toggle="modal" data-target=".nuevaInsForm"><i class="fa fa-plus"></i> Nueva </a></li>
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <?php
        include '../src/php/selects.php';
        $contador = 0;
        $selectIns = "SELECT * FROM `institucion`";
        $rselectIns = mysqli_query($conexion, $selectIns);
        $nIns = $nIns['0'] + 1;
      ?>
      <table class='table table-striped bulk_action' id="tabla_ins">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>País</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Sitio web</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // ---------------tabla---------------
            while ($fila = mysqli_fetch_array($rselectIns)) {
              $contador++;
              echo "
              <tr>
                <th scope='row'>".$fila['id_inst']."</th>
                <td>".$fila['nombre_ins']."</td>
                <td>".$fila['pais_ins']."</td>
                <td>".$fila['ciudad_ins']."</td>
                <td>".$fila['telefono_ins']."</td>
                <td>".$fila['correo_ins']."</td>
                <td>".$fila['sitio_ins']."</td>
                
                <td><type='button' class='btn' data-toggle='modal' data-target='.update_ins".$fila['id_inst']."'>
                    <i class='fa fa-pencil'></i></a>
                </td>

                <td><a type='button' class='btn' href='../src/php/delete_ins.php?id_inst=".$fila['id_inst']."'>
                      <i class='fa fa-trash-o'></i>
                    </a>
                </td>
                "; 

                echo '
              </tr>
      <div class="modal fade update_ins'.$fila["id_inst"].'" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Editar Institución</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal form-label-left" action="../src/php/update_ins.php" method="get">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id</label>
                <div class="col-md-9 col-sm-9 col-xs-12">              
                      <input type="text" class="form-control" name="ins_id" value="".$nIns."" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre: </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="'.$fila['nombre_ins'].'" name="ins_nombre">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">País</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_pais">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ciudad</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_ciudad">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Teléfono</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_telefono">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_correo">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Url</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_sitio">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
              <button type="submit" class="btn btn-primary" value="submit" onclick="">Guardar cambios</button>
            </div>
              </form>
          </div>
        </div>
      </div>
              ';
               }
              ?>
        </tbody>
      </table>
      <!-- formulario ingreso instituciones-->
      <div class='modal fade nuevaInsForm' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Agregar Institución</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal form-label-left" action="../src/php/insert_ins.php" method="get">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <?php
                    echo "
                      <input type='text' class='form-control' name='ins_id' value='".$nIns."' readonly>
                    ";
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre: </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_nombre">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">País</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_pais">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ciudad</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_ciudad">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Teléfono</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_telefono">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_correo">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Url</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="" name="ins_sitio">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
              <button type="submit" class="btn btn-primary" value="submit" onclick="">Guardar cambios</button>
            </div>
              </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
