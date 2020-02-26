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
                $a = isset($_GET["ano"])?$_GET["ano"]:1900;
                $i = date("Y") - $a;

                echo "Voce nasceu em $a e tera $i anos<br/>";

                if ($i < 16){
                    $tipoVoto = "nao vota";
                }
                elseif (($i >= 16 && $i < 18) || ($i > 65)){
                    $tipoVoto = "voto opcional";
                }
                else{
                    $tipoVoto = "voto obrigatorio";
                }              

                echo "Para essa idade, $tipoVoto";
                
            ?>
        </div>    
    </body>
</html>

