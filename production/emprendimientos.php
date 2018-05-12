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
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-font"></i> <span>lumni Connect</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/yukie.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenida,</span>
                <h2><a href="profile.html" class="text-muted">Madrú</a></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">
              <div class="menu_section menu_fixed">
                <h3>General</h3>
                <ul class="nav side-menu menu_fixed">
                  <li><a href="page_404.html"><i class="fa fa-home"></i> Inicio </a></li>
                  <li><a href="#noticias.php"><i class="fa fa-newspaper-o"></i> Noticias</a></li>
                  <li><a href="estudios.php"><i class="fa fa-book"></i> Estudios contínuos </a></li>
                  <li><a href="emprendimientos.php"><i class="fa fa-cogs"></i> Emprendimientos</a></li>
                </ul>
              </div><!--
              <div class="menu_section" id="admin_panel">
                <h3>Administración</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-sitemap"></i> Panel de control <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="administrar.php">Estudios contínuos</a>
                      <li><a href="page_404.html">Emprendimiento</a>
                      <li><a href="page_404.html">Voluntariado</a>
                    </ul>
                  </li>
                </ul>
              </div>-->
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/yukie.jpg" alt="">Madrú
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Ajustes</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Ayuda</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul><!--
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Madru</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>-->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

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
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
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
