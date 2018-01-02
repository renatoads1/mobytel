<?php


$nome = utf8_encode ( htmlspecialchars ( $_POST ['ctName'] ) );
$email = utf8_encode ( htmlspecialchars ( $_POST ['ctEmail'] ) );
$telefone = utf8_encode ( htmlspecialchars ( $_POST ['ctTelefone'] ) );
$setor = utf8_encode ( htmlspecialchars ( $_POST ['ctSetor'] ) );
$assunto = utf8_encode ( htmlspecialchars ( $_POST ['ctAssunto'] ) );
$mensagem = utf8_encode ( htmlspecialchars ( $_POST ['ctMensagem'] ) );

if($setor == "Diretoria"){
    $emailTo = "diretoria@mobytel.com.br";
}

if($setor == "Atendimento"){  
	$emailTo = "atendimento@mobytel.com.br";
}

if($setor == "Comercial"){
	$emailTo = "comercial@mobytel.com.br";
}

if($setor == "Suporte"){
	$emailTo = "suporte@mobytel.com.br";
}

if($setor == "Sac"){
	$emailTo = "sac@mobytel.com.br";
}

if($setor == "Rh"){
	$emailTo = "rh@mobytel.com.br";
}
	
	$mens = "";
	$mens .= "Nome: ". $nome. "\n";
	$mens .= "Email: ". $email. "\n";
	$mens .= "Telefone: ". $telefone. "\n";
	$mens .= "Assunto: ". $assunto. "\n";
	$mens .= "Mensagem: ". $mensagem . "\n";
	
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From:formenvio@mobytel.com.br\r\n"; //E-mail do remetente
	$headers .= "Return-Path:formenvio@mobytel.com.br\r\n"; //E-mail do remetente
	
	//envia o email sem anexo
	if(mail($emailTo,$assunto,$mens,$headers, "-r formenvio@mobytel.com.br")){
		header("Location: ../mail_ok.php");
	}else{
		header("Location: ../mail_error.php");
	};
?>