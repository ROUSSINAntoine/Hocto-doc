<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Account</title>
    <style>
            input:invalid {color : red; }
            input:valid {color : black ; }
    </style>
</head>
<body>
    <?php include_once("V/navbar.html"); ?> 
    <form action="index.php" method="GET">
        <input type="text" name="emails" required pattern="[A-z0-9._%+-]+@[a-z0-9.-]+[.][a-z]{2,3}$" value="<?php echo $data['email']?>"><br>
        <input type="text" name="psw" required minlength='4' maxlength='50' value="<?php echo $data['psw']?>"><br>
        <input type="text" name="firstname"required pattern="[A-z ' - é è ê ç à ï]{2,90}" value="<?php echo $data['firstname']?>"><br>
        <input type="text" name="lastname"required pattern="[A-z ' - é è ê ç à ï]{2,90}" value="<?php echo $data['lastname']?>"><br>
        <input type="text" name="phone"required pattern="[0-9]{10}"  value="<?php echo $data['phone_number']?>"><br>
        <input type="text" name="adrs" required value="<?php echo $data['adrs']?>"><br>
        <input type="text" name="city" required value="<?php echo $data['city']?>"><br>
        <input type="text" name="postcode"required pattern="[0-9]{5}" value="<?php echo $data['postcode']?>"><br>
        <input type="text" name="ssn"required pattern="[0-9]{15}" value="<?php echo $data['ssn']?>"><br>
        <input type="hidden" name="page" value="modif_account">
        <input type="hidden" name="modif" value="modif">
        <input type="hidden" name="email" value="<?php echo $data['email']?>">
        <input type="hidden" name="id" value="<?php echo $data['id']?>">
        <input type="submit" value="confirm">
    </form>
    <a href="index.php?page=account"><button>return</button></a>

</body>
</html>