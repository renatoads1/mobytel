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
	$servidor = 'mobyteldb.mysql.dbaas.com.br';

  	$porta = '3306';
  
  	$banco = 'mobyteldb';
  
  	$usuario = 'mobyteldb';
  
  	$senha = 'moby@2323';

 
			
		  }
		$conn = new PDO("mysql:host=$servidor;port=$porta;dbname=$banco;charset=utf8", $usuario, $senha, 
	 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
 
       return $conn;
    
	}
	

?>
