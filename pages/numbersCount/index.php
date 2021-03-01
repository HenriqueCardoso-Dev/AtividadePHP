<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Super Contador</title>
</head>
<body>

    <section id="content" class="hero is-primary is-medium">

        <div class="hero-body container has-text-centered">

            <header>
                <?php
                    session_start();
                    echo "<h1 class='title'>Vamos Contar, ".$_SESSION["user"]."!</h1>";
                ?>
            </header>
            <br><br>
            <form method="post" action="process.php">
                <label for="txtIni">Início:</label><br>
                <input type="number" name="txtIni" id="txtIni" class="input" required>
                <br>
                <label for="txtEnd">Fim:</label><br>
                <input type="number" name="txtEnd" id="txtEnd" class="input" required>
                <br>
                <label for="txtP">Passo:</label><br>
                <input type="number" name="txtP" id="txtP" class="input" required>
                <br><br>
                <input id="button" type="submit" value="Contar" class="button is-link">
            </form>
            
                <br><br>
                <a href="../selectAction/index.php">
                    <strong>Voltar</strong>
                </a>
        </div>

        
    </section>

    <footer class="footer">
        <small>
            <p class="has-text-centered">
                <strong>H&K Tech</strong> - all rights reserved &copy;
            </p>
        </small>
    </footer>
</body>
</html>