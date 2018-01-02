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
var_dump(URL);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">-->

    <title>MobyTel</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">-->
    <?php echo("<link href='".URL."/lib/bootstrap/css/bootstrap.css' rel='stylesheet'>");?>
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--<link href="css/new-age.min.css" rel="stylesheet">-->
    <?php echo("<link href='".URL."/css/tshunadem.css' rel='stylesheet'>");?>
    <!--extjs-->
</head>