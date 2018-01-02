<?php
/**
 * @author Ipec Relacionamentos
 *
 */
class pkg_cdr  {
	
	private $id;
	private $id_user;
	private $id_plan;
	private $id_trunk;
	private $id_did;
	private $id_offer;
	private $id_prefix;
	private $id_campaign;
	private $sessionid;
	private $uniqueid;
	private $starttime;
	private $stoptime;
	private $sessiontime;
	private $calledstation;
	private $sessionbill;
	private $sipiax;
	private $src;
	private $buycost;
	private $real_sesiontime;
	private $terminatecauseid;
	private $agent_bill;
	
	
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
	
	public function  getIdPlan(){
		return $this->id_plan;
	}
	public function setIdPlan($idPl){
		$this->id_plan = $idPl;
	}
	
	public function  getIdTrunk(){
		return $this->id_trunk;
	}
	public function setIdTrunk($idTr){
		$this->id_trunk = $idTr;
	}
	
	public function  getIdDid(){
		return $this->id_did;
	}
	public function setIdDid($idDid){
		$this->id_did = $idDid;
	}
	
	public function  getIdOffer(){
		return $this->id_offer;
	}
	public function setIdOffer($IdOff){
		$this->id_offer = $IdOff;
	}
	
	public function  getIdPrefix(){
		return $this->id_prefix;
	}
	public function setIdPrefix($IdPre){
		$this->id_prefix = $IdPre;
	}
	
	public function  getIdCampaign(){
		return $this->id_campaign;
	}
	public function setIdCampaign($IdCampaign){
		$this->id_campaign = $IdCampaign;
	}
	
	public function  getSessionId(){
		return $this->sessionid;
	}
	public function setSessionId($sesId){
		$this->sessionid = $sesId;
	}
	
	public function  getUniqueId(){
		return $this->uniqueid;
	}
	public function setUniqueId($uniId){
		$this->uniqueid = $uniId;
	}
	
	public function  getStartTime(){
		return $this->starttime;
	}
	public function setStartTime($stTime){
		$this->starttime = $stTime;
	}
	
	public function  getStopTime(){
		return $this->stoptime;
	}
	public function setStopTime($stpTime){
		$this->stoptime = $stpTime;
	}
	
	public function  getSessionTime(){
		return $this->sessiontime;
	}
	public function setSessionTime($sessTime){
		$this->sessiontime = $sessTime;
	}
	
	public function  getCalledStation(){
		return $this->calledstation;
	}
	public function setCalledStation($cStation){
		$this->calledstation = $cStation;
	}
	
	public function  getSessionBill(){
		return $this->sessionbill;
	}
	public function setSessionBill($sessBill){
		$this->sessionbill = $sessBill;
	}
	
	public function  getSipIax(){
		return $this->sipiax;
	}
	public function setSipIax($sipIax){
		$this->sipiax = $sipIax;
	}
	
	public function  getSrc(){
		return $this->src;
	}
	public function setSrc($src){
		$this->src = $src;
	}
	
	public function  getBuyCost(){
		return $this->buycost;
	}
	public function setBuyCost($bCost){
		$this->buycost = $bCost;
	}
	
	public function  getRealSessionTime(){
		return $this->real_sesiontime;
	}
	public function setRealSessionTime($rSessTime){
		$this->real_sesiontime = $rSessTime;
	}
	
	public function  getTerminateCauseId(){
		return $this->terminatecauseid;
	}
	public function setTerminateCauseId($tCauseId){
		$this->terminatecauseid = $tCauseId;
	}
	
	public function  getAgentBill(){
		return $this->agent_bill;
	}
	public function setAgentBill($aBill){
		$this->agent_bill = $aBill;
	}
}
	
	
	
	
	