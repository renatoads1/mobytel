<?php


class duvidas {
	
	private $duv_id;
	private $duv_titulo;
	private $duv_pergunta;
	private $duv_resposta;
	
	
	public function getduvid() {
		return $this->duv_id;
	}
	public function setduvid($duvid) {
		$this->duv_id = $duvid;
	}
	
	
	public function getduvtitulo() {
		return $this->duv_titulo;
	}
	public function setduvtitulo($duvtitulo) {
		$this->duv_titulo = $duvtitulo;
	}
	
	public function getduvpergunta() {
		return $this->duv_pergunta;
	}
	public function setduvpergunta($duvpergunta) {
		$this->duv_pergunta = $duvpergunta;
	}
	
	public function getduvresposta() {
		return $this->duv_resposta;
	}
	public function setduvresposta($duvresposta) {
		$this->duv_resposta = $duvresposta;
	}
	
	
	
	
}