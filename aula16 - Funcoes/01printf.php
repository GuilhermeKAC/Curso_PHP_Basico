<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/CrusoEmVideoPHP/_css/estilo.css"/>
        <title>Curso PHP</title>
    </head>
    <body>
        <div>
            <?php

                $p = "Leite";
                $pr = 4.5;

                printf("O %s custa R$ %.2f", $p, $pr);
            ?>    
        </div>    
    </body>
</html>