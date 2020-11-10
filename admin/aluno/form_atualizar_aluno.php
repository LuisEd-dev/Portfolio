<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');
$id = $_REQUEST['alu_codigo'];

$sql = "select * from tb_aluno where alu_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro no SQL!");
$dados = mysqli_fetch_array($sql);

?>

<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title> Formulários Atualizar </title>
        <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
    </head>
    
    <body>
        <form name="frm_news" action="atualizar_aluno.php" method="POST">
            <div id="principal">
                <label> Codigo </label>
                <input name="alu_codigo" type="text" class="input_01" value="<?php echo $dados['alu_codigo']; ?>">

                <label> Nome </label>
                <input name="alu_nome" type="text" class="input_01" value="<?php echo $dados['alu_nome']; ?>">

                <label> Data Nascimento </label>
                <input name="alu_data_nascimento" type="date" class="input_01" value="<?php echo $dados['alu_data_nascimento']; ?>">

                <label> Sexo </label>
                <select name="alu_sexo" class="select_01">
                    <option value="M" <?php if($dados['alu_sexo'] == "M"){ echo "selected";}?>> Masculino </option>
                    <option value="F" <?php if($dados['alu_sexo'] == "F"){ echo "selected";}?>> Feminino </option>
                </select>

                <label> Cep </label>
                <input name="alu_cep" type="text" class="input_01" value="<?php echo $dados['alu_cep']; ?>">

                <label> Logradouro </label>
                <input name="alu_logradouro" type="text" class="input_01" value="<?php echo $dados['alu_logradouro']; ?>">

                <label> Numero </label>
                <input name="alu_numero" type="text" class="input_01" value="<?php echo $dados['alu_numero']; ?>">

                <label> Complemento </label>
                <input name="alu_complemento" type="text" class="input_01" value="<?php echo $dados['alu_complemento']; ?>">

                <label> Cidade </label>
                <input name="alu_cidade" type="text" class="input_01" value="<?php echo $dados['alu_cidade']; ?>">

                <label> Estado </label>
                <select name="alu_estado" class="select_01"> 
                    <option value="AC" <?php if($dados['alu_estado'] == "AC"){ echo "selected";}?> >AC</option>
                    <option value="AL" <?php if($dados['alu_estado'] == "AL"){ echo "selected";}?> >AL</option>
                    <option value="AM" <?php if($dados['alu_estado'] == "AM"){ echo "selected";}?> >AM</option>
                    <option value="AP" <?php if($dados['alu_estado'] == "AP"){ echo "selected";}?> >AP</option>
                    <option value="BA" <?php if($dados['alu_estado'] == "BA"){ echo "selected";}?> >BA</option>
                    <option value="CE" <?php if($dados['alu_estado'] == "CE"){ echo "selected";}?> >CE</option>
                    <option value="DF" <?php if($dados['alu_estado'] == "DF"){ echo "selected";}?> >DF</option>
                    <option value="ES" <?php if($dados['alu_estado'] == "ES"){ echo "selected";}?> >ES</option>
                    <option value="GO" <?php if($dados['alu_estado'] == "GO"){ echo "selected";}?> >GO</option>
                    <option value="MA" <?php if($dados['alu_estado'] == "MA"){ echo "selected";}?> >MA</option>
                    <option value="MG" <?php if($dados['alu_estado'] == "MG"){ echo "selected";}?> >MG</option>
                    <option value="MS" <?php if($dados['alu_estado'] == "MS"){ echo "selected";}?> >MS</option>
                    <option value="MT" <?php if($dados['alu_estado'] == "MT"){ echo "selected";}?> >MT</option>
                    <option value="PA" <?php if($dados['alu_estado'] == "PA"){ echo "selected";}?> >PA</option>
                    <option value="PB" <?php if($dados['alu_estado'] == "PB"){ echo "selected";}?> >PB</option>
                    <option value="PE" <?php if($dados['alu_estado'] == "PE"){ echo "selected";}?> >PE</option>
                    <option value="PI" <?php if($dados['alu_estado'] == "PI"){ echo "selected";}?> >PI</option>
                    <option value="PR" <?php if($dados['alu_estado'] == "PR"){ echo "selected";}?> >PR</option>
                    <option value="RJ" <?php if($dados['alu_estado'] == "RJ"){ echo "selected";}?> >RJ</option>
                    <option value="RN" <?php if($dados['alu_estado'] == "RN"){ echo "selected";}?> >RN</option>
                    <option value="RS" <?php if($dados['alu_estado'] == "RS"){ echo "selected";}?> >RS</option>
                    <option value="RO" <?php if($dados['alu_estado'] == "RO"){ echo "selected";}?> >RO</option>
                    <option value="RR" <?php if($dados['alu_estado'] == "RR"){ echo "selected";}?> >RR</option>
                    <option value="SC" <?php if($dados['alu_estado'] == "SC"){ echo "selected";}?> >SC</option>
                    <option value="SE" <?php if($dados['alu_estado'] == "SE"){ echo "selected";}?> >SE</option>
                    <option value="SP" <?php if($dados['alu_estado'] == "SP"){ echo "selected";}?> >SP</option>
                    <option value="TO" <?php if($dados['alu_estado'] == "TO"){ echo "selected";}?> >TO</option>
                </select>

                <label> Email </label>
                <input name="alu_email" type="email" class="input_01" value="<?php echo $dados['alu_email']; ?>">

                <label> Telefone </label>
                <input name="alu_telefone" type="text" class="input_01" value="<?php echo $dados['alu_telefone']; ?>">

                <label> Celular </label>
                <input name="alu_celular" type="text" class="input_01" value="<?php echo $dados['alu_celular']; ?>">

                <label> Escolaridade </label>
                <select name="alu_escolaridade" class="select_01">
                    <option value="Ensino Fundamental" <?php if($dados['alu_escolaridade'] == "Ensino Fundamental"){echo "selected"; } ?> >Ensino Fundamental</option>
                    <option value="Ensino Médio" <?php if($dados['alu_escolaridade'] == "Ensino Médio"){echo "selected"; } ?> >Ensino Médio</option>
                    <option value="Ensino Médio + Técnico em Informática" <?php if($dados['alu_escolaridade'] == "Ensino Médio + Técnico em Informática"){echo "selected"; } ?> >Ensino Médio + Técnico em Informática</option>
                </select>
                
                <label> Serie </label>
                <input name="alu_serie" type="text" class="input_01" value="<?php echo $dados['alu_serie']; ?>">

                <label> Ano Conclusão </label>
                <input name="alu_ano_conclusao" type="text" class="input_01" value="<?php echo $dados['alu_ano_conclusao']; ?>">

                <label> Escola </label>
                <input name="alu_escola" type="text" class="input_01" value="<?php echo $dados['alu_escola']; ?>">

                <label> Objetivo </label>
                <input name="alu_objetivo" type="text" class="input_01" value="<?php echo $dados['alu_objetivo']; ?>">

                <input name="btn_eviar" type="submit" class="btn">
            </div>
        </form>
    </body>
</html>