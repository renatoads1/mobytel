<?php

require ("controller/BDPkg_user.php");
require ("controller/BDPkg_cdr.php");



//SCRIPT INICIA DIA 1 AS 00:01

$diaatual = date('d');

	if($diaatual == 19){
		
		$BDPkg_cdr = new BDPkg_cdr();
		$BDPkg_user = new BDPkg_user();
		
		$clientes = $BDPkg_user->listUserPorPlanoScript();

		//LAÇO COM CONSULTA DE TODOS OS CLIENTES PÓS E CONTROLE DO MÊS PASSADO QUE NÃO POSSUEM BOLETOS GERADOS NO MESMO
		
		foreach ($clientes as $cliente){

			if($cliente['tipo_plano'] == "pos" ){

					setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
					//GERA BOLETO DOS CLIENTES PÓS-PAGO COM INSERT NA TABELA PAGAMENTO ENVIANDO DADOS VIA POST
				    //dia do vencimento do cliente
					$diavencimento	= $cliente['diaVencimento'];
					$mesnumeric = date('m', strtotime('- 1 months', strtotime(date('Y-m-d'))));
					$yearnumeric = date('Y', strtotime('- 1 months', strtotime(date('Y-m-d'))));
					$mesnumeric = date('m', strtotime('- 1 months', strtotime(date('Y-m-d'))));
					$mesword = strftime("%B", strtotime('-1 months', strtotime(date('Y-m-d'))));
					//concateno dia do vencimento com atual
					
					
					//$vencimentomes = date('Y') . '-' . date('m') . '-' . $diavencimento;
					
					$vencimentomes = date('Y') . '-' . date('m') . '-' . $diavencimento;

					
					//Calculando Valor
					
					
					//soma de todos os SMS enviados no mes passado multiplicando por pelo preço de sms em pkg_user
					
					
					
					
						
					
					//parametros para serem inseridos no boleto
					$valormes = $BDPkg_cdr->gastosConta($cliente['id'],$mesnumeric,$yearnumeric);
					
					if($valormes['gastos'] == 0){
						
						$valormes = 0;
						
					}else{
						
						 $valormes =  intval($valormes['gastos'] * 100);
						//$valormes = $valormes['gastos'];
						
					}
					
					//VALOR MINIMO DE USO É 5
					if($valormes != 0){
					
						//ATENÇÃO
					//SE O VALOR MENOR QUE 5 TENHO QUE CRIAR UMA TABELA PARA CONSULTA SE ELE TEM
					//ALGUM VALOR PENDENTE NO MES PASSADO DO VENCIMENTO PARA ACRESCENTAR A CONTA ATUAL
					//E VERIFICAR SE O VALOR NÃO DA MENOS DE 5
					
						
					$email = $cliente['email'];
					$nome = $cliente['firstname'] . ' ' . $cliente['lastname'];
					
					$cpf = $cliente['doc'];
					$telefone = $cliente['mobile'];
					$vencimento = $vencimentomes;
					$quantidade = 1;
					$descricao = "Conta referente ao mes " .strtoupper( $mesword) .'/'.$yearnumeric; 
					$idplano = $cliente['id_plan'];
					$tipoplano = $cliente['typepaid'];
					
					echo "<br /><br />" . $email .' ' . $valormes;
					
					$conteudo = http_build_query(array(
						'cliente' => $cliente['id'],
						'descricao' => $descricao,
						'quantidade' => $quantidade,
						'valor' => $valormes,
						'nome_cliente' => $nome,
						'vencimento' => $vencimento,
						'caixapostal' => $email,
						'telefone' => $telefone,
						'cpf' => $cpf,
						'idplano' => $idplano,
						'tipoplano'	=> $tipoplano
					));
					
					$contexto = stream_context_create(array(
							'http' => array(
									'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
												"Content-Length: ".strlen($conteudo)."\r\n".
												"User-Agent:MyAgent/1.0\r\n",
									'method'  => 'POST',
									'content' => $conteudo,
							)
					));
					
					
					$result = file_get_contents('http://localhost/moby_website_v2/admin/production/controller/emitir_boleto.php', null, $contexto);
					
					echo $result;
					
			}
					
					
				}elseif($cliente['tipo_plano'] == "controle"){
				  		//GERA BOLETO DOS CLIENTES CONTROLE COM INSERT NA TABELA PAGAMENTO ENVIANDO DADOS VIA POST
						
						
						//PASSAR AJAX COM FILTROS VIA POST

				}else{
					
				}

		} //fim foreach

	}else{
		
		echo "Não é dia primeiro";
	}

//FIM LAÇO

?>