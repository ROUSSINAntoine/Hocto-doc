<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Account</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="emails" value="<?php echo $data['email']?>"><br>
        <input type="text" name="psw" value="<?php echo $data['psw']?>"><br>
        <input type="text" name="firstname" value="<?php echo $data['firstname']?>"><br>
        <input type="text" name="lastname" value="<?php echo $data['lastname']?>"><br>
        <input type="text" name="phone" value="<?php echo $data['phone_number']?>"><br>
        <input type="text" name="adrs" value="<?php echo $data['adrs']?>"><br>
        <input type="text" name="city" value="<?php echo $data['city']?>"><br>
        <input type="text" name="postcode" value="<?php echo $data['postcode']?>"><br>
        <input type="text" name="ssn" required minlength="16" maxlength="16" value="<?php echo $data['ssn']?>"><br>
        <input type="hidden" name="page" value="modif_account">
        <input type="hidden" name="email" value="<?php echo $data['email']?>">
        <input type="hidden" name="id" value="<?php echo $data['id']?>">
        <input type="submit" value="confirm">
    </form>
    <a href="index.php?page=account"><button>return</button></a>
</body>
</html>