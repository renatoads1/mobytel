<?php
require_once("model/noticias.class.php");
require_once("bdConnect/bdConnect.php");


class BDnoticias {


	public function buscarTodasNoticias(){
		$conn = bdConnect();
		$consulta = $consulta = 'SELECT * FROM noticias';
		$operacao = $conn->prepare($consulta);
		$resultados = $operacao->execute();
		$resultados = $operacao->fetchAll();
		$conn=null;

		return $resultados;
	}
	
	public function buscarNoticiasPorId($idNews){
		$conn = bdConnect();
		$consulta = $consulta = 'SELECT * FROM noticias WHERE idNoticias = ?';
		$operacao = $conn->prepare($consulta);
		$resultados = $operacao->execute(array($idNews));
		$resultados = $operacao->fetchAll();
		$conn=null;
	
		foreach($resultados as $not){ 
		return $not;
		}
	}
	

}