<?php
require ("controller/BDduvidas.php");
include("header.php");


$BDduvidas = new BDduvidas();

$registros = $BDduvidas->Consultaduvidas();

$delayduvidas = 300

?>

<section id="singlepost">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <i class="fa fa-question fa-4x"></i>
          <h2>DUVIDAS FREQUENTES</h2>
        </div>
       </div>
      <div class="row">
      	
      	<?php 
      	foreach ($registros as $registro){
      		echo '
           <div class="col-sm-6 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="'.$delayduvidas.'ms" >
          		<h3><b>'.$registro['duv_pergunta'].'</b></h3>
          		<p>'.$registro['duv_resposta'].'<p>
          </div>	';
      		
      	
      	$delayduvidas = $delayduvidas + 300;
      	} ?>
        </div>
       </div>
 </section><!--/#descricao single-->

<?php
include("footer.php");
?>
</body>
</html>