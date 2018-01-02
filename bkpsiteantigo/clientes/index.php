<?php
require ("controller/BDplanos.php");
require("controller/BDnoticias.php");


$BDplanos = new BDplanos();

$registros = $BDplanos->Consultaplanos();


//variavel padr�o
$planpos=1;
$planpre=2;
$plancontrole=3;
$count = 1;
$delay1 = 300;
$delay2 = 300;
$delay3 = 300;

//consulta de planos
$mobypos = $BDplanos->Consultaplanofiltradoportipo($planpos);
$mobypre = $BDplanos->Consultaplanofiltradoportipo($planpre);
$mobycontrole = $BDplanos-> Consultaplanofiltradoportipo($plancontrole);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Moby Telecom</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset2.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
 
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
 
  
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/icon.png">
</head><!--/head-->


<body>
<!--Menu Superior-->
<header id="home">

    <nav class="container-fluid" style="background-color: #EE3F22; padding-top:5px;" role="navigation">
	     <div class="container">   
	        <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
	            <!-- Iframe callMe -->
	            <div id="controle-ligamos" class="col-md-8  hidden-xs hidden-sm hidden-md ">     
						<iframe class="embed-responsive-item" src="http://187.94.66.40/mbilling/index.php/call0800Web?user=007004" frameborder="0" scrolling="NO" width="100%" height="30px"  ;></iframe>	                   
			   </div>
	            <div  class=" col-md-2 col-sm-4 col-xs-12 hidden-lg" >
						<iframe class="embed-responsive-item"   src="http://187.94.66.40/mbilling/index.php/callMoby?user=007004" frameborder="0" scrolling="NO" width="280px" height="70px" align="center" ;  ></iframe>               	
				</div>
				
				 <!-- Mobile  -->
				<div class="col-md-10 col-sm-8 col-xs-12 hidden-lg text-right">
	                <div class="row">
	                    <div class="col-md-6" > 
	                        <p><a href="http://187.94.66.40" style="color:white; font-weight:bold;" ><i class="fa fa-user-circle-o " aria-hidden="true"></i>  Acesso Revendedor</a></p>
	                    </div>
	                    <div class="col-md-6"> 
	                        <p><a href="http://187.94.66.40" style="color:white;font-weight:bold;"><i class="fa fa-user-circle" aria-hidden="true"></i>  Acesso Cliente</a></p>
	                    </div>
	                 </div>
	            </div>
	            
	            <!-- Alta resolução -->
	            <div class="col-md-4 hidden-sm hidden-xs hidden-md">
	                <div class="row">
	                    <div class="col-md-6" > 
	                        <p><a href="http://187.94.66.40" style="color:white; font-weight:bold;" ><i class="fa fa-user-circle-o " aria-hidden="true"></i>  Acesso Revendedor</a></p>
	                    </div>
	                    <div class="col-md-6"> 
	                        <p><a href="admin/production/userlogin.php" style="color:white;font-weight:bold;"><i class="fa fa-user-circle" aria-hidden="true"></i>  Acesso Cliente</a></p>
	                    </div>
	                 </div>
	            </div>
	        </div>
  		 </div>
  	</nav>
 
  <!--Fim do Menu Superior-->
  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/banner_moby1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Bem vindo a <span>Moby Telecom</span></h1>
            <p class="animated fadeInRightBig">Bem vindo ao futuro das <span>Telecomunicações</span></p>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/banner_moby2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Soluções em <span>Telefonia IP</span></h1>
            <p class="animated fadeInRightBig">Projetos personalizados para residências, pequenas, médias e grandes empresas</p>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/banner_moby3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><span>Economize em até 70% seus gastos com telefonia</span></h1>
            <p class="animated fadeInRightBig">Planos completos e flexíveis para telefones fixos e móveis.</p>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="index.php"  style="max-width: 1080px; width: 100%;height: auto !important;">
            <img src="images/logo.png" class="img-responsive" alt="logo">
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="dropdown scroll"><a class="dropdown-toggle" data-toggle="dropdown" href="#services">Conheça <span class="caret"></span></a>
            	<ul class="dropdown-menu">
         			 <li><a href="sobrenos.php">Moby Telecom</a></li>
         			 <li><a href="como-funciona.php">Como Funciona</a></li> 
         			 <li><a href="servicos.php">Nossos Serviços</a></li> 
         			 <li><a href="duvidas.php">Dúvidas Frequentes</a></li>
         			  
        		</ul>
            </li> 
            <li class="scroll"><a href="#portfolio">Loja</a></li>
            <li class="scroll"><a href="#pricing">Planos</a></li>
          
           <li class="dropdown scroll"><a class="dropdown-toggle" data-toggle="dropdown" href="#services">Auto Atendimento <span class="caret"></span></a>      
				<ul class="dropdown-menu">
         			 <li><a href="http://187.94.66.40/mbilling/">2ª Via de Conta</a></li>
         			 <li><a href="http://187.94.66.40/mbilling/">Consultar Saldo</a></li> 
         			 <li><a href="http://187.94.66.40/mbilling/">Alteração de pacotes</a></li> 
         			 <li><a href="http://187.94.66.40/mbilling/">Cancelamento</a></li> 
        		</ul>	
            </li>
            
             <li class="dropdown scroll"><a class="dropdown-toggle" data-toggle="dropdown" href="#services">Revenda <span class="caret"></span></a>
            	<ul class="dropdown-menu">
         			 <li><a href="trabalhe-conosco.php">Trabalhe Conosco</a></li>
         			 <li><a href="revendedor.php">Revendedores</a></li>
         			 <li><a href="franquia.php">Franquia</a></li> 
        		</ul>
            </li> <li class="scroll"><a href="contato.php">Fale Conosco</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
 
 
  <section id="singlepost">
   	 <div class="container">
	     <div class="row">
	         <div class=" text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
	      	     <i class="fa fa-thumbs-up fa-4x" aria-hidden="true"></i>
	             <h2>PRINCIPAIS BENEFÍCIOS</h2>
	         </div>
	     </div>
	     <br />
         <div class="row">
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                  <p align="center"><i class="fa fa-list fa-2x" aria-hidden="true"></i></p>
          	      <h3 align="center" title="As chamadas são colocadas em fila, aguardando um atendente disponível."><b>Fila de Atendimento</b></h3>
          	      
              </div>	
      	      <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                  <p align="center" ><i class="fa fa-volume-up fa-2x" aria-hidden="true"></i></p>
          	      <h3 align="center" title="Seja pra fixo ou celular, nossa qualidade de audio nas ligações é sempre cristalina."><b>Qualidade de audio HD</b></h3>  
              </div>	
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                  <p align="center"><i class="fa fa-users fa-2x" aria-hidden="true"></i></p>
          	      <h3 align="center" title="Chega de ser atendido por robos ou ter que esperar 72 horas por um atendimento."><b>Atendimento rápido e eficiente</b></h3>
          	      
              </div>
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                  <p align="center"><i class="fa fa-connectdevelop fa-2x" aria-hidden="true"></i></p>
          	      <h3 align="center" title="Histórico de ligações, financeiro e tudo em tempo real para o seu controle total."><b>Acompanhamento online das chamadas</b></h3>       	      
              </div>
          </div>
          <br />
          <div class="row">	
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                 <p align="center"><i class="fa fa-connectdevelop fa-2x" aria-hidden="true"></i>
                  <h3 align="center" title="Atendimento automático com gravação das chamadas e envio para o email do cliente."><b>Caixa Postal</b></h3>
              </div>	
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                   <p align="center"><i class="fa fa-expand fa-2x" aria-hidden="true"></i></p>
                  <h3 align="center" title="Uma tarifa pra Fixo e outra pra Móvel. Incluindo TODAS operadoras, local e DDD."><b>Tarifas realmente simplificadas</b></h3>
              </div>
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                  <p align="center"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></p>
                  <h3 align="center" title="Seus créditos acumulam para o mês seguinte, em caso de planos mensais."><b>Créditos/Recargas acumulativas</b></h3>
              </div>
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                  <p align="center"><i class="fa fa-ban fa-2x" aria-hidden="true"></i></p>
                  <h3 align="center" title="Bloqueio de chamadas para números selecionados pelo cliente."><b>Restrição de chamadas</b></h3>
              </div>
          </div>
          <br />
          <div class="row">	
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                  <p align="center"><i class="fa fa-comment-o fa-2x" aria-hidden="true"></i></p>
                  <h3 align="center" title="Mensagem de resposta audível com menu iterativo que direciona suas chamadas para o respectivo setor de atendimento."><b>URA de atendimento</b></h3>
              </div>	
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                   <p align="center"><i class="fa fa-phone fa-2x" aria-hidden="true"></i></p>
                  <h3 align="center" title="Interconexão entre todos os ramais contratados com possiblidade de transferência de chamadas para fixos, celulares e entre a matriz e filial."><b>PBX digital</b></h3>
              </div>
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                  <p align="center"><i class="fa fa-microphone fa-2x" aria-hidden="true"></i></p>
                  <h3 align="center" title="Possibilidade de gravação das chamadas para Serviços de Atendimento ao Consumidor e para empresas de Call Center."><b>Gravação das chamadas para serviços de Call Center</b></h3>
              </div>
              <div class="col-sm-3 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
                  <p align="center"><i class="fa fa-volume-control-phone fa-2x" aria-hidden="true"></i></p>
                  <h3 align="center" title="Iframe configurado de chamadas automáticas para clientes para ser usado em websites."><b>Call Me para uso em websites</b></h3>
              </div>                        
          </div>
      </div>
 </section>
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-12">
        
        <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 align="center">Sobre a Empresa</h2>
            <p align="center">Atuamos no ramo de tecnologia das telecomunicações. Provemos serviços de telefonia por IP com o intuito de aproximar as pessoas e dinamizar a comunicação. Acreditamos que facilitando a comunicação estamos aproximando as pessoas e construindo um mundo melhor.</p>
            <h2 align="center">Missão</h2>
            <p align="center">Sabemos que a telecomunicação aproxima as pessoas, amplia os negócios e facilita a vida das pessoas. Por isso, temos como missão a qualidade, economia, eficiência e a inovação. Sempre pensando em você.</p>
          </div>
              
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Loja Virtual</h2>
          <p>Os melhores equipamentos e produtos IP em um só lugar. Acesse e confira!</p>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="text-center wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
             <a href="http://www.mobytel.com.br/loja/"><button type="button" class="btn btn-primary btn-lg" style="font-size: 2vw !important;" >Clique aqui e acesse nossa loja</button></a>  
        </div>
      </div>
       <br />
       <br />
    </div>
    <div class="container" >
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="banner-carousel" class="carousel slide" data-ride="carousel" >
                    <div class="carousel-inner">
                        <div class="item active wow" data-wow-duration="2000ms" data-wow-delay="300ms">
                            <img src="images/banner/banner_black.jpg" />
                        </div>
                        <div class="item">
                            <img src="images/banner/banner_loja.jpg" /> </div>
                        <div class="item">                           
                            <img src="images/banner/banner_loja_dois.jpg" />
                        </div>
                    </div>                        
                </div>               
            </div>
        </div>
    </div>
    <br />
    <div class="container">
      <div class="row">     
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/2.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>ATA Linksys</h3>
                    <p>2 portas FXS</p>
                    <p>R$ 129,90</p>
                  </div>
                  <div class="folio-overview">
                     <span class="folio-expand"><a href="images/portfolio/2-expand.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/3.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Telefone IP</h3>
                    <p>GrandStream GXP-1610</p>
                   <!-- <p>R$199,00</p> -->
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="images/portfolio/3-expand.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/4.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>ATA Cisco</h3>
                    <p>2 portas FXS</p>
                     <!--  <p>R$ 290,00</p>  -->
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="images/portfolio/4-expand.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
           <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/8.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>FXO Grandstream GWX 4108</h3>
                    <p>8 portas FXO</p>
                     <!--  <p>R$ 290,00</p>  -->
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="images/portfolio/8-expand.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <br />
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/5.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>ATA Grandstream</h3>
                    <p>2 portas FXS + roteador</p>
                   <!-- <p>R$ 220,00</p>  -->
                  </div>
                  <div class="folio-overview">
                     <span class="folio-expand"><a href="images/portfolio/5-expand.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/6.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>HT503 - Grandstream</h3>
                    <p>1 porta FXS + 1 porta FXO</p>
                    <!-- <p>R$ 290,00</p>  -->
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="images/portfolio/6-expand.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/7.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Telefone IP sem fio Grandstream</h3>
                    <p>Tel DP720 + base DP750</p>
                    <!--   <p>R$ 650,00</p>  -->
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="images/portfolio/7-expand.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/9.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>FXO GrandStream GXW 4224</h3>
                    <p>16 portas FXO</p>
                    <!--   <p>R$ 650,00</p>  -->
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="images/portfolio/9-expand.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <br />
       <div class="row">
        <div class="text-center wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
             <a href="http://www.mobytel.com.br/loja/"><button type="button" class="btn btn-primary btn-lg" style="font-size: 2vw !important;">Clique aqui e acesse nossa loja</button></a>  
        </div>
      </div>
    </div>
    -->
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Auto Atendimento</h2>
          <p>Acesse sua página de controle exclusiva e tenha acesso a relatórios diários e mensais de todos seus ramais. Coloque créditos e pague com cartão de crédito ou por boleto bancário. Veja qual é seu plano e o valor dos minutos para cada tipo de ligação.</p>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-danger">
      	          <div class="panel-heading text-center"><b>GERENCIADOR EXCLUSIVO</b>
      	          </div>
      	          <div class="panel-body text-center">
      	              <div  class="row">
      	                  <div class="col-md-8">
      	                      <img class="img-responsive" src="images/atendimento/mbilling.jpg" />
      	                  </div>
      	                  <div id="magnus" class="col-md-4 alert alert-danger text-left">
      	                      <ul style="list-style-type: none">
					              <li><i class="fa fa-check fa-lg" aria-hidden="true" ></i> Controle em tempo real de sua conta</li>
					              <br />
					              <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> Relatórios diários e mensais </li>
					              <br />
					              <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> Consulta ao plano e valores de tarifas</li>
					              <br />
					              <li><i class="fa fa-check fa-lg" aria-hidden="true"></i> Recargas com cartão de crédito e boletos</li>
					          </ul>
					          <br />
					          <br />
					          <br />
					          <p class="text-center">
					          <a href="http://187.94.66.40" target="_blank"><button type="button" class="btn btn-info">Acessar minha página</button></a>
					          </p>
					          <br />
      	                  </div>
      	              </div>
      	          </div>
      	      </div>
          </div>
      </div>          
    </div>
  </section><!--/#team-->

  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">132</h3>
          <p>Clientes</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-phone"></i>
          <h3 class="timer">421</h3>                    
          <p>Telefones Fixos</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-mobile"></i>
          <h3 class="timer">146</h3>                    
          <p>Telefones Móveis</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-book"></i>                    
          <h3>36</h3>
          <p>Projetos Desenvolvidos</p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->
<?php 
 include("singleplano.php");
 ?>
 <?php 
 include("modal.php");
 ?>
  <!--
 <section id="blog">
      <div class="container">
          <div class="row">
              <div class="text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                  <h2>Notícias</h2>
                  <p>Mantenha-se informado. Saiba as novidades sobre telefonia IP e tecnologias relacionadas as telecomunicações no brasil e no mundo.</p>
              </div>
          </div>
          <div class="blog-posts">
              <div class="row">
                  <?php 
                      $BDNoticias = new BDnoticias();
                      $noticias = $BDNoticias->buscarTodasNoticias();
        
                      foreach($noticias as $not){
                      	?>
                  <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                      <div class="post-thumb">
                          <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                              
                              <div class="carousel-inner">
                                  <div class="item active">
                                      <img class="img-responsive" src="<?php echo $not['fotoUmNoticias']?>" alt="">
                                  </div>
                                  <div class="item">
                                      <img class="img-responsive" src="<?php echo $not['fotoDoisNoticias']?>" alt="">
                                  </div>
                                  <div class="item">
                                      <img class="img-responsive" src="<?php echo $not['fotoTresNoticias']?>" alt="">
                                  </div>
                              </div>                               
				         </div>                            
            
                      </div>
                      <div class="entry-header">
                          <h3><?php echo $not['tituloNoticias']?></h3>
                          <span class="date"><?php echo $not['dataNoticias']?></span>
                          <span class="cetagory">por <strong><?php echo $not['fonteNoticias']?></strong></span>
                      </div>
                      <div class="entry-content">
                          <p><?php echo $not['introNoticias']?> ... </p>
                      </div>
                      <br />
                      <form action="noticias.php" method="POST" role="form">
                          <input type="hidden" name="idNoticias" id="idNoticias" value="<?php echo $not['idNoticias'] ?>">
                          <button type="submit" class="btn btn-primary btn-block" >Leia Mais</button>
                      </form>
                  </div>
                  <?php  } ?>
              </div>
          </div>
      </div>
  </section><!--/#blog-->

  <?php 
  include("footer.php")
  ?>
  
  <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ 
	var widget_id = 'KYwr23xplu';
	var d=document;var w=window;
	function l(){
        var s = document.createElement('script'); 
        s.type = 'text/javascript'; 
        s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; 
        var ss = document.getElementsByTagName('script')[0]; 
        ss.parentNode.insertBefore(s, ss);
        } if(d.readyState=='complete'){
            l();
        }else{
            if(w.attachEvent){
                w.attachEvent('onload',l);
            }else{
                w.addEventListener('load',l,false);
                }
            }
        }
        )();
</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>