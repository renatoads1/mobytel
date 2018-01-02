<?php

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

header("Cache-Control: no-store, no-cache, must-revalidate");

header("Cache-Control: post-check=0, pre-check=0", false);

header("Pragma: no-cache");

require_once 'PHPExcel.php';

//APAGUE AS DUAS LINHAS DE BAIXO
//$objPHPExcel = PHPExcel_IOFactory::load("todosalunospuc.xlsx");

//COLOQUE AS DUAS LINHAS DE BAIXO DEPOIS APERTE CTR+S
$objPHPExcel = PHPExcel_IOFactory::load("teste.xlsx");

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

//echo(json_encode($sheetData));
$servername = "179.188.16.171";
$username = "mobyfinan";
$password = "monitor1420";
$dbname = "mobyfinan";
$conn = new mysqli($servername, $username, $password, $dbname);
// Checa connecao
if ($conn->connect_error) {
    die("CONEXAO COM O BANCO LOCALWEB FALHOU: " . $conn->connect_error);
} 
$hoje = date("Y-m-d H:i:s");
$cont = 0;
foreach ($sheetData as $key => $value) {

    	//nome

    	$nomerec = $value["A"];
    	$telefone = $value["C"];		
		$nomerec = explode(" ",$nomerec);
		
		$text = "Olá,".$nomerec.". É neste Sábado, dia 21, na Serraria Souza Pinto, a Calourada FILHOS DA PUC II.Garanta seu ingresso! Sympla, DCE ou 993830685  Anna (wpp)";
		/*renato*/
		$query = "INSERT INTO MessageOut(MessageTo,MessageFrom,MessageText,MessageType,Gateway,UserId,UserInfo,Priority,Scheduled,ValidityPeriod,IsSent,IsRead)values('+55".$telefone."','".$nomerec[0]."','".$text."',000,'','7','99',1,'".$hoje."',1,0,0);";

		$conn->query($query);
		/*
		$cont++;
		if($cont >1000){
			$conn->query($query);
			$cont = 0;
			$query="";
		}*/
		
		//sleep(1);//espera um segundo



    
}



?>



