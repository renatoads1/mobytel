<?php
$hostdb ="187.94.66.41";
$nomedb = "mbilling";
$userdb = "renatoads1";
$senhadb = "r3n4t0321";
$portdb="3306";


session_start();
date_default_timezone_set('America/Sao_Paulo');
include_once("../../define/define.php");
$fconn = mysqli_connect("179.188.16.171","mobyfinan","monitor1420","mobyfinan");

//função que limpa caracteres
function limpacharespec($string){
// minusculas
$what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º');
// maiusculas
$by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_');
// devolver a string
return str_replace($what,$by,$string);
}
//valida login
function validalogin($user,$senha){
//incio busca user e senha
$pdo = new PDO("mysql:host=187.94.66.41;dbname=mbilling","renatoads1","r3n4t0321");
$sql = "SELECT *from pkg_user where username = :user and password = :senha";
$stmt = $pdo->prepare($sql);

 $stmt->bindParam(':user',$user);
 $stmt->bindParam(':senha',$senha);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0)
{
		$_SESSION['logged_in'] = false;
		$_SESSION['user_id'] = null;
		$_SESSION['user_name'] = null;
   		$result = array("user"=>null,"id"=>null);
   //fecha conexao
   $pdo =null;
	}else{
		// pega o primeiro usuário
		$user = $users[0];
		
		$_SESSION['logged_in'] = true;
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['user_name'] = $user['username'];
		$_SESSION['credit'] = $user['credit'];
		$_SESSION['active'] = $user['active'];
		$_SESSION['lastname'] = $user['lastname'];
		$_SESSION['fristname'] = $user['fristname'];
		$_SESSION['address'] = $user['address'];
		$_SESSION['cyti'] = $user['cyti'];
		$_SESSION['state'] = $user['state'];
		$_SESSION['country'] = $user['country'];
		$_SESSION['zipcode'] = $user['zipcode'];
		$_SESSION['phone'] = $user['phone'];
		$_SESSION['mobyle'] = $user['mobyle'];
		$_SESSION['email'] = $user['email'];
		$_SESSION['redial'] = $user['redial'];
		$_SESSION['doc'] = $user['doc'];
		$_SESSION['envioSMS'] = $user['envioSMS'];

		$result = array("user"=>$user['username'],"id"=>$user['id']);
		return $result;
		//fecha conexao
  		$pdo =null;
	}
//exit busca user e senha
	
}

//seguranca login 
function segunancalogin($user,$senha){
	
	$user = limpacharespec($user);
	$senha = limpacharespec($senha);
	$result = array("user"=>$user,"senha"=>$senha);
	return $result;
}


//pega user online
function getcalonline($user,$id){
	
	$pdo = new PDO("mysql:host=187.94.66.41;dbname=mbilling","renatoads1","r3n4t0321");

	$sql = "select a.*, b.* from pkg_call_online a, pkg_user b where a.id_user = b.id and a.id_user = '".$id."' and b.id = '".$id."' and b.username = '".$user."'";
	
	//$sql = "select a.*, b.* from pkg_call_online a, pkg_user b where a.id_user = b.id and a.id_user :ida and b.id :idb and b.username :username";

	$stmt = $pdo->prepare($sql);

	//$stmt->bindParam(':ida',$id);
	//$stmt->bindParam(':idb',$id);
	//$stmt->bindParam(':username',$user);
 
	$stmt->execute();
	 
	$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
		if(count($dados) <= 0){
			$erro = array("msg"=>'0');
			return $erro;
			//fecha conexao
		   $pdo =null;
		}else{
			return $dados;
			//fecha conexao
		   $pdo =null;
		}


}
//fim funcoes
?>