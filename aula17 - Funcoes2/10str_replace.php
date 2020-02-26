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

                $frase = "Gosto de estudar Matemática! Matemática é muito legal";
                /*$novaFrase = str_replace("Matemática", "PHP", $frase);
                echo "$novaFrase";*/
                $novaFrase = str_ireplace("matemática", "PHP", $frase);
                echo "$novaFrase";


            ?>    
        </div>    
    </body>
</html>