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
                $inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
                $final = isset($_GET["final"])?$_GET["final"]:0;
                $incremento = isset($_GET["incremento"])?$_GET["incremento"]:0;

                if ($inicio <= $final){
                    while ($inicio <= $final){
                        echo $inicio ."</br>";
                        $inicio += $incremento;
                    }    
                }
                else {
                    while ($inicio >= $final){
                        echo $inicio ."</br>";
                        $inicio -= $incremento;
                    }
                }
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>           
        </div>    
    </body>
</html>