<?php

class tipo {
	
	private $tipo_id;
	private $tipo_nome;
	private $serv_id;
    
	public function gettipoid() {
		return $this->tipo_id;
	}
	public function settipoid($tipoid) {
		$this->tipo_id = $tipoid;
	}
	
	public function gettiponome() {
		return $this->tipo_nome;
	}
	public function settiponome($tiponome) {
		$this->tipo_nome = $tiponome;
	}
	
	public function getservid() {
		return $this->serv_id;
	}
	public function setservid($servid) {
		$this->serv_id = $servid;
	}
	
}