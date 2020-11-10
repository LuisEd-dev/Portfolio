<?php

require_once("../seguranca.php");

require_once('../conexao/banco.php');
$id = $_REQUEST['ser_codigo'];
$titulo = $_REQUEST['ser_titulo'];
$descricao = $_REQUEST['ser_descricao'];
$icone = $_REQUEST['ser_icone'];

$sql = "update tb_servicos set ser_titulo = '$titulo', ser_descricao='$descricao', ser_icone='$icone' where ser_codigo='$id'";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_servico.php");

?>