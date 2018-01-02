<?php 
include("controller/BDnoticias.php");

$idNoticia = $_POST['idNoticias'];
$BDnews = new BDnoticias();
$noticia = $BDnews->buscarNoticiasPorId($idNoticia);


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
  		<link rel="shortcut icon" href="images/favicon.ico">
	</head><!--/head-->


	<body>
		<?php
		include ("header.php");
		?>
		<br />
		<div class="container" >
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div id="banner-carousel" class="carousel slide" data-ride="carousel" >
		                <div class="carousel-inner">
		                    <div class="item active wow fadeIn" data-wow-duration="2000ms" data-wow-delay="300ms">
		                        <img src="images/banner/banner_black.jpg" />
		                    </div>
		                    <div class="item">
		                        <img src="images/banner/banner_loja.jpg" /> 
		                    </div>
		                    <div class="item">
		                        <img src="images/banner/banner_loja_dois.jpg" />
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		
		<br />
		<div class="container" >
			<div class="row">
			    <div class="col-md-10 col-md-offset-1 text-center">
			        <h1 class="text-center"><strong>Noticias sobre Telefonia IP no mundo</strong></h1>
			        <p class="text-center">Matenha-se informado com as noticias sobre a Telefonia IP no mundo. Saiba mais sobre as últimas tecnologias, o mercado, as empresas e principalmente sobre informações técnicas para melhor entender a Telefonia IP.  </p>
			    </div>
			</div>
			<br />
			<div class="row">
			    <div class="col-md-10 col-md-offset-1 text-center">
			        <h2 class="bg-primary" align="center"><strong><?php echo $noticia['tituloNoticias'] ?></strong></h2>
			    </div>
			</div>
			<br />
			<div class="row">
			    <div class="col-sm-6 col-sm-offset-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
	                <div class="post-thumb">
	                    <div id="post-carousel"  class="carousel slide" data-ride="carousel">
	                        <ol class="carousel-indicators">
					            <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
					            <li data-target="#post-carousel" data-slide-to="1"></li>
					            <li data-target="#post-carousel" data-slide-to="2"></li>
	                	    </ol>
	                        <div class="carousel-inner">
	                            <div class="item active">
	                                <a href="#"><img class="img-responsive" src="<?php echo $noticia['fotoUmNoticias']?>" alt=""></a>
	                            </div>
	                            <div class="item">
	                                <a href="#"><img class="img-responsive" src="<?php echo $noticia['fotoDoisNoticias']?>" alt=""></a>
	                            </div>
	                            <div class="item">
	                                <a href="#"><img class="img-responsive" src="<?php echo $noticia['fotoTresNoticias']?>" alt=""></a>
	                            </div>
	                        </div>                               
					        <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					        <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
	                    </div>                            
	                </div>
				</div>
			</div>
			<br />
			<div class="row">
			    <div class="col-md-8 col-md-offset-2">
			    <p class="text-center"><strong><?php echo $noticia['introNoticias']?></strong></p>
			    </div>
	        </div>
	        <br />
		    <div class="row">
		        <div class="col-md-8 col-md-offset-2">
		            <p class="text-justify"><?php echo $noticia['textoNoticias']?> </p>
		        </div>
		    </div>
		    <br />
		    <div class="row">
		        <div class="col-md-10 text-right">
		            <span class="date"><?php echo $noticia['dataNoticias']?></span>
	                <span class="cetagory">por <strong><?php echo $noticia['fonteNoticias']?></strong></span>  
				 
		        </div>
	        </div>
	    </div>
	    <br />
	    <br />
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12 text-center">
	            <a href="index.php#blog"><button type="button" class="btn btn-primary">Voltar</button></a>
	            </div>
	        </div>
	    </div>
	    <br />
	    <br />
		<footer id="footer">
		    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
		        <div class="container text-center">
		            <div class="footer-logo">
		                <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
		            </div>
		            <div class="social-icons">
		                <ul>
			                <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
			                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
			                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
			                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
			                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
			                <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
		                </ul>
		            </div>
		        </div>
		    </div>
		    <div class="footer-bottom">
		      <div class="container">
		        <div class="row">
		          <div class="col-sm-6">
		            <p>&copy; 2016 - Desenvolvido por: Moby Telecomunicações.</p>
		          </div>
		          <div class="col-sm-6">
		            <p class="pull-right">Todos os direitos reservados.</p>
		          </div>
		        </div>
		      </div>
		    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
		
	</body>
</html>

