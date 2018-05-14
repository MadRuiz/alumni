<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumni | Emprendimientos</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <?php 
      include 'conexion.php';
     ?>
  </head>

  <body class="nav-md">
    <?php
      $selectCap = "SELECT capacitaciones.*, sponsor.abreviatura_spon FROM capacitaciones INNER JOIN sponsor ON capacitaciones.sponsor_cap = sponsor.id_spon LIMIT 2";
      $rselectCap = mysqli_query($conexion, $selectCap);

      $selectFinan = "SELECT financiamientos.*, sponsor.nombre_spon, sponsor.sitio_spon FROM financiamientos INNER JOIN sponsor ON financiamientos.sponsor_finan = sponsor.id_spon LIMIT 3";
      $rselectFinan = mysqli_query($conexion, $selectFinan);

      $selectEmp = "SELECT emprendimientos.*, rubros.nombre_tag FROM\n"

        . "emprendimientos INNER JOIN rubros ON emprendimientos.rubro_emp = rubros.id_tag";
        $rselectEmp = mysqli_query($conexion, $selectEmp);
    ?>
    <div class="container body">
      <div class="main_container">
        <!-- menu y header-->
        <?php include 'head_n_menu.php'; ?>
        <!-- / menu y header-->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Emprendimientos</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <!--Instituciones capacitadoras y financieras-->
            <div class="row">
              <!--capacitaciones-->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2><i class="fa fa-certificate"></i> / Capacitaciones <small>Lo que no sepas, te ayudamos a saber</small> </h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="col-md-12">
                        <?php
                          while ($fila = mysqli_fetch_array($rselectCap)) {
                            echo "
                        <a href='#'>
                          <div class='mail_list'>
                            <div class='col-md-2'>
                              <i class='fa fa-bookmark fa-5x'></i>
                            </div>
                            <div class='col-md-10'>
                              <h3 class='text-capitalize'>
                                ".$fila['nombre_cap']."
                                <span class='label label-info'>".$fila['abreviatura_spon']."</span>
                               
                              </h3>
                              <ul class='list-unstyled'>
                                <li><i class='fa fa-map-marker'></i><strong> Lugar: </strong> ".$fila['lugar_cap']."</li>
                                <li><i class='fa fa-clock-o'></i><strong> Horario: </strong> ".$fila['horario_cap']."</li>
                                <li><i class='fa fa-calendar'></i><strong> Duracion: </strong> ".$fila['duracion_cap']."</li>
                              </ul>
                            </div>
                            <div class='col-md-12'>
                              <p>".$fila['descripcion_cap']."</p>
                            </div>
                          </div>
                        </a>";
                        } 
                        ?>                         
                      </div>
                    </div>
                </div>
              </div>
              <!--Financiamiento-->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2><i class="fa fa-university"></i> / Financiamiento <small>El impulso que tu negocio necesita</small> </h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <ul class="list-unstyled msg_list">
                        <?php
                          while ($fila = mysqli_fetch_array($rselectFinan)) {
                            echo "
                        <li>
                          <a href='http://www.".$fila['sitio_spon']."'>
                            <span class='image'>
                              <img src='images/emprender.jpg' alt='img' />
                            </span>
                            <span>
                              <span>".$fila['nombre_finan']."</span>
                              <span class='time'>".$fila['nombre_spon']."</span>
                            </span>
                            <span class='message'>".$fila['descripcion_finan']."</span>
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
            <!--Base de emprendedores-->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2><i class="fa fa-group"></i> / Emprendedores <small>Conoce a los </small> </h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                          <thead>
                            <tr class="headings">
                              <th class="column-title">Emprendimiento </th>
                              <th class="column-title">Emprendedor / Responsable </th>
                              <th class="column-title">Rubro </th>
                              <th class="column-title">Tiempo en funciones </th>
                              <th class="column-title">Descripción del emprendimiento </th>
                              </th>
                              <th class="bulk-actions" colspan="7">
                                <a class="antoo" ">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              while ($fila = mysqli_fetch_array($rselectEmp)) {
                                echo "
                              <tr>
                                <td>".$fila['nombre_emp']."</td>
                                <td>".$fila['responsable_emp']."</td>
                                <td>".$fila['nombre_tag']."</td>
                                <td>".$fila['tiempo_emp']."</td>
                                <td>".$fila['descripcion_emp']."</td>
                              
                                ";
                              }
                            ?>
                          </tbody>
                        </table>
                      </div>
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
