<?php

require __DIR__ . '/../api/vendor/autoload.php';

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;
 
$clientId = 'Client_Id_cc860f15ef57356633361e593d4ee7d1851cd427'; // informe seu Client_Id
$clientSecret = 'Client_Secret_880d8da13ecc9680c290e06f1fe09036d1315052'; // informe seu Client_Secret
 
$options = [
  'client_id' => $clientId,
  'client_secret' => $clientSecret,
  'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = producao)
];
 
// $charge_id refere-se ao ID da transação gerada anteriormente
$params = [
  'id' => $charge_id
];
 
$body = [
  'email' => 'email_do_cliente@servidor.com.br'
];
 
try {
    $api = new Gerencianet($options);
    $response = $api->resendBillet($params, $body);
 
    print_r($response);
} catch (GerencianetException $e) {
    print_r($e->code);
    print_r($e->error);
    print_r($e->errorDescription);
} catch (Exception $e) {
    print_r($e->getMessage());
}