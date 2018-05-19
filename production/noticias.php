<!DOCTYPE html>
<html lang="es">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumni| Noticias </title>

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
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
              <div class="title_left">
                <h3>Noticias</h3><br>
              </div>
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="images/emprender.jpg" alt="...">
                    <div class="carousel-caption">
                      Evento 1
                    </div>
                  </div>
                  <div class="item">
                    <img src="images/emprender.jpg" alt="...">
                    <div class="carousel-caption">
                      Evento 2
                    </div>
                  </div>
                  <div class="item">
                    <img src="images/emprender.jpg" alt="...">
                    <div class="carousel-caption">
                      Evento 3
                    </div>
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
           
            <div class="clearfix"></div><br/>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Ultimas noticias </h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
        <li><a type="button" class="" data-toggle="modal" data-target=".nuevaNotiForm"><i class="fa fa-plus"></i> Nuevo </a></li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <ul class="list-unstyled timeline">
                    <li>
                      <div class="block">
                        <div class="tags">
                          <?php 
                          include '../src/php/select_noti.php';
                          //--tabla--//
                          $contador = 0;
                          $select_noti = "SELECT 
                            * 
                            from noticias
                            where noticias.cat_noti=1";
                            $rselectNoti = mysqli_query($conexion, $select_noti);
                            while ($fila = mysqli_fetch_array($rselectNoti)) {
                              if (isset($rselectNoti)) {

                                echo' <div class="block_content">
                                <h2 class="title">
                                <a>'.$fila["Titulo"].'</a>
                                </h2>
                                <span class="image">
                                <img  alt="img"/>'.$fila["Imagen"].'
                                </span>
                                <p class="excerpt"> <a>'.$fila["Contenido"].'</a>
                                </p>
                                </div>
                                </div>  
                                </li>';
                                }else{
                                echo "<p> No hay ninguna noticia creada</p>";
                                } 
                              }
                              ?>
                                </ul>
                      
                </div>
              </div>
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
                    
                  </select>
                </div>
              </div>
              <div class="form-group">
                    <form enctype="multipart/form-data" action="uploader.php" method="POST">
                     <input name="uploadedfile" type="file" />
                    </form>
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
            <div class="col-md-6">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Eventos</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <ul class="list-unstyled msg_list">
                    <li>
                      <a>
                       <?php 
                          include '../src/php/select_noti.php';
                          //--tabla--//
                          $contador1 = 0;
                          $select_evento = "SELECT 
                                            *
                                            from noticias
                                            where noticias.cat_noti=2
                                            ";
                          $rselect_evento = mysqli_query($conexion, $select_evento);
                          if (isset($rselect_evento)) {
                            while ($fila = mysqli_fetch_array($rselect_evento)) {

                            echo'<span>'.$fila["Titulo"].'</span>
                            <span class="image"><img alt="img">'.$fila["Imagen"].'</img>;
                            </span>

                            <span class="message">'.$fila["Contenido"].'
                            </span>
                            </a>
                            </li>
                            </ul>
                            </div>
                           ';
                            
                          } } else{
                            echo '<p> No hay ningun evento</p>'; 
                          }
                          
              ?>
              </div>
            </div>
           
          
                      </div>
        <!-- /page content -->
</div>
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
   

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>