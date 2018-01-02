<?php
/**
 * @author Moby Telecom
 *
 */
class pkg_boleto  {
	
	private $id;
	private $id_user;
	private $date;
	private $description;
	private $status;
	private $payment;
	private $vencimento;
	
	
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
	
	public function  getDate(){
		return $this->date;
	}
	public function setDate($date){
		$this->date = $date;
	}
	
	public function  getDescription(){
		return $this->description;
	}
	public function setDescription($description){
		$this->description = $description;
	}
	
	public function  getStatus(){
		return $this->status;
	}
	public function setStatus($status){
		$this->status = $status;
	}
	
	public function  getPayment(){
		return $this->payment;
	}
	public function setPayment($payment){
		$this->payment = $payment;
	}
	
	public function  getVencimento(){
		return $this->vencimento;
	}
	public function setVencimento($vencimento){
		$this->vencimento = $vencimento;
	}
	
	
}
