<?php 

require __DIR__ . '/BDPkg_pagamento.php';


$idCliente =  $_POST["cliente"];

$pag_id =  $_POST["idpag"];


$valor = 1;


//INSERINDO VALOR NO CAMPO PAGAMENTO
$pagamentos = new pkg_pagamentos();


$BDPkg_pagamentos = new BDPkg_pagamentos();

$valor = 1;

$alterainfpagamento = $BDPkg_pagamentos->alteraInfPagamentos($valor,$idCliente,$pag_id);


if($alterainfpagamento == true){
		
		$result = "A sua solicitação foi efetuada com sucesso!" ;
		
	}else{
	
		$result = "Erro: Você não pode Informar Pagamento!" ;
		
	}


echo json_encode($result );



























?>