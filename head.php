<?php
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Access-Control-Allow-Origin: *");/*aceita post de todas os sites*/
header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
define('HOST',$_SERVER['SERVER_NAME']);
define('IPCLIENTE',$_SERVER['REMOTE_ADDR']);
define('URL',"http://".$_SERVER['SERVER_NAME']);
?>
<head>
    <link rel="shortcut icon" href="/img/banner/icon.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--define que a tela do celular vai aumentar as letras -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">-->

    <title>MobyTel</title>
<?php //echo("<link href='".URL."/lib/bootstrap/css/bootstrap.css' rel='stylesheet'>");?>
<?php //echo("<link href='".URL."/css/tshunadem.css' rel='stylesheet'>");?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href='/css/tshunadem.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--fonte da porra-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--extjs-->
    <script type="text/javascript">
    endereco = "http://www.mobytel.com.br/img/neve.fw.png";
    </script>

</head>