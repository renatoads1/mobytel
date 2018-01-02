<?php
include("../../define/define.php");
include_once("../naruto/hokage.php");
include_once("../naruto/sask.php");
    // Configurações header para forçar o download
    header ("Expires: Mon, 07 Jul 2016 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    $arquivo = 'msgcontatos.xls';
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );
//gra excell
if($_GET["tabela"]=='relsmsexcell'){
                     //relatorio de envio de sms

 $id =   $_GET["user_id"];
 $campanha =   $_GET["campanha"];

//fecha conexao
$pdoz = new PDO("mysql:host=187.94.66.41;dbname=mbilling","renatoads1","r3n4t0321");
if($pdoz){
	//echo("conectou");
}else{
	echo("nao conectou");
}
$cons = "SELECT * FROM MessageLog WHERE UserId = ? and  UserInfo = ? ";    

    $operacao = $pdoz->prepare($cons);
    $operacao->execute(array($id,$campanha));
    $resobj =array();
    $i=2;
    
    ?>
<!--html-->

 <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Contato</title>
  <head>
  <body>
    <?php
// Definimos o nome do arquivo que será exportado
    
    $html = '';
    $html .= '<table border="1">';
    $html .="<tr>";
    $html .= "<td><b>Id</b></td>";
    $html .= "<td><b>Horário Envio</b></td>";
    //$html .= "<td><b>Horári Recebimento</b></td>";
    $html .= "<td><b>Status</b></td>";
    //$html .= "";//<td><b>StatusText</b></td>
    $html .= "<td><b>Destino</b></td>";
    //$html .= "<td><b>MessageFrom</b></td>";
    $html .= "<td><b>Texto</b></td>";
    //$html .= "<td><b>Gateway</b></td>";
    $html .="</tr>";
    $html .="<tr>";
    while($result = $operacao->fetch(PDO::FETCH_ASSOC)) {
      $resobj[$i] = $result;

  if($resobj[$i]["StatusCode"]==200||$resobj[$i]["StatusCode"]=='200'){
    $estatus = "Mensagem Enviada";
  }else if($resobj[$i]["StatusCode"]==300||$resobj[$i]["StatusCode"]=='300'){
    $estatus = "Mensagem Falhou";
  }else if($resobj[$i]["StatusCode"]==201||$resobj[$i]["StatusCode"]=='201'){
    $estatus = "Mensagem Recebida";
  }else if($resobj[$i]["StatusCode"]==301||$resobj[$i]["StatusCode"]=='301'){
    $estatus = "Mensagem nao pode ser entregue";
  }
    $mto = str_replace("+55"," ",$resobj[$i]["MessageTo"]);
    $html .="<tr>";
    $html .= "<td><b>".$resobj[$i]["Id"]."</b></td>";
    $html .= "<td><b>".$resobj[$i]["SendTime"]."</b></td>";
    //$html .= "<td><b>".$resobj[$i]["ReceiveTime"]."</b></td>";
    $html .= "<td><b>".$estatus."</b></td>";
    //$html .= "<td><b>".$resobj[$i]["StatusText"]."</b></td>";
    $html .= "<td><b>".$mto."</b></td>";
    //$html .= "<td><b>".$resobj[$i]["MessageFrom"]."</b></td>";
    $html .= "<td><b>".utf8_encode($resobj[$i]["MessageText"])."</b></td>";
    //$html .= "<td><b>".$resobj[$i]["Gateway"]."</b></td>";

    $i++;
    $html .= '</tr>';
    }
    $html .= '</table>';
    // Envia o conteúdo do arquivo
    echo $html;
   $pdoz = null;
    exit;
    ?>
<!--fim html-->
  </body>
</html>
    <?php

//fecha conexao

            //resposta do ajax
echo("erro".$cons);
           
  }else{
		
  }
?>