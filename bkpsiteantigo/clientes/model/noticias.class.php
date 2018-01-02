<?php


class noticias {
	
	private $idNoticias;
	private $fotoUmNoticias;
	private $fotoDoisNoticias;
	private $fotoTresNoticias;
	private $tituloNoticias;
	private $introNoticias;
	private $textoNoticias;
	private $dataNoticias;
	private $fonteNoticias;
	
	
	public function getidNoticias() {
		return $this->idNoticias;
	}
	public function setidNoticias($idNot) {
		$this->idNoticias = $idNot;
	}
	
	public function getfotoUmNoticias() {
		return $this->fotoUmNoticias;
	}
	public function setfotoUmNoticias($fotoUmNot) {
		$this->fotoUmNoticias = $fotoUmNot;
	}
	
	public function getfotoDoisNoticias() {
		return $this->fotoDoisNoticias;
	}
	public function setfotoDoisNoticias($fotoDoisNot) {
		$this->fotoDoisNoticias = $fotoDoisNot;
	}
	
	public function getfotoTresNoticias() {
		return $this->fotoTresNoticias;
	}
	public function setfotoTresNoticias($fotoTresNot) {
		$this->fotoUmNoticias = $fotoTresNot;
	}
	
	public function gettituloNoticias() {
		return $this->tituloNoticias;
	}
	public function settituloNoticias($tituloNot) {
		$this->tituloNoticias = $tituloNot;
	}
	
	public function getintroNoticias() {
		return $this->introNoticias;
	}
	public function setintroNoticias($introNot) {
		$this->introNoticias = $introNot;
	}
	
	public function gettextoNoticias() {
		return $this->textoNoticias;
	}
	public function settextoNoticias($textoNot) {
		$this->textoNoticias = $textoNot;
	}
	
	public function getdataNoticias() {
		return $this->dataNoticias;
	}
	public function setdataNoticias($dataNot) {
		$this->dataNoticias = $dataNot;
	}
	
	public function getfonteNoticias() {
		return $this->fonteNoticias;
	}
	public function setfonteNoticias($fonteNot) {
		$this->fonteNoticias = $fonteNot;
	}
	
}