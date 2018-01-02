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
  'custom_id' => 'REF0001', // associar transação Gerencianet com seu identificador próprio
  'notification_url' => 'http://your_domain.com/notification' // url de notificação
];
 
try {
    $api = new Gerencianet($options);
    $charge = $api->updateChargeMetadata($params, $body);
 
    print_r($charge);
} catch (GerencianetException $e) {
    print_r($e->code);
    print_r($e->error);
    print_r($e->errorDescription);
} catch (Exception $e) {
    print_r($e->getMessage());
}