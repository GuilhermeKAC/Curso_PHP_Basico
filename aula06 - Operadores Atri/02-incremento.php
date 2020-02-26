<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/CrusoEmVideoPHP/_css/estilo.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
            <?php
                /* Esse exercicio pretende demonstrar o uso 
                de operadores de incremento e decremento */ 
                $atual = $_GET["aa"]; //Essa linha vai pegar o ano na URL
                echo "O ano atual e $atual e o ano anterior e ". --$atual;
            ?>
        </div>
    </body>
</html>