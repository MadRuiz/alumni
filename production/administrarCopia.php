<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
     <script type="text/javascript" src="../src/js/alertas.js"> </script>
  </head>

  <body class="nav-md">
    <?php
      include 'conexion.php';
      //select para escoger Rubro
      $selectRub = "SELECT rubros.id_tag, rubros.nombre_tag FROM rubros";
      $rselectRub = mysqli_query($conexion, $selectRub);
      //select para escoger Modalidades
      $selectMod = "SELECT modalidades.id_mod, modalidades.tipo_mod FROM modalidades";
      $rselectMod = mysqli_query($conexion, $selectMod);
      //select para escoger Programas
      $selectProg = "SELECT programas.id_prog, programas.nombre_prog FROM programas";
      $rselectProg = mysqli_query($conexion, $selectProg);
      //select para escoger Institucion
      $selectIns = "SELECT institucion.id_inst, institucion.nombre_ins FROM institucion";
      $rselectIns = mysqli_query($conexion, $selectIns);
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
                  <li><a href="becas.php."><i class="fa fa-book"></i> Estudios contínuos </a></li>

                </ul>
              </div>
              <div class="menu_section">
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
              </div>

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

                        <span>Configuraciones</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Ayuda</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>

                </li>
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
                <h3>Mi panel <small>Administración de módulos</small></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <?php
               //---------------instituciones---------------
                include 'instituciones.php';
               ?>
              <?php
                //---------------programa de becas---------------
                include 'programabecas.php';
              ?>
              <?php
               //---------------doctorados----------------------
                include 'doctorados.php';
              ?>
              <?php
               //---------------maestrias----------------------
                include 'maestrias.php';
               ?>
               <?php
               //---------------postgrados----------------------
                include 'postgrados.php';
                ?>
                <?php
                //---------------diplomados----------------------
                  include 'diplomados.php';
                 ?>
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
