<?php

function bdConnectDois (){
    
  $servidor = '192.168.0.254';
  $porta = '3306';
  $banco = 'mbilling';
  $usuario = 'root';
  $senha = 'B7uckWm47Q';

     $conn = new PDO("mysql:host=$servidor;port=$porta;dbname=$banco;charset=utf8", $usuario, $senha, array(PDO::ATTR_PERSISTENT => true));
        return $conn;
    }

?>
