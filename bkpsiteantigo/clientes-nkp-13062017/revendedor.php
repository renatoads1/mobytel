<?php
include("header.php");

?>
<section id="movel">
    <div class="container">
       <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2><strong>Seja um de nossos revendedores!</strong></h2>
        </div>
      	<div class="row">
           <div class="col-sm-6 text-center wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" >
          		<img class="img-responsive" src="images/revenda/3.jpg" alt="">
           </div>
           <div class="col-sm-6 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms" >
          		<p>Se você tem espirito empreendedor, gosta de lidar com o público, gosta de trabalhar, desenvolver equipe de venda e ser recompensado por isso. Venha ser um revendedor Moby.</p>
                <br />
                <h4>Como Funciona</h4>
                <p>Você terá  a sua disposição o sistema Moby  revenda on-line que poderá:</p>
				<ul>
				     <li>Definir o valor que será cobrado de seus clientes;</li>
				    <li>Adicionar clientes;</li>
				    <li>Abertura de contas ilimitadas para usuários finais;</li>
				    <li>Total autonomia sobre a operação;</li>
                </ul>
          </div>
          <br />	
          <a href="#formRv" class="wow fadeInUp pull-right btn btn-lg btn-primary">Preencha o formulario abaixo!</a>		
        </div>
       </div>
	  		<div class="row controle-formulario">
            <div class="col-sm-12" id="formRv">
              <div class="panel panel-danger">
              <div class="panel-heading text-center">
      	              <b>Seja um revendedor.</b>
      	      </div>
      	      <div class="panel-body controle-formularios"> 
              <form method="POST" action="controller/send-email-rv.php" enctype="multipart/form-data">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
               		<div class="row">
               		 <div class="col-sm-12">
	               		<!-- Text input-->
							<div class="form-group form-group-sm">
						  		<label for="rvNomeFantasia">Nome Fantasia:</label>  
						  		<input id="rvNomeFantasia" name="rvNomeFantasia" type="text" placeholder="Digite o nome fantasia de sua empresa" class="form-control input-md" required="required">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<!-- Text input-->
							<div class="form-group form-group-sm">
							  <label for="rvDoc">CNPJ:</label>  
							  <input id="rvDoc" name="rvDoc" type="text" placeholder="Digite seu CNPJ" class="form-control input-md">
					    	</div>
						</div>
						<div class="col-sm-6">
							<!-- Text input-->
							<div class="form-group form-group-sm">
							   <label class=" control-label" for="rvEmail">E-mail:</label>  
				     			   <input id="rvEmail" name="rvEmail" type="text" placeholder="Seu e-mail" class="form-control input-md" required="required">
				    		</div>
						</div>
					</div>
    				<div class="row">
						<div class="col-sm-6">
							<!-- Text input-->
							<div class="form-group form-group-sm">
							  <label for="rvTel">Telefone:</label>  
							 
							  <input id="rvTel" name="rvTel" type="text" placeholder="Seu Telefone Fixo" class="form-control input-md">
							
							</div>
						</div>
						<div class="col-sm-6">
							<!-- Text input-->
							<div class="form-group form-group-sm">
							  <label class="control-label" for="rvCelular">Celular:</label>  	  
							  <input id="rvCelular" name="rvCelular" type="text" placeholder="Seu Telefone Celular" class="form-control input-md">	 
							</div>
						</div>
					</div>
					<div class="row">
               		 <div class="col-sm-12">
	               		<!-- Text input-->
							<div class="form-group form-group-sm">
						  		<label for="rvEndereco">Endereço:</label>  
						  		<input id="rvEndereco" name="rvEndereco" type="text" placeholder="Digite o seu endereço" class="form-control input-md" required="required">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<!-- Text input-->
							<div class="form-group form-group-sm">
							  <label for="rvCidade">Cidade:</label>  
							  <input id="rvCidade" name="rvCidade" type="text" placeholder="Digite o nome da Cidade onde mora" class="form-control input-md">
							</div>
						</div>
						<div class="col-sm-2">
							<!-- Text input-->
							<div class="form-group form-group-sm">
							  <label class="control-label" for="rvEstado">Estado</label>  
							 	  <input id="rvEstado" name="rvEstado" type="text" placeholder="Sigla" class="form-control input-md">
							</div>
						</div>
						<div class="col-sm-4">
							<!-- Text input-->
							<div class="form-group form-group-sm">
							  <label class="control-label" for="rvCEp">CEP</label>  
							  <input id="rvCep" name="rvCep" type="text" placeholder="Digite seu CEP" class="form-control input-md">
							</div>
						</div>
					</div>
				    
					<!-- Textarea -->
					<div class="form-group form-group-sm">
					  <label class=" control-label" for="rvMensagem">Mensagem:</label>          
					    <textarea class="form-control" id="rvMensagem" name="rvMensagem" placeholder="Digite uma mensagem "></textarea>
					</div>

				<!-- Button (Double) -->
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