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
        <form action="index.php?page" action="GET">
            <input type="email" name="email" id="mail" placeholder="e-mail"required><br><br>
            <input type="password" name="password" placeholder="password" required><br><br>
            <input type="hidden" name="page" value="login">
            <input type="submit" value="login"><br><br><br>
        </form>
        <a href="index.php?page=register"><button>register</button></a>
    </body>
</html>