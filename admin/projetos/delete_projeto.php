<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');
$id = $_REQUEST['pro_codigo'];
$sql = "delete from tb_projetos where pro_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_projeto.php");

?>