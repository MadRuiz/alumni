<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumni | Becas</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <?php
    include 'conexion.php';
    //select para estudios continuos
    $select1 = "SELECT estudio.nombre_est, institucion.nombre_ins, rubros.nombre_tag, estudio.duracion_est, modalidades.tipo_mod from estudio INNER JOIN institucion on estudio.inst_est = institucion.id_inst INNER JOIN rubros on estudio.rub_est = rubros.id_tag INNER JOIN modalidades on estudio.mod_est = modalidades.id_mod LIMIT 4";
    $rselect1 = mysqli_query($conexion, $select1);

    //select para numero de doctorados
    $select2 = "SELECT COUNT(*) from estudio where categ_est = 4 ";
    $rselect2 = mysqli_query($conexion, $select2);
    $count1 = mysqli_fetch_array($rselect2);

    //select para numero de maestrias
    $select3 = "SELECT COUNT(*) from estudio where categ_est = 3 ";
    $rselect3 = mysqli_query($conexion, $select3);
    $count2 = mysqli_fetch_array($rselect3);

    //select para numero de postgrados
    $select4 = "SELECT COUNT(*) from estudio where categ_est = 2 ";
    $rselect4 = mysqli_query($conexion, $select4);
    $count3 = mysqli_fetch_array($rselect4);

    //select para numero de diplomados
    $select5 = "SELECT COUNT(*) from estudio where categ_est = 1 ";
    $rselect5 = mysqli_query($conexion, $select5);
    $count4 = mysqli_fetch_array($rselect5);

    //select para programa de becas
    $select6 = "SELECT * FROM programas";
    $rselect6 = mysqli_query($conexion, $select6);
    ?>
  <body class="nav-md">
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
                <h2>Madrú</h2>
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
                  <li><a href="becas.php."><i class="fa fa-newspaper-o"></i> Noticias</a></li>
                  <li><a href="becas.php."><i class="fa fa-book"></i> Estudios contínuos </a></li>
                  <li><a href="becas.php."><i class="fa fa-cogs"></i> Emprendimientos</a></li>

                </ul>
              </div>
            <!--<div class="menu_section" id="admin_panel">
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


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Proyección profesional</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cursos, maestrías, etc...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row top_tiles">

                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-book"></i></div>
                    <div class="count">
                      <?php
                      echo $count1[0];
                      ?>
                    </div>
                    <h3>Doctorados</h3>
                    <p>Recomendados por tu universidad</p>
                  </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-briefcase"></i></div>
                    <div class="count">
                      <?php
                      echo $count2[0];
                      ?>
                      </div>
                    <h3>Maestrías</h3>
                    <p>Impartidas en la universidad de tu elección</p>
                  </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-file"></i></div>
                    <div class="count">
                      <?php
                      echo $count3[0];
                      ?>
                    </div>
                    <h3>Post-grados</h3>
                    <p>Del área que tú elijas</p>
                  </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-font"></i></div>
                    <div class="count">
                      <?php
                      echo $count4[0];
                      ?>
                    </div>
                    <h3>Diplomados</h3>
                    <p>Certificados internacionalmente</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Estudios contínuos <small>Agregados recientemente</small> </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="">
                        <?php
                        while ($fila = mysqli_fetch_array($rselect1)) {
                          echo "
                          <div class='col-md-4 col-sm-4 col-xs-12 profile_details'>
                            <div class='well profile_view'>
                              <div class='col-sm-12'>
                                <h4 class='brief'><i>".$fila['nombre_est']."</i></h4>
                                <div class='left col-xs-7'>
                                  <h2>".$fila['nombre_ins']."</h2>
                                  <p><strong>Rubros: </strong> ".$fila['nombre_tag']."</p>
                                  <ul class='list-unstyled'>
                                    <li> <i class='fa fa-calendar'> </i> ".$fila['duracion_est']."</li>
                                      <li> <i class='fa fa-check-circle'> </i> ".$fila['tipo_mod']."</li>
                                  </ul>
                                </div>
                                <div class='right col-xs-5 text-center'>
                                </div>
                              </div>
                              <div class='col-xs-12 bottom text-center'>
                                <div class='col-xs-12 col-sm-6 emphasis'>
                                  <p class='ratings'>
                                    <a>4.0</a>
                                    <a href='#'><span class='fa fa-star'></span></a>
                                    <a href='#'><span class='fa fa-star'></span></a>
                                    <a href='#'><span class='fa fa-star'></span></a>
                                    <a href='#'><span class='fa fa-star'></span></a>
                                    <a href='#'><span class='fa fa-star-o'></span></a>
                                  </p>
                                </div>
                                <div class='col-xs-12 col-sm-6 emphasis'>
                                  <button type='button' class='btn btn-success btn-xs'> <i class='fa fa-user'>
                                    </i> <i class='fa fa-external-link'></i> </button>
                                  <button type='button' class='btn btn-primary btn-xs'>
                                    Ver detalles
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                            ";

                            }
                        ?>
                      </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Programas de becas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="">
                        <?php
                        $selectBecas = "SELECT
                                        programas.sponsor,
                                        programas.nombre_prog,
                                        estudio.nombre_est,
                                        estudio.descripcion_est,
                                        institucion.nombre_ins
                                        FROM programas INNER JOIN estudio ON programas.id_prog = estudio.prog_est
                                        INNER JOIN institucion ON estudio.inst_est = institucion.id_inst  WHERE estudio.prog_est != 0";
                        $rselectBecas = mysqli_query($conexion, $selectBecas);
                         ?>
                          <div class='col-md-12 col-sm-12 col-xs-12 profile_details'>
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <?php
                                while ($fila = mysqli_fetch_array($rselectBecas)) {
                                  echo "
                                  <li role='presentation' class='active'>
                                    <a href='#".$fila['nombre_prog']."' id='prog1' role='tab' data-toggle='tab' aria-expanded='true'>".$fila['nombre_prog']."</a>
                                  </li>
                                  ";
                                   }
                                 ?>
                              </ul>
                              <div id="myTabContent" class="tab-content">


                                    <?php
                                    while ($fila = mysqli_fetch_array($rselectBecas)) {
                                  echo "
                              <div role='tabpanel' class='tab-pane fade active in' id='prog1' aria-labelledby='home-tab'>
                                <ul class='messages'>
                                  <li>
                                    <img src='images/img.jpg' class='avatar' alt='Avatar'>
                                    <div class='message_date'>
                                      <h3 class='date text-info'>24</h3>
                                      <p class='month'>Becados</p>
                                    </div>
                                    <div class='message_wrapper'>
                                      <h4 class='heading'>Titulo del estudio de la beca</h4>
                                      <blockquote class='message'>
                                        Descripcion del estudio y lo que cubre la  beca
                                      </blockquote>
                                      <br />
                                      <p class='url'>
                                        <span class='fs1 text-info' aria-hidden='true' data-icon=''></span>
                                        <a href='#'><i class='fa fa-paperclip'></i> Parcial </a>
                                      </p>
                                    </div>
                                  </li>
                                  </ul>


                                </div>
                                "; }
                                     ?>




                              </div>
                            </div>
                          </div>


</div>
                      </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>


          <div class="">
              <div class="clearfix"></div>



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
