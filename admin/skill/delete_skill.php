<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');
$id = $_REQUEST['ski_codigo'];
$sql = "delete from tb_skill where ski_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_skill.php");

?>