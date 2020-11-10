<?php

require_once("../seguranca.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>
<body>
    
    <form name="frm_login" action="cadastro_aluno.php" method="POST">
        <div id="principal">
            <label> Nome </label>
            <input name="alu_nome" type="text" class="input_01">

            <label> Data Nascimento </label>
            <input name="alu_data_nascimento" type="date" class="input_01">

            <label> Sexo </label>
            <select name="alu_sexo" class="select_01">
                <option value="M"> Masculino </option>
                <option value="F"> Feminino </option>
            </select>

            <label> Cep </label>
            <input name="alu_cep" type="text" class="input_01">

            <label> Logradouro </label>
            <input name="alu_logradouro" type="text" class="input_01">

            <label> Numero </label>
            <input name="alu_numero" type="text" class="input_01">

            <label> Complemento </label>
            <input name="alu_complemento" type="text" class="input_01">

            <label> Cidade </label>
            <input name="alu_cidade" type="text" class="input_01">

            <label> Estado </label>
            <select name="alu_estado" class="select_01"> 
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
            </select>

            <label> Email </label>
            <input name="alu_email" type="email" class="input_01">

            <label> Telefone </label>
            <input name="alu_telefone" type="text" class="input_01">

            <label> Celular </label>
            <input name="alu_celular" type="text" class="input_01">

            <label> Escolaridade </label>
            <select name="alu_escolaridade" class="select_01">
                <option value="Ensino Fundamental">Ensino Fundamental</option>
                <option value="Ensino Médio">Ensino Médio</option>
                <option value="Ensino Médio + Técnico em Informática">Ensino Médio + Técnico em Informática</option>
            </select>

            <label> Serie </label>
            <input name="alu_serie" type="text" class="input_01">

            <label> Ano Conclusão </label>
            <input name="alu_ano_conclusao" type="text" class="input_01">

            <label> Escola </label>
            <input name="alu_escola" type="text" class="input_01">

            <label> Objetivo </label>
            <input name="alu_objetivo" type="text" class="input_01">

            <input name="btn_enviar" type="submit" value="Enviar!" class="btn">
        </div>
    </form>

</body>
</html>