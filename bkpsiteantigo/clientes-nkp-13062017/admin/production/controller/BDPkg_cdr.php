<?php

require_once("model/pkg_cdr.class.php");
require_once("bdConnect/bdConnectDois.php");

class BDPkg_cdr {


    
    public function listAllCdr() {
        $conexao = bdConnectDois();
        $SQLSelect = 'SELECT * FROM pkg_cdr';
        $operacao = $conexao->prepare($SQLSelect);
        $operacao->execute();
        $resultados = $operacao->fetchAll();
        
        return $resultados;
         
    }
    
    public function listCdrById($idCdr){
    
    	$conexao = bdConnectDois();
    
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT * FROM pkg_cdr WHERE id=?';
    
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idCdr));
    
    	//captura TODOS os resultados obtidos
    	$resultados = $operacao->fetchAll();
    
    	// fecha a conexão (os resultados já estão capturados)
    	$conexao = null;
    
    	return $resultados;
    
    }
    
    public function listCdrByIdUser($idUser){
        
        $conexao = bdConnectDois();
						
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM pkg_cdr WHERE id_user=? ORDER BY starttime';
				
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
    
    public function listCdrByDay ($idUser, $dia) {
           
    	$dataForm = date("Y/m/d", strtotime($dia));
    	$conexao = bdConnectDois();
    	
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT * FROM pkg_cdr WHERE id_user=? AND DATE_FORMAT(pkg_cdr.starttime, "%Y/%m/%d") = ?';
    	
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    	
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idUser, $dataForm));
    	
    	//captura TODOS os resultados obtidos
    	$resultados = $operacao->fetchAll();
    	
    	// fecha a conexão (os resultados já estão capturados)
    	$conexao = null;
    	
    	return $resultados;
    	
    }
    
    public function listCdrByMonth ($idUser, $dia) {
    	 
    	$dataForm = date("Y/m/d", strtotime($dia));
    	$conexao = bdConnectDois();
    	 
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT * FROM pkg_cdr WHERE id_user=? AND DATE_FORMAT(pkg_cdr.starttime, "%Y/%m/%d") = ?';
    	 
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    	 
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idUser, $dataForm));
    	 
    	//captura TODOS os resultados obtidos
    	$resultados = $operacao->fetchAll();
    	 
    	// fecha a conexão (os resultados já estão capturados)
    	$conexao = null;
    	 
    	return $resultados;
    	 
    }
    
    public function ligacoesDia($idUser){
    
    	$conexao = bdConnectDois();
    
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT count(pkg_cdr.id) as ligdia FROM pkg_cdr WHERE pkg_cdr.id_user = ? AND  DATE_FORMAT(pkg_cdr.stoptime, "%Y/%m/%d") = curdate()';
    
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);

    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idUser));
    

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
    
   
    public function ligacoesultimosdias($idUser){
    
    	$conexao = bdConnectDois();
    
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT count(pkg_cdr.id_user) as ligsemana FROM pkg_cdr WHERE  pkg_cdr.id_user = ? and datediff(date(now()),pkg_cdr.stoptime) <= 7';
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idUser));
    
    
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
    
    
    public function ligacoesmes($idUser){
    
    	$conexao = bdConnectDois();
    	
    	$mes = date("n") ;
    	
    
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = ' SELECT count(pkg_cdr.id_user) as ligmes FROM pkg_cdr WHERE  pkg_cdr.id_user = ? AND month(pkg_cdr.stoptime) = ?';
    	
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    	

    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idUser, $mes));
    	

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
    
    public function minutosmes($idUser){
    
    	$conexao = bdConnectDois();
 			
    	$mes = date("n") ;
    	
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT sum(ROUND(( (UNIX_TIMESTAMP(pkg_cdr.stoptime) - UNIX_TIMESTAMP(pkg_cdr.starttime))) / 60))  as minutos FROM mbilling.pkg_cdr where pkg_cdr.id_user = ? AND month(pkg_cdr.stoptime) = ?';
    	
    	
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idUser ,$mes));
    
    
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
    
    
    public function gastosmes($idUser){
    
    	$conexao = bdConnectDois();
    
    	$mes = date("n") ;
    	
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT sum(pkg_cdr.buycost) as gastos FROM pkg_cdr WHERE  pkg_cdr.id_user = ? AND month(pkg_cdr.stoptime) = ?';
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
    
    
    public function gastosConta($idUser,$mes,$year){
    
    	$conexao = bdConnectDois();
    
    	 
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT sum(pkg_cdr.buycost) as gastos FROM pkg_cdr WHERE  pkg_cdr.id_user = ? AND month(pkg_cdr.stoptime) = ? AND year(pkg_cdr.stoptime) = ?';
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($idUser,$mes,$year));
    
    
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

    /*

  
    
 
    
    ******************
    Gastos Mês
    ******************
    
 
    SELECT sum(pkg_cdr.buycost)
    FROM pkg_cdr
    WHERE  pkg_cdr.id_user = 4
    AND
    month(pkg_cdr.stoptime) = @mes;
    
    
    */
    
    
}


