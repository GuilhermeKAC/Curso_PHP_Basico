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

                $frase = "Eu vou estudar PHP agora";
                //$cont = str_word_count($frase, 0);
                //$cont = str_word_count($frase, 1);
                $cont = str_word_count($frase, 2);
                print_r($cont);
            ?>    
        </div>    
    </body>
</html>