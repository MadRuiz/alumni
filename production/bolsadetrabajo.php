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
                          <div class="col-md-3">
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-lg ">Categoría</button>
                              <button type="button" class="btn btn-default dropdown-toggle btn-lg " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-lg ">Departamento</button>
                              <button type="button" class="btn btn-default dropdown-toggle btn-lg " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-lg ">Cargo</button>
                              <button type="button" class="btn btn-default dropdown-toggle btn-lg " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                              </ul>
                            </div>
                          </div>
                           <span class="input-group-btn">
                                <button class="btn btn-default btn-lg btn-primary" type="button">Buscar!</button>
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
            <button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target=''>Mas Información</button>      
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
