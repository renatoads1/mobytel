<?php
require_once("model/tipo.class.php");
require_once("bdConnect/bdConnect.php");

class BDtipo {
	
	public function Consultatipos(){
		$conn = bdConnect();
		$consulta = $consulta = 'SELECT* FROM tipo ORDER BY tipo_id ';
		$operacao = $conn->prepare($consulta);
		$resultados = $operacao->execute();
		$resultados = $operacao->fetchAll();
		$conn=null;
	
		return $resultados;
	}
	
	
	
	
}


?>