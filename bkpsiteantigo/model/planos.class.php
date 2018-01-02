<?php


class planos {
	
	private $Plan_id;
	private $Plan_nome;
	private $Plan_titulo;
	private $Plan_subtitulo;
	private $Plan_descricao;
	private $Plan_tarifa1;
	private $Plan_tarifa2;
	private $Plan_tarifa3;
	private $Plan_tarifa4;
	private $Plan_condicao1;
	private $Plan_condicao2;
	private $Plan_condicao3;
	private $Plan_condicao4;
	private $Plan_valor;
	private $Plan_destaque;
	private $tipo_id;
	
	
	public function getplanid() {
		return $this->Plan_id;
	}
	public function setplanid($planid) {
		$this->Plan_id = $planid;
	}
	
	public function getplannome() {
		return $this->Plan_nome;
	}
	public function setplannome($plannome) {
		$this->Plan_nome = $plannome;
	}
	
	public function getplantitulo() {
		return $this->Plan_titulo;
	}
	public function setplantitulo($plantitulo) {
		$this->Plan_titulo = $plantitulo;
	}
	
	public function getplansubtitulo() {
		return $this->Plan_subtitulo;
	}
	public function setsubtitulo($plansubtitulo) {
		$this->Plan_subtitulo = $plansubtitulo;
	}
	
	public function getplandescricao() {
		return $this->Plan_descricao;
	}
	public function setplandescricao($plandescricao) {
		$this->Plan_descricao = $plandescricao;
	}
	
	public function getplantarifa1() {
		return $this->Plan_tarifa1;
	}
	public function setplantarifa1($plantarifa1) {
		$this->Plan_tarifa1 = $plantarifa1;
	}
	
	public function getplantarifa2() {
		return $this->Plan_tarifa2;
	}                                                                                                                                                                                                                                                     
	public function setplantarifa2($plantarifa2) {
		$this->Plan_tarifa2 = $plantarifa2;
	}
	
	public function getplantarifa3() {
		return $this->Plan_tarifa3;
	}
	public function setplantarifa3($plantarifa3) {
		$this->Plan_tarifa3 = $plantarifa3;
	}
	
	public function getplantarifa4() {
		return $this->Plan_tarifa4;
	}
	public function setplantarifa4($plantarifa4) {
		$this->Plan_tarifa4 = $plantarifa4;
	}
	
	public function getplancondicao1() {
		return $this->Plan_condicao1;
	}
	public function setplandcondicao1($plancondicao1) {
		$this->Plan_condicao1 = $plancondicao1;
	}
	
	public function getplancondicao2() {
		return $this->Plan_condicao2;
	}
	public function setplancondicao2($plancondicao2) {
		$this->Plan_condicao2 = $plancondicao2;
	}
	public function getplancondicao3() {
		return $this->Plan_condicao3;
	}
	public function setplancondicao3($plancondicao3) {
		$this->Plan_condicao3 = $plancondicao3;
	}
	public function getplancondicao4() {
		return $this->Plan_condicao4;
	}
	public function setplancondicao4($plancondicao4) {
		$this->Plan_condicao4 = $plancondicao4;
	}
	
	public function getplanvalor() {
		return $this->Plan_valor;
	}
	public function setplanvalor($planvalor) {
		$this->Plan_valor = $planvalor;
	}
	
	public function getplandestaque() {
		return $this->Plan_destaque;
	}
	public function setplandestaque($plandestaque) {
		$this->Plan_destaque = $plandestaque;
	}
	
	public function getplantipo() {
		return $this->tipo_id;
	}
	public function setplantipo($plantipo) {
		$this->tipo_id = $plantipo;
	}
	
	
}