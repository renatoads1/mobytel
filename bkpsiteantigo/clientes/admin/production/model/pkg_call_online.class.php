<?php
/**
 * @author Ipec Relacionamentos
 *
 */
class pkg_call_online {
	
	private $id;
	private $id_user;
	private $canal;
	private $tronco;
	private $ndiscado;
	private $codec;
	private $status;
	private $duration;
	private $reinvite;
	private $from_ip;
	private $server;
	
	
	public function  getId(){
		return $this->id;
	}
	public function setId($id){ 
		$this->id = $id;
	}
	
	public function  getIdUser(){
		return $this->id_user;
	}
	public function setIdUser($idUser){
		$this->id_user = $idUser;
	}
	
	public function  getCanal(){
		return $this->canal;
	}
	public function setCanal($canal){
		$this->canal = $canal;
	}
	
	public function  getTronco(){
		return $this->tronco;
	}
	public function setTronco($tronco){
		$this->tronco = $tronco;
	}
	
	public function  getNdiscado(){
		return $this->ndiscado;
	}
	public function setNdiscado($ndis){
		$this->ndiscado = $ndis;
	}
	
	public function  getCodec(){
		return $this->codec;
	}
	public function setCodec($codec){
		$this->codec = $codec;
	}
	
	public function  getStatus(){
		return $this->status;
	}
	public function setStatus($st){
		$this->status = $st;
	}
	
	public function  getDuration(){
		return $this->duration;
	}
	public function setDuration($dur){
		$this->duration = $dur;
	}
	
	public function  getReinvite(){
		return $this->reinvite;
	}
	public function setReinvite($reiv){
		$this->reinvite = $reiv;
	}
	
	public function  getFromIp(){
		return $this->from_ip;
	}
	public function setFromIp($f_Ip){
		$this->from_ip = $f_Ip;
	}
	
	public function  getServer(){
		return $this->server;
	}
	public function setServer($sv){
		$this->server = $sv;
	}
}
	
	
	
	
	