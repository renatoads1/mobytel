


<section id="pricing">
    <div class="container">
      <div class="row">
       
      	<div class="panel panel-danger">
      	  <div class="panel-heading"><b>PLANOS E TARIFAS </b></div>
      	  <div class="panel-body">
				<ul class="hover-branca nav nav-tabs">
 				    <li class="new active"><a data-toggle="tab" href="#pos">Moby Pós-Pago</a></li>
  					<li class="new"><a data-toggle="tab" href="#pre">Moby Pré-pago</a></li>	
 					<li class="new"><a data-toggle="tab" href="#controle">Moby Controle</a></li>
 					
				</ul>
				<div class="tab-content">
				  <div id="pos" class="tab-pane fade in active">
				    	  
				    	 
				    	 <div class="pricing-table">
					        <div class="row">
					         
					         <?php 
					         foreach ($mobypos as $pos){
					         	if($pos['Plan_destaque'] == 0){
					         		echo '
					         		<div class="col-sm-3 text-center">
						         		<div class="single-table wow flipInY " data-wow-duration="1000ms" data-wow-delay="'.$delay1.'ms">
						         			<h3>'.$pos['Plan_nome'].' ' .'<button type="button" class="btn btn-danger btn-xs fa fa-exclamation " aria-hidden="true"" data-toggle="modal" data-target="#'.$pos['Plan_titulo'].'" ></button></h3>
							         		<div class="price text-center">
							         			<h4 >R$'.$pos['plan_valor'].'</h4>
							         		</div>
							         		<ul>					         			
												<li>'.$pos['plan_condicao1'].'</li>
							         			<li>'.$pos['plan_condicao2'].'</li>
											
							         		</ul>
							         		<a href="solicitaCadastro.php" class="btn btn-lg btn-primary">Assine Já</a>
						         		</div>
					         		</div>
					         		';
					         		
					         	   $delay1 = $delay1 + 200;
					         	}else{
					         	   echo '		
					         		<div class="col-sm-3">
						         		<div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="'.$delay1.'ms">
							         		<h3>'.$pos['Plan_nome'].' ' .'<button type="button" class="btn btn-danger btn-xs fa fa-exclamation " aria-hidden="true"" data-toggle="modal" data-target="#'.$pos['Plan_titulo'].'" ></button></h3>
							         		<div class="price">
							         			<h4>R$'.$pos['plan_valor'].'</h4>
							         		</div>
							         		<ul>						    
												<li>'.$pos['plan_condicao1'].'</li>
							         			<li>'.$pos['plan_condicao2'].'</li>
	          									
							         		</ul>
							         		<a href="solicitaCadastro.php" class="btn btn-lg btn-primary">Assine Já</a>
						         		</div>
					         		</div>
					         		';
					         		
					         	   $delay1 = $delay1 + 200;
					         	}
					         }
					         ?>
					        </div>  
					    </div>
				  </div>
				  <div id="pre" class="tab-pane fade">
				  		   
				    	 <div class="pricing-table">
					        <div class="row">
					       
					           <?php 
					         foreach ($mobypre as $pre){
					         	if($pre['Plan_destaque'] == 0){
					         		echo '
					         		<div class="col-sm-3">
						         		<div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="'.$delay2.'ms">
						         			<h3>'.$pre['Plan_nome']. ' ' .'<button type="button" class="btn btn-danger btn-xs fa fa-exclamation " aria-hidden="true"" data-toggle="modal" data-target="#'.$pre['Plan_nome'].'" ></button></h3>
							         		<div class="price">
							         			<h4>R$'.$pre['plan_valor'].'</h4>
							         		</div>
							         		<ul>					         			
							         			
	          								
							         		</ul>
							         		<a href="http://www.mobytel.com.br/loja/" class="btn btn-lg btn-primary">Faça sua recarga</a>
						         		</div>
					         		</div>
					         		';
					         		
					         	   $delay2 = $delay2 + 200;
					         	}else{
					         	   echo '		
					         		<div class="col-sm-3">
						         		<div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="'.$delay2.'ms">
							         		<h3>'.$pre['Plan_nome'].' ' .'<button type="button" class="btn btn-danger btn-xs fa fa-exclamation " aria-hidden="true"" data-toggle="modal" data-target="#'.$pre['Plan_nome'].'" ></button></h3>
							         		<div class="price">
							         			<h4>R$'.$pre['plan_valor'].'</h4>
	          									
							         		</div>
							         		<ul>						    										
							         		
							         		</ul>
							         		<a href="http://www.mobytel.com.br/loja/" class="btn btn-lg btn-primary">Faça sua recarga</a>
						         		</div>
					         		</div>
					         		';
					         		
					         	   $delay2 = $delay2 + 200;
					         	}
					         }
					         ?>
					        </div>
					     </div>
					  
				  </div>
				  <div id="controle" class="tab-pane fade">
				       	 
				   		 <div class="pricing-table">
					        <div class="row">
					         <?php 
					         foreach ($mobycontrole as $controle){
					         	if($pre['Plan_destaque'] == 0){
					         		echo '
					         		<div class="col-sm-3">
						         		<div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="'.$delay3.'ms">
						         			<h3>'.$controle['Plan_nome'].' ' .'<button type="button" class="btn btn-danger btn-xs fa fa-exclamation " aria-hidden="true"" data-toggle="modal" data-target="#'.$controle['Plan_titulo'].'" ></button></h3>
							         		<div class="price">
							         			<h4>R$'.$controle['plan_valor'].'</h4>
							         		</div>
							         		<ul>					         			
							         			
												
							         		</ul>
							         		<a href="solicitaCadastro.php" class="btn btn-lg btn-primary">Assine ja</a>
						         		</div>
					         		</div>
					         		';
					         		
					         	   $delay3 = $delay3 + 200;
					         	}else{
					         	   echo '		
					         		<div class="col-sm-3">
						         		<div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="'.$delay3.'ms">
							         		<h3>'.$controle['Plan_nome'].' ' .'<button type="button" class="btn btn-danger btn-xs fa fa-exclamation " aria-hidden="true"" data-toggle="modal" data-target="#'.$controle['Plan_titulo'].'" ></button></h3>
							         		<div class="price">
							         			<h4>R$'.$controle['plan_valor'].'</h4>
	          									
							         		</div>
							         		<ul>						    
																			
							         		</ul>
							         		<a href="solicitaCadastro.php" class="btn btn-lg btn-primary">Assine ja</a>
						         		</div>
					         		</div>
					         		';
					         		
					         	   $delay3 = $delay3 + 200;
					         	}
					         }
					         ?>
					        </div>
					   </div>
				  </div>
				</div>
			</div>
		</div>
      </div>   
  
   
   
   </div>
</section><!-- fim tabela plano -->
