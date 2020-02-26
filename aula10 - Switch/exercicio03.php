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
                $regiao = isset($_GET["estado"])?$_GET["estado"]:0;

                switch ($regiao) {
                    case "norte":
                        $estado = "Região Norte";
                        echo "Voce mora na $estado";
                    break;
                    case "nordeste":
                        $estado = "Região Nordeste";
                        echo "Voce mora na $estado";
                    break;
                    case "oeste":
                        $estado = "Região Centro-Oeste";
                        echo "Voce mora na $estado";
                    break;
                    case "sudeste":
                        $estado = "Região Sudeste";
                        echo "Voce mora na $estado";
                    break;
                    case "sul":
                        $estado = "Região Sul";
                        echo "Voce mora na $estado";
                    break;
                    default:
                    echo "Nenhuma região selecionada";
                }
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>           
        </div>    
    </body>
</html>