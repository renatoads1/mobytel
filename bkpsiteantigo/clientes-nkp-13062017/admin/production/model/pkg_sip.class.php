<?php
/**
 * @author Ipec Relacionamentos
 *
 */
class pkg_sip {
	
	private $id;
	private $id_user;
	private $name;
	private $accountcode;
	private $regexten;
	private $amaflags;
	private $callcounter;
	private $busylevel;
	private $allowoverlap;
	private $allowsubscribe;
	private $videosupport;
	private $callgroup;
	private $callerid;
	private $context;
	private $DEFAULTip;
	private $dtmfmode;
	private $fromuser;
	private $fromdomain;
	private $host;
	private $insecure;
	private $language;
	private $mailbox;
	private $session_timers;
	private $session_expires;
	private $session_minse;
	private $session_refresher;
	private $t38pt_usertpsource;
	private $md5secret;
	private $nat;
	private $deny;
	private $permit;
	private $pickupgroup;
	private $port;
	private $qualify;
	private $rtptimeout;
	private $rtpholdtimeout;
	private $secret;
	private $type;
	private $disallow;
	private $allow;
	private $regseconds;
	private $ipaddr;
	private $fullcontact;
	private $setvar;
	private $regserver;
	private $lastms;
	private $defaultuser;
	private $auth;
	private $subscribemwi;
	private $vmexten;
	private $cid_number;
	private $callingpres;
	private $usereqphone;
	private $mohsuggest;
	private $allowtransfer;
	private $autoframing;
	private $maxcallbitrate;
	private $rfc2833compensate;
	private $outboundproxy;
	private $rtpkeepalive;
	private $useragent;
	private $calllimit;
	private $status;
	private $directmedia;
	private $sippasswd;
	private $callshopnumber;
	private $callshoptime;
	private $callbackextension;
	private $group;
	
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
		$this->name = $nm;
	}
	
	public function  getAccountCode(){
		return $this->accountcode;
	}
	public function setAccountCode($ac){
		$this->accountcode = $ac;
	}
	
	public function  getRegexten(){
		return $this->regexten;
	}
	public function setRegexten($rx){
		$this->regexten = $rx;
	}
	
	public function  getAmaFlags(){
		return $this->amaflags;
	}
	public function setAmaFlags($af){
		$this->amaflags = $af;
	}
	
	public function  getCallCounter(){
		return $this->callcounter;
	}
	public function setCallCounter($cc){
		$this->callcounter = $cc;
	}
	
	public function  getBusyLevel(){
		return $this->busylevel;
	}
	public function setBusyLevel($bl){
		$this->busylevel = $bl;
	}
	
	public function  getCallGroup(){
		return $this->callgroup;
	}
	public function setCallGroup($cg){
		$this->callgroup = $cg;
	}
	
	public function  getCallerId(){
		return $this->callerid;
	}
	public function setCallerId($ci){
		$this->callerid = $ci;
	}
	
	public function  getContext(){
		return $this->context;
	}
	public function setContext($cx){
		$this->context = $cx;
	}
	
	public function  getDefaultIp(){
		return $this->DEFAULTip;
	}
	public function setDefaultIp($di){
		$this->DEFAULTip = $di;
	}
	
	public function  getDtmfMode(){
		return $this->dtmfmode;
	}
	public function setDtmfMode($dm){
		$this->dtmfmode = $dm;
	}
	
	public function  getFromUser(){
		return $this->fromuser;
	}
	public function setFromUser($fu){
		$this->fromuser = $fu;
	}
	
	public function  getFromDomain(){
		return $this->fromdomain;
	}
	public function setFromDomain($fd){
		$this->fromdomain = $fd;
	}
	
	public function  getHost(){
		return $this->host;
	}
	public function setHost($ht){
		$this->host = $ht;
	}
	
	public function  getInsecure(){
		return $this->insecure;
	}
	public function setInsecure($is){
		$this->insecure = $is;
	}
	
	public function  getLanguage(){
		return $this->language;
	}
	public function setLanguage($lg){
		$this->language = $lg;
	}
	
	public function  getMailBox(){
		return $this->mailbox;
	}
	public function setMailBox($mb){
		$this->mailbox = $mb;
	}
	
	public function  getSessionTimers(){
		return $this->session_timers;
	}
	public function setSessionTimers($st){
		$this->session_timers = $st;
	}
	
	public function  getSessionExpires(){
		return $this->session_expires;
	}
	public function setSessionExpires($se){
		$this->session_expires = $se;
	}
	
	public function  getSessionMinse(){
		return $this->session_minse;
	}
	public function setSessionMinse($sm){
		$this->session_minse = $sm;
	}
	
	public function  getSessionRefresher(){
		return $this->session_refresher;
	}
	public function setSessionRefresher($sr){
		$this->session_refresher = $sr;
	}
	
	public function  getT38PtUserTpSource(){
		return $this->t38pt_usertpsource;
	}
	public function setT38PtUserTpSource($ts){
		$this->t38pt_usertpsource = $ts;
	}
	
	public function  getMd5Secret(){
		return $this->md5secret;
	}
	public function setMd5Secret($ms){
		$this->md5secret = $ms;
	}
	
	public function  getNat(){
		return $this->nat;
	}
	public function setNat($nt){
		$this->nat = $nt;
	}
	
	public function  getDeny(){
		return $this->deny;
	}
	public function setDeny($dn){
		$this->deny = $dn;
	}
	
	public function  getPermit(){
		return $this->permit;
	}
	public function setPermit($pm){
		$this->permit = $pm;
	}
	
	public function  getPickupGroup(){
		return $this->pickupgroup;
	}
	public function setPickupGroup($pg){
		$this->pickupgroup = $pg;
	}
	
	public function  getPort(){
		return $this->port;
	}
	public function setPort($pt){
		$this->port = $pt;
	}
	
	public function  getQualify(){
		return $this->qualify;
	}
	public function setQualify($ql){
		$this->qualify = $ql;
	}
	
	public function  getRtpTimeout(){
		return $this->rtptimeout;
	}
	public function setRtpTimeout($rt){
		$this->rtptimeout = $rt;
	}
	
	public function  getRtpHoldTimeout(){
		return $this->rtpholdtimeout;
	}
	public function setRtpHoldTimeout($rht){
		$this->rtpholdtimeout = $rht;
	}
	
	public function  getSecret(){
		return $this->secret;
	}
	public function setSecret($sc){
		$this->secret = $sc;
	}
	
	public function  getType(){
		return $this->type;
	}
	public function setType($tp){
		$this->type = $tp;
	}
	
	public function  getDisallow(){
		return $this->disallow;
	}
	public function setDisallow($dl){
		$this->disallow = $dl;
	}
	
	public function  getAllow(){
		return $this->allow;
	}
	public function setAllow($al){
		$this->allow = $al;
	}
	
	public function  getRegSeconds(){
		return $this->regseconds;
	}
	public function setRegSeconds($rs){
		$this->regseconds = $rs;
	}
	
	public function  getIpAddr(){
		return $this->ipaddr;
	}
	public function setIpAddr($ia){
		$this->ipaddr = $ia;
	}
	
	public function  getFullContact(){
		return $this->fullcontact;
	}
	public function setFullContact($fc){
		$this->fullcontact = $fc;
	}
	
	public function  getSetVar(){
		return $this->setvar;
	}
	public function setSetVar($sv){
		$this->setvar = $sv;
	}
	
	public function  getRegServer(){
		return $this->regserver;
	}
	public function setRegSever($rs){
		$this->regserver = $rs;
	}
	
	public function  getLastMs(){
		return $this->lastms;
	}
	public function setLastMs($lm){
		$this->lastms = $lm;
	}
	
	public function  getDefaultUser(){
		return $this->defaultuser;
	}
	public function setDefaultUser($du){
		$this->defaultuser = $du;
	}
	
	public function  getAuth(){
		return $this->auth;
	}
	public function setAuth($at){
		$this->auth = $at;
	}
	
	public function  getSubscribeMwi(){
		return $this->subscribemwi;
	}
	public function setSubscribeMwi($sm){
		$this->subscribemwi = $sm;
	}
	
	public function  getVmExten(){
		return $this->vmexten;
	}
	public function setVmExten($ve){
		$this->vmexten = $ve;
	}
	
	public function  getCidNumber(){
		return $this->cid_number;
	}
	public function setCidNumber($cn){
		$this->cid_number = $cn;
	}
	
	public function  getCallingPres(){
		return $this->callingpres;
	}
	public function setCallingPres($cp){
		$this->callingpres = $cp;
	}
	
	public function  getUserEqPhone(){
		return $this->usereqphone;
	}
	public function setUserEqPhone($uep){
		$this->usereqphone = $uep;
	}
	
	public function  getMohSuggest(){
		return $this->mohsuggest;
	}
	public function setMohSuggest($ms){
		$this->mohsuggest = $ms;
	}
	
	public function  getAllowTransfer(){
		return $this->allowtransfer;
	}
	public function setAllowTransfer($at){
		$this->allowtransfer = $at;
	}
	
	public function  getAutoFraming(){
		return $this->autoframing;
	}
	public function setAutoFraming($af){
		$this->autoframing = $af;
	}
	
	public function  getMaxCallBitRate(){
		return $this->maxcallbitrate;
	}
	public function setMaxCallBitRate($mcbr){
		$this->maxcallbitrate = $mcbr;
	}
	
	public function  getRfcCompensate(){
		return $this->rfc2833compensate;
	}
	public function setRfcCompensate($rfc){
		$this->rfc2833compensate = $rfc;
	}
	
	public function  getOutboundProxy(){
		return $this->outboundproxy;
	}
	public function setOutBoundProxy($obp){
		$this->outboundproxy = $obp;
	}
	
	public function  getRtpKeepAlive(){
		return $this->rtpkeepalive;
	}
	public function setRtpKeepAlive($rka){
		$this->rtpkeepalive = $rka;
	}
	
	public function  getUserAgent(){
		return $this->useragent;
	}
	public function setUserAgent($ua){
		$this->useragent = $ua;
	}
	
	public function  getCallLimit(){
		return $this->calllimit;
	}
	public function setCallLimit($cl){
		$this->calllimit = $cl;
	}
	
	public function  getStatus(){
		return $this->status;
	}
	public function setStatus($st){
		$this->status = $st;
	}
	
	public function  getDirectMedia(){
		return $this->directmedia;
	}
	public function setDirectMedia($dm){
		$this->directmedia = $dm;
	}
	
	public function  getSipPasswd(){
		return $this->sippasswd;
	}
	public function setSipPasswd($sp){
		$this->sippasswd = $sp;
	}
	
	public function  getCallShopNumber(){
		return $this->callshopnumber;
	}
	public function setCallShopNumber($csn){
		$this->callshopnumber = $csn;
	}
	
	public function  getCallShopTimer(){
		return $this->callshoptime;
	}
	public function setCallShopTimer($cst){
		$this->callshoptime = $cst;
	}
	
	public function  getCallbackExtension(){
		return $this->callbackextension;
	}
	public function setCallbackExtension($cbe){
		$this->callbackextension = $cbe;
	}
	
	public function  getGroup(){
		return $this->group;
	}
	public function setGroup($gr){
		$this->group = $gr;
	}
	
}
	
	
	
	
	