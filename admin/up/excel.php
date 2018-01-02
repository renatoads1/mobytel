<?php

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

header("Cache-Control: no-store, no-cache, must-revalidate");

header("Cache-Control: post-check=0, pre-check=0", false);

header("Pragma: no-cache");

// activar Error reporting

//error_reporting(E_ALL);

 

// carregar a classe PHPExcel

require_once 'Classes/PHPExcel.php';

 

// iniciar o objecto para leitura

// definir a abertura do ficheiro em modo só de leitura



$objPHPExcel = PHPExcel_IOFactory::load("uploads/renatoads1_4_.xlsx");

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

$querycont =  "select DISTINCT(idListaContatos) from listacontatos where idListaContatos != ''";
        $idlist = $conn->query($querycont);
        $regs = mysqli_num_rows($idlist);
        $regs2 =  $regs+1 ;
        while($obj = mysqli_fetch_Object($idlist))
        {
           if($regs2<= $obj->idListaContatos){
            $regs2++;
           } 
        }

        $datahora = date("d-m-Y g:i a");
        echo($datahora."<br>");
        echo("<strong><h3>num regs = > ".$regs."</h3></strong>");
        echo("<strong><h3>num regs2 = > ".$regs2."</h3></strong>");

//$arr = array(1, 2, 3, 4);

foreach ($sheetData as $key => $value) {

    if($key >1){

    	//nome

    	$nomerec = $value["A"];

    	//echo($nomerec);

    	//ddd

    	$ddd = substr($value["B"],-11,2);

    	//telefone

    	$telefone = substr($value["B"],-9,9);

    	//echo($telefone);

    	//valor recupera

    	$valrecuper = $value["C"];

    	//echo($valrecuper);

    	//ATRASO RECUPERA

    	$atrasrecup = $value["D"];

    	//echo($atrasrecup);

    	

    	$minimo = $value["E"];

    	//echo($minimo);

    	

		$query .="INSERT INTO listacontatos(descricao,idListaContatos,nomeRecebedor,ddd,telefone,bairro,cidade,estado,id_user,var1,var2,var3)VALUES ('nome Empresa','idlistadecont','".$nomerec."','".$ddd."','".$telefone."','','','','".$iduser."','".$valrecuper."','".$atrasrecup."','".$minimo."');";



		//aqui insere



		//fim insere

    }

    



    

}echo($query);//ilustrativo



?>



