<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumni | Estudios contínuos</title>
    <!--links-->
      <!-- Bootstrap -->
      <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- NProgress -->
      <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">

      <!-- Custom Theme Style -->
      <link href="../build/css/custom.min.css" rel="stylesheet">
    <!--/links-->
  </head>
  <?php
    include 'conexion.php';
    include '../src/php/selects.php';

    //select para estudios continuos
    $select1 = "SELECT estudio.id_est, estudio.nombre_est, estudio.duracion_est, estudio.descripcion_est, institucion.nombre_ins, institucion.sitio_ins, modalidades.tipo_mod, rubros.nombre_tag FROM estudio INNER JOIN institucion ON estudio.inst_est = institucion.id_inst INNER JOIN modalidades ON estudio.mod_est = modalidades.id_mod INNER JOIN rubros ON estudio.rub_est = rubros.id_tag";
    $rselect1 = mysqli_query($conexion, $select1);

    //Logica para programas de becas
    $tab_ProgBecas = '';
    $content_ProgBecas = '';
    $countProgBecas = 1;
    $selectProgBecas = "SELECT * FROM programas";
    $rselectProgBecas = mysqli_query($conexion, $selectProgBecas);
    while ($filas = mysqli_fetch_array($rselectProgBecas)) {
      if ($countProgBecas == 1) {
        $tab_ProgBecas = '
          <li class="active"><a href="#'.$filas["id_prog"].'" data-toggle="tab">'.$filas["nombre_prog"].'</a></li>';
          $content_ProgBecas .= '
          <div id="'.$filas["id_prog"].'" class="tab-pane fade in active role="tabpanel" >
          ';
      } else {
        $tab_ProgBecas .= '
          <li><a href="#'.$filas["id_prog"].'" data-toggle="tab">'.$filas["nombre_prog"].'</a></li>';
        $content_ProgBecas .= '
          <div id="'.$filas["id_prog"].'" class="tab-pane fade">
          ';
      }
      $selectProgBecas2 = "SELECT programas.id_prog, programas.nombre_prog, programas.descripcion_prog, programas.perfilAplicante_prog, sponsor.nombre_spon, sponsor.correo_spon, sponsor.telefono_spon, sponsor.sitio_spon, estudio.nombre_est FROM programas INNER JOIN sponsor ON programas.sponsor_prog = sponsor.id_spon INNER JOIN estudio ON programas.id_prog = estudio.prog_est WHERE programas.id_prog = '".$filas['id_prog']."'";
      $rselectProgBecas2 = mysqli_query($conexion, $selectProgBecas2);
      while ($filas2 = mysqli_fetch_array($rselectProgBecas2)) {
        /*IMPRESIO DEL CONTENIDO DEL TAB*/
        $content_ProgBecas .= '
        <div class="row"><br/>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <blockquote class="blockquote bg-primary">
               <p>'.$filas2["nombre_spon"].'</p>
              </blockquote>
              <div>
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item"><i class="fa fa-phone"></i> '.$filas2["telefono_spon"].'</li>
                  <li class="list-inline-item"><i class="fa fa-envelope"></i> '.$filas2["correo_spon"].'</li>
                  <li class="list-inline-item"><i class="fa fa-globe"></i> '.$filas2["sitio_spon"].'</li>
                </ul>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <blockquote class="bg-primary">
                Becas
              </blockquote>
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> '.$filas2["nombre_est"].'</a></li>
              </ul>
            </div>                                      
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <blockquote class="bg-info">
                Descripcion
              </blockquote>
              <p>'.$filas2["descripcion_prog"].'</p>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <blockquote class="bg-info">
                Requisitos / Perfil de aplicante
              </blockquote>
              <p>'.$filas2["perfilAplicante_prog"].'</p>
            </div>
          </div>
        </div>

        ';
      }
      $content_ProgBecas .= '<div style="clear:both"></div></div>';
      $countProgBecas ++;
    }

   
    ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- menu y header-->
        <?php include 'head_user.php'; ?>
        <!-- / menu y header-->
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
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div>
                  <div class="x_content">
                    <!--Estadisticas del numero de estudios estudios-->
                    <div class="row">
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
                    <!--Estudios continuos-->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2><i class="fa fa-spinner"></i> Estudios contínuos</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <div class='row'>
                              <?php
                                while ($fila = mysqli_fetch_array($rselect1)) {
                                  echo "
                                    <div class='panel panel-default col-md-3 col-sm-3 col-xs-12'>
                                      <div class='panel-heading row'>
                                        <h4 class='text-center'>".$fila['nombre_est']."</h4>
                                      </div>
                                      <div class='panel-body'>
                                        <div class=''>
                                          <div class=''>
                                            <h2>".$fila['nombre_ins']."</h2>
                                            <p><strong>Rubro: </strong> ".$fila['nombre_tag']."</p>
                                            <ul class='list-unstyled'>
                                              <li> <i class='fa fa-calendar'> </i> ".$fila['duracion_est']."</li>
                                              <li> <i class='fa fa-check-circle'> </i> ".$fila['tipo_mod']."</li>
                                            </ul>
                                          </div>
                                        </div>
                                        <div class='row bg-default'>
                                          <div class='col-md-12'>
                                            <a href='".$fila['sitio_ins']."' type='button' class='btn btn-success btn-xs'>
                                              <i class='fa fa-external-link'></i></a>
                                            <button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='.".$fila['id_est']."'>
                                              Ver detalles
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  ";
                                  echo '
                                    <div class="modal fade '.$fila["id_est"].'" tabindex="-1" role="dialog" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">'.$fila["nombre_est"].'</h4>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                              </button>
                                              <strong>Hey!</strong> Parece que este estudio pertenece a un programa de becas :D
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 text-right text-uppercase"><strong>Titulo</strong></div>
                                                <div class="col-md-9">'.$fila["nombre_est"].'</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 text-right text-uppercase"><strong>Universidad que imparte</strong></div>
                                                <div class="col-md-9">'.$fila["nombre_ins"].'</div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                              <div class="col-md-3 text-right"><span class="label label-success">BECA</div>
                                              <div class="col-md-9 text-left">'.$fila["sitio_ins"].'</div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-3 text-right text-uppercase"><strong>Duracion</strong></div>
                                                <div class="col-md-9 text-left">'.$fila["duracion_est"].'</div>
                                                <div class="col-md-3 text-right text-uppercase"><strong>Modalidad</strong></div>
                                                <div class="col-md-9 text-left">'.$fila["tipo_mod"].'</div>
                                                <div class="col-md-3 text-right text-uppercase"><strong>Rubro</strong></div>
                                                <div class="col-md-9 text-left">'.$fila["nombre_tag"].'</div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-3 text-right text-uppercase"><strong>Descripcion</strong></div>
                                            <div class="col-md-9">'.$fila["descripcion_est"].'</div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary"><i class="fa fa-external-link"></i>Ir al sitio</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  ';
                                }
                              ?>
                            </div>
                            <!--<div class="row">
                              <hr>
                              <h4 class="text-center"><a href="#">Ver todos <i class="fa fa-arrow-circle-right"></i></a></h4>-->
                            </div>  
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                    <!--Programas de becas-->
                    <div class="clearfix"></div>
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2><i class="fa fa-flag"></i> Programas de becas</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <ul class="nav nav-tabs">
                              <?php echo $tab_ProgBecas;?>
                            </ul>
                            <div class="tab-content">
                              <?php echo $content_ProgBecas; ?>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>
     

    <!-- footer content -->
    <?php include 'footer.php'; ?>
    <!-- /footer content -->


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
