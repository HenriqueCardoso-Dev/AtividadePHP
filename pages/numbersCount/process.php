<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylephp.css">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>Vamos Contar</h1>
    </header>

    <section>

        <p>Contagem:</p>

        <div id="answer">
            <?php

                $txtIni = $_POST["txtIni"];
                $txtEnd = $_POST["txtEnd"];
                $txtP = $_POST["txtP"];
                $count = $txtIni;

                if ($txtIni < $txtEnd) {
                    
                    //contagem crescente:
                    while ($count <= $txtEnd) {
                        echo "$count \u{1F449}";
                        $count += $txtP;
                    }
                    
                } else if ($txtIni > $txtEnd) {

                    //contagem regressiva:
                    while ($count >= $txtEnd) {
                        echo "$count \u{1F449}";
                        $count -= $txtP;
                    }

                } 
                echo "\u{1F3C1}";

            ?>
        </div>

        <a href="index.php">
            <button id="button">Voltar</button>
        </a>

    </section>
</body>
</html>