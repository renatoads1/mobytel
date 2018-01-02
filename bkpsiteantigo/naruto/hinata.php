<?php
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Access-Control-Allow-Origin: *");/*aceita post de todas os sites*/
header('Content-Type: text/json; charset=utf-8');

function enviaemail($assunto,$emailcliente,$nome,$msg,$destino)
{

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
    $mailer->AddAddress($destino,$nome); //Destinatários
    $mailer->Subject = $assunto;
    $mailer->Body = $mensagem;
    
          if($mailer->Send()){
                return 1;

          }else{
              return 0;
          }
}


if(isset($_POST["tabela"]) || isset($_GET["tabela"]))
{
  if($_POST["tabela"]=="kakashi" || $_GET["tabela"]=="kakashi"){

  require_once('class.phpmailer.php');
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
  $destino = array("renatoads1@gmail.com","comercial@mobytel.com.br");
  for($i=0;$i<2;$i++) {
      //função que envia email
      $retorno = enviaemail($assunto,$email,$nome,$msg,$destino[$i]);
      if($retorno==1)
        {
            $msg2 = array("msg"=>"1");
        }else{
            $msg2 = array("msg"=>"0");
                   
        }
  }
  echo(json_encode($msg2));
  
  //fim do if kakakshi  
  }else{
       $msg = array("msg"=>"0");
               echo(json_encode($msg));
  }
}else{
       $msg = array("msg"=>"0");
          echo(json_encode($msg));
}
?>