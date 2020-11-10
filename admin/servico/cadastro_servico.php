<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');

$titulo = $_REQUEST['ser_titulo'];
$descricao = $_REQUEST['ser_descricao'];
$icone = $_REQUEST['ser_icone'];

$sql = "insert into tb_servicos (ser_titulo, ser_descricao, ser_icone) values ('$titulo', '$descricao', '$icone')";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_servico.php")

?>