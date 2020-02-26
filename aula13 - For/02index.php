<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/CrusoEmVideoPHP/_css/estilo.css"/>
        <title>Curso PHP</title>
    </head>
    <body>
        <div>
            <form method="get" action="02tabuada.php">
                <select name="num">
                    <?php
                        for ($c = 1; $c <= 10; $c++){
                            echo "<option>$c</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Tabuada"/>
            </form> 
        </div>    
    </body>
</html>