<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Register</title>
    </head>
    <body>
        <h1>Create your account</h1><p></p>
        <form action="index.php" action="GET">
            <input type="text" name="email" placeholder="e-mail"><br>
            <input type="password" name="pass" placeholder="password"><br>
            <input type="password" name="conf" placeholder="password"><br>
            
            <input type="hidden" name="page" value="register">
            <input type="submit" name="submit" value="Register">
        </form>
        <a href="index.php"><button>return</button></a>
    </body>
</html>