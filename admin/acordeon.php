 <!--renato-->
 <?php
session_start();
include_once("../naruto/hokage.php");
//include_once("../naruto/sask.php");
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


if ($fconn->connect_error) {
    var_dump("Connection failed: ". $fconn->connect_error);
}
$sqluser = "SELECT * FROM debitos WHERE id_user = '".$user_id."'";
$result = $fconn->query($sqluser);
if ($result->num_rows > 0) {
  //`id`=[value-1],`id_mbiling`=[value-2],
$update = "UPDATE user SET usuario ='".$user_name."',cpfcnpj='".$cpf."',credit='".$credit."',active='".$active."',lastname='".$lastname."',fristname='".$fristname."',address='".$address."',cyti='".$cyti."',state='".$state."',country='".$country."',zipcode='".$zipcode."',phone='".$phone."',mobyle='".$mobyle."',email='".$email."',redial='".$redial."',doc='".$doc."',envioSMS='".$envioSMS."' WHERE id_mbiling = '".$user_id."'";

$upduser = $fconn->query($update);

}else{

  $insert = "INSERT INTO user(id_mbiling,usuario,cpfcnpj,credit,active,lastname,fristname,address,cyti,state,country,zipcode,phone,mobyle,email,redial,doc,envioSMS) VALUES ('".  $user_id."','".$user_name."','".$cpf."','".$credit."','".$active."','".$lastname."','".$fristname."','".$address."','".$cyti."','".$state."','".$country."','".$zipcode."','".$phone."','".$mobyle."','".$email."','".$redial."','".$doc."','".$envioSMS."')"; 
  $insertuser = $fconn->query($insert);
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
<!--painel 0 perfil-->
<div class="panel widget panel-default uib_w_38" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
<div class="panel-heading">
<h4 class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-20" data-parent="#bs-accordion-1">PERFIL</a>
</h4>
</div>
<div id="bs-accordion-group-20" class="panel-collapse collapse">
<div class="panel-body">
    <div class="col uib_col_26 single-col" data-uib="layout/col" data-ver="0">
        <div class="widget-container content-area vertical-col">
<!--formulario de troca de senhas-->
<div class="well col-lg-12">
<form name="frmAlterPerfil" id="frmAlterPerfil" action="#">
  <div class="col-xs-6">
<h4>Usuário:</h4>
<input type="text" class="form-control" id="txtNome" name="txtNome" value="<?php
echo($user_name);
?>">
  </div>
  <!--divisor de inputs-->
  <div class="col-xs-6">
<h4>Senha:</h4>
<input type="text" class="form-control" id="txtSenha" name="txtSenha" placeholder="Nova Senha" value="">
  </div>
</form>
</div>
<hr>
<div class="col-lg-12">
  <div class="col-xs-4">
    <input type="button" class="btn btn-success" id="btnGravaUser" value="Salvar" >
  </div>
  <!--divisor de inputs-->
  <div class="col-xs-4">
    <!--input type="button" class="btn btn-warning" id="txtSenha"  value="Alterar"-->
  </div>
    <!--divisor de inputs-->
  <div class="col-xs-4">
    <!--input type="button" class="btn btn-danger" id="txtSenha"  value="Excluir"-->
  </div>
</div>

        </div>
    </div>
</div>
</div>
</div>
<!--fim painel 0-->
<!--painel 1-->
                                    <div class="panel widget panel-default uib_w_38" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
           <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-9" data-parent="#bs-accordion-1">HISTÓRICO</a>
       </h4>
                                        </div>
                                        <div id="bs-accordion-group-9" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col uib_col_26 single-col" data-uib="layout/col" data-ver="0">
                                                    <div class="widget-container content-area vertical-col">

<!--inicio debitos-->
<?php
include("debitos.php");
?>
<!--fim debitos-->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<!--painel 3-->
<div class="panel widget panel-default uib_w_40" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
       <div class="panel-heading">
            <h4 class="panel-title">
               <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-11" data-parent="#bs-accordion-1">RELATÓRIOS</a>
           </h4>
       </div>
           <div id="bs-accordion-group-11" class="panel-collapse collapse">
             <div class="panel-body">
                 <div class="col uib_col_28 single-col" data-uib="layout/col" data-ver="0">
                      <div class="widget-container content-area vertical-col">
                         <?php
                         include("compgrafmontanhas.php");
                         ?>
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
               <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-12" data-parent="#bs-accordion-1">ONLINE</a>
           </h4>
       </div>
           <div id="bs-accordion-group-12" class="panel-collapse collapse">
             <div class="panel-body">
                 <div class="col uib_col_28 single-col" data-uib="layout/col" data-ver="0">
                      <div id="acordonline" class="widget-container content-area vertical-col">
                         
                      </div>
                 </div>
             </div>
           </div>
</div>
<!--fim painel 4-->
<!--inicio painel 5-->
<?php
if(isset($_SESSION['envioSMS'])&&($_SESSION['envioSMS']=='1'))
{
  ?>
  <div class="panel widget panel-default uib_w_40" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
       <div class="panel-heading">
            <h4 class="panel-title">
               <a id="abreacord" class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-13" data-parent="#bs-accordion-1">SMS</a>
           </h4>
       </div>
           <div id="bs-accordion-group-13" class="panel-collapse collapse">
             <div class="panel-body">
                 <div class="col uib_col_28 single-col" data-uib="layout/col" data-ver="0">
                  <div id="acordonline" class="widget-container content-area vertical-col">
                  <div class="col-lg-12" style="border-bottom: : solid 1px #888;"><br>
                    <div  class="col-lg-3" style="color: #666 ;font-size: 18px;text-align: center; border-right: solid 1px #888; ">
                      <div class="col-md-12 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top">
                      <i class="fa fa-phone">
                      </i> SMS / Dia
                      </span>
                      <div style="color:#666;font-size: 32px; text-align: center;" class="">
                      -
                      </div>
                      </div>
                    </div>
                      <div class="col-lg-3" style="color: #666 ;font-size: 18px;text-align: center; border-right: solid 1px #888; ">
                            <div class="col-md-12">
                            <span class="count_top"><i class="fa fa-phone"></i>  SMS / Ultimos 7 Dias</span>
                            <div class="count" style="color:#666;font-size: 32px; text-align: center;">
                              -
                            </div>
                            </div>

                        </div>
                        <div class="col-lg-3" style="color: #666 ;font-size: 18px;text-align: center; border-right: solid 1px #888;">
                          <div class="col-md-12 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-phone"></i>  SMS / Mês</span>
                            <div id="smsmes" class="count " style="color:#666;font-size: 32px; text-align: center;"> 
                            -
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3" style="color: #666 ;font-size: 18px;text-align: center; border-right: solid 1px #888;>
                            <div class="col-md-12 col-sm-4 col-xs-6 tile_stats_count">
                              <span class="count_top"><i class="fa fa-money">
                                </i> Valor Atual /Mês  R$ 
                              </span>
                              <div id="smsval"class="count" style="color:#666;font-size: 32px; text-align: center;"> 
                                0,06    
                              </div>
                            </div>
                            <hr>
                            <div class="col-lg-12">
                              <!--aqui msg avulso-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        SMS / Avulso
                                    </div>
                                    <div class="panel-body center">
                                        <div class="text-center col-md-8 col-md-offset-2" style="background:#eee;color:#555;">
                                        <h3>SMS</h3><hr>
                                        <div class="form-group has-warning">
                                      <label class="control-label" for="inputWarning">Telefone:</label>
                              <!--input nome do enviador do sms--> 
                              <input type="text" class="form-control" id="numtel" name="numtel" placeholder="00000-0000" maxlength="9" value="">
                                        </div>
                                        </div>
                                        <div class="text-center col-md-8 col-md-offset-2" style="background:#eee;color:#555;">
                                    <div class="form-group has-warning">
                                      <label class="control-label" for="inputWarning">Texto:</label>
                              <!--input texto do sms --> 
                              <textarea class="col-lg-12" id="txtmsg" name="txtmsg" rows="5" maxlength="160" placeholder="maximo de caracteres permitidos 160" value="">    
                              </textarea>
                                       </div>
                                       <div class="col-lg-12">
                                       <br>
                                          <input type="button" class="btn btn-danger" name="" id="btnEnvSms" value="Enviar">
                                       </div>
                                        </div>
                                    </div>
                                  </div>
                                  <!--fim sms avulso-->
                              </div>
                            <div class="col-lg-12">
                              <!--aqui msg campanhas-->
                              <!--
INSERT INTO campanhasms(descricao,textoSMS,iduser,nomeEmpresa) VALUES ('campanha de teste do renato','teste de sms','4','Moby');
-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        SMS / Campanhas
                                    </div>
                                    <div class="panel-body">
                                        <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Campanhas
                                    </div>
                                    <div class="panel-body center">
                                    <!--carregar contatos passo 1-->
                                    <div class="text-center col-md-8 col-md-offset-2" style="background:#eee;color:#555;">
                                    <h3>Passo 1 carregar contatos</h3>
                                       <div class="form-group has-warning">
<!--upload-->
<div class="jumbotron" style="background-color: #fff;">
<label class="control-label" for="inputWarning">Arquivo de telefones: 
<div id="filelist"><!----></div>
  <div id="container">
    <a id="pickfiles" href="javascript:;">
      <input type="button" class="btn btn-danger" value="Upload">
    </a> 
    <a id="uploadfiles" href="javascript:;">
      <input type="button" class="btn btn-danger" value="Enviar">
    </a>
  </div>
</div>
<!--upload fim btn-->

                                   
                                    </div>
                                    <br>
 
                                    <!--fim carregar contatos-->
 <!-- <div class="text-center col-md-8 col-md-offset-2" style="background:#eee;color:#555;">-->
 <h3>Passo 2 Cadastrar Campanha</h3>
  <div class="jumbotron" style="background-color: #fff;">
<div id="slctlistcontopt" class="form-group has-warning"><!--formulário-->
  <label class="control-label" for="inputWarning">Lista de contatos:</label>
              <!--input nome do enviador do sms-->
<input type="hidden" name="iduser" id="iduser" value="<?php echo($user_id);?>">
                          <select id="slctlistcont" class="form form-control col-lg-4">
                              <!--onde entra os options de listas de ontatos-->
                          <option>Select</option>
                          </select>
                          <a href="Javascript:carroptlistcont();" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-retweet"></span> Recarregar</a>
<div class="form-group has-warning">
<label class="control-label" for="inputWarning">Nome da Campanha:</label>
<input type="text" class="form-control" id="nomecamp" name="nomecamp"  value="">
</div>
<div class="col-lg-12">
<select class="form form-control col-lg-12" id="selfrasescad">
  <option>FREASES PRÉ CADASTRADAS 
  </option>
</select>  
<label class="control-label">Componha a Mensagem clicando na tabela abaixo para acrescentar as variáveis no texto</label>
</div>
<textarea class="col-lg-12" id="txtmsgcomp" name="txtmsgcomp" rows="5" placeholder="Maximo de caracteres permitidos 160" maxlength="160" value="">    
</textarea>
<!--ajudo do burro-->
<div class="form-group has-sucsess">
<table class="table table-striped">
  <thead>
    <tr>
    <th id="col4">Nome</th>
    <th id="col5_col6">Telefone</th>
    <th id="col11">Valor Recuperar</th>
    <th id="col12">Atraso Recuperar</th>
    <th id="col13">Minimo</th>
    </tr>
  </thead>
</table>
</div>
<!--fim ajuda-->
<input style="margin-top:5px;" type="button" class="btn btn-danger" name="cadgravcamp" id="cadgravcamp" value="Gravar Campanha">



</div><!--fim formulário-->
</div><!--fim jumbotron-->
<br>
<!--Lista campanhas-->
 <h3>Lista de Campanhas</h3>
<div class="jumbotron col-lg-12" style="background-color: #fff;">
<label class="control-label" for="inputWarning">Lista de Campanhas: 
  <table class="table table-striped col-lg-12">
      <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Data Criação</th>
      <th>Disparar</th>
      <th>Excluir</th>
    </tr>
  </thead>
    <tbody>
    <!--inicio tab -->
<?php
//carrega lista de contatos
    $querycont =  "SELECT * FROM campanhasms where iduser = '".$user_id."' ORDER BY id DESC;";
        $idlist = $fconn->query($querycont);
        
        while ($obj = mysqli_fetch_Object($idlist)) 
        {
          echo("<td>".htmlspecialchars($obj->id)."</td><td>".htmlspecialchars($obj->descricao)."</td><td>".htmlspecialchars($obj->dataCriacao)."</td><td><input id='".$obj->id."' type='button' value='Disparar' class='btn btn-success' onclick=Javascript:dispara('$obj->id','$user_id');></td>
<td><input type='button' value='Excluir' class='btn btn-warning' onclick=Javascript:excluicampanha('$user_id','$obj->id');></td></tr>");
        }/*onclick=Javascript:excluicampanha('$user_id','$obj->id');*/
//fim lista de contatos
?>
  </tbody>
</table>
<!--upload fim btn-->
                                    </div>
                                  </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                      </div>   
                  </div>
                 </div>
             </div>
           </div>
</div>

  <?php
  //echo("habilitado para envio de sms".$_SESSION['envioSMS']);
}else{
  //echo("nao habilitado para envio de sms".$_SESSION['envioSMS']);
}
?>
<!--fim painel 5-->
</div>

<!--painel 6-->
<div class="panel widget panel-default uib_w_40" data-uib="twitter%20bootstrap/collapsible" data-ver="1">
       <div class="panel-heading">
            <h4 class="panel-title">
               <a class="accordion-toggle" data-toggle="collapse" href="#bs-accordion-group-14" data-parent="#bs-accordion-1">MEUS CONTATOS</a>
           </h4>
       </div>
           <div id="bs-accordion-group-14" class="panel-collapse collapse">
             <div class="panel-body">
                 <div class="col uib_col_28 single-col" data-uib="layout/col" data-ver="0">
                      <div id="acordonline" class="widget-container content-area vertical-col">
                        <div class="col-lg-12">
                          <select id="carrlistcont" class="form form-control form-success">
                            <option>Select</option>
                          </select>
                        </div>
                        <div class="col-lg-12">
                          <table class="table table-striped col-lg-12">
                              <thead>
                                <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Descricão</th>
                                </tr>
                              </thead>
                                <tbody id="tabCarConts">
                                <tr> 
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Descricão</th>
                                </tr>
                                </tbody>
                              </table>
                        </div>
                      </div>
                 </div>
             </div>
           </div>
</div>
<!--fim painel 6-->
</div>
<!--fim renato-->