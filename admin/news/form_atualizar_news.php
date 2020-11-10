<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');
$id = $_REQUEST['new_codigo'];

$sql = "select * from tb_news where new_codigo = '$id'";
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
        <form name="frm_news" action="atualizar_news.php" method="POST">

            <div id="principal">
                <label> Codigo </label>
                <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['new_codigo']; ?>">

                <label> Titulo </label>
                <input name="txt_titulo" type="text" class="input_01" value="<?php echo $dados['new_titulo']; ?>">

                <label> Descricao </label>
                <input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['new_descricao']; ?>">

                <label> Autor </label>
                <input name="txt_autor" type="text" class="input_01" value="<?php echo $dados['new_autor']; ?>">

                <label> Status </label>
                
                <select name="sel_status" class="select_01">
                    <option value="A" <?php if($dados['new_status'] == 'A'){ echo 'selected';} ?>>Ativo</option>
                    <option value="I" <?php if($dados['new_status'] == 'I'){ echo 'selected';} ?>>Inativo</option>
                </select>

                <input name="btn_eviar" type="submit" class="btn">
            </div>
        </form>
    </body>
</html>