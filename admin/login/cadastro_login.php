<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');

$nome = $_REQUEST['txt_nome'];
$login = $_REQUEST['txt_login'];
$senha = $_REQUEST['txt_senha'];

$sql = "insert into tb_login (log_nome, log_login, log_senha) values ('$nome', '$login', '$senha')";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_login.php")

?>