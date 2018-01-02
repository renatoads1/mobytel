<?php

require("bdConnect/authSession.php");
require ("controller/BDPkg_user.php");
require ("controller/BDPkg_cdr.php");
require("controller/BDPkg_plan.php");
require("controller/BDPkg_refill.php");

$idCliente = $_SESSION['idCliente'];
$nomeCliente = $_SESSION['nomeCliente'];
$tipoConta = $_SESSION['tipoConta'];

$BDPkg_cdr = new BDPkg_cdr();
$BDPkg_user = new BDPkg_user();

//$user = $BDPkg_user->listUserById($idCliente);

$registros = $BDPkg_user->listUserById($idCliente);




?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Moby Telecom </title>

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
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
     <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    
     <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
   

   <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>

    <!-- Link Gerencia Net
     <link rel="stylesheet" href="gerencianet/bootstrap/css/bootstrap.css">
   	 <link rel="stylesheet" href="gerencianet/bootstrap/css/style.css"> -->
     <script type="text/javascript" src="gerencianet/bootstrap/js/jquery-2.2.4.min.js"></script>
     <script type="text/javascript" src="gerencianet/bootstrap/js/bootstrap.js"></script>
     <script type="text/javascript" src="gerencianet/bootstrap/js/jquery.mask.js"></script>
     <script type="text/javascript" src="gerencianet/bootstrap/js/scripts.js"></script>
	 	
	 <script type="text/javascript" src="js/infpag.custom.js"></script>
		
  </head>  
  <body class="nav-md ">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-comment-o"></i> <span>Moby Telecom</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo $registros['foto']; ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem Vindo,</span>
                <h2><?php echo $registros['username']; ?></h2> 
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Usuário</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a href="#"><i class="fa fa-edit"></i> Planos <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="planos.php">Meus Planos</a></li>
                      <li><a href="solicitaAlteracao.php">Alteração / Cancelamento </a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Contas  </a>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Chamadas <span class="fa fa-chevron-down"></span> </a>
                  <ul class="nav child_menu">
                      <li><a href="chamadasonline.php">Chamadas online </a></li>
                      <li><a href="historicoligacoes.php">Histórico </a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Financeiro <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="tables_dynamic.html">Comprar Créditos</a></li>
                      <li><a href="tables_dynamic.html">Gerar Boleto</a></li>
                      <li><a href="tables_dynamic.html">2ª via Boleto</a></li>
                      <li><a href="tables_dynamic.html">Informar Pagamento</a></li>
                      <li><a href="tables.html">Recargas / Pagamentos</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
             </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Configurações">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Tela Cheia">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Travar">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
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
                    <img src="images/profiles/1.jpg" alt=""><?php echo $registros['username']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Meus Dados</a></li>
                    <li>
                      <a href="javascript:;">
                        <span>Fale Conosco</span>
                      </a>
                    </li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
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
                          <strong>Ver todos os alertas</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->