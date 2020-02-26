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
                $preco = $_GET["p"];
                echo "O preco do produto e R$ ". number_format($preco, 2);
                //$preco = $preco + ($preco*10/100);
                $preco += ($preco*10/100);
                echo "<br/>E o novo preco com 10% sera R$ ". number_format($preco, 2);
            ?>
        </div>
    </body>
</html>