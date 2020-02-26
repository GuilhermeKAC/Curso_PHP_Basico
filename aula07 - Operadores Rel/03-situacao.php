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
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $m = ($nota1 + $nota2)/2;

                echo "A media etnre $nota1 e $nota2 e $m <br/>";

                //$sit = ($m < 6)?"Reprovado":"Aprovado";

                echo "A situacao do aluno é ". (($m < 6)?"Reprovado":"Aprovado");
            ?>
        </div>
    </body>
</html>