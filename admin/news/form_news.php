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
    
    <form name="frm_login" action="cadastro_news.php" method="POST">
        <div id="principal">
            <label> Título </label>
            <input name="txt_titulo" type="text" class="input_01">

            <label> Descrição </label>
            <input name="txt_descricao" type="text" class="input_01">

            <label> Autor </label>
            <input name="txt_autor" type="text" class="input_01">

            <label> Status </label>

            <select name="sel_status" class="select_01">
                <option value="A">Ativo</option>
                <option value="I">Inativo</option>
            </select>

            <input name="btn_enviar" type="submit" value="Enviar!" class="btn">
        </div>
    </form>

</body>
</html>