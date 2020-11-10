<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');

$id = $_REQUEST['txt_codigo'];
$titulo = $_REQUEST['txt_titulo'];
$descricao = $_REQUEST['txt_descricao'];
$autor = $_REQUEST['txt_autor'];
$status = $_REQUEST['sel_status'];

$sql = "update tb_news set new_titulo = '$titulo', new_descricao='$descricao', new_autor='$autor', new_status='$status' where new_codigo='$id'";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_news.php");

?>