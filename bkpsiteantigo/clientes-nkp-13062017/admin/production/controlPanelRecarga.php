<?php


$BDPkg_refill = new BDPkg_refill();

$ligacoesdia = $BDPkg_cdr->ligacoesDia($idCliente);

$ligacoessemana = $BDPkg_cdr->ligacoesultimosdias($idCliente);

$ligacoesmes = $BDPkg_cdr->ligacoesmes($idCliente);

$minutosmes = $BDPkg_cdr->minutosmes($idCliente);

$gastosmes = $BDPkg_cdr->gastosmes($idCliente);

$recargasmes = $BDPkg_refill->recargasmes($idCliente);




?>

	
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-phone"></i> Ligações / Dia</span>
              <div class="count">
              	<?php echo $ligacoesdia['ligdia']; ?>
              </div>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-phone"></i>  Ligações / Ultimos 7 Dias</span>
              <div class="count">
              	<?php echo $ligacoessemana['ligsemana']; ?>
              	
    
              	
              	</div>
               <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-phone"></i>  Ligações / Mês</span>
              <div class="count "> 
         
               
              <?php 
              
              if($ligacoesmes['ligmes'] != Null){
              
              	echo $ligacoesmes['ligmes'];
              
              }else{
              	
              	echo "0";
              }
              
              
              ?>
               
               </div>
                <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Minutos / Mês</span>
              <div class="count">
               <?php 
              
              if($minutosmes['minutos'] != Null){
              
              	echo $minutosmes['minutos'];
              
              }else{
              	
              	echo "0";
              }
              
              
              ?>
              	</div>
                <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-ticket"></i> Recargas / Mês R$</span>
              <div class="count"> 
			   <?php 
			 
			   
			   if($recargasmes['recargas'] != Null){
			  	   
			   		echo substr($recargasmes['recargas'],0,-3 ); 
			   
			   }else{
			   	
			   		echo "0.00";
			   
			   }
			   
			   ?>	
			   
			   
				</div>
               <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-money"></i> Saldo Total R$</span>
              <div class="count green"> <?php echo substr($registros['credit'],0,-2 ); ?></div>
            
            </div>
            <div class="pull-left">
	           
	            <button type="button" class="btn btn-info btn-sm">Realizar recarga</button>
	            <button type="button" class="btn btn-info btn-sm">Nossos Planos</button>
	            <button type="button" class="btn btn-info btn-sm">Seja um Moby Ilimitado</button>
	            <button type="button" class="btn btn-info btn-sm">Fale Conosco</button>
	             
	        </div>
          </div>
          <!-- /top tiles -->