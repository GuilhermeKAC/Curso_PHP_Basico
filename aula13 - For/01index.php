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

                for ($i = 1; $i <= 10; $i++) {
                    echo "$i ";
                }

                echo "</br>";

                for ($i = 10; $i >= 1; $i--) {
                    echo "$i ";
                }

                echo "</br>";

                for ($i = 0; $i <= 50; $i+=5) {
                    echo "$i ";
                }

                echo "</br>";

                for ($i = 20; $i >= 0; $i-=2) {
                    echo "$i ";
                }
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>           
        </div>    
    </body>
</html>