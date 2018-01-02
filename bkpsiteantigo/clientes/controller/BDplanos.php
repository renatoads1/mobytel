<?php
require_once("model/planos.class.php");
require_once("bdConnect/bdConnect.php");

class BDplanos {


public function Consultaplanos(){
	$conn = bdConnect();
	$consulta = $consulta = 'SELECT* FROM planos ORDER BY Plan_id ';
	$operacao = $conn->prepare($consulta);
	$resultados = $operacao->execute();
	$resultados = $operacao->fetchAll();
	$conn=null;

	return $resultados;
}


public function ConsultaplanoporID($idplan){
	$conn = bdConnect();
	$consulta = $consulta = 'SELECT* FROM planos WHERE Plan_id = ? ORDER BY Plan_id ';
	$operacao = $conn->prepare($consulta);
	$resultados = $operacao->execute(array($idplan));
	$resultados = $operacao->fetchAll();
	$conn=null;
	if($resultados){
		foreach($resultados as $cliente){
			$cli = $cliente;
		}
	}
	
	return $cliente;
}


public function Consultaplanosexceto($idplan){
	$conn = bdConnect();
	$consulta = $consulta = 'SELECT* FROM planos WHERE Plan_id <> ?  ORDER BY Plan_id ';
	$operacao = $conn->prepare($consulta);
	$resultados = $operacao->execute(array($idplan));
	$resultados = $operacao->fetchAll();
	$conn=null;

	return $resultados;
}


public function Consultaplanofiltradoportipo($tipo){
	$conn = bdConnect();
	$consulta = $consulta = 'SELECT* FROM planos WHERE tipo_id = ? ORDER BY Plan_id ';
	$operacao = $conn->prepare($consulta);
	$resultados = $operacao->execute(array($tipo));
	$resultados = $operacao->fetchAll();
	$conn=null;
	
	return $resultados;
}


}