<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/CrusoEmVideoPHP/_css/estilo.css"/>
        <title>Document</title>
    </head>
    <body>
        <div>
            <?php
                $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
                $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
                $media = ($nota1 + $nota2)/2;
                
                echo "A media entre $nota1 e $nota2 é igual a $media";

                if ($media < 5) {
                    $resultado = "Reprovado";
                }
                elseif ($media = 5 && $media < 7){
                    $resultado = "Recuperação";
                }
                else {
                    $resultado = "Aprovado";
                }

                echo "<br/> Situação do Aluno: $resultado";
            ?>
            <a href="exercicio03.html">Voltar</a>
        </div>    
    </body>
</html>