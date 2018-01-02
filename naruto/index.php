<?php
require_once 'php-activerecord/ActiveRecord.php';
include("hokage.php");
$cfg = ActiveRecord\Config::initialize(function($cfg)
{
$cfg->set_model_directory('models');
$cfg->set_connections(array('development'=>'mysql://'.FUSERDB.':'.FSENHADB.'@'.FHOSTDB.'/'.FNAMEDB.''));
});

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
