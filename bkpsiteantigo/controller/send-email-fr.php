<?php


$nomeFantasia = utf8_encode ( htmlspecialchars ( $_POST ['frNomeFantasia'] ) );
$cnpj = utf8_encode ( htmlspecialchars ( $_POST ['frDoc'] ) );
$fromemail = utf8_encode ( htmlspecialchars ( $_POST ['frEmail'] ) );
$telefone = utf8_encode ( htmlspecialchars ( $_POST ['frTel'] ) );
$celular = utf8_encode ( htmlspecialchars ( $_POST ['frCelular'] ) );
$endereco = utf8_encode ( htmlspecialchars ( $_POST ['frEndereco'] ) );
$cidade = utf8_encode ( htmlspecialchars ( $_POST ['frCidade'] ) );
$estado = utf8_encode ( htmlspecialchars ( $_POST ['frEstado'] ) );
$cep = utf8_encode ( htmlspecialchars ( $_POST ['frCep'] ) );
$cidInvest= utf8_encode ( htmlspecialchars ( $_POST ['frLocal'] ) );
$estInvest= utf8_encode ( htmlspecialchars ( $_POST ['frLocalEstado'] ) );
$cepInvest= utf8_encode ( htmlspecialchars ( $_POST ['frLocalCep'] ) );
$mensagem = utf8_encode ( htmlspecialchars ( $_POST ['frMensagem'] ) );

$assunto = "Contato:  " . $nomeFantasia. " - Franquias" ;
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
	$mens .= "Cidade de Investimento: ". $cidInvest . "\n";
	$mens .= "Estado de Investimento: ". $estInvest . "\n";
	$mens .= "Cep de Investimento: ". $cepInvest . "\n";
	$mens .= "Mensagem:". $mensagem . "\n";

	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From:formenvio@mobytel.com.br\r\n"; //E-mail do remetente
	$headers .= "Return-Path:formenvio@mobytel.com.br\r\n"; //E-mail do remetente
	
		
	//envia o email sem anexo
	if(mail("$emailTo", $assunto, $mens, $headers, "-r formenvio@mobytel.com.br")){
		header("Location: ../mail_ok.php");
	}else{
		header("Location: ../mail_error.php");
	}
	
	?>