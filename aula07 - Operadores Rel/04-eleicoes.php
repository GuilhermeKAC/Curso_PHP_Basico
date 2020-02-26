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
                $ano = $_GET["an"];
                $idade = 2020 - $ano;
                
                echo "quem nasceu em $ano tem idade de $idade anos";

                $tipo = ($idade>= 18 && $idade<65)?"Obrigatorio":"Nao Obrigatorio";

                echo "<br/>E dessa forma o voto e $tipo";
            ?>
        </div>
    </body>
</html>