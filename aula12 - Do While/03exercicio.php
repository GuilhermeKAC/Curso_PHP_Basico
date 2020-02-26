<!DOCTYPE html>
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

                $casa = isset($_GET["tabuada"])?$_GET["tabuada"]:0;
                $contador = 1;

                echo "Mostrando a Tabuada do $casa </br>";

                do {
                    $tabuada = $casa * $contador;
                    
                    echo "<p>$casa X $contador = $tabuada </p>";

                    $contador++;

                } while ($contador <= 10);

            ?>
            <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>  
        </div>    
    </body>
</html>