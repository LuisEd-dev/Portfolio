<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');

$id = $_REQUEST['alu_codigo'];
$nome = $_REQUEST['alu_nome'];
$nascimento = $_REQUEST['alu_data_nascimento'];
$sexo = $_REQUEST['alu_sexo'];
$cep = $_REQUEST['alu_cep'];
$logradouro = $_REQUEST['alu_logradouro'];
$numero = $_REQUEST['alu_numero'];
$complemento = $_REQUEST['alu_complemento'];
$cidade = $_REQUEST['alu_cidade'];
$estado = $_REQUEST['alu_estado'];
$email = $_REQUEST['alu_email'];
$telefone = $_REQUEST['alu_telefone'];
$celular = $_REQUEST['alu_celular'];
$escolaridade = $_REQUEST['alu_escolaridade'];
$serie = $_REQUEST['alu_serie'];
$conclusao = $_REQUEST['alu_ano_conclusao'];
$escola = $_REQUEST['alu_escola'];
$objetivo = $_REQUEST['alu_objetivo'];

$sql = "update tb_aluno set alu_nome = '$nome', alu_data_nascimento='$nascimento', alu_sexo='$sexo', alu_cep='$cep', alu_logradouro='$logradouro', alu_numero='$numero', alu_complemento='$complemento', alu_cidade='$cidade', alu_estado='$estado', alu_email='$email', alu_telefone='$telefone', alu_celular='$celular', alu_escolaridade='$escolaridade', alu_serie='$serie', alu_ano_conclusao='$conclusao', alu_escola='$escola', alu_objetivo='$objetivo' where alu_codigo='$id'";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_aluno.php");

?>