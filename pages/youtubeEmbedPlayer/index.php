

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <link rel="stylesheet" href="style.scss">

    <title>Youtube Player</title>
</head>
<body>

    <section class="hero is-primary is-fullheight is-bold">
        <div class="hero-body container has-text-centered form-player">
            <form action="" method="POST">
                <?php
                    session_start();

                    echo "<label for='link' class='label'>".$_SESSION["user"].", insert a Youtube URL</label>";
                ?>
                
                <input type="url" name="linkValue" id="link" class="input" placeholder="URL: https://www.example.com">

                <input type="submit" value="Play" class="button is-danger">

            </form>


            <div class="playerField">
            <?php
    
                if (isset($_POST['linkValue'])) {
                    
                    $url = $_POST['linkValue'];

                    require_once "../../functions/autenticateURL.php";

                    echo autenticateURL($url);

                }
            
            
            ?>
            </div>

        </div>
    </section>

    
    
</body>
</html>