<?php
include '../core/conex/conexion.php';
include '../core/chek/check.php';
include '../core/mant/view.php';
function NickName($enlace, $cod_per)
{
    $result = mysqli_query($enlace, "SELECT foto_per FROM perfil where id_perfil = '$cod_per' ");
    while ($row = mysqli_fetch_row($result)) {
        echo '
         <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-graduation-cap"></i> <span>Alumni 3</span></a>
            </div>

            <div class="clearfix"></div>

            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/' . $row[0] . '" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hola ' . $_SESSION["saludo"] . ',</span>
                <h2> ' . $_SESSION["nom_per"] . '</h2>
              </div>
            </div>';
    }
}

function Menu()
{
    echo '<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i> Categorias <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Noticias de hoy</a></li>
                      <li><a href="#">Logros academicos</a></li>
                      <li><a href="#">Bolsa de trabajo</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>';
}

function TopNav($enlace, $cod_per)
{
    $result = mysqli_query($enlace, "SELECT foto_per FROM perfil where id_perfil = '$cod_per' ");
    while ($row = mysqli_fetch_row($result)) {
        echo ' <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/' . $row[0] . '" alt="">' . $_SESSION["nom_per"] . '
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="perfil.php"> Perfil</a></li>
                    <!-- Start to do list
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    -->
                    <li><a href="../core/chek/salir.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>';
    }
}
