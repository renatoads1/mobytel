<?php
include("header.php");
?>

<section id="movel">
    <div class="container">
       <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2><strong>Trabalhe Conosco</strong></h2>
        </div>
      	<div class="row">
           <div class="col-sm-6 text-center wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" >
          		<img class="img-responsive" src="images/revenda/1.png" alt="">
           </div>
           <div class="col-sm-6 text-justify wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms" >
          		<p>Venha desenvolver sua carreira com o mundo de possibilidades que a Moby Telecom abre para você. 
          		Aprimore seu talento em um dos ramos que mais cresce no mundo. 
          		Somos uma das maiores empresas de telefonia IP do brasil. 
          		Investimos no potencial de nossos colaboradores e oferecemos oportunidades para o seu desenvolvimento pessoal e profissional. 
          		<br />Venha conquistar o mundo da telefonia IP com a Moby Telecom!</p>
          </div>
          <br />
          <br />
          <a href="#formTc" class="wow fadeInUp pull-right btn btn-lg btn-primary">Preencha o formulario abaixo!</a>			
        </div>
       </div>
		<div class="row controle-formulario" id="formTc">
            <div class="col-sm-12 ">
              <div class="panel panel-danger">
              <div class="panel-heading text-center">
      	              <b>Envie seu curriculo.</b>
      	      </div>
      	      <div class="panel-body controle-formularios" > 
              <form method="post" action="controller/send-email-tc.php" enctype="multipart/form-data">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
               		<div class="row">
               		 <div class="col-sm-12">
	               		<!-- Text input-->
							<div class="form-group form-group-sm">
						  		<label  class="control-label" for="tcnome">Nome:</label>  
						  		<input id="tcnome" name="tcnome" type="text" placeholder="Seu Nome" class="form-control input-md" required="required">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<!-- Text input-->
							<div class="form-group form-group-sm">
							  <label class="control-label" for="tctel">Telefone:</label>  
							  <input id="tctel" name="tctel" type="text" placeholder="Seu Telefone Fixo" class="form-control input-md" required="required">
							</div>
						</div>
						<div class="col-sm-6">
							<!-- Text input-->
							<div class="form-group form-group-sm">
							  <label class="control-label" for="tccelular">Celular:</label>  
							  <input id="tccelular" name="tccelular" type="text" placeholder="Seu Telefone Celular" class="form-control input-md" required="required">
							</div>
						</div>
					</div>
				<!-- Text input-->
				<div class="form-group form-group-sm">
				  <label class=" control-label" for="tcemail">E-mail:</label>  
				  <input id="tcemail" name="tcemail" type="text" placeholder="Seu e-mail" class="form-control input-md" required="required">
				</div>
				<!-- Textarea -->
				<div class="form-group form-group-sm">
				  <label class="control-label" for="tcobjetivo">Objetivo Profissional:</label>              
				    <textarea class="form-control" id="tcobjetivo" name="tcobjetivo" placeholder="Um breve resumo sobre seu objetivo profissional" required="required"></textarea>
				</div>
				
				<!-- Textarea -->
				<div class="form-group form-group-sm" >
				  <label class=" control-label" for="tcformacao">Formação Acadêmica:</label>                  
				    <textarea class="form-control" id="tcformacao" name="tcformacao" placeholder="Diga-nos sobre sua formação acadêmica" required="required"></textarea>
				</div>
				
				<!-- Textarea -->
				<div class="form-group form-group-sm">
				  <label class=" control-label" for="tcdados">Dados Complementares:</label>            
				    <textarea class="form-control" id="tcdados" name="tcdados" placeholder="Dados complementares" required="required"></textarea>
				</div>
				
				<!-- Textarea -->
				<div class="form-group form-group-sm">
				  <label class=" control-label" for="tcexp">Experiência Profissional:</label>               
				    <textarea class="form-control" id="tcexp" name="tcexp" placeholder="Diga-nos um pouco sobre suaa experiência profissional" required="required"></textarea>
				</div>
				<!-- Multiple Checkboxes (inline) -->
				<div class="form-group form-group-sm">
				  <label id="tcperg"  class="control-label" for="tcpergunta">Você sabe o que é telefonia IP ?</label>
			          <label class="checkbox-inline" for="tcpergunta-0">
				      <input type="checkbox" name="tcpergunta" id="tcpergunta-0" value="Sim">
				      Sim
				    </label>
				    <label class="checkbox-inline" for="tcpergunta-1">
				      <input type="checkbox" name="tcpergunta" id="tcpergunta-1" value="Não">
				      Não
				    </label>
					<textarea class="form-control" id="tcresp" name="tcresp" placeholder="Conte nos um pouco sobre sua experiência com telefonia IP"></textarea>
				
				</div>
				
				<!-- File Button --> 
				<div class="form-group form-group-sm">
				  <label class=" control-label" for="tccurriculo">Curriculo:*</label>
				    <input  name="input-file" class="input-file" type="file">
				</div>
				
				<!-- Button (Double) -->
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group form-group-sm">
							<div class=" pull-right">
								<button type="submit" class="btn btn-success" >Enviar</button>
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