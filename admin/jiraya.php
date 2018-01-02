<?php
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Access-Control-Allow-Origin:*");/*aceita post de todas os sites*/
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');
?>
<!--http://187.94.66.40/mbilling/lixo/donglejson.json-->
<!DOCTYPE html>
<html lang="bt-br" >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">

    <title>Mobytel Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/viadoadm.css" rel="stylesheet">
<!--modal-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--angular-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
<style>
body {background-color: rgb(000, 000, 000);}
#ramaloff li{

  background-color: rgb(100,50,100,0.1);
  max-width: 300px;
  font-family: "Times New Roman", Times, serif;
  font-size: 12px;
  color: white;
  border: 0px solid #ccc;
  margin-right: 20px;

    filter:alpha(opacity=70);
     opacity: 0.3;
     -moz-opacity:0.3;
     -webkit-opacity:0.3;
       background: linear-gradient(
        120deg, 
        rgb(255, 140, var(--less-blue, 000)), 
        rgb(000, 000, var(--more-blue, 000)));
}
#over{
 
    background: #000000;
    color: white;
    height: 300px;
    overflow-x: hidden;
    border: 0px solid #ccc;

}
</style>
</head>
<body id="drash" ng-app="" >
<div class="row col-lg-12">
  <div class="col-sm-12">
	<canvas id="myChart" class="col-lg-12" height="200px;"></canvas>
  </div>
  <div class="col-sm-4" id="json">
<canvas id="myChartPolar" class="col-lg-12" height="200px;">
	hauehuahue	
</canvas>
  </div>
  <div  class="col-sm-4">
    <canvas id="status_magnus" class="col-lg-12" height="200px;">
  </div>
  <div id="over" class="col-lg-4">
<ul id="ramaloff" class="list-group" style="float: right;">
<li class="list-group-item list-group-item-success">Renato é o +</li>
  
</ul>

  </div>
  <div class="col-sm-12"><?php
		echo("alo mundo");
  ?></div>
</div>




	
<script>
	valor = [];
  nomeapp = [];
  memapp = [];
  cpuapp = [];


function pegaramaisoff(){
  var dadosram = "tabela=ramaisoff";
  $("#ramaloff").empty();
    $.ajax({
          url: "http://mobyadmin.tk/lixo/ramaloff.php",
          data:dadosram,
          type:"post",
          dataType:"json",
          success: function(retramaisoff){
            //console.log(retramaisoff);
          $.each(retramaisoff, function( key, value) 
            {
$("#ramaloff").append("<li class='list-group-item list-group-item-danger'><strong>"+value.accountcode+"</strong>&nbsp;&nbsp;&nbsp;"+value.name+"&nbsp;&nbsp;&nbsp;"+value.regexten+"</li>").show();
            });

            },
            error: function(erroramaisoff){
                console.log(erroramaisoff);
            }
          });

}
 var polarc = document.getElementById("status_magnus").getContext('2d');
 var polarChart = new Chart(polarc,{
  type:'horizontalBar',
  data : {
     labels: [
        'Red',
        'Yellow',
        'Blue',
        'Red',
        'Yellow',
        'Blue',
        'Yellow',
        'Blue'
        ],
        datasets: [{
        label: 'MAGNUS-MEMÓRIA 100%',
        data: [1,10,20,30,40,50,60,70,80,90,100],
        backgroundColor: [
                'rgba(151, 055, 64, 0.2)',
                'rgba(186, 009, 64, 0.2)',
                'rgba(222, 161, 64, 0.2)',
                'rgba(177, 224, 64, 0.2)',
                'rgba(200, 097, 64, 0.2)',
                'rgba(052, 089, 64, 0.2)',
                'rgba(010, 211, 64, 0.2)',
                'rgba(199, 010, 64, 0.2)'
            ],

      }]
    }

 });

function relgeral(){
    var relg = "tabela=relgeral";
    //$("#status_magnus").empty();
  $.ajax({
          url: "http://mobytel.com.br/naruto/hinata.php",
          data:relg,
          type:'post',
          dataType:'json',
          success: function(retrelgeral){
//$("#status_magnus").append("<table class='table'><thead><tr><th>Magnus Status</th></tr></thead><tbody>");
            f = 1;
            $.each(retrelgeral, function( key, value) 
            {
    //$("#status_magnus").append("<tr class='success'><td>"+value+"</td></tr>");
              if(key > 6 && key < 15)
              {
                nomeapp[f] =  value[11];
                memapp[f] = (value[9]*1);
                cpuapp[f] = (value[8]*1);
                f++;
              }
            
            });
             polarChart.data.labels = nomeapp;
             polarChart.data.datasets[0].data = cpuapp;
             polarChart.update();
            //polar();
            //console.log(nomeapp+"<br>"+memapp+"<br>"+cpuapp);
            //aqui vou colocar os dados no chart

            //$("#status_magnus").append("</tbody></table>");    
          },
          error:function (errrelgeral){

          }
      });
      //fim ajax

}

var ctz = document.getElementById("myChartPolar").getContext('2d');
var myDoughnutChart = new Chart(ctz, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [45, 45, 10],
        backgroundColor: [	    
        'rgba(000, 000, 128, 1.2)',
        'rgba(060, 179, 113, 1.2)',
        'rgba(252, 252, 252, 0.2)']
    }],
    labels: [
        'Download',
        'Upload',
        ' '
    ]
}});

function speed(){
	var ixi = "tabela=speed";
	$.ajax({
          url: "http://mobytel.com.br/naruto/hinata.php",
          data:ixi,
          type:'post',
          dataType:'json',
          success: function(retspeed){
          	
          	val =[];
          	
          	val[0] = (retspeed.Download / 10);
          	val[1] = (retspeed.Upload/ 10);
          	val[2] = ((100 - val[0])-val[1]);
          	myDoughnutChart.data.datasets[0].data  = val; 
          	myDoughnutChart.update(); 
          	console.log(val);     	 
          },
          error:function (errspeed){

          }
      });
      //fim ajax	
}

function carrega(){
	var i = 2;
	var dados = "tabela=pegadongle";
        $.ajax({
          url: "http://mobytel.com.br/naruto/hinata.php",
          data:dados,
          type:'post',
          dataType:'json',
          success: function(retpegadongle){
          	var a = 1;
          	var i=0;
          	$.each(retpegadongle, function( key, value) 
            {
	          	valor[i] = value[3];
	          	i++;
			      }); 
          },
          error:function (errpegadongle){

          }
      });
      //fim ajax	
}


var ctx = document.getElementById("myChart").getContext('2d');
 
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Dom1", "Dom2", "Dom3", "Dom4", "Dom5", "Dom6", "Dom7", "Dom8", "Dom9", "Dom10", "Dom11", "Dom12", "Dom13", "Dom14", "Dom15", "Dom16"],
        datasets: [{
            label: 'DONGLES',
            data:[15, 19, 3, 5, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3],
            backgroundColor: [
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
function preenchedong(){
	//remove ultimo elemento do array repetido
	valor.pop();
//popula o array de dados
  myChart.data.datasets[0].data = valor;
  console.log("rodou"+valor);
//altera grafico
  myChart.update();
}

//inicializa
carrega();

preenchedong();
//fim inicializa

//de 1 em 1 minutos
setInterval(function(){
//chama valores placas de rede
  relgeral();	
	speed();
  pegaramaisoff();
},10000);
//de 5 em 5 minutos
setInterval(function(){
//carrega os dados
	carrega();
	preenchedong();
},30000);/*de 5 em 5 minutos*/

</script>
</body>
</html>
