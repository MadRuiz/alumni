<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Capacitaciones<small></small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a type="button" class="" data-toggle="modal" data-target=".nuevoCapForm"><i class="fa fa-plus"></i> Nuevo </a></li>
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
            <th>Lugar</th>
            <th>Horario</th>
            <th>Patronina</th>
            <th>Duracion</th>
            <th>Descripcion</th>
          </tr>
        </thead>
        <tbody>
      <?php
        include '../src/php/selects.php';
        // ---------------tabla---------------
        $contador = 0;
        $selectCap = "SELECT capacitaciones.id_cap, 
                             capacitaciones.nombre_cap, 
                             capacitaciones.lugar_cap, 
                             capacitaciones.horario_cap, 
                             capacitaciones.duracion_cap, 
                             capacitaciones.descripcion_cap, 
                             sponsor.abreviatura_spon 
                      FROM capacitaciones 
                      INNER JOIN sponsor 
                      ON capacitaciones.sponsor_cap = sponsor.id_spon
                      ";
        $rselectCap = mysqli_query($conexion, $selectCap);
        $nCap = $nCap['0']+1;
        while ($fila = mysqli_fetch_array($rselectCap)) {
            $contador ++;
            echo "
              <tr>
                <th scope='row'>".$contador."</th>
                <td>".$fila['nombre_cap']."</td>
                <td>".$fila['lugar_cap']."</td>
                <td>".$fila['horario_cap']."</td>
                <td>".$fila['abreviatura_spon']."</td>
                <td>".$fila['duracion_cap']."</td>
                <td>".$fila['descripcion_cap']."</td>
                <td><a type='button' class='btn'><i class='fa fa-pencil'></i></a></td>
                <td><a type='button' class='btn' href='../src/php/delete_cap.php?cap_id=".$fila['id_cap']."'>
                      <i class='fa fa-trash-o'></i>
                    </a>
                </td>
              </tr>
            ";
          }
      ?>
        </tbody>
      </table>
<!-- formulario ingreso capacitaciones-->
      <div class='modal fade nuevoCapForm' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Agregar capacitación</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal form-label-left" action="../src/php/insert_cap.php" method="get">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <?php
                    echo "
                      <input type='text' class='form-control' name='cap_id' value='".$nCap."' readonly>
                    ";
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Título de la capacitación: </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="cap_nombre">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Organizado / impulsado por:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" tabindex="-1" name="cap_sponsor">
                  <?php 
                    while ($fila = mysqli_fetch_array($rselectSpon)) {
                      echo "
                        <option value='".$fila['id_spon']."'>".$fila['abreviatura_spon']."</option>
                      ";
                    }
                  ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Lugar:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="cap_lugar">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Horario:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="cap_horario">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Duración:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="cap_duracion">
                </div>
              </div>  
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción<span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea class="form-control" rows="3" placeholder="..." name="cap_descripcion"></textarea>
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
