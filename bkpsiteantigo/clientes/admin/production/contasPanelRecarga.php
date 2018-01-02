<!-- Relatorio de Contas -->

               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Últimas Recargas </h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  														
                    <!-- start accordion -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      	<?php 
						
	                      	//primeira recarga
	                      	$primeirarecarga = $BDPkg_refill->listRefillByUserPrimaryRecarga($idCliente);
	                      	
	                      	if($primeirarecarga != Null){
	                      	
	                      	//pego ano atual
	                      	$anoatual = date('Y');
	                      	
	                      	//pego mes atual
	                      	$dataatual = date('m');
	                      	
	                      	//Obtendo ano da primeiro recarga
	                      	$anoprimeirarecarga = date('Y', strtotime($primeirarecarga['date']));
	                      	
	                      	//Obtendo mes da primeira recarga
	                      	$mesprimeirarecarga = date('m', strtotime($primeirarecarga['date']));
	                      	
	                      	
	                      	if($anoatual == $anoprimeirarecarga){
	                      		//subtracao data mes atual menos mes de cricao da conta
	                      		$contador = $dataatual - $mesprimeirarecarga;
	                      		
	                      	}else{
	                      		
								//subtraindo tempo entre os anos entre atual e primeira recarga
	                      		$contador = $anoatual - $anoprimeirarecarga;
	                      		
	                      		//multiplica resultado da subtração por quantidade de meses em um ano
	                      		$contador = $contador * 12;
	                      			
	                      		//Primero ano ? 
	                      		if($contador == 12 ){
	                      			
	                      			//subtraio o mes da primeira recarga pelo mes da dataatual logo em  seguida subtraio por 12
	                      			$contador = $contador - ($mesprimeirarecarga - $dataatual);
	 							
	                      		//segundo ano em diante
	                      		}else{
	        						
	                      			//default 7
	                      			$contador = $contador - $mesprimeirarecarga;
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
							for($i=0;$i<=abs($numlaco);$i++){
								
								setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
								date_default_timezone_set('America/Sao_Paulo');
		
								//subtraindo meses da data total
								$mesnumeric = date('m', strtotime('-'.$i . 'months', strtotime(date('Y-m-d'))));
								$mesword = strftime("%B", strtotime('-'.$i . 'months', strtotime(date('Y-m-d'))));
								$yearnumeric = date('Y', strtotime('-'.$i . 'months', strtotime(date('Y-m-d'))));
								
								$recargashistorico = $BDPkg_refill->listRefillByUserAndMonth($idCliente,$mesnumeric);

								//montando os meses a partir da data da primeira recarga
								echo '
		                  		<div class="panel">';
								if($i == 0){
			                        echo '<a class="panel-heading" role="tab" id="heading'.$i.'" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'" aria-expanded="true" aria-controls="collapse'.$i.'">
									<h4 class="panel-title">'.strtoupper( $mesword) .'/'.$yearnumeric.'</h4></a>
			                        <div id="collapse'.$i.'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading'.$i.'">'; 
								}else{	
									echo '<a class="panel-heading collapsed" role="tab" id="heading'.$i.'" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'" aria-expanded="false" aria-controls="collapse'.$i.'">	
			                        <h4 class="panel-title">'.strtoupper( $mesword).'/'.$yearnumeric.'</h4></a>
			                       	<div id="collapse'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$i.'">';
								}
		                        echo '  <div class="panel-body">
		                            <table class="table table-bordered">
		                              <thead>
		                                <tr>
		                                  <th>Data da recarga</th>
		                                  <th>Descrição</th>
		                                  <th>Recarga R$</th>
		                                </tr>
		                              </thead>
									 <tbody>';
		                        //Obtendo recarga por recarga feita no mes filtrado       
		                        foreach($recargashistorico as $recargahistorico){
		                        	
			                        	echo '  <tr>
				                              		<th scope="row">'.
					                                  date("Y-m-d", strtotime($recargahistorico['date'])).
					                                '</th>
					                                <td>'.$recargahistorico['description'].'</td>
					                              	<td class="active">'.substr($recargahistorico['credit'],0,-3 ).'</td>
			                                	</tr>';
		                        	}
			                           echo ' 
			                        		
			                              </tbody>
			                            </table>
									  </div>
			                        </div>
			                      </div>
			                      ';} 
								
	                      		}else{
		                      		
		                      		echo "Sem Histórico <br /> Faça já uma recarga Moby!";
		                      		
		                      	}
	                      		
						?>	
                    </div>
                    <!-- end of accordion -->
                  </div>
                </div>
               </div>
           