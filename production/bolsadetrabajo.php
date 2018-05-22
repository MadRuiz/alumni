<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumni | Bolsa de Trabajo</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <?php   include 'conexion.php'; ?>
 
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include 'head_user.php'; ?>
       <div class="right_col" role="main">
            <div class="">
              <div class="title_left">
                <h3>Bolsa de trabajo <small>La bolsa de tu confianza</small></h3>
              </div>
        </div>
        <div class="clearfix"></div>       
        <div class="row">
          <div class="col-md-12">
            <div>
              <div class="x_content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="x_panel">
                      <div class="x_content">
                        <div class="row">
                            <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Departamento:</label>
    <div class="col-md-3 col-sm-9 col-xs-12">
      <select class="select2_single form-control" tabindex="-1" name="NAME">
      <?php 
      $selectDepto = "SELECT * from departamentos";
      $rselectDepto = mysqli_query($conexion, $selectDepto);
        while ($fila = mysqli_fetch_array($rselectDepto)) {
          echo "
            <option value='".$fila['id_depto']."'>".$fila['nombre_depto']."</option>
          ";
        }
      ?>
      </select>
    </div>
  </div>
        <div>Filtrar por: ;</div>
        <select id="cbx_estado" name ="cbx_estado">
        <option value="0">Departamento</option>
        <?php 
            while ($row = $resultado->fetch_assoc()){ 
            echo "<option value=".$row['id_depto']."</option>";
             } ?>
        </select>
        </div>
        <div>cargo</div>
        <select id="cbx_cargo" name ="cbx_cargo">
        <option value="0">cargo</option>
        <?php 
            while ($row = $resultado->fetch_assoc())
              { echo "
                <option value=".$row['nombre_carg']."</option>";

                } ?>

        </select>
        </div>
        <div>categoria</div><select id="cbx_cat" name ="cbx_cat">
        <option value="0">categorias</option>
        <?php 
            while ($row = $resultado->fetch_assoc()){
             echo "<option value=".$row['n_categ']."</option>";
         } ?>

        </select>
      </div>
    
                           <span class="input-group-btn">
                                <button class="btn btn-default btn-lg btn-primary" type="button">Buscar!</button>

                                    <div class="col-md-12">
                      <br></br>
                              <div class="x_panel">
                                  <div class="clearfix"></div>
                                <div class="x_content">
                                  <ul class="list-unstyled msg_list">
                                                <?php
                                                 include '../src/php/selects.php';
                        // ---------------tabla---------------
                        $contador1 = 0;
                        $selectOfer = "SELECT  
                                               cargos.nombre_carg, 
                                               departamentos.nombre_depto, 
                                               rubros.nombre_tag
                                        FROM ofertas 
                                        INNER JOIN cargos ON ofertas.cargo_of = cargos.id_carg
                                        INNER JOIN departamentos ON ofertas.deptos_of = departamentos.id_depto
                                        INNER JOIN rubros ON ofertas.categorias_of = rubros.id_tag";

                                        $rselectOfer = mysqli_query($conexion, $selectOfer);
                              $nOfert = $nOfert['0']+1;
                              while ($fila = mysqli_fetch_array($rselectOfer)) {
                              $contador ++;
                              echo " <li>
                                      <a>
                                        <span><span><h2><strong>".$fila['nombre_of']."</strong></h2></span>
                              <span><h4><em>".$fila['nombre_empresa']." | ".$fila['nombre_depto']." </em></h4></span>
                              <span><h5>Salario ".$fila['salariomin_of']."   a   ".$fila['salariomax_of']."</h5></span>
                              <h4><strong>Funciones de puesto:</strong>".$fila['funciones_of']."</h4>
                              <h4><strong>Requisitos:</strong> ".$fila['requisitos_of']."</h4>
                                        </span> 
                                     </a>
                                    </li>
                                        ";
                                      }?>
                                              </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            
          
          
          <?php
        include '../src/php/selects.php';
        // ---------------tabla---------------
        $contador = 0;
        $selectOfe = "SELECT ofertas.id_oferta, 
                               ofertas.nombre_of, 
                               ofertas.direccion_of, 
                               ofertas.salariomin_of, 
                               ofertas.salariomax_of, 
                               ofertas.funciones_of, 
                               ofertas.requisitos_of, 
                               cargos.nombre_carg, 
                               empresas.nombre_empresa, 
                               departamentos.nombre_depto, 
                               rubros.nombre_tag
                        FROM ofertas 
                        INNER JOIN cargos ON ofertas.cargo_of = cargos.id_carg
                        INNER JOIN empresas ON ofertas.empresa_of = empresas.id_empresa
                        INNER JOIN departamentos ON ofertas.deptos_of = departamentos.id_depto
                        INNER JOIN rubros ON ofertas.categorias_of = rubros.id_tag
            ";
            ?>
            <div class="col-md-12">
      <br></br>
              <div class="x_panel">
                  <div class="clearfix"></div>
                <div class="x_content">
                  <ul class="list-unstyled msg_list">
                    
                 <?php
              $rselectOfe = mysqli_query($conexion, $selectOfe);
              $nOfer = $nOfer['0']+1;
              while ($fila = mysqli_fetch_array($rselectOfe)) {
              $contador ++;
              echo "  
              <li>
                      <a>
                        <span><span><h2><strong>".$fila['nombre_of']."</strong></h2></span>
              <span><h4><em>".$fila['nombre_empresa']." | ".$fila['nombre_depto']." </em></h4></span>
              <span><h5>Salario ".$fila['salariomin_of']."   a   ".$fila['salariomax_of']."</h5></span>
              <h4><strong>Funciones de puesto:</strong>".$fila['funciones_of']."</h4>
              <h4><strong>Requisitos:</strong> ".$fila['requisitos_of']."</h4>
                        </span>
<button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target=''>Aplicar a la Oferta</button>
                  
                     </a>
                    </li>
                        ";
                      }
      ?>  
                                   
                      
                  </ul>
        
                </div>
        
        
              </div>
        
        
        
        
            </div>
          
          
                  </div>
                </div>
        
              </div>
        
    <!-- /page content -->

        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
