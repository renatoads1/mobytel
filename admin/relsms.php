<?php
//relsms
session_start();
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Access-Control-Allow-Origin: *");/*aceita post de todas os sites*/
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');
include("../../define/define.php");
?>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
           
  <table class="table table-striped">

<?php
if($_GET["tabela"]=='reldenvsms'){
//user_id=7
//tabela=reldenvsms
//campanha=41
//relatorio de envio de sms
$id =   $_GET["user_id"];
$campanha =   $_GET["campanha"];
//define o numero de itens por pagina
$itens_por_paginas = 20;
//pega a pagina atual
if(isset($_GET["pagina"]))
  {
    $pagina = intval($_GET["pagina"]);
  }else{
    $pagina = 0;
  }
echo("<thead><tr><th><a href='relsms.php?user_id=".$id
	."&tabela=reldenvsms&campanha=".$campanha
	."&order=id'>Id</a></th><th>Horário Envio</th><th>Horário Receb</th><th>Status</th><th>Destino</th><th>Texto</th></tr></thead>");

//fecha conexao
$pdoz = new PDO("mysql:host=187.94.66.41;dbname=mbilling","renatoads1","r3n4t0321");
if($pdoz){
	//echo("conectou");
}else{
	echo("nao conectou");
}
$cons = "SELECT * FROM MessageLog WHERE UserId = ? and  UserInfo = ? LIMIT ".$pagina.",".$itens_por_paginas.";";    

    $operacao = $pdoz->prepare($cons);
    $operacao->execute(array($id,$campanha));
    $resobj =array();
    $i=0;
//conta quantidade total de resultados
$queryconta = "SELECT * FROM MessageLog WHERE UserId = ? and  UserInfo = ?";
$operacaoconta = $pdoz->prepare($queryconta);
$operacaoconta->execute(array($id,$campanha));
$numtotal = $operacaoconta->rowCount();
//numero de paginas da paginação    
$num_paginas = ceil($numtotal/$itens_por_paginas);    
    echo("<tbody>");
    
    //echo("<h2>".$num."</hd>");
    //mostra resultados com paginação
    while($result = $operacao->fetch(PDO::FETCH_ASSOC)) {

      $resobj[$i] = $result;
//]verifica o status da messg
if($resobj[$i]["StatusCode"]==200||$resobj[$i]["StatusCode"]=='200'){
$estatus = "<span class='label label-primary'>Mensagem Enviada</span>";
}else if($resobj[$i]["StatusCode"]==300||$resobj[$i]["StatusCode"]=='300'){
$estatus = "<span class='label label-danger'>Mensagem Falhou</span>";
}else if($resobj[$i]["StatusCode"]==201||$resobj[$i]["StatusCode"]=='201'){
$estatus = "<span class='label label-success'>Mensagem Recebida</span>";
}else if($resobj[$i]["StatusCode"]==301||$resobj[$i]["StatusCode"]=='301'){
$estatus = "<span class='label label-danger'>Mensagem nao pode ser entregue</span>";
}

      $mto = str_replace("+55"," ",$resobj[$i]["MessageTo"]);

      echo("<tr><td>".$resobj[$i]["Id"]."</td><td>".$resobj[$i]["SendTime"]."</td><td>".$resobj[$i]["ReceiveTime"]."</td><td>".$estatus."</td><td>".$mto."</td><td>".utf8_encode($resobj[$i]["MessageText"])."</td></tr>");
     $i++;
    }
    echo("</tbody></table></div></body></html>");
    ?>
      <div style="text-align: center;" >
<nav aria-label="Page navigation">
  <ul class="pagination">
     <li>
      <a href="relsms.php?user_id=<?php echo($id);?>&tabela=reldenvsms&campanha=<?php echo($campanha);?>&pagina=<?php echo(0);?>"> <span aria-hidden="true">&laquo;</span></a>
          
    </li>
    <?php 
    for($i=0;$i<$num_paginas;$i++)
      {
        ?>
        <li style="<?php 

          if(($i-2) == $pagina || ($i-1) == $pagina || $i == $pagina || ($i+1) == $pagina || ($i+2) == $pagina || ($i+3) == $pagina)
          {
            
             ?>"><a href="relsms.php?user_id=<?php echo($id);?>&tabela=reldenvsms&campanha=<?php echo($campanha);?>&pagina=<?php echo($i);?>"><?php echo($i+1);?></a></li>
      <?php

          }else{
         
          }       
      }
    ?>
    <li>
      <a href="relsms.php?user_id=<?php echo($id);?>&tabela=reldenvsms&campanha=<?php echo($campanha);?>&pagina=<?php echo($num_paginas);?>"><span aria-hidden="true">&raquo;</span></a>
    </li>

  </ul>
</nav>
      </div>
      <div>&nbsp;<br>&nbsp;<br>
      </div>
    <?php
//fecha conexao
$pdoz = null;
            //resposta do ajax
           
  }else{
		echo("erro".$cons);
  }

  /*

MessageType	55263
MessageId	9:+5531995544291:108
ErrorCode	
ErrorText	

MessageParts	null
MessagePDU	null
Connector	SmsConnector
UserId	4
UserInfo	17
  */

?>