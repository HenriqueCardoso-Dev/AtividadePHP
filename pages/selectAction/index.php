

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="style.scss"/>

    <title>Document</title>
</head>
<body>
    <section class="hero is-large is-primary is-bold content">
        <div class="hero-body container has-text-centered">

            <div class="greetings">
                <?php
                    session_start();
                    $_SESSION["user"] = $_POST["user"];

                    echo "<h1 class='title'>Seja Bem-vindo ".$_SESSION["user"]."</h1>";
                ?>
            </div>
            

            <div class="routes">
                <a href="../numbersCount/index.php">
                    <img src="../../assets/img/count.png"/>
                    <p>Numbers Count</p>
                </a>

                <a href="../youtubeEmbedPlayer/index.php">
                    <img src="../../assets/img/youtube-squared.png"/>
                    <p>Youtube Player</p>
                </a>

                <a href="../powCalculator/index.php">
                    <img src="../../assets/img/expo.png"/>
                    <p>Power Calculator</p>
                </a>
            </div>

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