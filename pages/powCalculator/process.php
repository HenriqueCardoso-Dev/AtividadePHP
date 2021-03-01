<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            session_start();
            echo "<h1>Vamos Calcular, ".$_SESSION["user"]."!</h1>";
        ?>
    </header>
    <section>
        <?php
                $base = $_POST["base"];
                $expo = $_POST["expo"];

                require_once "../../functions/powReturn.php";
                echo powReturn($base,$expo);
        ?>

        <a href="index.php">
            <button id="button">Voltar</button>
        </a>
    </section>
</body>
</html>