<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Account</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="email" value="<?php echo $donnees['email']?>"><br>
        <input type="text" name="modif_psw" value="<?php echo $donnees['psw']?>"><br>
        <input type="hidden" name="page" value="modif_account">
        <input type="submit" value="valider">
    </form>
</body>
</html>