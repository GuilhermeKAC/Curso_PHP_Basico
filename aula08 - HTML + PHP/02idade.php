<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/CrusoEmVideoPHP/_css/estilo.css"/>
        <title>Document</title>
    </head>
    <body>
        <div>
            <?php
                $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
                $ano = isset($_GET["ano"])?$_GET["ano"]:0;
                $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[nao informado]";
                
                $idade = date("Y") - $ano;

                echo "$nome do sexo $sexo tem $idade anos";
            ?>
            <a href="02exercicio.html">Voltar</a>
        </div>    
    </body>
</html>