<?php

require_once("../seguranca.php");

require_once('../conexao/banco.php');
$id = $_REQUEST['ski_codigo'];
$descricao = $_REQUEST['ski_descricao'];
$porcentagem = $_REQUEST['ski_porcentagem'];

$sql = "update tb_skill set ski_descricao = '$descricao', ski_porcentagem='$porcentagem' where ski_codigo='$id'";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_skill.php");

?>