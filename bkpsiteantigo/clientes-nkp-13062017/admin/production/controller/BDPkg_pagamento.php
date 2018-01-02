<?php

//require("../model/pkg_pagamento.class.php");

include(dirname(__FILE__).'/../model/pkg_pagamento.class.php');

require_once("/../bdConnect/bdConnectDois.php");

//include(dirname(__FILE__).'/../bdConnect/bdConnectDois.php');


class BDPkg_pagamentos {

	public function insertPagamentos ($pagamento) {
		$pag_id = $pagamento->getPagId();
		$pag_id_user = $pagamento->getPagIdUser();
		$pag_tipo = $pagamento->getPagTipo();
		$pag_plano = $pagamento->getPagPlano(); 		
		$pag_tipo_plan = $pagamento->getPagTipoPlano();
		$pag_data_cadastro = $pagamento->getPagDataCadastro();
		$pag_data_alteracao = $pagamento->getPagDataAlteracao();
		$pag_data_cancelamento = $pagamento->getPagDataCancelamento();
		$pag_data_pagamento = $pagamento->getPagDataPagamento();
		
		$pag_data_vencimento = $pagamento->getPagDataVencimento();
		$pag_data_vencimento= date('Y-m-d H:i:s', strtotime($pag_data_vencimento));
		
		
		$pag_valor = $pagamento->getPagValor();
		$pag_num_boleto = $pagamento->getPagNumBoleto();
		$pag_status = $pagamento->getPagStatus();
		$pag_link_boleto = $pagamento->getLinkBoleto();
		$pag_codbarras_boletos = $pagamento->getCodbarrasBoleto();
		

		$consulta = $consulta = 'insert into pkg_pagamentos(pag_id_user,pag_tipo,pag_plano,pag_tipo_plan,pag_data_cadastro,pag_data_alteracao,
								pag_data_cancelamento,pag_data_pagamento,pag_data_vencimento,pag_valor,pag_num_boleto,pag_status,pag_link_boleto,
								pag_codbarras_boletos) 
								VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	
		$conn = bdConnectDois();
		
		$operacao = $conn->prepare($consulta);
	
		$inserir = $operacao->execute(array($pag_id_user,$pag_tipo,$pag_plano,$pag_tipo_plan,$pag_data_cadastro,$pag_data_alteracao,$pag_data_cancelamento,$pag_data_pagamento,
				   $pag_data_vencimento,$pag_valor,$pag_num_boleto,
				   $pag_status,$pag_link_boleto,$pag_codbarras_boletos));
		
		
		$conn = null;
	
		if($inserir) {
			return true;
		}else {
			return false;
		}
	}
	
	

	public function editPagamentos($idUser,$pagamento) {
	
		$pag_id = $pagamento->getPagId();
		$pag_id_user = $pagamento->getPagIdUser();
		$pag_tipo = $pagamento->getPagTipo();
		$pag_plano = $pagamento->getPagPlano(); 		
		$pag_tipo_plan = $pagamento->getPagTipoPlano();
		$pag_data_cadastro = $pagamento->getPagDataCadastro();
		$pag_data_alteracao = $pagamento->getPagDataAlteracao();
		$pag_data_cancelamento = $pagamento->getPagDataCancelamento();
		$pag_data_pagamento = $pagamento->getPagDataPagamento();
		$pag_data_vencimento = $pagamento->getPagDataVencimento();
		$pag_valor = $pagamento->getPagValor();
		$pag_num_boleto = $pagamento->getPagNumBoleto();
		$pag_status = $pagamento->getPagStatus();
		$pag_link_boleto = $pagamento->getPagLinkBoleto();
		$pag_codbarras_boletos = $pagamento->getPagCodbarrasBoleto();
	
	
		$sql = 'update pkg_pagamento set pag_id_user=?,pag_tipo=?,pag_plano=?,pag_tipo_plan=?,pag_data_cadastro=?
				pag_data_alteracao=?, pag_data_cancelamento=? ,pag_data_pagamento=?, pag_data_vencimento=?,pag_valor=?,pag_num_boleto=?,pag_status=?,pag_link_boleto=?
				pag_status=?,pag_link_boleto=?,pag_codbarras_boletos=? where pag_id_user=?';
	
		$conn = bdConnectDois();
		$operacao = $conn->prepare($sql);
		$atualizar = $operacao->execute(array($pag_id_user,$pag_tipo,$pag_plano,$pag_tipo_plan,$pag_data_cadastro,$pag_data_alteracao,$pag_data_cancelamento,$pag_data_pagamento,$pag_data_vencimento,$pag_valor,$pag_num_boleto,$pag_status,$pag_link_boleto,$pag_codbarras_boletos,$idUser,));
		$conn = null;
	
		if($atualizar) {
			return true;
		}else {
			return false;
		}
	}
	
	
	public function listPagamentoByUser($idUser){
	
		$conexao = bdConnectDois();
	
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM pkg_pagamentos WHERE pag_id_user=? ORDER BY pag_data_vencimento DESC' ;
	
		//prepara a execução da sentença
		$operacao = $conexao->prepare($SQLSelect);
	
		//executa a sentença SQL com o valor passado por parâmetro
		$pesquisar = $operacao->execute(array($idUser));
	
		//captura TODOS os resultados obtidos
		$resultados = $operacao->fetchAll();
	
		// fecha a conexão (os resultados já estão capturados)
		$conexao = null;
	
		
			
		return $resultados;
		
	
		
	}
	
	

	public function listPrimeiroPagamentosByUser($idUser){
	
		$conexao = bdConnectDois();
	
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT pag_data_cadastro  FROM pkg_pagamentos WHERE  pag_id_user=? ORDER BY pag_data_vencimento';
	
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
	
	public function alteraInfPagamentos($valor,$idCliente,$pag_id){
		
		
		
		$sql = 'update pkg_pagamentos set pag_inf_pagamento = ? Where pag_id_user = ? And pag_id = ?';
		
		$conn = bdConnectDois();
		$operacao = $conn->prepare($sql);
		$atualizar = $operacao->execute(array($valor,$idCliente,$pag_id));
		$conn = null;
		
		if($atualizar) {
				return true;
			}else {
				return false;
			}
	} 
	
	
	public function listAllPagamentos() {
		$conexao = bdConnectDois();
		$SQLSelect = 'SELECT * FROM pkg_pagamentos';
	
		$operacao = $conexao->prepare($SQLSelect);
		$operacao->execute();
		$resultados = $operacao->fetchAll();
	
		return $resultados;
			
	}
	
	
}