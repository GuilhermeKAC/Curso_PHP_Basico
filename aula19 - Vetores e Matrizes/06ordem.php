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

                    $v = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");
                    print_r($v);
                    //ksort($v);
                    krsort($v);
                    print_r($v);

                ?>      
            </pre>          
        </div>    
    </body>
</html>