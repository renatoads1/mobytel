<?php
require("bdConnect/authSession.php");
require_once("controller/BDPkg_cdr.php");
require_once("controller/BDPkg_prefix.php");


sleep(1);
$data = $_POST['dia'];
$idCliente = $_SESSION['idCliente'];



$BDCdr = new BDPkg_cdr();
$cdrs = $BDCdr->listCdrByDay ($idCliente, $data);
$BDPrefix = new BDPkg_prefix();

$gridChamadas = "";
$gridChamadas .= '<div id="loader"></div>';
if($cdrs != null ){
	foreach($cdrs as $cdr) {
		$tempoChamada = gmdate("H:i:s", $cdr['sessiontime']);
		$prefix = $BDPrefix->listPrefixById($cdr['id_prefix']);
		$gridChamadas .= "<tr>
				             <td>".$cdr['starttime']."</td>
	                         <td>".$cdr['src']."</td>
		                     <td>".$cdr['calledstation']."</td>
		                     <td>".$prefix['destination']."</td>
		                     <td>".$tempoChamada."</td>
		                     <td>Atendida</td>
		                     <td>R$ ".$cdr['sessionbill']."</td>
		                  </tr>";
		
		
		echo $gridChamadas;
	}
} else {
	$gridChamadas .="<tr>
	                     <td colspan=7>Não houve ligações neste dia</td>
	                 </tr>";
	
	echo $gridChamadas;
}
?>