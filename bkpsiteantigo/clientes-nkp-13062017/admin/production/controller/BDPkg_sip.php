<?php

require("model/pkg_sip.class.php");
require_once("bdConnect/bdConnectDois.php");

class BDPkg_sip {


    
    public function listAllSip() {
        $conexao = bdConnectDois();
        $SQLSelect = 'SELECT * FROM pkg_sip';
        
        $operacao = $conexao->prepare($SQLSelect);
        $operacao->execute();
        $resultados = $operacao->fetchAll();
        
        return $resultados;
         
    }
    
    public function listSipById($idSip){
    
    	$conexao = bdConnectDois();
    
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT * FROM pkg_sip WHERE id=?';
    
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idSip));
    
    	//captura TODOS os resultados obtidos
    	$resultados = $operacao->fetchAll();
    
    	// fecha a conexão (os resultados já estão capturados)
    	$conexao = null;
    
    	return $resultados;
    
    }
    
    public function listSipByIdUser($idUser){
        
        $conexao = bdConnectDois();
						
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM pkg_sip WHERE id_user=?';
				
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
}
?>