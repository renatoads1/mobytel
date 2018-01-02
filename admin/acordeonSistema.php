 <!--renato-->
 <?php
session_start();
$user_id = $_SESSION['user_id'];// idmbilling  
$user_name = $_SESSION['user_name'];// usuario
$credit = $_SESSION['credit'];// => 271.6020 
$active = $_SESSION['active'];// => 1 
$lastname = $_SESSION['lastname'];// => Azevedo 
$fristname = $_SESSION['fristname'];// => 
$address = $_SESSION['address'];// => R. Claudio Manoel 237 B: Funcionarios 
$cyti = $_SESSION['cyti'];// => 
$state = $_SESSION['state'];// => Minas Gerais 
$country = $_SESSION['country'];// => 55 
$zipcode = $_SESSION['zipcode'];// => 31100-200 
$phone = $_SESSION['phone'];// => 32719979 
$mobyle = $_SESSION['mobyle'];// => 
$email = $_SESSION['email'];// => ti@mobytel.com.br 
$redial = $_SESSION['redial'];// => 340041203 
$doc = $_SESSION['doc'];// => 59339659600 
$envioSMS = $_SESSION['envioSMS'];// => 1 
$cpf = $_SESSION['cpf'];// copcnpj 

$servername = "179.188.16.171";
$username = "mobyfinan";
$password = "monitor1420";
$dbname = "mobyfinan";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    var_dump("Connection failed: " . $conn->connect_error);
}
$sqluser = "SELECT * FROM debitos WHERE id_user = '".$user_id."'";
$result = $conn->query($sqluser);
if ($result->num_rows > 0) {
  //`id`=[value-1],`id_mbiling`=[value-2],
$update = "UPDATE user SET usuario ='".$user_name."',cpfcnpj='".$cpf."',credit='".$credit."',active='".$active."',lastname='".$lastname."',fristname='".$fristname."',address='".$address."',cyti='".$cyti."',state='".$state."',country='".$country."',zipcode='".$zipcode."',phone='".$phone."',mobyle='".$mobyle."',email='".$email."',redial='".$redial."',doc='".$doc."',envioSMS='".$envioSMS."' WHERE id_mbiling = '".$user_id."'";

$upduser = $conn->query($update);

}else{

  $insert = "INSERT INTO user(id_mbiling,usuario,cpfcnpj,credit,active,lastname,fristname,address,cyti,state,country,zipcode,phone,mobyle,email,redial,doc,envioSMS) VALUES ('".  $user_id."','".$user_name."','".$cpf."','".$credit."','".$active."','".$lastname."','".$fristname."','".$address."','".$cyti."','".$state."','".$country."','".$zipcode."','".$phone."','".$mobyle."','".$email."','".$redial."','".$doc."','".$envioSMS."')"; 
  $insertuser = $conn->query($insert);
}



/*
http://192.168.0.253/kingdongle-portabilidade/checkoperadora.php?login=mobytel&senha=moby2323&numero=991500050

host:187.94.66.39
user:root
Senha:jinmknbvwe__@__gkjdenfis
banco:portabilidade
select *from portabilidade_cdr where numero = 031988398385
Claro 021 + 55321
Tim   041 + 55341
OI    031 + 55331
OI    031 + 55335
VIVO  031 + 55320
VIVO  031 + 55323
NEXTEL099 + 55351
NEXTEL099 + 55377
*/

 ?>
<div class="panel-group no_wrap widget uib_w_37 d-margins" data-uib="twitter%20bootstrap/accordion" data-ver="1" id="bs-accordion-1">
<!--painel 1-->
                                    <div class="panel widget panel-default uib_w_38" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
           <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-9" data-parent="#bs-accordion-1">MINHAS TAREFAS</a>
       </h4>
                                        </div>
                                        <div id="bs-accordion-group-9" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col uib_col_26 single-col" data-uib="layout/col" data-ver="0">
                                                    <div class="widget-container content-area vertical-col">

<!--inicio debitos-->
<?php
//include("#.php");
echo("conteudo");
?>
<!--fim debitos-->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<!--painel 2-->
<div class="panel widget panel-default uib_w_38" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
<div class="panel-heading">
<h4 class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-10" data-parent="#bs-accordion-1">RELATÓRIO DE LIGAÇÕES</a>
</h4>
</div>
<div id="bs-accordion-group-10" class="panel-collapse collapse">
<div class="panel-body">
    <div class="col uib_col_26 single-col" data-uib="layout/col" data-ver="0">
        <div class="widget-container content-area vertical-col">
          <div class="col-lg-12">
            <div class="col-lg-2">
              <span class="label label-warning">De:</span>
              <input class="form-control" type="date" name="" placeholder="data">
            </div>
            <div class="col-lg-2">
              <span class="label label-warning">Até:</span>
              <input class="form-control" type="date" name="" placeholder="data">
            </div>
            <div class="col-lg-2">
              <span class="label label-warning">Usuário:</span>
              <select>
                <?php

                ?>
              </select>             
            </div>
            <div class="col-lg-4">4</div>
            <hr>
          </div>
        </div>
    </div>
</div>
</div>
</div>
<!--painel 2-->
<!--painel 3-->
<div class="panel widget panel-default uib_w_40" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
       <div class="panel-heading">
            <h4 class="panel-title">
               <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-11" data-parent="#bs-accordion-1">SERVIDORES</a>
           </h4>
       </div>
           <div id="bs-accordion-group-11" class="panel-collapse collapse">
             <div class="panel-body">
                 <div class="col uib_col_28 single-col" data-uib="layout/col" data-ver="0">
                      <div class="widget-container content-area vertical-col">
                      <div class="row-fluid">
                        <div class="jumbotron col-lg-12">
                          <div class="col-lg-2">
<div class="panel panel-default">
<div class="panel-heading"><span class="span span-warning">Painel de Monitoramento</span></div>
<div class="panel-body">
<p><a class="btn btn-primary btn-lg" href="http://mobytel.com.br/admin/jiraya.php" role="button" target="blank" style="background-color: black;">ABRIR</a></p>
</div>
</div>
                          </div>
                          <div class="col-lg-4"></div>
                          <div class="col-lg-4"></div>
                          <div class="col-lg-2"></div>
                        </div>
                      </div>
                      <!--

                      -->
                      <!--inicio dongles-->
                      
                         
                      <!--fim dongles-->
                      </div>
                 </div>
             </div>
           </div>
</div>
<!--fim painel 3-->
<!--painel 4-->
<div class="panel widget panel-default uib_w_40" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
       <div class="panel-heading">
            <h4 class="panel-title">
               <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-12" data-parent="#bs-accordion-1">MINHAS SENHAS</a>
           </h4>
       </div>
           <div id="bs-accordion-group-12" class="panel-collapse collapse">
             <div class="panel-body">
                 <div class="col uib_col_28 single-col" data-uib="layout/col" data-ver="0">
                      <div id="acordonline" class="widget-container content-area vertical-col">
                         <?php
                          include("minhasSenhas.php");                         
                         ?>
                      </div>
                 </div>
             </div>
           </div>
</div>
<!--fim painel 4-->
<!--painel 5-->
<div class="panel widget panel-default uib_w_40" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
       <div class="panel-heading">
            <h4 class="panel-title">
               <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-13" data-parent="#bs-accordion-1">MEUS CONTATOS</a>
           </h4>
       </div>
           <div id="bs-accordion-group-13" class="panel-collapse collapse">
             <div class="panel-body">
                 <div class="col uib_col_28 single-col" data-uib="layout/col" data-ver="0">
                      <div id="acordonline" class="widget-container content-area vertical-col">
                      <form id="contatos">
                        <input type="text" class="form form-control col-lg-6" placeholder="Nome" name="nome" id="nome" />
                        <input type="text" class="form form-control col-lg-6" placeholder="Telefone" name="tel" id="tel" />
                        <input type="text" class="form form-control col-lg-6" placeholder="E-mail" name="emai" id="email" /><br>
                        <button type="button" class="btn btn-warning" id="btnContatos" >Grava</button>
                      </form>
                         <?php
                          //include("meuscontatos.php");                         
                         ?>
                      </div>
                 </div>
             </div>
           </div>
</div>
<!--fim painel 5-->
<!--painel 6-->
<div class="panel widget panel-default uib_w_40" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
       <div class="panel-heading">
            <h4 class="panel-title">
               <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-14" data-parent="#bs-accordion-1">PARAMETROS DO SISTEMA</a>
           </h4>
       </div>
           <div id="bs-accordion-group-14" class="panel-collapse collapse">
             <div class="panel-body">
                 <div class="col uib_col_28 single-col" data-uib="layout/col" data-ver="0">
                      <div id="acordonline" class="widget-container content-area vertical-col">
                      <!--inicio PARAMETROS DO SISTEMA-->
                        <div class="panel widget panel-default uib_w_40" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
       <div class="panel-heading">
            <h4 class="panel-title">
               <a class="accordion-toggle" data-toggle="collapse" href="#bsaccordion-a" data-parent="#bs-accordion-a">CADASTRO DE PLANOS SMS</a>
           </h4>
       </div>
           <div id="bsaccordion-a" class="panel-collapse collapse">
             <div class="panel-body">
                 <div class="col uib_col_28 single-col" data-uib="layout/col" data-ver="0">
                      <div id="acordonline" class="widget-container content-area vertical-col">
<!--inicio CADASTRO DE PLANOS SMS-->
<div class="form form-group col-lg-12">
  <input class="form form-control" type="text" name="nomePacote" id="nomePacote" placeholder="Nome do pacote:">
</div>
<div class="form form-group col-lg-12">
  <input class="form form-control" type="number" name="Valor" id="Valor" placeholder="Valor 'sem vírgula ou ponto'">
</div>
<div class="col-lg-12">
  <div class="col-lg-2">
  <input class="btn btn-success" type="button" id="cadplanSma" value="Gravar">
  </div>
  <div class="col-lg-4">
 <input class="btn btn-warning" type="button" id="buscaplanSma" value="Listar">
  </div>
  <div id="gifaguarde">
  </div>
</div>
<hr>
  <div class="col-lg-12"> 
    <div class="jumbotron col-lg-12">
       
<table class="table table-striped col-lg-12">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Descrição</th>
        </tr>
      </thead>
      <tbody id="tbodyplanSms">
      </tbody>
      </table>
    </div>
  </div>
<!--fim CADASTRO DE PLANOS SMS-->
                      </div>
                 </div>
             </div>
           </div>
</div>
                      <!--fim PARAMETROS DO SISTEMA-->
                      </div>
                 </div>
             </div>
           </div>
</div>
<!--fim painel 6-->
</div>
<!--fim renato-->