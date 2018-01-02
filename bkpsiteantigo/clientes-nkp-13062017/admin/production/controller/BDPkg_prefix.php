<?php

require("model/pkg_prefix.class.php");
require_once("bdConnect/bdConnectDois.php");

class BDPkg_prefix {
   

    
    public function listAllPrefix() {
        $conexao = bdConnectDois();
        $SQLSelect = 'SELECT * FROM pkg_prefix';
        
        $operacao = $conexao->prepare($SQLSelect);
        $operacao->execute();
        $resultados = $operacao->fetchAll();
        
        return $resultados;
         
    }
    
    public function listPrefixById($idPrefix){
        
    	$conexao = bdConnectDois();
    
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT * FROM pkg_prefix WHERE id=?';
    
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idPrefix));
    
    	//captura TODOS os resultados obtidos
    	$resultados = $operacao->fetchAll();
    
    	// fecha a conexão (os resultados já estão capturados)
    	$conexao = null;
    	$prefix['destination'] = "Não Declarado";
    	 
    	if($resultados){
    		foreach($resultados as $pf){
    			$prefix = $pf;
    		}
    	}
    	return $prefix;
    }
    	    
  }
?>