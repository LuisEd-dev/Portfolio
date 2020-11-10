<?php

require_once("../seguranca.php");
require_once('../conexao/banco.php');
    $sql = "SELECT * FROM tb_aluno";
    $sql = mysqli_query($con, $sql) or die ("Erro no SQL!");

?>

<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title> Consulta News </title>
        <link rel="stylesheet" type="text/css" href="../css/consulta.css">
        <script type="text/javascript">
            function excluir_registro( ) {
            if( !confirm('Deseja realmente excluir este registro?') 
            ){
                if( window.event)
                    window.event.returnValue=false;
            else
                    e.preventDefault();
            }
            }
        </script>

    </head>
    <body>

    <div class="linha">
        <div class="coluna_01"> <strong> ID </strong> </div>
        <div class="coluna_03"> <strong> Nome </strong> </div>
        <div class="coluna_03"> <strong> Email </strong> </div>
        <div class="coluna_02"> <strong> Telefone </strong> </div>
        <div class="coluna_02"> <strong> Celular </strong> </div>
        <div class="coluna_03"> <strong> Objetivo </strong> </div>

    </div>

        <?php
            while ($dados = mysqli_fetch_array($sql)){?>
                <div class="linha">
                    <div class="coluna_01"> <?php echo $dados['alu_codigo']; ?> </div>
                    <div class="coluna_03"> <?php echo $dados['alu_nome']; ?> </div>
                    <div class="coluna_03"> <?php echo $dados['alu_email']; ?> </div>
                    <div class="coluna_02"> <?php echo $dados['alu_telefone']; ?> </div>
                    <div class="coluna_02"> <?php echo $dados['alu_celular']; ?> </div>
                    <div class="coluna_02"> <?php echo $dados['alu_objetivo']; ?> </div>               

                    <div class="coluna_01"> <a href="delete_aluno.php?alu_codigo=<?php echo $dados['alu_codigo']?>" onclick="excluir_registro()"> <img src="../img/excluir.png"> </a> </div>
                    <div class="coluna_01"> <a href="form_atualizar_aluno.php?alu_codigo=<?php echo $dados['alu_codigo']?>"><img src="../img/edit.png"> </a> </div>
                
                </div>
            <?php } ?>
    </body>
</html>