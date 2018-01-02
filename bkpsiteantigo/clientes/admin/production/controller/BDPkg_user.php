<?php

require_once("bdConnect/bdConnectDois.php");
require_once("model/pkg_user.class.php");

class BDPkg_user {

public function insertUser ($user) {
    
    $id_user = $user->getIdUser();
    $id_group = $user->getIdGroup();
    $id_group_agent = $user->getIdGroupAgent();
    $id_plan = $user->getIdPlan();
    $id_offer = $user->getIdOffer();
    $username = $user->getUserName();
    $password = $user->getPassword();
    $credit = $user->getCredit();
    $active = $user->getActive();
    $creationDate = $user->getCreationDate();
    $firstUseDate = $user->getFirstUseDate();
    $expirationDate = $user->getExpirationDate();
    $enableExpire = $user->getEnableExpire();
    $expireDays = $user->getExpireDays();
    $lastName = $user->getLastName();
    $firstName = $user->getFirstName();
    $address = $user->getAddress();
    $city = $user->getCity();
    $state = $user->getSate();
    $country = $user->getCountry();
    $zipCode = $user->getZipCode();
    $phone = $user->getPhone();
    $mobile = $user->getMobile();
    $email = $user->getEmail();
    $vat = $user->getVat();
    $companyName = $user->getCompanyName();
    $companySite = $user->getCompanyWebSite();
    $lastUse = $user->getLastUse();
    $typePaid = $user->getTypePaid();
    $creditLimit = $user->getCreditLimit();
    $language = $user->getLanguage();
    $redial = $user->getRedial();
    $loginKey = $user->getLoginKey();
    $lastNotification = $user->getLastNotification();
    $creditNotification = $user->getCreditNotification();
    $restriction = $user->getRestriction();
    $callingCardPin = $user->getCallingCardPin();
    $prefixLocal = $user->getPrefixLocal();
    $callShop = $user->getCallShop();
    $planDay = $user->getPlanDay();
    $recordCall = $user->getRecordCall();
    $activePaypal = $user->getActivePaypal();
    $boleto = $user->getBoleto();
    $boletoDay = $user->getBoletoDay();
    $description = $user->getDescription();
    $lastLogin = $user->getLastLogin();
    $googleAuthEnable = $user->getGoogleAuthenticatorEnable();
    $googleAuthKey = $user->getGoogleAuthenticatorKey();
    $doc = $user->getDoc();
    
    
        
    $consulta = $consulta = 'insert into pkg_user(id_user, id_group, id_group_agent, id_plan, id_offer, username, password, credit, active, creationdate, firstusedate, expirationdate, enableexpire, expiredays, lastname, firstname, address, city, state, country, zipcode, phone, mobile, email, vat, company_name, company_website, lastuse, typepaid, creditlimit, language, redial, loginkey, last_notification, credit_notification, restriction, callingcard_pin, prefix_local, callshop, plan_day, record_call, active_paypal, boleto, boleto_day, description, last_login, googleAuthenticator_enable, google_authenticator_key, doc ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )';
  
        $conn = bdConnectDois();
        $operacao = $conn->prepare($consulta);
        $inserir = $operacao->execute(array($id_user, $id_group, $id_group_agent, $id_plan, $id_offer, $username, $password, $credit, $active, $creationDate, $firstUseDate, $expirationDate, $enableExpire, $expireDays, $lastName, $firstName, $address, $city, $state, $country, $zipCode, $phone, $mobile, $email, $vat, $companyName, $companySite, $lastUse, $typePaid, $creditLimit, $language, $redial, $loginKey, $lastNotification, $creditNotification, $restriction, $callingCardPin, $callShop, $planDay, $recordCall, $activePaypal, $boleto, $boletoDay, $description, $lastLogin, $googleAuthEnable, $googleAuthKey, $doc));
        $conn = null;
        
        if($inserir) {
            return true;
        }else {
            return false;
        }    
   }
    public function editUser($idUser, $user) {
            
        $userAnt = $this->listUserById($idUser);
        $idUserAnt = $userAnt['id'];
           
		$id_user = $user->getIdUser();
		$id_group = $user->getIdGroup();
		$id_group_agent = $user->getIdGroupAgent();
		$id_plan = $user->getIdPlan();
		$id_offer = $user->getIdOffer();
		$username = $user->getUserName();
		$password = $user->getPassword();
		$credit = $user->getCredit();
		$active = $user->getActive();
		$creationDate = $user->getCreationDate();
		$firstUseDate = $user->getFirstUseDate();
		$expirationDate = $user->getExpirationDate();
		$enableExpire = $user->getEnableExpire();
		$expireDays = $user->getExpireDays();
		$lastName = $user->getLastName();
		$firstName = $user->getFirstName();
		$address = $user->getAddress();
		$city = $user->getCity();
		$state = $user->getSate();
		$country = $user->getCountry();
		$zipCode = $user->getZipCode();
		$phone = $user->getPhone();
		$mobile = $user->getMobile();
		$email = $user->getEmail();
		$vat = $user->getVat();
		$companyName = $user->getCompanyName();
		$companySite = $user->getCompanyWebSite();
		$lastUse = $user->getLastUse();
		$typePaid = $user->getTypePaid();
		$creditLimit = $user->getCreditLimit();
		$language = $user->getLanguage();
		$redial = $user->getRedial();
		$loginKey = $user->getLoginKey();
		$lastNotification = $user->getLastNotification();
		$creditNotification = $user->getCreditNotification();
		$restriction = $user->getRestriction();
		$callingCardPin = $user->getCallingCardPin();
		$prefixLocal = $user->getPrefixLocal();
		$callShop = $user->getCallShop();
		$planDay = $user->getPlanDay();
		$recordCall = $user->getRecordCall();
		$activePaypal = $user->getActivePaypal();
		$boleto = $user->getBoleto();
		$boletoDay = $user->getBoletoDay();
		$description = $user->getDescription();
		$lastLogin = $user->getLastLogin();
		$googleAuthEnable = $user->getGoogleAuthenticatorEnable();
		$googleAuthKey = $user->getGoogleAuthenticatorKey();
		$doc = $user->getDoc();
                                
        
        $sql = 'update pkg_user set id_user=?, id_group=?, id_group_agent=?, id_plan=?, id_offer=?, username=?, password=?, credit=?, active=?, creationdate=?, firstusedate=?, expirationdate=?, enableexpire=?, expiredays=?, lastname=?, firstname=?, address=?, city=?, state=?, country=?, zipcode=?, phone=?, mobile=?, email=?, vat=?, company_name=?, company_website=?, lastuse=?, typepaid=?, creditlimit=?, language=?, redial=?, loginkey=?, last_notification=?, credit_notification=?, restriction=?, callingcard_pin=?, prefix_local, callshop=?, plan_day=?, record_call=?, active_paypal=?, boleto=?, boleto_day=?, description=?, last_login=?, googleAuthenticator_enable=?, google_authenticator_key=?, doc=?  where id=?';
        
        $conn = bdConnectDois();
        $operacao = $conn->prepare($sql);
        $atualizar = $operacao->execute(array($id_user, $id_group, $id_group_agent, $id_plan, $id_offer, $username, $password, $credit, $active, $creationDate, $firstUseDate, $expirationDate, $enableExpire, $expireDays, $lastName, $firstName, $address, $city, $state, $country, $zipCode, $phone, $mobile, $email, $vat, $companyName, $companySite, $lastUse, $typePaid, $creditLimit, $language, $redial, $loginKey, $lastNotification, $creditNotification, $restriction, $callingCardPin, $callShop, $planDay, $recordCall, $activePaypal, $boleto, $boletoDay, $description, $lastLogin, $googleAuthEnable, $googleAuthKey, $doc ));
        $conn = null;
        
         if($atualizar) {
            return true;
        }else {
            return false;
        }    
    }
    
   
    public function deleteUser($idUser) {
  	
    	$conexao = bdConnectDois();
    	$SQLDelete = 'DELETE FROM pkg_user WHERE id=?';
        
    	$operacao = $conn->prepare($SQLDelete);
        $apagar = $operacao->execute(array($idUser));
        
        $conn = null;
        
        if($apagar) {
            return true;
        }else {
            return false;
        }
    }
    
    public function listAllUsers() {
        $conexao = bdConnectDois();
        $SQLSelect = 'SELECT * FROM pkg_user';
        
        $operacao = $conexao->prepare($SQLSelect);
        $operacao->execute();
        $resultados = $operacao->fetchAll();
        
        return $resultados;
         
    }
    
    public function listUserByName($name){
        
        $conexao = bdConnectDois();
						
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM pkg_user WHERE username=?';
				
		//prepara a execução da sentença
		$operacao = $conexao->prepare($SQLSelect);					  
				
		//executa a sentença SQL com o valor passado por parâmetro
		$pesquisar = $operacao->execute(array($name));
		
		//captura TODOS os resultados obtidos
		$resultados = $operacao->fetchAll();
		
		// fecha a conexão (os resultados já estão capturados)
		$conexao = null;
        
        return $resultados;
        
    }
    
    public function listUserById($idCli){
        
        $conexao = bdConnectDois();
						
		// instrução SQL básica (sem restrição de nome)
		$SQLSelect = 'SELECT * FROM pkg_user WHERE id=?';
				
		//prepara a execução da sentença
		$operacao = $conexao->prepare($SQLSelect);					  
				
		//executa a sentença SQL com o valor passado por parâmetro
		$pesquisar = $operacao->execute(array($idCli));
		
		//captura TODOS os resultados obtidos
		$resultados = $operacao->fetchAll();
		
		// fecha a conexão (os resultados já estão capturados)
		$conexao = null;
        if($resultados){
            foreach($resultados as $cliente){
                $cli = $cliente;
            }
        }
        
        return $cliente;   
    }
    
    public function listUserByNamePassword($log, $senha) {
    	$conexao = bdConnectDois();
    
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT * FROM pkg_user WHERE password=? AND username=?';
    
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($senha, $log));
    
    	//captura TODOS os resultados obtidos
    	$resultados = $operacao->fetchAll();
    
    	// fecha a conexão (os resultados já estão capturados)
    	$conexao = null;
    
    	return $resultados;
    
    }
    
    
    
    public function listUserPorPlanoScript(){
    
    	$conexao = bdConnectDois();
    	
    	$typepaid = 1;
    	
    	$gerarboleto = 0;
    
    	// instrução SQL básica (sem restrição de nome)
    	$SQLSelect = 'SELECT * FROM pkg_user WHERE typepaid = ? AND gerarboleto = ? ';
    
    	//prepara a execução da sentença
    	$operacao = $conexao->prepare($SQLSelect);
    
    	//executa a sentença SQL com o valor passado por parâmetro
    	$pesquisar = $operacao->execute(array($typepaid,$gerarboleto));
    
    	//captura TODOS os resultados obtidos
    	$resultados = $operacao->fetchAll();
    
    	// fecha a conexão (os resultados já estão capturados)
    	$conexao = null;
    	
    	return $resultados;
    }
  
    
}