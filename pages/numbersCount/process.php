<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>

    <section class= "hero is-link is-fullheight has-text-centered">

        <h1 class= "title hero-body">Vamos Contar:</h1>


        <div id="answer" class="hero-body container has-text-centered">
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
            <button id="button" class="button">Voltar</button>
        </a>
        <br>
        <br>
        <br>

    </section>
</body>
</html>