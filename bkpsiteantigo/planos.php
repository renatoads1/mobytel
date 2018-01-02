
<?php
require ("controller/BDduvidas.php");
require ("controller/BDtipos.php");
require ("controller/BDplanos.php");
include("header.php");

//isntanciando novo plano
$BDplanos = new BDplanos();


//consulta do plano selecionado no index
//$singleplano = $BDplanos->ConsultaplanoporID($plano);

//retorna todos os planos que n�o est� no escolhido
//$registros = $BDplanos->Consultaplanos($plano);

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



$BDduvidas = new BDduvidas();

$registros = $BDduvidas->Consultaduvidas();

$delayduvidas = 300


?>



    <div class="container">
      <div class="row">
          <div class="col-md-12">
           <?php 
           include ("singleplano.php") 
           ?>
          </div>
      </div>  
   </div>

 <?php 
 include("modal.php");
 ?>
 

<?php
include("footer.php")
?>
</body>
</html>