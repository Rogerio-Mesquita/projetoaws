<?php

$dbserver = "db-webapp.cxbsxod66t0i.us-east-1.rds.amazonaws.com";
$dbname = "cadastro";
$dbuser = "admin";
$dbsenha = "";
$conexao = mysqli_connect($dbserver, $dbuser, $dbsenha, $dbname);
if (!$conexao) {
    die ("A conexão falhou: " . mysqli_connect_error());
}

?>