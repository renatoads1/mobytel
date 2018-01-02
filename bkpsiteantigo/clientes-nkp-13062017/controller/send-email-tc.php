<?php


$nome = utf8_encode ( htmlspecialchars ( $_POST ['tcnome'] ) );
$telefone = utf8_encode ( htmlspecialchars ( $_POST ['tctel'] ) );
$celular = utf8_encode ( htmlspecialchars ( $_POST ['tccelular'] ) );
$fromemail = utf8_encode ( htmlspecialchars ( $_POST ['tcemail'] ) );
$objprofissional = utf8_encode ( htmlspecialchars ( $_POST ['tcobjetivo'] ) );
$formacademica = utf8_encode ( htmlspecialchars ( $_POST ['tcformacao'] ) );
$dadoscomplementares = utf8_encode ( htmlspecialchars ( $_POST ['tcdados'] ) );
$expprofissional = utf8_encode ( htmlspecialchars ( $_POST ['tcexp'] ) );
$pergunta = utf8_encode ( htmlspecialchars ( $_POST ['tcpergunta'] ) );
$resposta = utf8_encode ( htmlspecialchars ( $_POST ['tcresp'] ) );
$assunto = "Curriculo: " . $nome. " - Trabalhe Conosco" ;


$emailTo = "rh@mobytel.com.br";


$curriculo = isset($_FILES['input-file']) ? $_FILES['input-file'] : FALSE;

if(file_exists($curriculo['tmp_name']) and !empty($curriculo)){
	
	
	$fp = fopen($_FILES['input-file']['tmp_name'],"rb");
	$anexo = fread($fp,filesize($_FILES['input-file']['tmp_name']));
	$anexo = base64_encode($anexo);
	fclose($fp);
	$anexo = chunk_split($anexo);
	$boundary = "XYZ-" . date("dmYis") . "-ZYX";
	$mens = "--$boundary\n";
	$mens .= "Content-Transfer-Encoding: 8bits\n";
	$mens .= "Content-Type: text/html; charset=\"ISO-8859-1\"\n\n"; //plain
	$mens .= "Nome: ". $nome. "\n";
	$mens .= "Telefone :". $telefone. "\n";
	$mens .= "Celular: ". $celular . "\n";
	$mens .= "E-mail: ". $fromemail . "\n";
	$mens .= "Objetivo: ". $objprofissional . "\n";
	$mens .= "Formação: ". $formacademica . "\n";
	$mens .= "Dados Complementares: ". $dadoscomplementares . "\n";
	$mens .= "Experiência: ". $expprofissional . "\n";
	$mens .= "Você sabe o que é telefonia IP? ". $pergunta . "\n";
	$mens .= "Experiência detalhada: ". $resposta . "\n";
	$mens .= "Currículo: Em anexo \n";
	$mens .= "--$boundary\n";
	$mens .= "Content-Type: ".$curriculo["type"]."\n";
	$mens .= "Content-Disposition: attachment; filename=\"".$curriculo["name"]."\"\n";
	$mens .= "Content-Transfer-Encoding: base64\n\n";
	$mens .= "$anexo\n";
	$mens .= "--$boundary--\r\n";
	
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
	$headers .= "From:formenvio@mobytel.com.br\r\n"; //E-mail do remetente
	$headers .= "Return-Path:formenvio@mobytel.com.br\r\n"; //E-mail do remetente
	$headers .= "$boundary\n";
	
	//envio o email com o anexo
	if(mail($emailTo,$assunto,$mens,$headers, "-r formenvio@mobytel.com.br")){
		header("Location: ../mail_ok.php");
	}else{
		header("Location: ../mail_error.php");
	}
}
//se não tiver anexo
else{
	
	$mens = "";
	$mens .= "Nome: ". $nome. "\n";
	$mens .= "Telefone: ". $telefone. "\n";
	$mens .= "Celular: ". $celular . "\n";
	$mens .= "E-mail: ". $fromemail . "\n";
	$mens .= "Objetivo: ". $objprofissional . "\n";
	$mens .= "Formação: ". $formacademica . "\n";
	$mens .= "Dados Complementares: ". $dadoscomplementares . "\n";
	$mens .= "Experiência: ". $expprofissional . "\n";
	$mens .= "Você sabe o que é telefonia IP? ". $pergunta . "\n";
	$mens .= "Experiência detalhada: ". $resposta . "\n";
	$mens .= "Currículo: não anexado \n";
	
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From:formenvio@mobytel.com.br\r\n"; //E-mail do remetente
	$headers .= "Return-Path:formenvio@mobytel.com.br\r\n"; //E-mail do remetente
	
	//envia o email sem anexo
	if(mail($emailTo,$assunto,$mens,$headers,"-r formenvio@mobytel.com.br")){
		header("Location: ../mail_ok.php");
	}else{
		header("Location: ../mail_error.php");
	}
}



?>