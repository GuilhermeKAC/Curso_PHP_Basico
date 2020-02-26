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

                    $v = array("A","J", "M", "X", "K");
                    $tot = count($v);
                    echo "O vetor tem $tot elementos <br/>";
                    print_r($v);
                    //var_dump($v);

                ?>      
            </pre>          
        </div>    
    </body>
</html>