<?php
session_start();
	
	require_once("controller/BDPkg_user.php");
	
      if(isset($_POST["userLogin"])){		//existe um login enviado via POST (formulário)
            $log = utf8_encode(htmlspecialchars($_POST["userLogin"]));
            $senha = utf8_encode(htmlspecialchars($_POST["userSenhaLogin"]));
			
			if(isset($_POST["lembrarLogin"]))
				$lembrar = utf8_encode(htmlspecialchars($_POST["lembrarLogin"]));
			else 
			    $lembrar="";
         
      }
      else if(isset($_COOKIE["loginAutomatico"])){ 	//existe um cookie com nome senha --> login automático
            $log = utf8_encode(htmlspecialchars($_COOKIE["loginCliente"]));
            $senha = utf8_encode(htmlspecialchars($_COOKIE["senhaLogin"]));
		   }
        else{
	  	       header("Location: page_403.php");
               die();
		}         
 try{
		$bdUser = new BDPkg_user();
        $resultados = $bdUser->listUserByNamePassword($log, $senha);
		
		
		// se há zero ou mais de um resultado, login inválido.
		if (count($resultados)!=1){	
			header("Location: page_403.php");
            die();
		}   
		else{ // se há um resultado, login confirmado.
			setcookie("loginCliente", $log, time()+(60*60*24*30), "/"); //guarda o login por 90 dias a partir de agora
			if(!empty($lembrar)){
 			    setcookie("senhaLogin", $senha, time()+ (60*60*24*30), "/"); //guarda a senha por 90 dias a partir de agora	
			}
            if(isset($_POST['loginAutomatico'])){
                setcookie("senhaLogin", $senha, time()+ (60*60*24*30), "/");
 			    setcookie("loginAutomatico", "aut", time()+ (60*60*24*30), "/"); //guarda a senha por 90 dias a partir de agora	
			}
		   $_SESSION['auth'] = true;
           $_SESSION['idCliente'] = $resultados[0]['id'];
		   $_SESSION['nomeCliente'] = $resultados[0]['username'];
		   $_SESSION['tipoConta'] = $resultados[0]['typepaid'];
		   header("Location: index.php");
		   die();
		}
	} //try
	catch (PDOException $e)
	{
		// caso ocorra uma exceção, exibe na tela
		echo "Erro!: " . $e->getMessage() . "<br>";
		die();
	}
?>