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

                    $v = array( 3=>5,
                                1=>9,
                                0=>8,
                                7=>7);
                    unset($v[0]);
                    print_r($v);
                    

                ?>   
            </pre> 
        </div>    
    </body>
</html>