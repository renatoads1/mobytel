<?php
session_start();
if(empty($_SESSION['idCliente'])){
if(empty($_SESSION['auth'])||($_SESSION['auth']!=true)){
  header("Location: ../page_403.php");
  die();
  }
}
?>
