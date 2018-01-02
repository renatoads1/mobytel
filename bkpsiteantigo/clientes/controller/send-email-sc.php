<?php


$nome = utf8_encode ( htmlspecialchars ( $_POST ['name'] ) );
$sobrenome = utf8_encode ( htmlspecialchars ( $_POST ['sname'] ) );
$endereco = utf8_encode ( htmlspecialchars ( $_POST ['end'] ) );
$cidade = utf8_encode ( htmlspecialchars ( $_POST ['cidade'] ) );
$estado = utf8_encode ( htmlspecialchars ( $_POST ['estado'] ) );
$cep = utf8_encode ( htmlspecialchars ( $_POST ['cep'] ) );
$telefone = utf8_encode ( htmlspecialchars ( $_POST ['telefone'] ) );
$celular = utf8_encode ( htmlspecialchars ( $_POST ['celular'] ) );
$doc = utf8_encode ( htmlspecialchars ( $_POST ['doc'] ) );
$email = utf8_encode ( htmlspecialchars ( $_POST ['email'] ) );
$senha = utf8_encode ( htmlspecialchars ( $_POST ['senha'] ) );
$senhaConf = utf8_encode ( htmlspecialchars ( $_POST ['senhaConf'] ) );

$assunto = "Solcitação de Cadastro: " . $nome;
$emailTo = "comercial@mobytel.com.br";

if($senha == $senhaConf) { 
	
	$mens = "";
	$mens .= "Nome: ". $nome . "\n";
	$mens .= "Sobrenome: ". $sobrenome . "\n";
	$mens .= "Endereço: ". $endereco . "\n";
	$mens .= "Cidade: ". $cidade. "\n";
	$mens .= "Estado: ". $estado. "\n";
	$mens .= "Cep: ". $cep . "\n";
	$mens .= "Telefone: ". $telefone . "\n";
	$mens .= "Celular: ". $celular . "\n";
	$mens .= "Doc: ". $doc . "\n";
	$mens .= "Email: ". $email . "\n";
	$mens .= "Senha: ". $senha . "\n";
	
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From:formenvio@mobytel.com.br\r\n"; //E-mail do remetente
	$headers .= "Return-Path:formenvio@mobytel.com.br\r\n"; //E-mail do remetente
	
	//envia o email sem anexo
	if(mail($emailTo,$assunto,$mens,$headers, "-r formenvio@mobytel.com.br")){
		header("Location: ../mail_ok.php");
	}else{
		header("Location: ../mail_error.php");
	}
} else {
	header("Location: ../solicitaCadastro.php");
}
?>