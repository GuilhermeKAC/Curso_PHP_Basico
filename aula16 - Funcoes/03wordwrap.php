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

                $t = "Bloodborne recebeu aclamação critica aquando do seu lançamento. Nos sites de pontuações agregadas GameRankings e Metacritic tem as médias de 91,62% e 93/100, respectivamente. A atmosfera, o enredo, a música, a apresentação, a jogabilidade e a direção em geral, foram elogiadas. Uma das principais criticas foram dirigidas aos tempos de carregamento muito longos. No entanto, em 23 de abril de 2015, a From Software disponibilizou uma atualização que resolveu o problema.";
                $r = wordwrap($t, 5, "<br/>\n", true);
                
                echo $r;
            ?>    
        </div>    
    </body>
</html>