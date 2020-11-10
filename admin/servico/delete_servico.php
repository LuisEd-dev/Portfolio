<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');
$id = $_REQUEST['ser_codigo'];
$sql = "delete from tb_servicos where ser_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_servico.php");

?>