<?php
include("header.php");
?>

<section id="movel">
    <div class="container">
       <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2><strong>Seja um franqueado Moby!</strong></h2>
        </div>
      	<div class="row">
           <div class="col-sm-6 text-center wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" >
          		<img class="img-responsive" src="images/revenda/2.png" alt="">
           </div>
           <div class="col-sm-6 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms" >
          		<p>Invista em um dos ramos que mais cresce no mundo. 
          		Invista em Telefonia IP. Faça valer o seu investimento. 
          		Se torne um franqueado Moby Telecom. Tenha a garantia de um serviço de qualidade e conhecido em todo território nacional. 
          		Venha ser um franqueado!</p>
          		<br />
          		<a href="#formFr" class="wow fadeInUp pull-right btn btn-lg btn-primary">Preencha o formulario abaixo!</a>
          </div>			
        </div>
        </div>
         	<div class="row controle-formulario" id="formFr">
            <div class="col-sm-12 ">
              <div class="panel panel-danger">
              <div class="panel-heading text-center">
      	              <b>Entre em contato.</b>
      	      </div>
      	      <div class="panel-body controle-formularios">    
	              <form method="POST" action="controller/send-email-fr.php" enctype="multipart/form-data">
	                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
	               		<div class="row">
	               		 <div class="col-sm-12">
		               		<!-- Text input-->
								<div class="form-group form-group-sm">
							  		<label for="frNomeFantasia">Nome / Nome Fantasia:</label>  
							  		<input id="frNomeFantasia" name="frNomeFantasia" type="text" placeholder="Digite o nome fantasia de sua empresa" class="form-control input-md" required="required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<!-- Text input-->
								<div class="form-group form-group-sm">
								  <label for="frDoc">CPF / CNPJ:</label>  
								  <input id="frDoc" name="frDoc" type="text" placeholder="Digite seu CNPJ" class="form-control input-md">
								</div>
							</div>
							<div class="col-sm-6">
								<!-- Text input-->
								<div class="form-group form-group-sm">
								   <label class="control-label" for="frEmail">E-mail:</label>  
					 			   <input id="frEmail" name="frEmail" type="text" placeholder="Seu e-mail" class="form-control input-md" required="required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<!-- Text input-->
								<div class="form-group form-group-sm">
								  <label class="control-label" for="frTel">Telefone:</label> 						 
								  <input id="frTel" name="frTel" type="text" placeholder="Seu Telefone Fixo" class="form-control input-md">						
								</div>
							</div>
							<div class="col-sm-6">
								<!-- Text input-->
								<div class="form-group form-group-sm">
								  <label class="control-label" for="frCelular">Celular:</label>  						  
								  <input id="frCelular" name="frCelular" type="text" placeholder="Seu Telefone Celular" class="form-control input-md">	 
								</div>
							</div>
						</div>
						<div class="row">
	               		 <div class="col-sm-12">
		               		<!-- Text input-->
								<div class="form-group form-group-sm">
							  		<label  class="control-label" for="frEndereco">Endereço:</label>  
							  		<input id="frEndereco" name="frEndereco" type="text" placeholder="Digite o seu endereço" class="form-control input-md" required="required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<!-- Text input-->
								<div class="form-group form-group-sm">
								  <label class="control-label" for="frCidade">Cidade:</label>  
								  <input id="frCidade" name="frCidade" type="text" placeholder="Digite o nome da Cidade onde mora" class="form-control input-md">
								
								</div>
							</div>
							<div class="col-sm-2">
								<!-- Text input-->
								<div class="form-group form-group-sm">
								  <label class="control-label" for="frEstado">Estado:</label>		  
								  <input id="frEstado" name="frEstado" type="text" placeholder="Sigla" class="form-control input-md">				 
								</div>
							</div>
							<div class="col-sm-4">
								<!-- Text input-->
								<div class="form-group form-group-sm">
								  <label class="control-label" for="frCep">CEP:</label>  
								  <input id="frCep" name="frCep" type="text" placeholder="Digite seu CEP" class="form-control input-md">				 
								</div>
							</div>
						</div>
						<label class="control-label" for="frLocal">Cidade/Estado que deseja investir:</label> 
						<div class="row">
							<div class="col-sm-6">
								<!-- Text input-->
								 
								<div class="form-group form-group-sm">
				    			    <input id="frLocal" name="frLocal" type="text" placeholder="Digite o nome da Cidade" class="form-control input-md">
								</div>
							</div>
							<div class="col-sm-2">
								<!-- Text input-->
								<div class="form-group form-group-sm">
								  <input id="frLocalEstado" name="frLocalEstado" type="text" placeholder="Sigla" class="form-control input-md">
								</div>
							</div>
							<div class="col-sm-4">
								<!-- Text input-->
								<div class="form-group form-group-sm">
								  <input id="frLocalCep" name="frLocalCep" type="text" placeholder="Digite o CEP" class="form-control input-md">
								</div>
							</div>
						</div>
	
						<!-- Textarea -->
						<div class="form-group form-group-sm">
						  <label class=" control-label" for="frMensagem">Mensagem:</label>             
						    <textarea class="form-control" id="frMensagem" name="frMensagem" placeholder="Digite uma mensagem "></textarea>
						</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-sm">
								<div class=" pull-right">
									<button type="submit" class="btn btn-success ">Enviar</button>
									<button type="reset" class="btn btn-danger">Limpar</button>
								</div>
							</div>
						</div>
					</div>
	                </div>
	              </form> 
              </div>
             </div>  
            </div>
          </div>     
    </div>
 </section><!--/#descricao movel-->
<?php
include("footer.php");
?>
</body>
</html>