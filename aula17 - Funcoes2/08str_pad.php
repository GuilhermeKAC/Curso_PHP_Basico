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

                $nome = "Kruszynski";
                $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
                print("O menino $novo não tem controle de sua vida");

            ?>    
        </div>    
    </body>
</html>