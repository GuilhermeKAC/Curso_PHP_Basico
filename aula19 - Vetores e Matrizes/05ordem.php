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
                    print_r($v);
                    //sort($v);
                    rsort($v);
                    print_r($v);

                    $n = array(3, 5, 8, 2, 12);
                    print_r($v);
                    asort($n);
                    print_r($n);

                ?>      
            </pre>          
        </div>    
    </body>
</html>