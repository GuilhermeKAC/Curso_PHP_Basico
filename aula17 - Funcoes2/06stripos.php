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

                $frase = "Estou aprendendo PHP";
                $pos = stripos($frase, "php");
                
                print("Encontrado na posicção $pos");

            ?>    
        </div>    
    </body>
</html>