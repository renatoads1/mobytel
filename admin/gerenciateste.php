<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
require 'composer/vendor/autoload.php'; // caminho relacionado a SDK
use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;
/*grava boleto no banco de dados*/
function gravaboleto($id_user,$barcode,$expire_at,$charge_id,$status,$total,$payment){
$servername = "179.188.16.171";
$username = "mobyfinan";
$password = "monitor1420";
$dbname = "mobyfinan";
$data = date("Y-m-d");

$conn2 = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn2->connect_error) {
        var_dump("Connection failed: ".$conn2->connect_error);
    }else{
         $ins = "INSERT INTO boletos(id_user,datageracao,vencimento,valortotal,codbarras,expire_at,charge_id,status,total,payment) VALUES ('".$id_user."','".$data."','".$expire_at."','".$total."','".$barcode."','".$expire_at."','".$charge_id."','".$status."','".$total."','".$payment."');"; 
         
         if($inserebol = $conn2->query($ins)){
            return true;
         }else{
            return false;
         }
    }
    
    $conn2->close();


}
/*função para gerar o codbarras do boleto*/
function pegacodbarras($barras,$descricao,$cpf,$telefone){
$clientId = 'Client_Id_ded8c947271b01931f28c2bb172d2ddc34bcdc9e';
$clientSecret = 'Client_Secret_fc6a828ff64af1761d4335c0e9062053967ca254';
//dados do usuário
$cpfs = (string)$cpf;
$phones = (string)$telefone;
//dias de vencimento do boleto    
$timestamp = strtotime("+5 days");
// Exibe o resultado
$vencimento =  date('Y-m-d',$timestamp); // 27/03/2009 05:02  

 // insira seu Client_Id, conforme o ambiente (Des ou Prod)
$charge_id = $barras;
// altere conforme o ambiente (true = desenvolvimento e false = producao) 
$options = ['client_id' => $clientId,'client_secret' => $clientSecret,'sandbox'=>true];
// $charge_id refere-se ao ID da transação gerada anteriormente
$params = ["id"=>$charge_id];

//dados do usuário

//
$cust=array("name"=>(string)$descricao,"cpf"=> $cpfs ,"phone_number"=> $phones );
//$cust=['name'=>'moby ilimitado','cpf' =>'05959321696','phone_number'=>'3188398385'];
//
$banki = array("expire_at" =>$vencimento,"customer"=>$cust);
//$banki = ['expire_at' =>'2017-08-31','customer' => $cust];
//
$payment = ['banking_billet' => $banki];
//
$body = ['payment' => $payment];
//
try {
        $api = new Gerencianet($options);
        $charge = $api->payCharge($params, $body);
        //codigo de barras
        $codbarras = $charge['data']['barcode']; 
        //link do boleto
        $link = $charge['data']['link']; 
        //vencimento
        $vencimento = $charge['data']['expire_at']; 

        //print_r("codbarras: ".$codbarras."<br>link".$link."<br>vencimento".$vencimento);
        return $charge;

    } catch (GerencianetException $e) {
        print_r($e->code);
        print_r($e->error);
        print_r($e->errorDescription);
    } catch (Exception $e) {
        print_r($e->getMessage());
    }
}
/*fim função codbarras boleto*/

/*função para criaR OS ITENS*/
function buscaserv($id_usr){
//variaveis de conexao
$servername = "179.188.16.171";
$username = "mobyfinan";
$password = "monitor1420";
$dbname = "mobyfinan";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            var_dump("Connection failed: " . $conn->connect_error);
        } 
        //id do usuário
        $id = $id_usr;

        $sqld = "SELECT a.*, b.* FROM servcontratados as a, servico as b WHERE id_user = '".$id."' and a.id_serv = b.id";
        $result = $conn->query($sqld);
        if ($result->num_rows > 0) {
            // output data of each row
            $i=0;
            while($row = $result->fetch_assoc()) {
                $descricao = $row["descricao"];
                $quantidade = intval($row["quantidade"]);
                $valor = intval($row["valor"]);
 

                $items[$i] = [
                        'name' => $row["descricao"], // nome do item, produto ou serviço
                        'amount' => $quantidade, // quantidade
                        'value' =>  $valor // valor (1000 = R$ 10,00)
                    ];

                  }
                  return $items;
            }else{
                echo("erro");
            } 
        $conn->close();

        }
/*FIM FUNÇÃO ITENS*/
function executa($id_user){
$clientId = 'Client_Id_ded8c947271b01931f28c2bb172d2ddc34bcdc9e';
$clientSecret = 'Client_Secret_fc6a828ff64af1761d4335c0e9062053967ca254';

//passo 1
$options = [
'client_id' => $clientId,
'client_secret' => $clientSecret,
'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = producao)
];
//passo 2

$items =  buscaserv($id_user);
//passo 3

$body  =  ['items'=>$items];
try {
    $api = new Gerencianet($options);
    $charge = $api->createCharge([], $body);
    //retorno de cod da transação
    $barras = $charge["data"]["charge_id"];
    //pega os itens da transação
    $descricao = $items[0]["name"]; 
    $quantidade = $items[0]["amount"];
    $value = $items[0]["value"];
    $cpf ="05959321696";
    $telefone = "31991840318";
    
    //pega o codbarras do boleto
    $codbarras = pegacodbarras($barras,$descricao,$cpf,$telefone);
    return $codbarras;
    }catch (GerencianetException $e) {
                    print_r($e->code);
                    print_r($e->error);
                    print_r($e->errorDescription);
                    var_dump("<br>".$items);
                } catch (Exception $e) 
                {
                    print_r($e->getMessage());
                    var_dump("<br>".$items);
                } 


}

?>