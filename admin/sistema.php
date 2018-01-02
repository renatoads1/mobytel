<?php
session_start();
include('../naruto/hokage.php');
if($_SESSION['user_name'] =="renatoads1"||$_SESSION['user_name'] =="Samuel")
{
    
}else{
    header("Location: http://mobytel.com.br/admin/drash.php");
}
/*
$_SESSION['logged_in'] = true;//status de logado
$_SESSION['user_id'] = $user['id'];//id do usuário no magnus
$_SESSION['user_name'] = $user['username'];//nome de usuário 
$_SESSION['credit'] = $user['credit'];//créditos disponiveis
$_SESSION['active'] = $user['active'];//ativo ou inativo
$_SESSION['lastname'] = $user['lastname'];//sobrenome do usuário
$_SESSION['fristname'] = $user['fristname'];////primeiro nome do usuário
$_SESSION['address'] = $user['address'];//endereço do usuário
$_SESSION['cyti'] = $user['cyti'];//cidade do usuário
$_SESSION['state'] = $user['state'];//estado do usuário
$_SESSION['country'] = $user['country'];//pais do user
$_SESSION['zipcode'] = $user['zipcode'];//cep do usuário
$_SESSION['phone'] = $user['phone'];//phone do usuário
$_SESSION['mobyle'] = $user['mobyle'];//nao sei o que é
$_SESSION['email'] = $user['email'];//email do usuário
$_SESSION['redial'] = $user['redial'];//ultimo numero discado
$_SESSION['doc'] = $user['doc'];//numero de documento do usuário
$_SESSION['envioSMS'] = $user['envioSMS'];//pode enviar sms 0= nao 1=sim
*/

?>
<!--LEMBRETE
PEGAR LIGAÇÕES ONLINE
use mbilling;
select *from pkg_call_online
-->
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <!--arquivo para upload-->
    <script type="text/javascript" src="up/js/plupload.min.js"></script>
    <!--fim arquivo para upload-->
</head>

<body>

    <div id="wrapper">
            <?php
            //menu 
                include("navbar.php");
                
            ?>
            <div class="col-lg-12" style="color: pink;font-size: 22px;">
                <?php
                   
                ?>

            </div>

        <div id="page-wrapper">

            <div class="container-fluid">
            <?php
            //boxd de menssagem de boas vindas

                include("bemvindo.php");
                //include("tabvalores.php");
                include("acordeonSistema.php");
            ?>
                

            </div>


        </div>
    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Morris Charts JavaScript 
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>-->
    <!--GOOGLE AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/adm.js"></script>
    <script src="js/adm2.js"></script>
   <!--apos carregar a pagina--> 

</body>
</html>
