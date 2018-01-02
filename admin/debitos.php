<!--inicio tabela-->
<table style="color: #777;" id="cabtabela" class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th style="color: #666;">Mês</th>
<th style="color: #666;">Vencimento</th>
<th style="color: #666;">Valor</th>
<th style="color: #666;">Gerar</th>
<th style="color: #666;">Baixar</th>
<th style="color: #666;">Enviar</th>
<th style="color: #666;">Status</th>
</tr>
</thead>
<tbody>

<?php
session_start();
include_once("../naruto/hokage.php");
include_once("../naruto/sask.php");
// Check connection renato

if ($fconn->connect_error) {
    var_dump("Connection failed: " . $fconn->connect_error);
} 

$sqldeb = "SELECT * FROM debitos WHERE id_user = '".$_SESSION['user_id']."'";
$result = $fconn->query($sqldeb);
if ($result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {//$row["id_user"]
	
if(!isset($_SESSION['cpf'])){
	$_SESSION['cpf'] = $row["cpf"];
}
	if($row["boleto"]==null){
		$btnlib = "btn btn-danger disabled";
	}else{
		$btnlib = "btn btn-danger active";
	}
	if($row["estatuspag"]==0){
		$stat = "<span style='color: #f22;''>Pendente</span>";
	}else{
		$stat = "<span style='color: #0F0;''>Pago</span>";		
	}
	echo "<tr id='".$row["id"]."'><td mesref='".$row["mesref"]."'>".$row["mesref"]."</td><td dataven='".$row["datavenc"]."'>".$row["datavenc"]."</td><td adcion='".$row["adcional"]."'>".$row["adcional"]."</td><td><input type='button'class='btn btn-success' id='".$row["id_user"]."' value='Gerar' onclick='Javascript:geraboleto(".$row['id'].','.$row['id_user'].");'></td><td><button id='".$row["id"]."' type='button' class='".$btnlib."'>PDF</button></td><td><button id='".$row["id"]."' type='button' class='".$btnlib."'>E-mail</button></td><td>".$stat."</td></tr>";
    
    }
    //btn btn-danger disabled class='btn btn-danger active'
}

?>
</tbody>
</table>
<!--fim tabela-->