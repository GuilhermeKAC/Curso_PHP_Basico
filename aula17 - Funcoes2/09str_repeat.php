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

                $txt = str_repeat("PHP ", 5);
                print("O texto gerado foi $txt</br>");
                print(str_repeat("\n-",32));

            ?>    
        </div>    
    </body>
</html>