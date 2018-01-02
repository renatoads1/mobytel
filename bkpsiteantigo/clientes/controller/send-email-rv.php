<?php


$nomeFantasia = utf8_encode ( htmlspecialchars ( $_POST ['rvNomeFantasia'] ) );
$cnpj = utf8_encode ( htmlspecialchars ( $_POST ['rvDoc'] ) );
$fromemail = utf8_encode ( htmlspecialchars ( $_POST ['rvEmail'] ) );
$telefone = utf8_encode ( htmlspecialchars ( $_POST ['rvTel'] ) );
$celular = utf8_encode ( htmlspecialchars ( $_POST ['rvCelular'] ) );
$endereco = utf8_encode ( htmlspecialchars ( $_POST ['rvEndereco'] ) );
$cidade = utf8_encode ( htmlspecialchars ( $_POST ['rvCidade'] ) );
$estado = utf8_encode ( htmlspecialchars ( $_POST ['rvEstado'] ) );
$cep = utf8_encode ( htmlspecialchars ( $_POST ['rvCep'] ) );
$mensagem = utf8_encode ( htmlspecialchars ( $_POST ['rvMensagem'] ) );

$assunto = "Contato: " . $nomeFantasia. " - Revendedor" ;
$emailTo = "rh@mobytel.com.br";

	
	$mens = "";
	$mens .= "Nome fantasia: ". $nomeFantasia. "\n";
	$mens .= "CPNJ: ". $cnpj. "\n";
	$mens .= "Telefone: ". $telefone. "\n";
	$mens .= "Celular: ". $celular . "\n";
	$mens .= "E-mail: ". $fromemail . "\n";
	$mens .= "Endereço: ". $endereco . "\n";
	$mens .= "Cidade: ". $cidade . "\n";
	$mens .= "Estado: ". $estado . "\n";
	$mens .= "Cep: ". $cep . "\n";
	$mens .= "Mensagem:". $mensagem . "\n";
	
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