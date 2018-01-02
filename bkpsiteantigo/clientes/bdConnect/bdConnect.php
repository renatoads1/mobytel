<?php

function bdConnect (){
	  if($_SERVER['SERVER_NAME']=="localhost"){
		  	/*minha maquina*/
			$servidor = 'localhost';
			$porta = '3306';
			$banco = 'mobyteldb';
			$usuario = 'root';
			$senha = '';
		  }else{
		  /*Localweb*/
		$servidor = 'localhost';
		$porta = '3306';
		$banco = 'mobytelecom';
		$usuario = 'mobyteldb';
		$senha = 'moby@2323';
			
		  }

     $conn = new PDO("mysql:host=$servidor;port=$porta;dbname=$banco;charset=utf8", $usuario, $senha, array(PDO::ATTR_PERSISTENT => true));
        return $conn;
    }

?>
