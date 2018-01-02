<?php

require __DIR__ . '/BDPkg_boleto.php';
require __DIR__ . '/BDPkg_pagamento.php';



require ("../gerencianet/api/vendor/autoload.php");

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

$clientId = 'Client_Id_cc860f15ef57356633361e593d4ee7d1851cd427'; // informe seu Client_Id
$clientSecret = 'Client_Secret_880d8da13ecc9680c290e06f1fe09036d1315052'; // informe seu Client_Secret

$options = [
    'client_id' => $clientId,
    'client_secret' => $clientSecret,
    'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = produção)
];


echo "<br /><br />passei aqui ".$_POST["valor"]."  <br /><br />" ;

//obtendo ID docliente
$idCliente =  $_POST["cliente"];

$idPlano = 0;

/*
if(isset($_POST["idplano"])){
	$idPlano =  $_POST["idplano"];
}
*/


$tipoplano = 1;


if (isset($_POST)) {

    $item_1 = [
        'name' => $_POST["descricao"],
        'amount' => (int) $_POST["quantidade"],
        'value' => (int) $_POST["valor"],

    ];

    $items = [
        $item_1
    ];
	
    $metadata = array('notification_url'=>'http://localhost/moby_website_v2/admin/production/controller/consultaStatus_boleto.php' );
    
    
    $body = [
    'items' => $items,
    'metadata' => $metadata
    	];

    try {
        $api = new Gerencianet($options);
        $charge = $api->createCharge([], $body);
        if ($charge["code"] == 200) {

            $params = ['id' => $charge["data"]["charge_id"]];
            $customer = [
                'name' => $_POST["nome_cliente"],
                'cpf' => $_POST["cpf"],
                'phone_number' => $_POST["telefone"],
            	'email' => $_POST["caixapostal"] 
            ];

            // Formatando a data, convertendo do estino brasileiro para americano.
           // $data_brasil = DateTime::createFromFormat('d/m/Y', $_POST["vencimento"]);
		   // 'expire_at' => $data_brasil->format('Y-m-d'),

            $bankingBillet = [
                'expire_at' => $_POST["vencimento"],
                'customer' => $customer
            	
            ];
            $payment = ['banking_billet' => $bankingBillet];
            $body = ['payment' => $payment];

            $api = new Gerencianet($options);
            $pay_charge = $api->payCharge($params, $body);
            
            //Fazer aqui a atualização no banco de dados
			$dataatual = date('Y-m-d H:i:s');
            
			
			//INSERINDO BOLETOS
            $boleto = new pkg_boleto();
            
            $boleto->setId($pay_charge['data']['charge_id']);
            $boleto->setIdUser($idCliente);
            $boleto->setDate($dataatual);
            $boleto->setDescription($pay_charge['data']['barcode']);
            
            //validando status de 0 => Não Pago 1 => Pago
            if($pay_charge['data']['status'] == "waiting"){
            	$status = 0;	
            	$boleto->setStatus($status);
            }else{
            	$status = 1;
            	$boleto->setStatus($status);
            }
           
            $boleto->setPayment($pay_charge['data']['total']);
            $boleto->setVencimento($pay_charge['data']['expire_at']);
            $BDPkg_boleto = new BDPkg_boleto();
            $insertboleto = $BDPkg_boleto->insertBoleto($boleto);
			
            
            //INSERINDO PAGAMENTOS
            $pagamentos = new pkg_pagamentos();
            $pagamentos->setPagIdUser($idCliente);
            $pagamentos->setPagTipo("B");
            $pagamentos->setPagPlano( $idPlano);
            $pagamentos->setPagTipoPlano($tipoplano);
            $pagamentos->setPagDataCadastro(date("Y-m-d H:i:s"));
            $pagamentos->setPagDataAlteracao(date("Y-m-d H:i:s"));
            $pagamentos->setPagDataCancelamento(date("Y-m-d H:i:s"));
            $pagamentos->setPagDataPagamento(date("Y-m-d H:i:s"));
            $pagamentos->setPagDataVencimento($_POST["vencimento"]);
            $pagamentos->setPagValor($_POST["valor"]);
            $pagamentos->setPagNumBoleto($pay_charge['data']['charge_id']);
            $pagamentos->setPagStatus($pay_charge['data']['status']);
            $pagamentos->setLinkBoleto($pay_charge['data']['link']);
            $pagamentos->setCodbarrasBoleto($pay_charge['data']['barcode']);
            
            
            $BDPkg_pagamentos = new BDPkg_pagamentos();

            $insertpagamentos = $BDPkg_pagamentos->insertPagamentos($pagamentos);
            
            echo json_encode($pay_charge );
           
        } else {

        }
    } catch (GerencianetException $e) {
        print_r($e->code);
        print_r($e->error);
        print_r($e->errorDescription);
    } catch (Exception $e) {
        print_r($e->getMessage());
    }
}