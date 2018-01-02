<?php
session_start();
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Access-Control-Allow-Origin: *");/*aceita post de todas os sites*/
header('Content-Type: text/json; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');
//pegando dados do usuário
include("gerenciateste.php");
if(isset($_POST["id"]) && $_POST["id"]!=""){
   $id_user = $_POST["id"];
   
$ret = null;

  $ret = executa($id_user);
  if($ret != null && $ret["code"] == 200){

  $barcode  = $ret["data"]["barcode"];
  $expire_at  = $ret["data"]["expire_at"];
  $charge_id  = $ret["data"]["charge_id"];
  $status  = $ret["data"]["status"];
  $total  = $ret["data"]["total"];
  $payment  = $ret["data"]["payment"];

$grava =  gravaboleto($id_user,$barcode,$expire_at,$charge_id,$status,$total,$payment);

if($grava == true){
  $retor = array('codbarras' =>$barcode,'vencimento' =>$expire_at,'idtransa'=>$charge_id,'estatos' =>$status,'Total' =>$total,'tipo' =>$payment);
  echo(json_encode($retor));  
}else{
    $retor = array("msg"=>"erro");
    echo(json_encode($retor));
}

  //gravar os dados do boleto no banco


  
  //echo(json_encode($ret));

/*
barcode expire_at charge_id status total payment 
*/



  }else{
    $msg = array("msg"=>"null","id"=>$id_user);
    echo(json_encode($msg));
  }
    

    //echo(json_encode($ret));
    //die();

}else{
    $erro = array("msg"=>"sem post");
    echo(json_encode($erro));
    //die();
}

?>
