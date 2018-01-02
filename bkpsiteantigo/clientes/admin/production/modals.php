
			    <!-- Este componente é utilizando para exibir um alerta(modal) para o usuário aguardar as consultas via API.  -->
			    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			        <div class="modal-dialog" role="document">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			                    <h4 class="modal-title" id="myModalLabel">Um momento.</h4>
			                </div>
			                <div class="modal-body">
			                    Estamos processando a requisição <img src="gerencianet/img/ajax-loader.gif">.
			                </div>
			                <div class="modal-footer">
			
			                    <button type="button" class="btn btn-primary">Fechar</button>
			                </div>
			            </div>
			        </div>
			    </div>
			
				 <!-- Este componente é utilizando para exibir um alerta(modal) para o usuário aguardar as consultas via API.  -->
			    <div class="modal fade" id="myModalResult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			        <div class="modal-dialog modal-lg" role="document">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			                    <h4 class="modal-title" id="myModalLabel">Retorno da emissão de boleto.</h4>
			                </div>
			                <div class="modal-body">
			
						        <!--div responsável por exibir o resultado da emissão do boleto-->
						        <div id="boleto" class="hide">
						            <div class="panel panel-success">
						                <div class="panel-body">
											<div class="table-responsive">
						                      <table class="table">
						
						                        <caption></caption>
						                        <thead>
						                            <tr>
						                                <th>ID da transação(<em>charge_id</em>)</th>
						                                <th>Código de Barras (<em>barcode</em>)</th>
						                                <th>Link (<em>link</em>)</th>
						                                <th>Vencimento (<em>expire_at</em>)</th>
						                                <th>Status (<em>status</em>)</th>
						                                <th>Total (<em>total</em>)</th>
						                                <th>Método de pagamento (<em>payment</em>)</th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <tr id="result_table">
						                            </tr>
						                        </tbody>
						                    </table>
						
											 </div>
						                </div>
						            </div>
						        </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    
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
				        não tenha sido efetuado a liberação da conta somente ocorrerá no prazo previsto pela empresa.</p>
				      </div>
				      <div class="modal-footer">
				        <!-- PROCESSAR DE FORMA QUE INSERA NA TABELA E INFORMA A RESPOSTA PARA O USUÁRIO -->
				     	
				     	 <form id="form" method="POST" action="controller/insere_infpagamento.php" class="" enctype="multipart/form-data">
							     <!--  hide -->
					            <input required type="text" class="form-control hide" id="cliente" placeholder="cliente" value=" <?php echo $idCliente ?> ">
					            																									
							 	<button id="btn-infpagamento" type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
						 		<button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
						 </form>
				      	<!-- SOMENTE FECHA O ITEM -->
				        
				      </div>
				    </div>
				
				  </div>
				</div>
			    
				<!-- Modal -->
				<div id="modalConfirmacao" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Informar pagamento</h4>
				      </div>
				       <div class="modal-body">
						        <!--div responsável por exibir o resultado da emissão do boleto-->
						        <div id="returninfopag" class="hide">
						            <div class="panel panel-success">
						                <div class="panel-body">
											<p id="resultadogeral"></p>
						                </div>
						            </div>
						        </div>
			            </div>
			            <div class="modal-footer">
			             	<button type="button" onclick="atualizarpagina()" class="btn btn-default" data-dismiss="modal">OK</button>
			            </div> 
					  </div>
				  </div>
				</div>
	
	<script>
		function atualizarpagina(){
		location.reload();
		}
	</script>		    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    