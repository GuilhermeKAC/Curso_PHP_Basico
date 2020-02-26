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
                $a = 3;
                $b = "3";
                //$r = ($a == $b)?"SIM":"NÃO";
                $r = ($a === $b)?"SIM":"NÃO";

                echo "As variaveis A e B sao iguais? Resposta: $r";

            ?>
        </div>
    </body>
</html>