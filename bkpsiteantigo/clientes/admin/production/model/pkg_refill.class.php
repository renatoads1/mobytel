<?php
/**
 * @author Moby Telecom
 *
 */
class pkg_refill  {
	
	private $id;
	private $id_user;
	private $date;
	private $credit;
	private $description;
	private $refill_type;
	private $payment;
	private $invoice_number;
	
	

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
	
	public function  getCredit(){
		return $this->credit;
	}
	public function setCredit($credit){
		$this->credit = $credit;
	}
	
	public function  getDescription(){
		return $this->description;
	}
	public function setDescription($description){
		$this->description = $description;
	}
	
	public function  getRefilltype(){
		return $this->refilltype;
	}
	public function setRefilltype($refilltype){
		$this->refilltype = $refilltype;
	}
	
	public function  getPayment(){
		return $this->payment;
	}
	public function setPayment($payment){
		$this->payment = $payment;
	}
	
	public function  getInvoicenumber(){
		return $this->invoicenumber;
	}
	public function setInvoicenumber($invoicenumber){
		$this->invoicenumber = $invoicenumber;
	}
	

}	
