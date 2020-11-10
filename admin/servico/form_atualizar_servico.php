<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');
$id = $_REQUEST['ser_codigo'];

$sql = "select * from tb_servicos where ser_codigo = '$id'";
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
        <form name="frm_login" action="atualizar_servico.php" method="POST">

            <div id="principal">
                <label> Codigo </label>
                <input name="ser_codigo" type="text" class="input_01" value="<?php echo $dados['ser_codigo']; ?>">

                <label> Titulo </label>
                <input name="ser_titulo" type="text" class="input_01" value="<?php echo $dados['ser_titulo']; ?>">

                <label> Descricao </label>
                <input name="ser_descricao" type="text" class="input_01" value="<?php echo $dados['ser_descricao']; ?>">

                <label> Icone </label>
                <select name="ser_icone" class="select_01">
                    <option value="ion-monitor" <?php if($dados['ser_icone'] == "ion-monitor"){echo "selected";} ?> >Monitor</option>
                    <option value="ion-code-working" <?php if($dados['ser_icone'] == "ion-code-working"){echo "selected";} ?> >Codigo</option>
                    <option value="ion-android-phone-portrait" <?php if($dados['ser_icone'] == "ion-android-phone-portrait"){echo "selected";} ?> >Celular</option>
                    <option value="ion-settings" <?php if($dados['ser_icone'] == "ion-settings"){echo "selected";} ?> >Ferramenta</option>
                </select>

                <input name="btn_eviar" type="submit" class="btn">
            </div>
        </form>
    </body>
</html>