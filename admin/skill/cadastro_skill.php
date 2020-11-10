<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');

$descricao = $_REQUEST['ski_descricao'];
$porcentagem = $_REQUEST['ski_porcentagem'];

$sql = "insert into tb_skill (ski_descricao, ski_porcentagem) values ('$descricao', '$porcentagem')";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_skill.php")

?>