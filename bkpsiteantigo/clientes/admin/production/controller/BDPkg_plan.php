<?php

require("model/pkg_plan.class.php");
require_once("bdConnect/bdConnectDois.php");

class BDPkg_plan {


    
    public function listAllPlan() {
        $conexao = bdConnectDois();
        $SQLSelect = 'SELECT * FROM pkg_plan';
        
        $operacao = $conexao->prepare($SQLSelect);
        $operacao->execute();
        $resultados = $operacao->fetchAll();
        
        return $resultados;
         
    }
    
    public function listPlanById($idPlan){
    
    	$conexao = bdConnectDois();
    
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT * FROM pkg_plan WHERE id=?';
    
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idPlan));
    
    	//captura TODOS os resultados obtidos
    	$resultados = $operacao->fetchAll();
    
    	// fecha a conexão (os resultados já estão capturados)
    	$conexao = null;
    
    	if($resultados){
    		foreach($resultados as $plan){
    			$planType = $plan;
    		}
    	}
    	
    	return $planType;
    }
    	    
    public function listPlanByIdUser($idUser){
        
        $conexao = bdConnectDois();
						
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM pkg_plan WHERE id_user=?';
				
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