<?php
    session_start();
    $_SESSION["user"] = $_POST["user"];

    echo "Seja Bem-vindo ".$_SESSION["user"]."<br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Contador de números!</p>
    <a href="../numbersCount/index.php"><button>Avançar</button></a><hr>

    <p>Reprodutor de vídeos do YouTube!</p>
    <a href="../youtubeEmbedPlayer/index.php"><button>Avançar</button></a><hr>

    <p>Calculadora de potência!</p>
    <a href="../powCalculator/index.php"><button>Avançar</button></a><hr>

    <br><br>
    <a href="../../index.php">
        <button id="button">Encerrar</button>
    </a>
</body>
</html>