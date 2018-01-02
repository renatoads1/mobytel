<?php
include_once("hokage.php");
if(mysqli_connect_errno())
  {
  	$msg = array("erro de conexao"=>mysqli_connect_error());
    echo(json_encode($msg));
    die();
  }
function limpajitter($var)
{
	$var = str_replace("%","",$var);
	$var = str_replace("(","",$var);
	$var = str_replace(")","",$var);
return $var;
}

if($_GET["get"]==1||$_GET["get"]=='1'){
$data = file_get_contents("http://mobyadmin.tk/lixo/qualidade.txt"); 

$convert = explode("\n", $data); //create array separate by new line
$linhas = count($convert);
$linhas = ($linhas-2); 
$query=null;
for ($i=1;$i<$linhas;$i++)  
{

	$h = str_replace("  "," ",$convert[$i]);
	$g = str_replace("   "," ",$h);
	$js = str_replace("    "," ",$g);
	$jz = str_replace("     "," ",$js);


	$linhasarr = explode(" ",$jz);
	$palavras = count($linhasarr);
			
			if($linhasarr[2]!=""){
				
$query .= "INSERT INTO quallidade(peer,callid,duracaochamad,pacoterecebido,perdapacrecebid,percentperdareceb,jiterreceb,pacoteenviado,pacenvperda,percentperdaenviad,jitterenviad)VALUES('".$linhasarr[0]."','".$linhasarr[2]."','".$linhasarr[3]."','".$linhasarr[4]."','".$linhasarr[5]."','".limpajitter($linhasarr[7])."','".$linhasarr[8]."','".$linhasarr[9]."','".$linhasarr[10]."','".limpajitter($linhasarr[12])."','".$linhasarr[13]."');";
			}else{

			}


		
}//fim primeiro for
	if($query!=""){
		if (!mysqli_query($fconn,$query))
		  {
		  			$msg = array("erro query"=>mysqli_error($fconn));
		          	echo(json_encode($msg));
		          	die();
		  }else{
		  			$msg = array("msg"=>"Dados inseridos ");
		          	echo(json_encode($msg));
		  }
	}
	
	/*in
	if($idlist = $fconn->query($query)){
          $msg = array("msg"=>"Dados inseridos ");
          echo(json_encode($msg));
        }else{
          $msg = array("msg"=>$query);
          echo(json_encode($msg));
        }
	
        *///fim

}else{
	echo("nao entrou no get");
}


?>