<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Account</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="email" value="<?php echo $data['email']?>"><br>
        <input type="text" name="psw" value="<?php echo $data['psw']?>"><br>
        <input type="hidden" name="page" value="modif_account">
        <input type="hidden" name="emails" value="<?php echo $data['email']?>">
        <input type="submit" value="valider">
    </form>
    <a href="index.php?page=account">back</a>
</body>
</html>