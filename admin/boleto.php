<?php
require 'composer/vendor/autoload.php'; // caminho relacionado a SDK
use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

$clientId = 'Client_Id_ded8c947271b01931f28c2bb172d2ddc34bcdc9e'; // insira seu Client_Id, conforme o ambiente (Des ou Prod)
$clientSecret = 'Client_Secret_fc6a828ff64af1761d4335c0e9062053967ca254'; // 
$charge_id = $_GET["id"];

// altere conforme o ambiente (true = desenvolvimento e false = producao) 
$options = ['client_id' => $clientId,'client_secret' => $clientSecret,'sandbox' => true ];
 
// $charge_id refere-se ao ID da transação gerada anteriormente
$params = ['id' => $charge_id];
//
$customer=['name' =>'moby ilimitado','cpf' => '05959321696','phone_number' => '3188398385'];
 
$bankingBillet = ['expire_at' => '2018-12-12','customer' => $customer];
 
$payment = ['banking_billet' => $bankingBillet];

$body = ['payment' => $payment];

try {
        $api = new Gerencianet($options);
        $charge = $api->payCharge($params, $body);
        
        $codbarras = $charge['data']['barcode']; 
        $link = $charge['data']['link']; 
        $vencimento = $charge['data']['expire_at']; 

        print_r("codbarras: ".$codbarras."<br>link".$link."<br>vencimento".$vencimento);
        
    } catch (GerencianetException $e) {
        print_r($e->code);
        print_r($e->error);
        print_r($e->errorDescription);
    } catch (Exception $e) {
        print_r($e->getMessage());
    }
