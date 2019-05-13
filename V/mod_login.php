<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1><p></p>
        <?php 
        if(isset($_GET['erreur'])) {
            if($_GET['erreur'] == 'email') {
                echo "Nom d'utilisateur ou mot de passe incorrect";
            }
        }
        ?>
        <form action="index.php" action="GET">
            <input type="text" name="email" placeholder="email"><br>
            <input type="text" name="password" placeholder="password"><br>
            <input type="hidden" name="page" value="login">
            <input type="submit" value="connection">
        </form>
    </body>
</html>