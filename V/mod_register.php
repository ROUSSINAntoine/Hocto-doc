<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Register</title>
        <style>
            input:invalid {color : red; }
            input:valid {color : black ; }
        </style>
    </head>
    <body>
        <h1>Create your account</h1><p></p>
        <form action="index.php" action="GET">
            <input type="email" name="email" id="mail" pattern="[A-z0-9._%+-]+@[a-z0-9.-]+[.][a-z]{2,3}$" placeholder="e-mail" /><br>
            <input type="password" name="pass" minlength='4' maxlength='50' placeholder="password"><br>
            <input type="password" name="conf" minlength='4' maxlength='50' placeholder="password"><br>
            <input type="checkbox" name="prac" value="prac">practitioner account<br>
            
            <input type="hidden" name="page" value="register">
            <input type="submit" name="submit" value="Register">
        </form>
        <a href="index.php"><button>return</button></a>
    </body>
</html>