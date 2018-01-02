<?php
require_once("model/duvidas.class.php");
require_once("bdConnect/bdConnect.php");


class BDduvidas {


	public function Consultaduvidas(){
		$conn = bdConnect();
		$consulta = $consulta = 'SELECT* FROM duvidas ORDER BY duv_id ';
		$operacao = $conn->prepare($consulta);
		$resultados = $operacao->execute();
		$resultados = $operacao->fetchAll();
		$conn=null;

		return $resultados;
	}

}