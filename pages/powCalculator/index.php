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

    <form action="process.php" method="post">
        <p>
            Digite o número da base:
            <input type="text" name="base">
        </p>
        <p>
            Digite o número do expoente:
            <input type="text" name="expo">
        </p>
        <p>
            <input type="submit" value="Calcular">
        </p>

        <a href="../../pages/selectAction/index.php">
            <button id="button">Voltar</button>
        </a>
    </form>
</body>
</html>