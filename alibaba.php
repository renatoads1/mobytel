<?php
/*
$host   = '187.94.66.41'; // Hosts onde está o servidor Mysql
$dbname = 'mbilling'; // Banco de dados para acesso
$user   = 'renatoads1'; // Usuário do banco de dados
$pass   = 'r3n4t0321'; // Senha do banco de dados
$con = mysqli_connect($host,$user,$pass,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	echo("conectou");
  }
*/
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$hostdb ="187.94.66.41";
$nomedb = "mbilling";
$userdb = "renatoads1";
$senhadb = "r3n4t0321";
$portdb="3306";

$pdosms = new PDO("mysql:host=".$hostdb.";dbname=".$nomedb,$userdb,$senhadb);


?>