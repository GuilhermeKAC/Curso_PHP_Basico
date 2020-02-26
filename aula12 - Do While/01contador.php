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
                $c = 1;
                
                do {
                    echo $c." ";
                    $c += 2;
                } while ($c <= 10);
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>           
        </div>    
    </body>
</html>