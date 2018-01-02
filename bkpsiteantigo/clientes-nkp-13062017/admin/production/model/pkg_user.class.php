<?php


/**
 * @author Ipec Relacionamentos
 *
 */
class pkg_user {
	
	private $id;
	private $id_user;
	private $id_group;
	private $id_group_agent;
	private $id_plan;
	private $id_offer;
	private $username;
	private $password;
	private $credit;
	private $active;
	private $creationdate;
	private $firstusedate;
	private $expirationdate;
	private $enableexpire;
	private $expiredays;
	private $lastname;
	private $firstname;
	private $address;
	private $city;
	private $state;
	private $country;
	private $zipcode;
	private $phone;
	private $mobile;
	private $email;
	private $vat;
	private $company_name;
	private $company_website;
	private $lastuse;
	private $typepaid;
	private $creditlimit;
	private $language;
	private $redial;
	private $loginkey;
	private $last_notification;
	private $credit_notification;
	private $restriction;
	private $callingcard_pin;
	private $prefix_local;
	private $callshop;
	private $plan_day;
	private $recordcall;
	private $activepaypal;
	private $boleto;
	private $boleto_day;
	private $description;
	private $lastlogin;
	private $googleAuthenticator_enable;
	private $google_authenticator_key;
	private $doc;
	
	
		
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getIdUser() {
		return $this->id_user;
	}
	public function setIdUser($id_user) {
		$this->id_user = $id_user;
	}
	
	public function getIdGroup() {
		return $this->id_group;
	}
	public function setIdGroup($id_group) {
		$this->id_group = $id_group;
	}
	
	public function getIdGroupAgent() {
		return $this->id_group_agent;
	}
	public function setIdGroupAgent($id_group_agent) {
		$this->id_group_agent = $id_group_agent;
	}
	
	public function getIdPlan() {
		return $this->id_plan;
	}
	public function setIdPlan($id_plan) {
		$this->id_plan = $id_plan;
	}
	
	public function getIdOffer() {
		return $this->id_offer;
	}
	public function setIdOffer($id_offer) {
		$this->id_offer = $id_offer;
	}
	
	public function getUserName() {
		return $this->username;
	}
	public function setUserName($username) {
		$this->username = $username;
	}
	
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($pass) {
		$this->password = $pass;
	}
	
	public function getCredit() {
		return $this->credit;
	}
	public function setCredit($credit) {
		$this->credit = $credit;
	}
	
	public function getActive() {
		return $this->active;
	}
	public function setActive($active) {
		$this->active = $active;
	}
	
	public function getCreationDate() {
		return $this->creationdate;
	}
	public function setCreationDate($crDate) {
		$this->creationdate = $crDate;
	}
	
	public function getFirstUseDate() {
		return $this->firstusedate;
	}
	public function setFirstUseDate($fUseDate) {
		$this->firstusedate = $fUseDate;
	}
	
	public function getExpirationDate() {
		return $this->expirationdate;
	}
	public function setExpirationDate($expDate) {
		$this->expirationdate = $expDate;
	}
	
	public function getEnableExpire() {
		return $this->enableexpire;
	}
	public function setEnableExpire($enExpire) {
		$this->enableexpire = $enExpire;
	}
	
	public function getExpireDays() {
		return $this->expiredays;
	}
	public function setExpireDays($exDays) {
		$this->expiredays = $exDays;
	}
	
	public function getLastName() {
		return $this->lastname;
	}
	public function setLastName($lastName) {
		$this->lastname = $lastName;
	}
	
	public function getFirstName() {
		return $this->firstname;
	}
	public function setFirstName($frName) {
		$this->firstname = $frName;
	}
	
	public function getAddress() {
		return $this->address;
	}
	public function setAddress($address) {
		$this->address = $address;
	}
	
	public function getCity() {
		return $this->city;
	}
	public function setCity($city) {
		$this->city = $city;
	}
	
	public function getState() {
		return $this->state;
	}
	public function setState($state) {
		$this->state = $state;
	}
	
	public function getCountry() {
		return $this->country;
	}
	public function setCountry($country) {
		$this->country = $country;
	}
	
	public function getZipCode() {
		return $this->zipcode;
	}
	public function setZipCode($zCode) {
		$this->zipcode = $zCode;
	}
	
	public function getPhone() {
		return $this->phone;
	}
	public function setPhone($ph) {
		$this->phone = $ph;
	}
	
	public function getMobile() {
		return $this->mobile;
	}
	public function setMobile($mb) {
		$this->mobile = $mb;
	}
	
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getVat() {
		return $this->vat;
	}
	public function setVat($vat) {
		$this->vat = $vat;
	}
			
	public function getCompanyName() {
		return $this->company_name;
	}
	public function setCompanyName($cpName) {
		$this->company_name = $cpName;
	}
	
	public function getCompanyWebSite() {
		return $this->company_website;
	}
	public function setCompanyWebSite($cpWebSite) {
		$this->company_website = $cpWebSite;
	}
	
	public function getLastUse() {
		return $this->lastuse;
	}
	public function setLastUse($lt) {
		$this->lastuse = $lt;
	}
	
	public function getTypePaid() {
		return $this->typepaid;
	}
	public function setTypePaid($tp) {
		$this->typepaid = $tp;
	}
	
	public function getCreditLimit() {
		return $this->creditlimit;
	}
	public function setCrditLimit($credLimit) {
		$this->creditlimit = $credLimit;
	}
	
	public function getLanguage() {
		return $this->language;
	}
	public function setLanguage($language) {
		$this->language = $language;
	}
	
	public function getRedial() {
		return $this->redial;
	}
	public function setRedial($redial) {
		$this->redial = $redial;
	}
	
	public function getLoginKey() {
		return $this->loginkey;
	}
	public function setLoginKey($lKey) {
		$this->loginkey = $lKey;
	}
	
	public function getLastNotification() {
		return $this->last_notification;
	}
	public function setLastNotification($lastNot) {
		$this->last_notification = $lastNot;
	}
	
	public function getCreditNotification() {
		return $this->credit_notification;
	}
	public function setCreditNotification($crNotification) {
		$this->credit_notification = $crNotification;
	}
	
	public function getRestriction() {
		return $this->restriction;
	}
	public function setRestriction($restric) {
		$this->restriction = $restric;
	}
	
	public function getCallingCardPin() {
		return $this->callingcard_pin;
	}
	public function setCallingCardPin($callingcard) {
		$this->callingcard_pin = $callingcard;
	}
	
	public function getPrefixLocal() {
		return $this->prefix_local;
	}
	public function setPrefixLocal($prelocal) {
		$this->prefix_local = $prelocal;
	}
	
	public function getCallShop() {
		return $this->callshop;
	}
	public function setCallShop($callShop) {
		$this->callshop = $callShop;
	}
	
	public function getPlanDay() {
		return $this->plan_day;
	}
	public function setPlanDay($planday) {
		$this->plan_day = $planday;
	}
	
	public function getRecordCall() {
		return $this->recordcall;
	}
	public function setRecordCall($rcall) {
		$this->recordcall = $rcall;
	}
	
	public function getActivePaypal() {
		return $this->activepaypal;
	}
	public function setActivePaypal($acPaypal) {
		$this->activepaypal = $acPaypal;
	}
	
	public function getBoleto() {
		return $this->boleto;
	}
	public function setBoleto($bol) {
		$this->boleto = $bol;
	}
	
	public function getBoletoDay() {
		return $this->boleto_day;
	}
	public function setBoletoDay($bolDay) {
		$this->boleto_day = $boleto_day;
	}
	
	public function getDescription() {
		return $this->description;
	}
	public function setDescription($descript) {
		$this->description = $descript;
	}
	
	public function getlastLogin() {
		return $this->lastlogin;
	}
	public function setLastLogin($lLogin) {
		$this->lastlogin = $lLogin;
	}
	
	public function getGoogleAuthenticatorEnable() {
		return $this->googleAuthenticator_enable;
	}
	public function setGoogleAuthenticatorEnable($googleAuthentEnable) {
		$this->googleAuthenticator_enable = $googleAuthentEnable;
	}
	
	public function getGoogleAuthenticatorKey() {
		return $this->google_authenticator_key;
	}
	public function setGoogleAuthenticatorKey($googleAuthentKey) {
		$this->google_authenticator_key = $googleAuthentKey;
	}
	
	public function getDoc() {
		return $this->doc;
	}
	public function setDoc($doc) {
		$this->doc = $doc;
	}
	
}