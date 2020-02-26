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
                $n = isset($_GET["num"])?$_GET["num"]:1;

                for ($c = 1; $c <= 10; $c++){
                    $r = $n * $c;
                    echo "$n x $c = $r </br>";
                }

            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>           
        </div>    
    </body>
</html>