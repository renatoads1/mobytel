        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="drash.php">MOBYTEL</a>
            </div>
            <!-- Top Menu Items stilo-> /css/sb-admin.css -->
            <ul  id="navtopfix" class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong id="nomeusermenu" ></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i>11/06/1982 22:30</p>
                                        <p>Como está o projéto?</p>

                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                        <strong >
                                            
                                        </strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i>11/06/1982 22:30</p>
                                        <p>Como está o projéto?</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong ></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> 11/06/1982 22:30</p>
                                        <p>Como está o projéto?</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">

                            <a href="#">Ver todas as menssagens</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">    <i class="fa fa-bell"></i>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li><!--Javascript:alert('fechar');-->
                            <a href="">RENATO<span class="label label-default">Alerta</span></a>
                        </li>
                        <li>
                            <a href="#">RENATO<span class="label label-primary">Alerta</span></a>
                        </li>
                        <li>
                            <a href="#">RENATO<span class="label label-success">Alerta</span></a>
                        </li>
                        <li>
                            <a href="#">RENATO<span class="label label-info">Alerta</span></a>
                        </li>
                        <li>
                            <a href="#">RENATO<span class="label label-warning">Alerta</span></a>
                        </li>
                        <li>
                            <a href="#">RENATO<span class="label label-danger">Alerta</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Ver todos</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span id="usermenu"></span><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-20" data-parent="#bs-accordion-1"><i class="fa fa-fw fa-user"></i> PERFIL</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> MSG</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> CONFIG</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:exitlogin();"><i class="fa fa-fw fa-power-off"></i> SAIR</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div id="textmenu" class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="nav" class="nav navbar-nav side-nav">
                    <li id="rola" class="active">
                        <a href="drash.php">
                        <i class="fa fa-fw fa-home"></i>
                        HOME
                        </a>
                    </li>
                    <li>
                        <a href="drash.php"><i class="fa fa-fw fa-bar-chart-o"></i> GRÁFICOS</a>
                    </li>
                    <li>
                        <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-11" data-parent="#bs-accordion-1"><i class="fa fa-fw fa-table"></i> RELATÓRIOS</a>
                    </li>
                   
                    <li>
                        <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-20" data-parent="#bs-accordion-1"><i class="fa fa-fw fa-user"></i>MEU PERFIL</a>
                    </li>
<?php
if($_SESSION['user_name'] =="renatoads1" || $_SESSION['user_name'] =="Samuel"){
echo("<li><a href='sistema.php'><i class='glyphicon glyphicon-wrench'></i>SISTEMAS</a></li>");
}else{


}
?>
                   
                </ul>
            </div>
            
        </nav>
<!-- /.navbar-collapse -->