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
    
    <form name="frm_login" action="cadastro_projeto.php" method="post" enctype="multipart/form-data">
        <div id="principal">
            
            <label> Descricao </label>
            <input name="txt_descricao" type="text" class="input_01">

            <label> Foto </label>
            <input name="txt_arquivo" type="file" class="input_01">

            <label> Status </label>
            <select name="txt_status" class="select_01">
                <option value="A"> Ativo </option>
                <option value="I"> Inativo </option>
            </select>

            <input name="btn_enviar" type="submit" value="Enviar!" class="btn">
        </div>
    </form>

</body>
</html>