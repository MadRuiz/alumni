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
        $nProg = $nProg['0'] + 1;
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
                    <form class="form-horizontal form-label-left" action="../src/php/insert_prog.php" method="get">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Id </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php
                            echo "
                              <input type='text' class='form-control' name='prog_id' value='".$nProg."' readonly>
                            ";
                          ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Patroninador del progarma:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" name="prog_spon">
                          <?php 
                            while ($fila = mysqli_fetch_array($rselectSpon)) {
                              echo "
                                <option value='".$fila['id_spon']."'>".$fila['nombre_spon']."</option>
                              ";
                            }
                          ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción del programa:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="..." name="prog_descripcion"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Perfil del aplicante:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="..." name="prog_perfil"></textarea>
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
