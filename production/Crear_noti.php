<!DOCTYPE html>
<html lang="es">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumni |Crear noticia </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include 'head_user.php'; ?>
      <div class="clearfix"></div>
      </div>
      <div class='modal fade nuevaNotiForm' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Agregar nueva noticia</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal form-label-left" action="../src/php/insert_noti.php" method="get">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <?php
                    echo "
                      <input type='text' class='form-control' name='cod_noticia' value='".$noti_cod."' readonly>
                    ";
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Titulo: </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="noti_titulo">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Contenido:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" tabindex="-1" name="noti_contenido">
                   <?php 
                    while ($fila = mysqli_fetch_array($rselect_noti)) {
                      echo "
                        <option value='".$fila['Titulo']."'>".$fila['Contenido']."</option>
                      ";
                    }
                  ?>
                   <div class="form-group">
                        <form enctype="multipart/form-data" action="uploader.php" method="POST">
                         <input name="uploadedfile" type="file" />
                         </div>
                        </form>
                        </div>
        
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
              <button type="submit" class="btn btn-primary" value="submit" onclick="">Guardar cambios</button>
                </form>
            </div>
         </div>
        </div>
      </div>
                           <?php include 'footer.php'; ?>
        <!-- /footer content -->
      
    </div>
  </form>
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
   
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>  
  </body>
</html>