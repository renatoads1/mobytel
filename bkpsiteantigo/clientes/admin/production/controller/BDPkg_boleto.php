<?php

require("../model/pkg_boleto.class.php");
require_once("../bdConnect/bdConnectDois.php");

class BDPkg_boleto {
	
	public function insertBoleto ($boleto) {
	    
		
		
		$id = $boleto->getId();
		$id_user = $boleto->getIdUser();
		$date = $boleto->getDate();
		$description = $boleto->getDescription();
		$status = $boleto->getStatus();
		$payment = $boleto->getPayment();
		$vencimento = $boleto->getVencimento();
		$vencimento= date('Y-m-d H:i:s', strtotime($vencimento));
		
		
		$consulta = $consulta = 'insert into pkg_boleto(id,id_user,date,description,status,payment,vencimento) VALUES (?,?,?,?,?,?,?)';
	
		$conn = bdConnectDois();
		$operacao = $conn->prepare($consulta);
		
		if (!$operacao) {
			echo "\nPDO::errorInfo():\n";
			print_r($conn->errorInfo());
		}
	
		$inserir = $operacao->execute(array($id,$id_user,$date,$description,$status,$payment,$vencimento));

		$conn = null;
	
		if($inserir) {
			return true;
		}else {
			return false;
		}
	}
	
	
	public function editBoleto($idUser,$boleto) {
		
		$id_user = $boleto->getIdUser();
		$date = $boleto->getDate();
		$description = $boleto->getDescription();
		$status = $boleto->getStatus();
		$payment = $boleto->getPayment();
		$vencimento = $boleto->getVencimento();
	
	
		$sql = 'update pkg_boleto set date=?,description=?,status=?,payment=?,vencimento=? where id_user=?';
	
		$conn = bdConnectDois();
		$operacao = $conn->prepare($sql);
		$atualizar = $operacao->execute(array($date,$description,$status,$payment,$vencimento,$idUser,));
		$conn = null;
	
		if($atualizar) {
			return true;
		}else {
			return false;
		}
	}
	
	
	public function listBoletoByUser($idUser){
	
		$conexao = bdConnectDois();
	
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM pkg_boleto WHERE id_user=?';
	
		//prepara a execução da sentença
		$operacao = $conexao->prepare($SQLSelect);
	
		//executa a sentença SQL com o valor passado por parâmetro
		$pesquisar = $operacao->execute(array($idUser));
	
		//captura TODOS os resultados obtidos
		$resultados = $operacao->fetchAll();
	
		// fecha a conexão (os resultados já estão capturados)
		$conexao = null;
	
		if($resultados){
				foreach($resultados as $boleto){
					$boletoType = $boleto;
				}
			}
				
			return $boletoType;
		}
		


	public function listAllBoleto() {
		$conexao = bdConnectDois();
		$SQLSelect = 'SELECT * FROM pkg_boleto';
	
		$operacao = $conexao->prepare($SQLSelect);
		$operacao->execute();
		$resultados = $operacao->fetchAll();
	
		return $resultados;
			
	}

}