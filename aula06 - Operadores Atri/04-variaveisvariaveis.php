<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/CrusoEmVideoPHP/_css/estilo.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
            <?php
                $x = "abc";
                $$x = "def";
                echo "O conteudo da variavel X e $x";
                echo "<br/>A variavel ABC criada recebeu o valor $abc"
            ?>
        </div>
    </body>
</html>