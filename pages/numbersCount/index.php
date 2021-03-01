<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Super Contador</title>
</head>
<body>

    <header>
    <?php
        session_start();
        echo "<h1>Vamos Contar, ".$_SESSION["user"]."!</h1>";
    ?>
    </header>

    <section id="content">

        <form method="post" action="process.php">
            <label for="txtIni">Início:</label><br>
            <input type="number" name="txtIni" id="txtIni" required>
            <br>
            <label for="txtEnd">Fim:</label><br>
            <input type="number" name="txtEnd" id="txtEnd" required>
            <br>
            <label for="txtP">Passo:</label><br>
            <input type="number" name="txtP" id="txtP" required>
            <br><br>
            <input id="button" type="submit" value="Contar">
        </form>
        
            <br><br>
            <a href="../selectAction/index.php">
                <button id="button">Voltar</button>
            </a>
    </section>
</body>
</html>