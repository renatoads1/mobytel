<?php
session_start();
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Access-Control-Allow-Origin: *");/*aceita post de todas os sites*/
header('Content-Type: text/json; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');
include_once('class.phpmailer.php');
include_once("hokage.php");
//função que calcula valores sms 
//envia sms_arquivo
function gerarquivosql($envia,$nomearq){
    //grava o arquivo de dados com os sms a serem enviados
    $caminho = "enviosms/";
    $fp = fopen($caminho."".$nomearq,"a"); 
    // Escreve "exemplo de escrita" no bloco1.txt
    $escreve = fwrite($fp,$envia);
    // Fecha o arquivo
    fclose($fp);
}

//envia sms
function enviasms($iduser,$tel,$ddd,$msg,$portabi){
mysqli_set_charset($fconn,"utf8");
$pdo = new PDO("mysql:host=187.94.66.41;dbname=mbilling","renatoads1","r3n4t0321");
$user_id = $_SESSION['user_id'];
$nomeuser = $_SESSION['user_name'];
$hoje = date("Y-m-d H:i:s");
$telefone = $ddd.$tel;
$telSingle = utf8_encode(htmlspecialchars($telefone));//telefone tratado

$testa = strripos($portabi,"camp");
//pega o id da campanha se for campanha
if ($testa === false){
  $id_camp = "null";
}else {
  $id_camp = str_replace("camp"," ",$portabi);
}

//verificar inpacto e trata caracteres especiais
if($portabi=="null" || $portabi==" " || $portabi==null){
  //msg avulso
  $textoSingle = utf8_decode($msg);

}else{
  // msg campanha
  $textoSingle = $msg;

}
//txt msg tratada
$dest = "+55".$telSingle;//destino
$port = $portabi;

$MessageTo = $dest;//varchar
$MessageFrom = $nomeuser;//varchar
$MessageText = $textoSingle;//text
$MessageType = 000;//varchar
$Gateway = "";//varchar
$UserId  =$iduser;//varchar
$UserInfo = $id_camp;//text
$Priority = 1;//int
$Scheduled =$hoje;//datetime
$ValidityPeriod = 1;//int
$IsSent = 0;//int
$IsRead =0;//int

        $consulta = 'INSERT INTO MessageOut(MessageTo, MessageFrom, MessageText, MessageType, Gateway, UserId, UserInfo, Priority, Scheduled, ValidityPeriod, IsSent, IsRead) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    
      $operacao = $pdo->prepare($consulta);
      $inserir = $operacao->execute(array($MessageTo, $MessageFrom, $MessageText, $MessageType,$Gateway, $UserId, $UserInfo, $Priority, $Scheduled, $ValidityPeriod, $IsSent, $IsRead));

 $consulta2 = 'INSERT INTO ListaDeContatos(MessageTo, MessageFrom, MessageText, MessageType, Gateway, UserId, UserInfo, Priority, Scheduled, ValidityPeriod, IsSent, IsRead,idCampanha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)';
      
      $operacao2 = $pdo->prepare($consulta2);
      $inserir2 = $operacao2->execute(array($MessageTo, $MessageFrom, $MessageText, $MessageType,$Gateway, $UserId, $UserInfo, $Priority, $Scheduled, $ValidityPeriod, $IsSent, $IsRead,$id_camp));

      $pdo = null;
      return $inserir;
}//fim da função que envia os sms
 
//consulta portabilidae
function consport($numtel){
//Claro 021 + 55321
//Tim   041 + 55341
//OI    031 + 55331
//OI    031 + 55335
//VIVO  031 + 55320
//VIVO  031 + 55323
//NEXTEL099 + 55351
//NEXTEL099 + 55377
$ch = curl_init();
$url = 'http://consulta.kingtelecom.com.br/checkoperadora.php?login=mobytel&senha=moby2323&numero='.$numtel;
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}

//envar email para vendas moby
function enviaemail($assunto,$emailcliente,$nome,$msg)
{  
header("Content-Type: text/html; charset=utf-8");
    $mensagem = "Esta menssagem foi enviada\n pelo formulário fale conosco do \nwebsite Mobytel.com ".$msg."\n Msg Enviada por:".$emailcliente."\n.";
    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->SMTPDebug = 1;
    $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
    $mailer->Host = 'smtp.mobytel.com.br'; //smtp.dominio.com.br
    $mailer->SMTPAuth = true; //define se haverá ou não autenticação no SMTP
    $mailer->Username = 'emaildowebsite@mobytel.com.br'; //Informe o e-mai o completo
    $mailer->Password = 'm0b1t3l3c0m'; //Senha da caixa postal
    $mailer->FromName = $assunto; //Nome que será exibido para o destinatário
    $mailer->From = 'emaildowebsite@mobytel.com.br'; //Obrigatório ser a mesma caixa postal indicada em "username"
    $destino ="ti@mobytel.com.br";

        $mailer->AddAddress($destino,$nome); //Destinatários
        $mailer->Subject = $assunto;
        $mailer->Body = $mensagem;

          if($mailer->Send())
          {
              $resultado = 1;

          }else{
               $resultado = 0;
          }
          return $resultado;

}
//fim do campo de funcoes

//se tiver post de dados
if(isset($_POST["tabela"]) || isset($_GET["tabela"]))
{
  //se a tabela for == 
  if($_POST["tabela"]=="kakashi" || $_GET["tabela"]=="kakashi")
  {      
      //nome do cliente
      $nome  =$_POST["nome"];
      //email do cliente
      $email   =$_POST["email"];
      //assunto do email
      $assunto =$_POST["assunto"];
      //menssagem do cliente
      $msg   =$_POST["msg"];
      //chave do arquivo
      $tabela  =$_POST["tabela"];
      //para quem vai ser enviado o email    
     
          //função que envia email
          $retorno = enviaemail($assunto,$email,$nome,$msg);
          if($retorno==1)
            {
                $msg2 = array("msg"=>"1");
                echo(json_encode($msg2));
            }else
            {
                $msg2 = array("msg"=>"0");
                echo(json_encode($msg2));
                       
            }      
  
  //fim do if kakakshi  
  }else if($_POST["tabela"]=="franquia" || $_GET["tabela"]=="franquia")
  {
    //pega as variaveis post
    $comando = "";
    foreach($_POST as $nome_campo => $valor)
      { 

        if($nome_campo=="namefant"){
          
          $namefant=$valor;
           $comando .= "De:".$namefant."\n";

        }else if($nome_campo=="email"){
          $email=$valor;
          $comando .= "Pelo E-mail:".$email."\n";

        }else{
          $comando .= "\n" . $nome_campo . ": " . $valor . ";\n";
        }
        //$comando .= "\$" . $nome_campo . "='" . $valor . "';";  
      }
      //chama a função que manda email
      $resposta = enviaemail("Contato para Franquia",$email,$namefante,$comando);
      if($resposta=='1'){
          $msg = array("msg"=>"1");
      }else{
          $msg = array("msg"=>"0");
      }
      //
      echo(json_encode($msg));
  
  }else if($_POST["tabela"]=="frmlogin" || $_GET["tabela"]=="frmlogin"){
    //função que assegura que nao esta havendo tentativas de invasão no sistema
    $ret = array();
    //segurança de login e senha
    $ret = segunancalogin($_POST["user"],$_POST["password"]);
    //pesquisa usuário no banco
    $ret2 = validalogin($ret["user"],$ret["senha"]);
    //retorno da requisição ajax
    //$result = array("user"=>"null","id"=>null);
          if($ret2["user"]==null || $ret2["id"]==null){
            //nao validou
            $msg = array("user"=>null,"id"=>null);

             echo(json_encode($msg));
          }else{
            //validou
            $msg = array("user"=>$ret2["user"],"id"=>$ret2["id"]);
             echo(json_encode($msg));
          }

    
  }else if($_POST["tabela"]=="calonline" || $_GET["tabela"]=="calonline"){
    //proximo post
    $user = $_POST["user"];
    $id = $_POST["id"];
    $tabela = $_POST["tabela"];

    $ret = array();
    $ret = getcalonline($user,$id);
    echo(json_encode($ret));
       
  }else if($_POST["tabela"]=="msgavulso" || $_GET["tabela"]=="msgavulso"){
    $numtel = $_POST["numtel"];
    $txtmsg = $_POST["txtmsg"];
    $id = $_POST["iduser"];
    //consulta portabilidade
    $port = " ";//consport($numtel);
    //envia 1 sms 
    $envio = enviasms($id,$numtel,"31",$txtmsg,$port);
       
    $msg = array("msg"=>"ok","portab"=>$port,"envio"=>$envio);
    echo(json_encode($msg));

       
  }else if($_POST["tabela"]== 'cadcampanhasmsmont'||$_GET["tabela"]== 'cadcampanhasmsmont'){

//171017
mysqli_set_charset($fconn,"utf8");
$iduser = $_POST["iduser"];

$txtsms = $_POST["txt"];
//utf8_encode(htmlspecialchars($_POST["txt"]));
//compor texto
//$txtsms  = utf8_encode(htmlspecialchars($txtsms));
$txtsms = str_replace("#col4","nomeRecebedor",$txtsms);
$txtsms = str_replace("#col5_col6","telefone",$txtsms);
$txtsms = str_replace("#col11","var1",$txtsms);
$txtsms = str_replace("#col12","var2",$txtsms);
$txtsms = str_replace("#col13","var3",$txtsms);
//fim compor texto
$nomecamp = $_POST["nomecamp"];
$idlistcont = $_POST["idlistcont"];

$querycont =  "INSERT INTO campanhasms(descricao,textoSMS,iduser,nomeEmpresa,idlistcontato) VALUES ('".$nomecamp."','".$txtsms."','".$iduser."','".$nomecamp."','".$idlistcont."')";
        
        if($idlist = $fconn->query($querycont)){
          $msg = array("msg"=>"Dados inseridos ");
          echo(json_encode($msg));
        }else{
          $msg = array("msg"=>$querycont);
          echo(json_encode($msg));
        }
        //fecha conexao


  }else if($_POST["tabela"] == 'disparacampanha'){
//171017    
$idCampanha = $_POST["id_campanha"];
$userid = $_POST["userid"];
$user_id = $_SESSION['user_id'];
$nomeuser = $_SESSION['user_name'];
$hoje = date("Y-m-d H:i:s");

//fim abre conexao
$quercamp =  "SELECT * FROM campanhasms where id = '".$idCampanha."'";
$retorn = $fconn->query($quercamp);
//pega retorno

$obj = mysqli_fetch_Object($retorn);
$idlista = $obj->idlistcontato;
$msg = $obj->textoSMS;
$msgr = $obj->textoSMS;

    //busca dados da lista de contatos
$querlista = "SELECT * FROM listacontatos WHERE idListaContatos ='".$idlista."' and id_user ='".$userid."'";//query
          $retornlist = $fconn->query($querlista);//executa
          //fatia o objeto
         $cont=0;
  
         while ($obj2 = mysqli_fetch_Object($retornlist)){
         //agora falta resgatar os dados e acrescentar na msg depois é so criar uma função para inserir e mandar inserir
            $id = $obj2->id;
            $idListaContatos = $obj2->idListaContatos;
            $descricao = $obj2->descricao;
            $nomeRecebedor = $obj2->nomeRecebedor;
            $ddd = $obj2->ddd;
            $telefone = $obj2->telefone;
            $bairro = $obj2->bairro;
            $cidade = $obj2->cidade;
            $estado = $obj2->estado;
            $id_user = $obj2->id_user;
            $var1 = $obj2->var1;
            $var2 = $obj2->var2;
            $var3 = $obj2->var3;
            $msg2 = $msg;

$procura = strripos($msg2,"nomeRecebedor");
if ($procura === false){} else {
    $msg2 = str_replace("nomeRecebedor",$nomeRecebedor,$msg2);}
$procura = strripos($msg2,"telefone");
if ($procura === false){} else {
    $msg2 = str_replace("telefone",$telefone,$msg2);}

    $procura = strripos($msg2,"var1");
if ($procura === false){} else {
    if($var1 !=""){$var1 =str_replace(",",".",$var1);}
    $msg2 = str_replace("var1",$var1,$msg2);}
  
    $procura = strripos($msg2,"var2");
if ($procura === false){} else {
  if($var2 !=""){$var2 =str_replace(",",".",$var2);}
    $msg2 = str_replace("var2",$var2,$msg2);}

    $procura = strripos($msg2,"var3");
if ($procura === false){} else {
  if($var3 !=""){$var3 =str_replace(",",".",$var3);}
    $msg2 = str_replace("var3",$var3,$msg2);}
         $idcamp = "camp".$idCampanha;
            
            $cont++;
            //aqui vai fazer as validações do telefone
           if($telefone != "")
            {
              //verifica numeros com erro
              $caracteres = strlen($telefone);
              if($caracteres == 8){
                $telefone = "9".$telefone;
              }else if($caracteres== 9){
                $telefone = "31".$telefone;
              }else if($caracteres== 10){
                $telefone = substr($telefone,-8,8);
                $telefone = "319".$telefone; 
              }
              //$envia = enviasmsarquivo($userid,$telefone,$ddd,$msg2,$idcamp);
              //inicio teste


$telSingle = utf8_encode(htmlspecialchars($telefone));//telefone tratado
$testa = strripos($portabi,"camp");
//pega o id da campanha se for campanha
if ($testa === false){
  $id_camp = "null";
}else {
  $id_camp = str_replace("camp"," ",$portabi);
}

//txt msg tratada
$dest = "+55".$telSingle;//destino
$port = $portabi;

$MessageTo = $dest;//varchar
$MessageFrom = $nomeuser;//varchar
$MessageText = $msg;//text
$MessageType = 000;//varchar
$Gateway = "";//varchar
$UserId  =$userid;//varchar
$UserInfo = $id_camp;//text
$Priority = 1;//int
$Scheduled =$hoje;//datetime
$ValidityPeriod = 1;//int
$IsSent = 0;//int
$IsRead =0;//int

        $sqlinc = "INSERT INTO MessageOut(MessageTo, MessageFrom, MessageText, MessageType, Gateway, UserId, UserInfo, Priority, Scheduled, ValidityPeriod, IsSent, IsRead,enviada) VALUES ('".$MessageTo."', '".$MessageFrom."','".$MessageText."','".$MessageType."','".$Gateway."','".$UserId."','".$UserInfo."','".$Priority."','".$Scheduled."', '".$ValidityPeriod."','".$IsSent."','".$IsRead."','1')";
           
                 if ($fconn->query($sqlinc) === TRUE) {
                      $result = 1;
                  } else {
                      $result = 0;
                  }
              //fim teste
            }//               
         }//fim do wile variavel carregada
$msgz = array("msg"=>"enviando","texto"=>$msgr);
echo(json_encode($msgz));

//fim 171017
  }else if($_POST["tabela"]== 'reldenvsms'||$_GET["tabela"]== 'reldenvsms'){
                     //relatorio de envio de sms
 $id =   $_POST["id"];
 $campanha =   $_POST["campanha"];
//fecha conexao
$pdoz = new PDO("mysql:host=187.94.66.41;dbname=mbilling","renatoads1","r3n4t0321");
$cons = "SELECT * FROM MessageLog WHERE UserId = ? and  UserInfo = ? ";    

    $operacao = $pdoz->prepare($cons);
    $operacao->execute(array($id,$campanha));
    $resobj =array();
    $i=0;
    while ($result = $operacao->fetch(PDO::FETCH_ASSOC)) {
      $resobj[$i] = $result;
     $i++;
    }
//fecha conexao
$pdo = null;
    //resposta do ajax
    echo(json_encode($resobj));

  }else if($_POST["tabela"]== 'carropt'||$_GET["tabela"]== 'carropt'){
//carrega input
$user_id = $_POST["user_id"];

    $querycont =  "select DISTINCT(descricao),idListaContatos from listacontatos where id_user = '".$user_id."'";
        $idlist = $fconn->query($querycont);
        $obj = array();
        $objresp = array();
        $i=1;
        while ($obj = mysqli_fetch_assoc($idlist)) {
          $objresp[$i] = $obj;
          $i++;
        }

        echo(json_encode($objresp));


    //fim opt
  }else if($_POST["tabela"]== 'frmAlterPerfil'){
  $id_user = $_POST["id_user"];
  $txtNome = $_POST["txtNome"];
  $txtSenha = $_POST["txtSenha"];

$pdo = new PDO("mysql:host=187.94.66.41;dbname=mbilling","renatoads1","r3n4t0321");
$sql = "UPDATE pkg_user SET password='".$txtSenha."' WHERE id='".$id_user."'";
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Prepare statement
$stmt = $pdo->prepare($sql);

$stmt->execute();
if($stmt->rowCount() > 0)
{
  $msg = array("msg"=>"1","msgtxt"=>"update ok");
       echo(json_encode($msg));
       $pdo = null;
}else{
  $msg = array("msg"=>"0","msgtxt"=>"update erro","rows"=>$stmt->rowCount(),"query"=>$sql);
       echo(json_encode($msg));
       $pdo = null;
      }

  }else if($_POST["tabela"]== 'calCamValMes'){
    //calcula campanha valor mes
    $arrdata = explode("-",date("Y-m-d"));
    $mes =$arrdata[1];
    $id_user = $_POST["id_user"];
    //$id_user = "7"; //id samuca
$pdo = new PDO("mysql:host=187.94.66.41;dbname=mbilling","renatoads1","r3n4t0321");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//prepara 
$query = "Select COUNT(Id) as C_id from MessageLog where Month(SendTime) ='".$mes."' and UserId ='".$id_user."' and (StatusCode ='200' OR StatusCode ='201');";
//Prepare 
$stmt = $pdo->prepare($query);
//executa a query
$stmt->execute();
//pega retorno

$totalarr = $stmt->fetchAll();
$total = $totalarr[0]['C_id'];
  //se retorna 
  if($stmt->rowCount() > 0){
      $msg = array("msg"=>"1","Total"=>$total,"query"=>$query);
      echo(json_encode($msg));
      $pdo = null;
  }else{
      $msg = array("msg"=>"0","query"=>$sql);
      echo(json_encode($msg));
      $pdo = null;
  }//fim calcula campanha valor mes
  
  }else if($_POST["tabela"]== 'excluicampanha'){
    //exclui excluicampanha
    $userid= $_POST["userid"];
    $campaid =$_POST["campaid"];

$Fpdo = new PDO("mysql:host=".FHOSTDB.";dbname=".FNAMEDB,FUSERDB,FSENHADB);
$sql = "DELETE FROM `campanhasms` WHERE id ='".$campaid."' and iduser = '".$userid."'";
$Fpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Prepare statement
$stmt = $Fpdo->prepare($sql);

$stmt->execute();
if($stmt->rowCount() > 0)
{
  $msg = array("msg"=>"1","msgtxt"=>"delet ok");
       echo(json_encode($msg));
       $Fpdo = null;
}else{
  $msg = array("msg"=>"0","msgtxt"=>"delet erro","rows"=>$stmt->rowCount(),"query"=>$sql);
       echo(json_encode($msg));
       $Fpdo = null;
      }

    //fim excluicampanha
  }else if($_POST["tabela"]=="carrlistcont"){

    //carrega select lista de contatos
$id_user = $_POST["id_user"]; 
$Fpdo = new PDO("mysql:host=".FHOSTDB.";dbname=".FNAMEDB,FUSERDB,FSENHADB);
$sql = "SELECT * FROM listacontatos WHERE id_user = '".$id_user."' GROUP BY idListaContatos";
$Fpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Prepare statement
$stmt = $Fpdo->prepare($sql);

$stmt->execute();
        if($stmt->rowCount() > 0)
        {
              $resultcarinp = $stmt->fetchAll();
              echo(json_encode($resultcarinp));
              $Fpdo = null;
        }else{
          $msg = array("msg"=>"0","msgtxt"=>"inputs erro","rows"=>$stmt->rowCount(),"query"=>$sql);
               echo(json_encode($msg));
               $Fpdo = null;
              }
//fim carrega select list contatos
  }else if($_POST["tabela"]=="carrtabcontatos"){
$id_user = $_POST["id_user"];
$idlista = $_POST["idlista"];
$Fpdo = new PDO("mysql:host=".FHOSTDB.";dbname=".FNAMEDB,FUSERDB,FSENHADB);
$sql = "SELECT id,nomeRecebedor,telefone,descricao,id_user,idListaContatos FROM listacontatos WHERE id_user = '".$id_user."' and idListaContatos = '".$idlista."'";
$Fpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Prepare statement
$stmt = $Fpdo->prepare($sql);

$stmt->execute();
        if($stmt->rowCount() > 0)
        {
              $resultcarinp = $stmt->fetchAll();
              echo(json_encode($resultcarinp));
              $Fpdo = null;
        }else{
          $msg = array("msg"=>"0","msgtxt"=>"inputs erro","rows"=>$stmt->rowCount(),"query"=>$sql);
               echo(json_encode($msg));
               $Fpdo = null;
              }
  }else if($_POST["tabela"]=="carroptsmsfras"){
    //carroptsmsfras
$id_user = $_POST["id_user"];

$Fpdo = new PDO("mysql:host=".FHOSTDB.";dbname=".FNAMEDB,FUSERDB,FSENHADB);

$sql = "select id,textoSMS,iduser from campanhasms where iduser ='".$id_user."'";

$Fpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Prepare statement
$stmt = $Fpdo->prepare($sql);

$stmt->execute();
        if($stmt->rowCount() > 0)
        {
              $result = $stmt->fetchAll(); 
              
              echo(json_encode($result));
              $Fpdo = null;
        }else{
          $msg = array("msg"=>"0","msgtxt"=>"inputs erro","rows"=>$stmt->rowCount(),"query"=>$sql);
               echo(json_encode($msg));
               $Fpdo = null;
              }
    //fim carroptsmsfras
  }else if($_POST["tabela"]=="pegadongle"){
        $json_url = "http://mobyadmin.tk/lixo/donglejson.json";
        $json = file_get_contents($json_url);
        $data = $json;
        echo($data);
  }else if($_POST["tabela"]=="speed"){
    $texto = file_get_contents("http://mobyadmin.tk/lixo/speed.txt");
    $texto2 = array();
    $texto2 = explode(" ",$texto);
    $download = str_replace(".", "",$texto2[27]);
    $upload = str_replace(".", "",$texto2[31]);
    $resposta = array("Download"=>$download,"Upload"=>$upload);
    print_r(json_encode($resposta));


  }else if($_POST["tabela"]=="relgeral"){
    //gera relatório do sistema
    $texto=file_get_contents("http://mobyadmin.tk/lixo/relgeral.txt");
    $texto2 = array();
    $resposta = array();
    $respfinal = array();
    $texto2 = explode("\n",$texto);
      foreach ($texto2 as $key => $value) 
          {
            $resposta[$key] = str_replace("  "," ",$value);
            $resposta1[$key] = str_replace("   "," ",$resposta[$key]);
            $resposta2[$key] = str_replace("    "," ",$resposta1[$key]);
            $resposta3[$key] = str_replace("     "," ",$resposta2[$key]);
            $resposta4[$key] = str_replace("      "," ",$resposta3[$key]);
            $resposta5[$key] = str_replace("       "," ",$resposta4[$key]);
            $resposta6[$key] = str_replace("        "," ",$resposta5[$key]);

            if($key>5)
            {
              $respfinal[$key] = trim($resposta6[$key]);
              $respfinal2[$key] = str_replace(" ",">",$respfinal[$key]);
              $respfinal3[$key] = str_replace(">>",">",$respfinal2[$key]);
              $respfinal3[$key] = str_replace(",",".",$respfinal3[$key]);
              $respfinal4[$key] = explode(">",$respfinal3[$key]);
            }
            
          }
            //inverte array
             //$respfinal4 =  array_reverse($respfinal4);
             print_r(json_encode($respfinal4));
  }else{//fim post
       $msg = array("msg"=>"0","msgtxt"=>"nao entrou na tabela");
       echo(json_encode($msg));
        //tabela indefinida
  }
  
}else{
       $msg = array("msg"=>"0","msgtxt"=>"Sem tabela");
          echo(json_encode($msg));
          //nao entrou no post
}
?>