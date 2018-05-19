<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Financiamientos<small></small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a type="button" class="" data-toggle="modal" data-target=".nuevoFinanForm"><i class="fa fa-plus"></i> Nuevo </a></li>
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class='table table-striped' id="tabla_doc">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Patrocina</th>
          </tr>
        </thead>
        <tbody>
      <?php
        include '../src/php/selects.php';
        // ---------------tabla---------------
        $contador = 0;
        $selectFinan = "SELECT financiamientos.id_finan, 
                               financiamientos.nombre_finan, 
                               financiamientos.descripcion_finan, 
                               sponsor.nombre_spon 
                        FROM financiamientos 
                        INNER JOIN sponsor 
                        ON financiamientos.sponsor_finan = sponsor.id_spon
                      ";
        $rselectFinan = mysqli_query($conexion, $selectFinan);
          while ($fila = mysqli_fetch_array($rselectFinan)) {
            $contador ++;
            echo "
              <tr>
                <th scope='row'>".$contador."</th>
                <td>".$fila['nombre_finan']."</td>
                <td>".$fila['descripcion_finan']."</td>
                <td>".$fila['nombre_spon']."</td>
                <td><a type='button' class='btn'><i class='fa fa-pencil'></i></a></td>
                <td><a type='button' class='btn' href='../src/php/delete_finan.php?id_finan=".$fila['id_finan']."'>
                      <i class='fa fa-trash-o'></i>
                    </a>
                </td>
              </tr>
            ";
          }
      ?>
        </tbody>
      </table>
<!-- formulario ingreso financiamientos-->
      <div class='modal fade nuevoFinanForm' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Agregar programa de financiamiento</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal form-label-left" action="../src/php/insert_finan.php" method="get">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <?php
                    $nFinan =  mysqli_fetch_array($rselectFinan);
                    $nFinan = $nFinan[0] + 1;
                    echo "
                      <input type='text' class='form-control' name='finan_id' value='".$nFinan."' readonly>
                    ";
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre del programa de financiamiento:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="finan_nombre">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Entidad que impulsa la financiación:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" tabindex="-1" name="finan_sponsor">
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción:<span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea class="form-control" rows="3" placeholder="..." name="finan_descripcion"></textarea>
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
