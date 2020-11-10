<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');
$id = $_REQUEST['ski_codigo'];

$sql = "select * from tb_skill where ski_codigo = '$id'";
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
        <form name="frm_login" action="atualizar_skill.php" method="POST">

            <div id="principal">
                <label> Codigo </label>
                <input name="ski_codigo" type="text" class="input_01" value="<?php echo $dados['ski_codigo']; ?>">

                <label> Habilidade </label>
                <input name="ski_descricao" type="text" class="input_01" value="<?php echo $dados['ski_descricao']; ?>">

                <label> Porcentagem </label>
                <select name="ski_porcentagem" class="select_01"> 
                    <option value="10" <?php if($dados['ski_porcentagem'] == "10"){ echo "selected";} ?>>10%</option>
                    <option value="20" <?php if($dados['ski_porcentagem'] == "20"){ echo "selected";} ?>>20%</option>
                    <option value="30" <?php if($dados['ski_porcentagem'] == "30"){ echo "selected";} ?>>30%</option>
                    <option value="40" <?php if($dados['ski_porcentagem'] == "40"){ echo "selected";} ?>>40%</option>
                    <option value="50" <?php if($dados['ski_porcentagem'] == "50"){ echo "selected";} ?>>50%</option>
                    <option value="60" <?php if($dados['ski_porcentagem'] == "60"){ echo "selected";} ?>>60%</option>
                    <option value="70" <?php if($dados['ski_porcentagem'] == "70"){ echo "selected";} ?>>70%</option>
                    <option value="80" <?php if($dados['ski_porcentagem'] == "80"){ echo "selected";} ?>>80%</option>
                    <option value="90" <?php if($dados['ski_porcentagem'] == "90"){ echo "selected";} ?>>90%</option>
                    <option value="100" <?php if($dados['ski_porcentagem'] == "100"){ echo "selected";} ?>>100%</option>
                </select>

                <input name="btn_eviar" type="submit" class="btn">
            </div>
        </form>
    </body>
</html>