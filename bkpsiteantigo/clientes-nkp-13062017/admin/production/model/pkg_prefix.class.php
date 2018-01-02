<?php
/**
 * @author Ipec Relacionamentos
 *
 */
class pkg_prefix  {
	
	private $id;
	private $prefix;
	private $destination;
	
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
	
	public function getPrefix(){
		return $this->prefix;
	}
	public function setPrefix($pf){
		$this->prefix = $pf;
	}
	
	public function getDestination(){
		return $this->destination;
	}
	public function setDestination($dt){
		$this->destination = $dt;
	}
}