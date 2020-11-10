<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');

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

$sql = "insert into tb_aluno (alu_nome, alu_data_nascimento, alu_sexo, alu_cep, alu_logradouro, alu_numero, alu_complemento, alu_cidade, alu_estado, alu_email, alu_telefone, alu_celular, alu_escolaridade, alu_serie, alu_ano_conclusao, alu_escola, alu_objetivo) values ('$nome', '$nascimento', '$sexo', '$cep', '$logradouro', '$numero', '$complemento', '$cidade', '$estado', '$email', '$telefone', '$celular', '$escolaridade', '$serie', '$conclusao', '$escola', '$objetivo')";

mysqli_query($con, $sql) or die ("Erro no SQL!");

header("Location: consulta_aluno.php")

?>