<?php 
	
	//require("controller/BDPkg_pagamento.php");
	
	include(dirname(__FILE__).'/controller/BDPkg_pagamento.php');
?>

<!-- Relatorio de Contas -->



<script type="text/javascript">
	$(document).ready(function() {
		   $('#modalAlerta').modal('show');
		});
</script>
               <div class="col-md-12 col-sm-12 col-xs-12">
               
                <div class="x_panel id="atualizarpanel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Últimas Contas </h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  														
                    <!-- start accordion -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      	<?php 
						
                      	$BDPkg_pagamentos = new BDPkg_pagamentos();
                      	
                    
                      	$consultapagamentos = $BDPkg_pagamentos->listPagamentoByUser($idCliente);
                      	
                      	
                      	if($consultapagamentos != Null){
                      	
                      	$primeiropagamento = $BDPkg_pagamentos->listPrimeiroPagamentosByUser($idCliente);

                      	
                      	//pego ano atual
                      	$anoatual = date('Y');
                      	
                      	//pego mes atual
                      	$dataatual = date('m');
                      	
                      	//pego mes de criacao da conta
                      	$datacriacao = date('m', strtotime($primeiropagamento[0]));
                        
                      	//pego ano de criaçao da conta
                      	$anodatacriacao = date('Y', strtotime($primeiropagamento[0]));
                      	
                      	if($anoatual == $anodatacriacao){
                      		//subtracao data mes atual menos mes de cricao da conta
                      		$contador = $dataatual - $datacriacao;
                      		 
                      	}else{
                      		 
                      		//subtraindo tempo entre os anos entre atual e primeira recarga
                      		$contador = $anoatual - $anodatacriacao;
                      		 
                      		//multiplica resultado da subtração por quantidade de meses em um ano
                      		$contador = $contador * 12;
                      	
                      		//Primero ano ?
                      		if($contador == 12 ){
                      	
                      			//subtraio o mes da primeira recarga pelo mes da dataatual logo em  seguida subtraio por 12
                      			$contador = $contador - ($datacriacao - $dataatual);
                      				
                      			//segundo ano em diante
                      		}else{
                      			 
                      			//default 7
                      			$contador = $contador - $datacriacao;
                      		}
                      	}
                      	
                        //declarando 0 na variavel que vai controlar o laço
                        $numlaco = 0;
                        
                        //verifico se a subtracao deu inferior ou igual a 7 usando funcao ABS para positivar resultado
                      	if(abs($contador) <= 7){
                      		$numlaco = abs($contador);
                      	}else{
                      		$numlaco = 7;
                      	}
   
						//for com a quantidade de meses que o cliente tem na empresa ate a data de criacao com max 7
						//for($i=0;$i<=abs($numlaco);$i++){
							
						setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
						date_default_timezone_set('America/Sao_Paulo');
						
						//variavel controle para abertura de tabela
						$i = 0;
						
						//Varialvel controle para POP-UP
						$y = 0;
						
						
						foreach ($consultapagamentos as $consultapagamento){						

						//subtraindo meses da data total
						//$vencimentodata = date('d', strtotime($consultapagamento['pag_data_vencimento']));
						//$mesnumeric = date('m', strtotime($consultapagamento['pag_data_vencimento']));
						//$mesword = strftime("%B", strtotime($consultapagamento['pag_data_vencimento']));
						//$yearnumeric = date('Y', strtotime($consultapagamento['pag_data_vencimento']));
						
						
			
						$yearnumeric = date('Y', strtotime('- 1 months', strtotime($consultapagamento['pag_data_vencimento'])));
						$mesnumeric = date('m', strtotime('- 1 months', strtotime($consultapagamento['pag_data_vencimento'])));
						$mesword = strftime("%B", strtotime('-1 months', strtotime($consultapagamento['pag_data_vencimento'])));
						
						$vencimentomes = $consultapagamento['pag_data_vencimento'];
						
						echo '
								
                  		<div class="panel">';
						if($i == 0){
	                        echo '<a class="panel-heading" role="tab" id="heading'.$i.'" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'" aria-expanded="true" aria-controls="collapse'.$i.'">
							<h4 class="panel-title">'.strtoupper( $mesword) .'/'.$yearnumeric.'</h4></a>
	                        <div id="collapse'.$i.'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading'.$i.'">';
	                        $gastosmes = $BDPkg_cdr->gastosmes($idCliente);
	                        
	                        //obtendo gastos no mes
	                        $valormes = $BDPkg_cdr->gastosConta($idCliente,$mesnumeric,$yearnumeric);
	                        
	                        echo '<div class="panel-body">
	                        <table class="table table-bordered">
	                        <thead>
	                        <tr>
	                        <th>Vencimento</th>
	                        <th>Valor R$</th>
	                        <th>Status</th>
	                        <th>Conta</th>
	                        <th>Boleto</th>
	                        <th>Informar Pagamento</th>
	                        </tr>
	                        </thead>
	                        <tbody>
	                        <tr>
							<th scope="row">'.
                                  date("d/m/Y", strtotime($vencimentomes))
                                  .'</th>
	                        <td>'.substr($consultapagamento['pag_valor'],0,-2 ).'</td>	
	                        <td class="active">'.$consultapagamento['pag_status'].'</td>
	                        
                              

                            <td><button type="button" class="btn btn-round btn-primary btn-sm ">Visualizar PDF</button></td>
                            <td><a href="'.$consultapagamento['pag_link_boleto'].'"><button id="btn_emitir_boleto" type="button" class="btn btn-round btn-primary btn-sm">Visualizar Boleto</button></a></td> ';
                                  
							$status = $consultapagamento['pag_status'];
				
                            if($status  != "paid"){
								
                            	if($y == 0){
                            		
                            		echo '
                                  		
                                  			 <div class="modal fade" id="modalAlerta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										        <div class="modal-dialog" role="document">
										            <div class="modal-content">
										                <div class="modal-header">
										                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										                    <h2 class="modal-title text-center" id="myModalLabel">Atenção!</h2>
										                </div>
										                <div class="modal-body">
						                                 
																	<h4 class="text-center">Você tem pagamentos em aberto!</h4>
									
										                </div>
										                <div class="modal-footer">
										                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
										                </div>
										            </div>
										        </div>
										    </div>
                                  		';
                            		
                            		
                            		$y = $y + 1;
                            	}else{
                            		
                            		//Não faz nada
                            		
                            	}
                            	
                            	if($consultapagamento['pag_inf_pagamento'] == 0){
                            	echo '<td id="atualizainfpag"><!-- Trigger the modal with a button -->
                                  		<button type="button" class="btn btn-primary btn-round  btn-sm" data-toggle="modal" data-target="#infpagamento">
                                  		Informar Pagamento</button>
                                  		</td>
                                  		<!-- Modal Informar pagamento -->
                                  		<div id="infpagamento" class="modal fade" role="dialog">
                                  		<div class="modal-dialog">
                                  		<!-- Modal content-->
                                  		<div class="modal-content">
                                  		<div class="modal-header">
                                  		<button type="button" class="close" data-dismiss="modal">&times;</button>
                                  		<h4 class="modal-title">Atenção!</h4>
                                  		</div>
                                  		<div class="modal-body">
                                  		<h3>Você tem certeza que deseja informar pagamento ?</h3>
                                  		<p>Ao informar pagamento na conta desse mês você não poderá efetuar essa função novamente, e caso o pagamento
                                  		não tenha sido efetuado a liberação da conta somente ocorrerá após compensasão bancaria.</p>
                                  		</div>
                                  		<div class="modal-footer">
                                  		<!-- PROCESSAR DE FORMA QUE INSERA NA TABELA E INFORMA A RESPOSTA PARA O USUÁRIO -->
                                  
                                  		<form id="form" method="POST" action="controller/insere_infpagamento.php" class="" enctype="multipart/form-data">
                                  		<!--  hide -->
                                  		<input required type="text" class="form-control hide" id="cliente" placeholder="cliente" value="'. $idCliente .'">
                                  		<input required type="text" class="form-control hide" id="idpag" placeholder="cliente" value="'. $consultapagamento['pag_id'] .'">
                                  				<button id="btn-infpagamento" type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
                                  				<button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                  				</form>
                                  				<!-- SOMENTE FECHA O ITEM -->
                                  
                                  				</div>
                                  				</div>
                                  
                                  				</div>
                                  				</div>
                                  				 
                                  				';
								}else{
                                  
					
									echo '<td><button type="button" class="btn btn-round btn-primary btn-sm disabled">Informar Pagamento  (Já Informado)</button></td>';
								}
               
							}else{
                                  
								echo '<td><button type="button" class="btn btn-round btn-primary btn-sm disabled">Informar Pagamento</button></td>';
							}      

						}else{
                        	
							echo '<a class="panel-heading collapsed" role="tab" id="heading'.$i.'" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'" aria-expanded="false" aria-controls="collapse'.$i.'">	
	                       	<h4 class="panel-title">'.strtoupper( $mesword).'/'.$yearnumeric.'</h4></a>
	                       	<div id="collapse'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$i.'">
							 <div class="panel-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Vencimento</th>
                                  <th>Valor R$</th>
                                  <th>Status</th>
                                  <th>Conta</th>
                                  <th>Boleto</th>
                                  <th>Informar Pagamento</th>
                                </tr>
                              </thead>
							 <tbody>
                                <tr>
							<th scope="row">'.
							date("d/m/Y ",strtotime($vencimentomes))
							.'</th>
	                       	<td>'.substr($consultapagamento['pag_valor'],0,-2 ).'</td>
                            <td class="active">'.$consultapagamento['pag_status'].'</td>	
                              		
                            <td><button type="button" class="btn btn-round btn-primary btn-sm ">Visualizar PDF</button></td>		
                            <td><a href="'.$consultapagamento['pag_link_boleto'].'"><button id="btn_emitir_boleto" type="button" class="btn btn-round btn-primary btn-sm">Visualizar Boleto</button></a></td> ';   		
                            
							$status = $consultapagamento['pag_status'];
							
                            if($status  != "paid"){
								if($consultapagamento['pag_inf_pagamento'] == 0){
                            	echo '<td id="atualizainfpag"><!-- Trigger the modal with a button -->
										<button type="button" class="btn btn-primary btn-round  btn-sm" data-toggle="modal" data-target="#infpagamento">
											Informar Pagamento</button>	
	                       			</td>
	                       				    <!-- Modal Informar pagamento -->
												<div id="infpagamento" class="modal fade" role="dialog">
												  <div class="modal-dialog">
												    <!-- Modal content-->
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal">&times;</button>
												        <h4 class="modal-title">Atenção!</h4>
												      </div>
												      <div class="modal-body">
												        <h3>Você tem certeza que deseja informar pagamento ?</h3>
												        <p>Ao informar pagamento na conta desse mês você não poderá efetuar essa função novamente, e caso o pagamento
												        não tenha sido efetuado a liberação da conta somente ocorrerá após compensasão bancaria.</p>
												      </div>
												      <div class="modal-footer">
												        <!-- PROCESSAR DE FORMA QUE INSERA NA TABELA E INFORMA A RESPOSTA PARA O USUÁRIO -->
												     	
												     	 <form id="form" method="POST" action="controller/insere_infpagamento.php" class="" enctype="multipart/form-data">
															     <!--  hide -->
													            <input required type="text" class="form-control hide" id="cliente" placeholder="cliente" value="'. $idCliente .'">
													            <input required type="text" class="form-control hide" id="idpag" placeholder="cliente" value="'. $consultapagamento['pag_id'] .'">																								
															 	<button id="btn-infpagamento" type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
														 		<button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
														 </form>
												      	<!-- SOMENTE FECHA O ITEM -->
												        
												      </div>
												    </div>
												
												  </div>
												</div>
	                       			
									';
								}else{

									
									echo '<td><button type="button" class="btn btn-round btn-primary btn-sm disabled">Informar Pagamento  (Já Informado)</button></td>';
								}
                            	
							}else{
						
								echo '<td><button type="button" class="btn btn-round btn-primary btn-sm disabled">Informar Pagamento</button></td>';
							}    		
                                		     	
						}
                  		
							
                             
                              echo '    
                                  </tr>                       
                              </tbody>
                            </table>
						  </div>
                        </div>
                      </div>';
						
                      $i = $i + 1;
					
					
						}
                      	}else{
                      		
                      		Echo "SEM RESULTADOS! <br /> COMECE JÁ A UTILIZAR O SEU PLANO MOBY!";
                      		
                      	}
						?>	
                    </div>
                    <!-- end of accordion -->
                  </div>
                </div>
               </div>
 