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
                $c = 10;
                
                do {
                    echo $c." ";
                    $c--;
                } while ($c >= 1);
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>           
        </div>    
    </body>
</html>