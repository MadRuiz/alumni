<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrar</title>

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
      include '../production/conexion.php';
      //select para escoger Rubro

     ?>
    <div class="container body">
      <div class="main_container">
      <?php include '../production/head_admin.php'; ?>
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
                include '../production/instituciones.php';
               ?>
              <?php
                //---------------programa de becas---------------
                include '../production/programabecas.php';
              ?>
              <?php
               //---------------doctorados----------------------
                include '../production/doctorados.php';
              ?>
              <?php
               //---------------maestrias----------------------
                include '../production/maestrias.php';
               ?>
               <?php
               //---------------postgrados----------------------
                include '../production/postgrados.php';
                ?>
                <?php
                //---------------diplomados----------------------
                  include '../production/diplomados.php';
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
