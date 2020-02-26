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
                $v = isset ($_GET["val"])?$_GET["val"]:1;

                echo "<h1>Calculando o Fatorial de $v</h1>";

                $c = $v;
                $fat = 1;

                do {
                    $fat = $fat * $c;
                    $c--;
                } while ($c >= 1);

                echo "<h2> $v! = $fat</h2>"
            ?>
            <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>  
        </div>    
    </body>
</html>