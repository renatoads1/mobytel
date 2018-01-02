<?php
/*
$_SESSION['logged_in'] = true;//status de logado
$_SESSION['user_id'] = $user['id'];//id do usuário no magnus
$_SESSION['user_name'] = $user['username'];//nome de usuário 
$_SESSION['credit'] = $user['credit'];//créditos disponiveis
$_SESSION['active'] = $user['active'];//ativo ou inativo
$_SESSION['lastname'] = $user['lastname'];//sobrenome do usuário
$_SESSION['fristname'] = $user['fristname'];////primeiro nome do usuário
$_SESSION['address'] = $user['address'];//endereço do usuário
$_SESSION['cyti'] = $user['cyti'];//cidade do usuário
$_SESSION['state'] = $user['state'];//estado do usuário
$_SESSION['country'] = $user['country'];//pais do user
$_SESSION['zipcode'] = $user['zipcode'];//cep do usuário
$_SESSION['phone'] = $user['phone'];//phone do usuário
$_SESSION['mobyle'] = $user['mobyle'];//nao sei o que é
$_SESSION['email'] = $user['email'];//email do usuário
$_SESSION['redial'] = $user['redial'];//ultimo numero discado
$_SESSION['doc'] = $user['doc'];//numero de documento do usuário
$_SESSION['envioSMS'] = $user['envioSMS'];//pode enviar sms 0= nao 1=sim
*/

/*busca pelo id auto incremento
se o auto incremento nao for id 
tem de mapear com static $table_name = 'user';
ou static $primary_key = 'book_id';
*/
//$user = campanhasms::find(14);//select id 14
//echo("<pre>");
//print_r($user);//imprime o objeto
//echo("</pre>");

/*
where = conditions
veja o código abaixo campo da tabela = ? and 

$user = user::find("all",array("conditions"=>array("lastname =? and usuario = ?","Azevedo","Renatoads1")));
echo("<pre>");
print_r($user);//imprime o objeto
echo("</pre>");

/*
order by = order

$user = user::find("all",array("order"=>"id desc"));
echo("<pre>");
print_r($user);//imprime o objeto
echo("</pre>");
*/
/*
também pode ser usado user = user::find_by_nometabela("valor");

$user = user::find_by_usuario_and_lastname("renatoads1","Azevedo");
echo("<pre>");
print_r($user);//imprime o objeto
echo("</pre>");
/*
select buscando de 0 ate 100 registros
*/
/*------------------ COMO DEVOLVER O RESULTADO EM JSON---------------------*/
/*
$users = user::find("all",array("limit"=>100,"offset"=>0));
//$user = user::first(); //busca só o primeiro
//$json = $user->to_json(array("only"=>array("usuario","lastname"));
$i=0;
foreach($users as $user) 
	{
	 	$arr[$i] = array("user"=>$user->usuario);
		$i++;
	}
echo(json_encode($arr));
//echo("<pre>");
//print_r($user);//imprime o objeto
//echo("</pre>");

//$user->update_attributes(array("user"=>"isalinda"));//update
//echo("<br>".$user->user."<br>");//imprime o atributo do objeto
*/
include_once 'php-activerecord/ActiveRecord.php';
include_once("hokage.php");

if(isset($_POST["tabela"]))
{
	$cfg = ActiveRecord\Config::initialize(function($cfg)
	{

	$cfg->set_model_directory('models');
	$cfg->set_connections(array('development'=>'mysql://'.FUSERDB.':'.FSENHADB.'@'.FHOSTDB.'/'.FNAMEDB.''));
	});

	if($_POST["tabela"]=="alteratel"){
		//variavel tabela
		$idListCont=$_POST["idListCont"];
		$id_user=$_POST["id_user"];
		$tel=$_POST["tel"];
		/*inicio*/
			$cfg = listacontatos::find_by_id($idListCont);
			 # 'My first blog post!!'
			 $cfg->telefone = $tel;
			 $teste = $cfg->save();
			
			if($teste){
				$obj = array("msg"=>1,"msgt"=>"dados gravados");
				echo(json_encode($obj));
			}else{
				$obj = array("msg"=>0,"msgt"=>"erro ao tentar gravar");
				echo(json_encode($obj));
			}//$cfg->update_attributes(array('telefone'=>$tel,'id'=>$idListCont));

	//proxima tabela
	}else if($_POST["tabela"]=="cadplanSma"){

		$Valor=$_POST["Valor"];
		$nomePacote=$_POST["nomePacote"];
		$id_user=$_POST["id_user"];
		//grava novo plano sms

		$attributes = array('nomePacote' =>$nomePacote,'valor'=>$Valor);
		$pacotesms = new pacotesms($attributes);
		$teste = $pacotesms->save();
			
			if($teste){
				$obj = array("msg"=>1,"msgt"=>"dados gravados");
				echo(json_encode($obj));
			}else{
				$obj = array("msg"=>0,"msgt"=>"erro ao tentar gravar");
				echo(json_encode($obj));
			}


	}else if($_POST["tabela"]=="buscaplanSma"){
		//carrega lista de planos sms
$cfg = pacotesms::find("all",array("limit"=>100,"offset"=>0));

$i=0;
foreach($cfg as $c) 
	{
$arr[$i]=array("id"=>$c->id,"nome"=>$c->nomepacote,"descricao"=>$c->valor);
		$i++;
	}
		echo(json_encode($arr));

	}else{// fim tabela
		$obj = array("msg"=>0,"msgt"=>"tabela nao valida");
		echo(json_encode($obj));
	}
//fim teste tabela
}else{
	//$obj = array("msg"=>0,"msgt"=>"sem variavel tabela");
	//echo(json_encode($obj));
}


?>
