<?php
/**
 * @author Ipec Relacionamentos
 *
 */
class pkg_plan  {
	
	private $id;
	private $id_user;
	private $name;
	private $lcrtype;
	private $creationdate;
	private $removeinterprefix;
	private $signup;
	private $portabilidadeMobile;
	private $portabilidadeFixed;
	private $ini_credit;
	private $techprefix;
	private $play_audio;
	
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
	
	public function  getName(){
		return $this->name;
	}
	public function setName($nm){
		$this->Name = $nm;
	}
	
	public function  getLcrType(){
		return $this->lcrtype;
	}
	public function setLcrType($lcrt){
		$this->lcrtype = $lcrt;
	}
	
	public function  getCreationDate(){
		return $this->creationdate;
	}
	public function setCreationDate($crd){
		$this->creationdate = $crd;
	}
	
	public function  getRemoveInterPrefix(){
		return $this->removeinterprefix;
	}
	public function setRemoveInterPrefix($rip){
		$this->removeinterprefix = $rip;
	}
	
	public function  getSignup(){
		return $this->signup;
	}
	public function setSignup($sp){
		$this->signup = $sp;
	}
	
	public function  getPortabilidadeMobile(){
		return $this->portabilidadeMobile;
	}
	public function setPortabilidadeMobile($pm){
		$this->portabilidadeMobile = $pm;
	}
	
	public function  getPortabilidadeFixed(){
		return $this->portabilidadeFixed;
	}
	public function setPortabilidadeFixed($pf){
		$this->portabilidadeFixed = $pf;
	}
	
	public function  getIniCredit(){
		return $this->ini_credit;
	}
	public function setIniCredit($ic){
		$this->ini_credit = $ic;
	}
	
	public function  getTechPrefix(){
		return $this->techprefix;
	}
	public function setTechPrefix($tp){
		$this->techprefix = $tp;
	}
	
	public function  getPlayAudio(){
		return $this->play_audio;
	}
	public function setPlayAudio($pa){
		$this->play_audio = $pa;
	}
	
}

?>