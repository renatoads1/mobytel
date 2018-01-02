<?php
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Access-Control-Allow-Origin: *");/*aceita post de todas os sites*/
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');
include_once("hokage.php");

//insere as 1000 no banco
$servername = "187.94.66.41";
$username = "renatoads1";
$password = "r3n4t0321";
$dbname = "mbilling";

// Create connection
$connt = new mysqli($servername, $username, $password,$dbname);

//aqui vai buscar todas as msg de 1000 em 1000 e vai inserir no banco do magnus
mysqli_set_charset($fconn,"utf8");
mysqli_set_charset($connt,"utf8");

 /*COLOCAR UMA TRIGER PARA MODIFICAR O STATUS DEPOIS DO SELECT*/


$quarytop = "SELECT Id,MessageTo,MessageFrom,MessageText,MessageType,Gateway,UserId,UserInfo,Priority,Scheduled,ValidityPeriod, IsSent, IsRead, enviada FROM MessageOut where enviada ='1' LIMIT 40 ";
$retornlist = $fconn->query($quarytop);//executa
while ($objretmysql = mysqli_fetch_Object($retornlist)){

//$constroi ="INSERT INTO MessageOut(MessageTo, MessageFrom, MessageText) values ('+5531988398385','Mobytel','testerenato')";

            $constroi = "INSERT INTO MessageOut(MessageTo, MessageFrom, MessageText, MessageType, Gateway, UserId, UserInfo, Priority, Scheduled, ValidityPeriod, IsSent) VALUES ('".$objretmysql->MessageTo."', '".$objretmysql->MessageFrom."','".$objretmysql->MessageText."','teste','".$objretmysql->Gateway."','".$objretmysql->UserId."','".$objretmysql->UserInfo."',".$objretmysql->Priority.",'".$objretmysql->Scheduled."',".$objretmysql->ValidityPeriod.",".$objretmysql->IsSent.")";
//$objretmysql->MessageType
            //
if ($connt->query($constroi) === TRUE) 
	{
	   $altera ="UPDATE MessageOut SET enviada = 0 where Id = '".$objretmysql->Id."'";
	   //altera estatus
	   $fconn->query($altera);
	}
            
}
//fecha conexoes
$fconn->close();
$connt->close();        


?>