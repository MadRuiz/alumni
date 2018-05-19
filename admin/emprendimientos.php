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
        $selectEmp = "SELECT emprendimientos.id_emp, 
                              emprendimientos.nombre_emp, 
                              emprendimientos.responsable_emp, 
                              emprendimientos.tiempo_emp, 
                              emprendimientos.descripcion_emp, 
                              rubros.nombre_tag 
                        FROM emprendimientos 
                        INNER JOIN rubros 
                        ON emprendimientos.rubro_emp = rubros.id_tag
                      ";
        $rselectEmp = mysqli_query($conexion, $selectEmp);
        while ($fila = mysqli_fetch_array($rselectEmp)) {
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
                <td><a type='button' class='btn' href='../src/php/delete_emp.php?emp_id=".$fila['id_emp']."'>
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
              <h4 class="modal-title" id="myModalLabel">Agregar emprendimiento</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal form-label-left" action="../src/php/insert_emp.php" method="get">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <?php
                    
                    $nEmp = $nEmp['0'] + 2;
                    echo "
                      <input type='text' class='form-control' name='emp_id' value='".$nEmp."' readonly>
                    ";
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre del emprendimiento:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control"  name="emp_nombre">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Emprendedor:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="emp_responsable">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Rubro:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" tabindex="-1" name="emp_rubro">
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiempo en funciones:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="emp_tiempo">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción del emprendimiento:<span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea class="form-control" rows="3" placeholder="..." name="emp_descripcion"></textarea>
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
