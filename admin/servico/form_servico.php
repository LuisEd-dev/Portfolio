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
    
    <form name="frm_login" action="cadastro_servico.php" method="POST">
        <div id="principal">
            <label> Titulo </label>
            <input name="ser_titulo" type="text" class="input_01">

            <label> Descricao </label>
            <input name="ser_descricao" type="text" class="input_01">

            <label> Icone </label>
            <select name="ser_icone" class="select_01">
                <option value="ion-monitor">Monitor</option>
                <option value="ion-code-working">Codigo</option>
                <option value="ion-android-phone-portrait">Celular</option>
                <option value="ion-settings">Ferramenta</option>
            </select>

            <input name="btn_enviar" type="submit" value="Enviar!" class="btn">
        </div>
    </form>

</body>
</html>