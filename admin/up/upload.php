<?php
// Make sure file is not cached (as it happens for example on iOS devices)
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();//abre sessao
//chama clase le excell
require_once 'Classes/PHPExcel.php';
include'../../naruto/sask.php';
function pegaidlistc(){

$hostname = "179.188.16.171";
$bancodedados = "mobyfinan";
$usuario = "mobyfinan";
$senha = "monitor1420";
$fconn = new mysqli($hostname, $usuario, $senha, $bancodedados);
	if($fconn->connect_error){die('Connect Error ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
	}

$querycont ="select DISTINCT(idListaContatos) from listacontatos where idListaContatos <> ''";
        $idlist = $fconn->query($querycont);
        $regs = mysqli_num_rows($idlist);
        $regs2 =  $regs+1 ;
        while($obj = mysqli_fetch_Object($idlist))
        {
           if($regs2 <= $obj->idListaContatos){
            $regs2++;
           } 
        }
        return $regs2;

}

//PEGA O USER E O ID
$nomeuser = $_SESSION['user_name'];
$iduser = $_SESSION['user_id'];

// Tempo de execução de 5 minutos
@set_time_limit(25 * 60);

// Descomente esse para o tempo de upload falso
// usleep (5000);

// Settings
//$targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
$targetDir = 'uploads';
$cleanupTargetDir = true; // Remover arquivos antigos
$maxFileAge = 5 * 3600; // Temp file age in seconds


// Create target dir
if (!file_exists($targetDir)) {
	@mkdir($targetDir);
}

// Get a file name
if (isset($_REQUEST["name"])) {
	$fileName = $_REQUEST["name"];
} else if (!empty($_FILES)) {
	$fileName = $_FILES["file"]["name"];
} else {
	$fileName = uniqid("file_");
}
//pega Extenção 
$ext = explode(".",$fileName);
$nomedescr = $ext[0];
$nomenovo = $nomeuser."_".$iduser."_.".$ext[1];
//grava o arquivo na pasta
$filePath = $targetDir . DIRECTORY_SEPARATOR . $nomenovo;
//$fileName;

//pega id lista de contato
$idlistc =  pegaidlistc();
//081017

if($ext[1]=="xlsx"){
//excell
//move arquivo
	// Remover arquivos temporários antigos	
if ($cleanupTargetDir) {
	if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
	}

	while (($file = readdir($dir)) !== false) {
		$tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

		// Se o arquivo temporário estiver no arquivo atual, vá para o próximo
		if ($tmpfilePath == "{$filePath}.part") {
			continue;
		}

		// Remova o arquivo temporário se for mais antigo que a idade máxima e não é o arquivo atual
		if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
			@unlink($tmpfilePath);
		}
	}
	closedir($dir);
}

// O empate pode ser ativado
$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;

// Open temp file
if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
	die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Falha ao abrir o fluxo de saída."}, "id" : "id"}');
}

if (!empty($_FILES)) {
	if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Falha ao mover o arquivo carregado."}, "id" : "id"}');
	}

	// Read binary input stream and append it to temp file
	if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Falha ao abrir o fluxo de entrada."}, "id" : "id"}');
	}
} else {	
	if (!$in = @fopen("php://input", "rb")) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Falha ao abrir o fluxo de entrada."}, "id" : "id"}');
	}
}

while ($buff = fread($in, 4096)) {
	fwrite($out, $buff);
}

@fclose($out);
@fclose($in);

//renomeia o arquivo
rename("{$filePath}.part", $filePath);
//fim move arquivo
//SELECT * FROM `listacontatos` WHERE descricao = 'Empresa'
//select DISTINCT(idListaContatos) from listacontatos where idListaContatos != ''
//pega id da ultima lista de contato e acrescenta 1

//$datahora = date("d-m-Y g:i");

//le o arquivo
$objPHPExcel = PHPExcel_IOFactory::load($filePath);
$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);


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
    	
    	//insere no banco

		$query2 ="INSERT INTO listacontatos(descricao,idListaContatos,nomeRecebedor,ddd,telefone,bairro,cidade,estado,id_user,var1,var2,var3)VALUES ('".$nomedescr."','".$idlistc."','".$nomerec."','".$ddd."','".$telefone."','','','','".$iduser."','".$valrecuper."','".$atrasrecup."','".$minimo."');";
			
			if($telefone != "" and $nomerec != "")
				{
					//aqui insere
				if ($fconn->query($query2) === TRUE){				
					} else {
						echo "Erro de conexao banco upload.php linha 176: " . $query2 . "<br>" . $fconn->error;
					}

				}
	

		//fim insere
    }
    

}
//começo ler excell para gravar banco

//fim ler excell
}else if($ext[1]=="csv"){
//csv

}else if($ext[1]=="txt"){
//txt	
// Remover arquivos temporários antigos	
if ($cleanupTargetDir) {
	if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
	}

	while (($file = readdir($dir)) !== false) {
		$tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

		// Se o arquivo temporário estiver no arquivo atual, vá para o próximo
		if ($tmpfilePath == "{$filePath}.part") {
			continue;
		}

		// Remova o arquivo temporário se for mais antigo que a idade máxima e não é o arquivo atual
		if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
			@unlink($tmpfilePath);
		}
	}
	closedir($dir);
}

// O empate pode ser ativado
$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;

// Open temp file
if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
	die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Falha ao abrir o fluxo de saída."}, "id" : "id"}');
}

if (!empty($_FILES)) {
	if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Falha ao mover o arquivo carregado."}, "id" : "id"}');
	}

	// Read binary input stream and append it to temp file
	if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Falha ao abrir o fluxo de entrada."}, "id" : "id"}');
	}
} else {	
	if (!$in = @fopen("php://input", "rb")) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Falha ao abrir o fluxo de entrada."}, "id" : "id"}');
	}
}

while ($buff = fread($in, 4096)) {
	fwrite($out, $buff);
}

@fclose($out);
@fclose($in);

// Verifique se o arquivo foi carregado
if (!$chunks || $chunk == $chunks - 1) {
	// Strip the temp .part suffix off 
	rename("{$filePath}.part", $filePath);
	//abre o arquivo
	$lines = file($filePath);
	if($lines!=null){
		//cria array
		$obj = array();
		//busca ultimo id valido para lista de contato
		$querycont = "select DISTINCT(idListaContatos) from listacontatos where idListaContatos != ''";
		$idlist = $fconn->query($querycont);
		$regs = mysqli_num_rows($idlist);
		$regs++;
		//fim busca ultimo id valido listas contatos
		//leu o arquivo com sucesso
				foreach($lines as $key=>$line){

				//echo("linha:".$key." valor: ".utf8_encode($line)."<br>");
				if($key==0){//nome da empresa
				$nomeempresa =utf8_encode($line);
				}else if($key==1){//texto do sms
				$textosms = utf8_encode($line);
				}else if($key>1){//contatos
					$array =  explode(";",$line);
					$array[0]=trim($array[0]);
					$array[0] = utf8_encode($array[0]);
					$array[1]=trim($array[1]);
					$array[1] = utf8_encode($array[1]);
					$array[2]=trim($array[2]);
					$array[2] = utf8_encode($array[2]);
					$array[3]=trim($array[3]);
					$array[3] = utf8_encode($array[3]);
					//verifica se esta vasio burro do caralho
					if($array[1]==""){
							$sql .="";
					}else if($array[2]==""){
							$sql .="";
					}else{

						$sql ="INSERT INTO listacontatos(descricao,idListaContatos,nomeRecebedor,ddd,telefone,bairro,cidade,estado,id_user,var1,var2,var3)VALUES ('".$nomeempresa."','".$idlistc."','".$array[0]."','".$array[1]."','".$array[2]."','','','','".$iduser."','','','".$array[3]."')";
						//insere os dados
						if ($fconn->query($sql) === TRUE){
								$conta ++;
							} else {
								echo "Error: " . $sql . "<br>" . $fconn->error;
							}

					}//fim else sqlok

				}//fim do else

				//$obj = array($key=>$line);
				//$json = json_encode($obj);
				//echo($json);
				}//fim do foreash

				//deleta arquivo da pasta /up/uploads
				//unlink($filePath);
				//resposta do servidor
		$obj = array("nome"=>"ok passou no array","linhas inseridas"=>$conta);
		echo(json_encode($obj));
	}else{
		echo('{"nao leu" : "no", "result" : "no"}');
	}

}else{
	echo('{"msg" : "erro", "msg" : "erro no upload"}');
}


//exit txt
}




	









