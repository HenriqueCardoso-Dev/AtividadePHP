<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="index-page.scss">

    <title>Watch & Count</title>
</head>
<body>
    <section class=" hero has-text-centered is-primary is-bold is-fullheight">

        <div class="hero-body container">
            <form action="" method="POST">

                <h1 class="title">Watch & Count</h1>

                <h2 class="subtitle">Welcome to our world</h2>
                
                <label for="username" class="label">Username:</label>
                <input type="text" name="user" id="username" class="input">
            
                <label for="pass" class="label">Password:</label>
                <input type="password" name="pass" id="pass" class="input">
                <br>
                <input type="submit" value="Connect" class="button is-link">

            </form>
        </div>
        
    </section>

    <footer class="footer">
        <small>
            <p class="has-text-centered">
                <strong>H&K Tech</strong> - all rights reserved &copy;
            </p>
        </small>
    </footer>

    <?php


        if (isset($_POST['pass'])) {

            $username = $_POST['user'];
            $password = $_POST['pass'];

            if ($username == 'userTest' && $password == '123') {
                /* echo "LOGADO"; */
                header('Location: pages/selectAction/index.php');
            } else {
                /* echo 'invalido'; */
            }

        }
    

    ?>
   
</body>
</html>