<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');

$id = $_REQUEST['pro_codigo'];
$descricao = $_REQUEST['pro_descricao'];
$foto = $_REQUEST['pro_foto'];
$status = $_REQUEST['pro_status'];

$sql = "update tb_projetos set pro_descricao = '$descricao', pro_foto='$foto', pro_status='$status' where pro_codigo='$id'";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_projeto.php");

?>