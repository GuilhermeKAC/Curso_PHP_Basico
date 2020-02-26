<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/CrusoEmVideoPHP/_css/estilo.css"/>
        <title>Curso PHP</title>
    </head>
    <body>
        <div>
            <pre>
                <?php

                    $v = array( "nome" => "Ana", "idade" => 23, "peso" => 65.5);

                    foreach($v as $k => $c) {
                        echo "| $k | $c |<br/>";
                    }
                    
                ?>   
            </pre> 
        </div>    
    </body>
</html>