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
    <?php
        session_start();
        echo "<h1>Vamos Contar, ".$_SESSION["user"]."!</h1>";
    ?>
    </header>

    <section>

        <p>Contagem:</p>

        <div id="answer">
            <?php
                $txtIni = $_POST["txtIni"];
                $txtEnd = $_POST["txtEnd"];
                $txtP = $_POST["txtP"];
                $count = $txtIni;

                require_once "../../functions/countReturn.php";
                echo countReturn($txtIni,$txtEnd,$txtP,$count);
            ?>
        </div>

        <a href="index.php">
            <button id="button">Voltar</button>
        </a>

    </section>
</body>
</html>