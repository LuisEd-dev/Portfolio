<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');

$id = $_REQUEST['pro_codigo'];

$sql = "select * from tb_projetos where pro_codigo = '$id'";
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
        <form name="frm_news" action="atualizar_projeto.php" method="POST" enctype="multipart/form-data">
            <div id="principal">

                <label> ID </label>
                <input name="pro_codigo" type="text" class="input_01" value="<?php echo $dados['pro_codigo']; ?>">
                
                <label> Descricao </label>
                <input name="pro_descricao" type="text" class="input_01" value="<?php echo $dados['pro_descricao']; ?>">

                <label> Foto </label>
                <input name="pro_foto" type="file" class="input_01">

                <label> Status </label>
                <select name="pro_status" class="select_01">
                    <option value="A" <?php if($dados['pro_status'] == "A"){ echo "selected";}?> > Ativo </option>
                    <option value="I" <?php if($dados['pro_status'] == "I"){ echo "selected";}?> > Inativo </option>
                </select>
            
                <input name="btn_eviar" type="submit" class="btn">
            </div>
        </form>
    </body>
</html>