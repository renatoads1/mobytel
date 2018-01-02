<?php

require("model/pkg_call_online.class.php");
require_once("bdConnect/bdConnectDois.php");

class BDPkg_call_online {

public function insertCallOnline ($callOnline) {
    
    $id_user = $callOline->getIdUser();
    $canal = $callOline->getCanal();
    $tronco = $callOline->getTronco();
    $ndiscado = $callOline->getNdiscado();
    $codec = $callOline->getCodec();
    $status = $callOline->getStatus();
    $duration = $callOline->getDuration();
    $reinvite = $callOline->getReinvite();
    $fromIP = $callOline->getFromIp();
    $server = $callOline->getServer();
      
        
    $consulta = $consulta = 'insert into pkg_call_online(id_user, canal, tronco, ndiscado, codec, status, duration, reinvite, from_ip, server) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
  
        $conn = bdConnectDois();
        $operacao = $conn->prepare($consulta);
        $inserir = $operacao->execute(array($id_user, $canal, $tronco, $ndiscado, $codec, $status, $duration, $reinvite, $fromIP, $server));
        $conn = null;
        
        if($inserir) {
            return true;
        }else {
            return false;
        }    
   }
    public function editaCallOnline($idCall, $callOnline) {
            
        $callAnt = $this->listCallOnlineById($idCall);
        $idCallAnt = $callAnt['id'];
           
		$id_user = $callOnline->getIdUser();
		$canal = $callOnline->getCanal();
		$tronco = $callOnline->getTronco();
		$ndiscado = $callOnline->getNdiscado();
		$codec = $callOnline->getCodec();
		$status = $callOnline->getStatus();
		$duration = $callOnline->getDuration();
		$reinvite = $callOnline->getReinvite();
		$fromIp = $callOnline->getFromIp();
		$server = $callOnline->getServer();                        
        
        $sql = 'update pkg_call_online set id_user=?, canal=?, tronco=?, ndiscado=?, codec=?, status=?, duration=?, reinvite=?, from_ip=?, server=? where id=?';
        
        $conn = bdConnectDois();
        $operacao = $conn->prepare($sql);
        $atualizar = $operacao->execute(array($id_user, $canal, $tronco, $ndiscado, $codec, $status, $duration, $reinvite, $fromIp, $server));
        $conn = null;
        
         if($atualizar) {
            return true;
        }else {
            return false;
        }    
    }
    
   
    public function deleteCallOnline($idCall) {
    	
  	
    	$conexao = bdConnectDois();
    	$SQLDelete = 'DELETE FROM pkg_call_online WHERE id=?';
        
    	$operacao = $conn->prepare($SQLDelete);
        $apagar = $operacao->execute(array($idCall));
        
        $conn = null;
        
        if($apagar) {
            return true;
        }else {
            return false;
        }
    }
    
    public function listAllUsers() {
        $conexao = bdConnectDois();
        $SQLSelect = 'SELECT * FROM pkg_call_online';
        
        $operacao = $conexao->prepare($SQLSelect);
        $operacao->execute();
        $resultados = $operacao->fetchAll();
        
        return $resultados;
         
    }
    
    public function listUserByIdUser($idUser){
        
        $conexao = bdConnectDois();
						
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM pkg_call_online WHERE id_user=?';
				
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