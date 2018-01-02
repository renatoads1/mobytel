<?php

require("model/pkg_refill.class.php");
require_once("bdConnect/bdConnectDois.php");

class BDPkg_refill {
	
	public function insertRefill ($idUser) {
	
		$id_user = $refill->getIdUser();
		$date = $refill->getDate();
		$credit = $refill->getCredit();
		$description = $refill->getDescription();
		$refilltype = $refill->getRefilltype();
		$payment = $refill->getPayment();
		$invoicenumber = $refill->getInvoicenumber();
	
		$consulta = $consulta = 'insert into pkg_Boleto(id_user,date,credit,description,refilltype,payment,invoicenumber) VALUES (?,?,?,?,?,?,?)';
	
		$conn = bdConnectDois();
		$operacao = $conn->prepare($consulta);
		$inserir = $operacao->execute(array($idUser,$date,$credit,$description,$refilltype,$payment,$invoicenumber));
		$conn = null;
	
		if($inserir) {
			return true;
		}else {
			return false;
		}
	}
	
	
	public function editRefill($idUser) {
	
		$id_user = $refill->getIdUser();
		$date = $refill->getDate();
		$credit = $refill->getCredit();
		$description = $refill->getDescription();
		$refilltype = $refill->getRefilltype();
		$payment = $refill->getPayment();
		$invoicenumber = $refill->getInvoicenumber();
	
	
		$sql = 'update pkg_Refill set id_user=?,date=?,description=?,status=?,payment=?,vencimento=? where id_user=?';
	
		$conn = bdConnectDois();
		$operacao = $conn->prepare($sql);
		$atualizar = $operacao->execute(array($idUser,$date,$description,$status,$payment,$vencimento));
		$conn = null;
	
		if($atualizar) {
			return true;
		}else {
			return false;
		}
	}
	
	
	public function listRefillByUser($idUser){
	
		$conexao = bdConnectDois();
	
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM pkg_refill WHERE  id_user=?';
	
		//prepara a execução da sentença
		$operacao = $conexao->prepare($SQLSelect);
	
		//executa a sentença SQL com o valor passado por parâmetro
		$pesquisar = $operacao->execute(array($idUser));
	
		//captura TODOS os resultados obtidos
		$resultados = $operacao->fetchAll();
	
		// fecha a conexão (os resultados já estão capturados)
		$conexao = null;
	
		if($resultados){
			foreach($resultados as $refill){
				$refillType = $refill;
			}
		}
			
		return $refillType;
	}
	
	
	public function listAllRefill() {
		$conexao = bdConnectDois();
		$SQLSelect = 'SELECT * FROM pkg_refill';
	
		$operacao = $conexao->prepare($SQLSelect);
		$operacao->execute();
		$resultados = $operacao->fetchAll();
	
		return $resultados;
			
	}
	
	
	public function recargasmes($idUser){
	
		$conexao = bdConnectDois();
	
		$mes = date("n") ;
		
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT sum(pkg_refill.credit) as recargas FROM pkg_refill WHERE  pkg_refill.id_user = ? AND month(pkg_refill.date) = ?';
		//prepara a execução da sentença
		$operacao = $conexao->prepare($SQLSelect);
		
		
		//executa a sentença SQL com o valor passado por parâmetro
		$pesquisar = $operacao->execute(array($idUser,$mes));
		
		
		//captura TODOS os resultados obtidos
		$resultados = $operacao->fetchAll();
		
		
		// fecha a conexão (os resultados já estão capturados)
		$conexao = null;
		
		if($resultados){
			foreach($resultados as $credito){
				$cred = $credito;
			}
		
			return $cred;
		}
	
	}
	
	public function listRefillByUserAndMonth($idUser,$mes){
	
		$conexao = bdConnectDois();
	
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM pkg_refill WHERE  id_user=? AND month(pkg_refill.date) = ? ORDER BY date DESC';
	
		//prepara a execução da sentença
		$operacao = $conexao->prepare($SQLSelect);
	
		//executa a sentença SQL com o valor passado por parâmetro
		$pesquisar = $operacao->execute(array($idUser,$mes));
	
		//captura TODOS os resultados obtidos
		$resultados = $operacao->fetchAll();
	
		// fecha a conexão (os resultados já estão capturados)
		$conexao = null;
	
		/*if($resultados){
			foreach($resultados as $refill){
				$refillType = $refill;
			}
		}
		*/
		return $resultados;
	}
	
	
	public function listRefillByUserPrimaryRecarga($idUser){
	
		$conexao = bdConnectDois();
	
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT *  FROM pkg_refill WHERE  id_user=? ORDER BY date DESC';
	
		//prepara a execução da sentença
		$operacao = $conexao->prepare($SQLSelect);
	
		//executa a sentença SQL com o valor passado por parâmetro
		$pesquisar = $operacao->execute(array($idUser));
	
		//captura TODOS os resultados obtidos
		$resultados = $operacao->fetchAll();
	
		//fecha a conexão (os resultados já estão capturados)
		$conexao = null;
		
		$resultado = 0;
		
		if($resultados){
		 	foreach($resultados as $refill){
		 	
		 	$resultado = $refill;
		 	}
		}
		 

		return $resultado;
	}
	
	
}