<?php
require_once("constantesBD.php");

$ligacao = new mysqli(HOST, USER, SENHA, DB);

if ($ligacao->connect_error) {
    die("Erro na ligação: " . $ligacao->connect_error);
}
?>