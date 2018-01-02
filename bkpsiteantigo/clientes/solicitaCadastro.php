<?php
include("header.php");
?>

<section id="solicitaCadastro">
    <div class="container" >
			<div class="row">
			    <div class="col-md-10 col-md-offset-1">
			        <h1 class="text-center"><strong>Solicite sua Conta Moby</strong></h1>
			        <br />
			        <p class="text-center">Entre em contato para solicitar sua conta Moby e ganhe R$ 5,00 em créditos para começar a falar e conhecer a qualidade de nossos serviços.</p>
			        <br />
			        <p class="text-center"><strong>Instruções</strong></p>
			        <ol>
			            <li>Preencha o formulário com todos os dados e clique em enviar</li>
			            <li>Em até 48 horas sua conta Moby pré-pago será criada com R$5,00 em créditos para você utlizar</li>
			            <li>Você receberá um email com dados de sua conta, login e senha para acessar sua página exclusiva</li>
			            <li>Você receberá outro email com infomraçoes de como configurar sua conta Moby em seu equipamento - ATA, Telefonie IP ou Softphone</li>
			            <li>Pronto. Você poderá começar a fazer ligações com até 70% de economia.</li>
			        </ol>
			        <p class="text-center">Em caso de dúvidas entre em contato com nosso suporte por telefone, email ou através de nosso chat</p>
			    </div>
			</div>
			<br />
			<div class="panel panel-danger">
      	          <div class="panel-heading text-center">
      	              <b>Formulário de Solicitação de Cadastro</b>
      	          </div>
      	          <div class="panel-body">
			          <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                          <br />
                          <div class="row">
                              <div class="col-sm-6 col-sm-offset-3">
                                  <form id="main-contact-form" name="contact-form" method="POST" action="#">
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="name">Nome: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="name" name="name" class="form-control" placeholder="Digite seu Nome" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="sname">Sobrenome: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="sname" name="sname" class="form-control" placeholder="Digite seu Sobrenome" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="end">Endereço: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="end" name="end" class="form-control" placeholder="Digite seu Endereço" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="cidade">Cidade: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Digite sua Cidade" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="estado">Estado: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="estado" name="estado" class="form-control" placeholder="Digite seu Estado" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="cep">Cep: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="cep" name="cep" class="form-control" placeholder="Digite seu Cep" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="telefone">Telefone: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Digite seu telefone fixo" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="celular">Celular: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="celular" name="celular" class="form-control" placeholder="Digite seu telefone celular" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="doc">CPF/CNPJ: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="doc" name="doc" class="form-control" placeholder="Digite seu CPF / CNPJ" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="email">E-mail: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="email" name="email" class="form-control" placeholder="Digite seu E-mail" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-2 col-sm-offset-2">
                                                 <label for="senha">Senha: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="senha" name="senha" class="form-control" placeholder="Digite sua Senha" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                          <div class="form-group form-group-sm">
                                              <div class="col-sm-4">
                                                 <label for="senhaconf">Confirme sua senha: </label>
                                              </div>
                                              <div class="col-sm-8">
                                                  <input type="text" id="senhaconf" name="senhaconf" class="form-control" placeholder="Digite seu Senha novamente" required="required" style="border-color:lightgray;">
                                              </div>
                                          </div>
                                      </div>
                                      <br />
		                              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
		                                  <div class="col-sm-10 col-sm-offset-1">
		                                      <div class="form-group form-group-sm">
		                                          <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span>  Enviar</button>
		                                          <button type="reset" class="btn btn-primary"><span class="glyphicon glyphicon-erase"></span>  Limpar</button>
		                                      </div>
		                                  </div>
		                              </div>
                                  </form>   
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
 </section><!--/#descricao sobre nos-->

<?php
include("footer.php");
?>

</body>
</html>