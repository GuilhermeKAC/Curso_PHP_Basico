<!DOCTYPE html>
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
                $n = isset($_GET["num"])?$_GET["num"]:0;
                $o = isset($_GET["oper"])?$_GET["oper"]:1;

                switch ($o) {
                    case 1:
                        $r = $n * 2;
                    break;
                    case 2:
                        $r = pow($n,3);
                    break;
                    case 3:
                        $r = sqrt($n);
                    break;
                }
                
                echo "O resultado da operacao solicitada foi $r";
            ?>

            <a href="exercicio01.html">Voltar</a>           
        </div>    
    </body>
</html>