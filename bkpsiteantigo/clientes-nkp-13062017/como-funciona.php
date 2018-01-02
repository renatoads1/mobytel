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

<section id="fixo">
    <div class="container">
	   <div class="row">

      	  <div class="panel-body">
				<ul id="hover-branca" class="nav nav-tabs  ">
					<li class="new active"><a data-toggle="tab" href="#voip">O que é Telefonia por IP?</a></li>
					<li class="new" ><a data-toggle="tab" href="#funciona">Como funciona?</a></li>
					<li class="new"><a data-toggle="tab" href="#tecnologia">Como Usar a Telefonia IP</a></li>
 				    <li class="new"><a data-toggle="tab" href="#computador">No Computador</a></li>
  					<li class="new"><a data-toggle="tab" href="#telefone">No Telefone</a></li>	
 					<li class="new"><a data-toggle="tab" href="#telefoneip">No Telefone IP</a></li>
 					<li class="new"><a data-toggle="tab" href="#celular">No Celular</a></li>
				</ul>
				<div class="tab-content">
				  <div id="voip" class="tab-pane fade in active">
				    	 <div class="pricing-table">
					        <div class="row">
				  				<div class="col-sm-12 controller-comofunciona">
	          
						           <div class="col-sm-4  wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms" >
						          		<img class="center-block img-responsive" src="images/como-funciona/voip_system.png" alt="">    		
						          </div>
						           <div class="col-sm-8 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" >
						          		 <h3>O que é Telefonia IP</h3>
						          		<p>Telefonia IP é uma tecnologia que permite que você através de um computador, smartphone ou até por um aparelho de 
	          							telefone comum receber e/ou faça ligações nacionais ou internacionais com tarifas consideravelmente menores 
	          							do que as cobradas pelas operadoras de telefonia tradicional, fazendo com que você reduza em até 90% os seus 
	          							custos com a telefonia</p> 
										  
						           </div>			
						       </div>
				  			</div>
				  		</div>
				  </div>	
				   <div id="funciona" class="tab-pane fade ">
				    	 <div class="pricing-table">
					        <div class="row">
				  				<div class="col-sm-12 controller-comofunciona">
	          
						           <div class="col-sm-4  wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms" >
						          		<img class="center-block img-responsive" src="images/como-funciona/como_funciona.png" alt="">    		
						          </div>
						           <div class="col-sm-8 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" >
						          		 <h3>Como Funciona</h3>
						          		<p>Quando você faz uma ligação por um telefone IP, sua voz é convertida em dados e transmitida pela internet e você faz e recebe chamadas como se estivesse utilizando serviço de telefonia tradicional.
											Na sua casa,  na empresa, no hotel ou em qualquer lugar que você tenha internet disponível. Você poderá usar a sua telefonia.
											</p>         
										  
						           </div>			
						       </div>
				  			</div>
				  		</div>
				  </div>
				   <div id="tecnologia" class="tab-pane fade ">
				    	 <div class="pricing-table">
					        <div class="row">
				  				<div class="col-sm-12 controller-comofunciona">
	          
						           <div class="col-sm-4  wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms" >
						          		<img class="center-block img-responsive" src="images/como-funciona/como_usar.jpg" alt="">    		
						          </div>
						           <div class="col-sm-8 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" >
						          		 <h3>Como usar a Tefonia IP</h3>
						          		<p>Para utilizar a Telefonia IP você conecta seu telefone à sua conexão de Internet de alta velocidade utilizando um adaptador de telefone analógico ou diretamente, utilizando um Telefone IP.</p>          		  
						           </div>			
						       </div>
				  			</div>
				  		</div>
				  </div>
				   	
				  <div id="computador" class="tab-pane fade ">
				    	 <div class="pricing-table">
					        <div class="row">
					     		<div class="col-sm-12 controller-comofunciona">
	          
						           <div class="col-sm-4  wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms" >
						          		<img class="center-block img-responsive" src="images/como-funciona/no_computador.jpg" alt="">    		
						          </div>
						           <div class="col-sm-8 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" >
						          		  <h3>Discador/Aplicativo/Softphone</h3>
	          							<p>É um software que você instala no Computador ou no Celular. 
	          							Ele é semelhante ao discador comum do teclado de telefone, e é nele que você faz as ligações.</p>	  
						           </div>			
						       </div>
					        </div>  
					    </div>        
				  </div>
				  
				  <div id="telefoneip" class="tab-pane fade">
				  		  
				    	 <div class="pricing-table">
					        <div class="row">
					       		<div class="col-sm-12 controller-comofunciona">
	          
						           <div class="col-sm-4  wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms" >
						          		<img class="center-block img-responsive" src="images/como-funciona/no_telefone_ip.jpg" alt="">    		
						          </div>
						           <div class="col-sm-8 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" >
						          		
	          						 <h3>Telefone IP:</h3>
	          						<p>É um aparelho específico que se conecta diretamente à rede de computadores recebendo voz.
									Ele a junção entre um ATA e um aparelho de telefone convencional, pois se parecem com os convencionais, mas utilizam os conectores RJ-45.
									</p>   
										  
						           </div>			
						       </div>
					        </div>
					     </div>
				  </div>
				  <div id="telefone" class="tab-pane fade">
				  		  
				    	 <div class="pricing-table">
					        <div class="row">
					       		<div class="col-sm-12 controller-comofunciona">
	          
						           <div class="col-sm-4  wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms" >
						          		<img class="center-block img-responsive" src="images/como-funciona/no_telefone.jpg" alt="">    		
						          </div>
						           <div class="col-sm-8 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" >
						          		 <h3>Adaptador Moby:</h3>
	          							<p>É um adaptador que transforma um telefone analógico em um IP assim ele permite que você faça ligações , sem a necessidade de computador.
										Você utiliza todos os recursos de telefonia convencional, com o benefício de conectar o aparelho à internet.
										</p>   
										  
						           </div>			
						       </div>
					        </div>
					     </div>
				  </div>
				  <div id="celular" class="tab-pane fade">
				       	  
				   		 <div class="pricing-table">
					        <div class="row">
					        	<div class="col-sm-12 controller-comofunciona">
	          
						           <div class="col-sm-4  wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms" >
						          		<img class="center-block img-responsive" src="images/como-funciona/7.jpg" alt="">    		
						          </div>
						           <div class="col-sm-8 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" >
						          		 <h3>Ulizando aplicativo no Celular</h3>
						          		<p>Você pode utilizar a sua linha voip também em seu smartphone.
										   Basta que ele tenha acesso à rede de internet móvel 3G ou Wi-Fi.
									       Nosso softphone é compátivel com iPhone e dispositivos Android, Windows Phone, Symbian e Blackberry</p> 
										  
						           </div>			
						       </div>
					        </div>
					   </div>
				  </div>
				</div>
			</div>
			<a href="#pricing" class="wow fadeInUp pull-right btn btn-lg btn-primary">Faça já um de nossos Planos!</a>
			<?php 
 			include("singleplano.php");
 			?>
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
 </section><!--/#descricao single-->    
       </div>       
    </div>
</section><!--/#descricao fixo-->

      	



<?php
include("footer.php");
?>
</body>
</html>