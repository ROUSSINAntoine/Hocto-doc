<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New patient</title>
</head>
    <style>
	    input:invalid {color : red; }
	    input:valid {color : black ; }
    </style>
<body>
    <?php include_once("V/navbar.html"); ?> 
    <form action="index.php" action="GET">
        <input type="text" name="firstname" placeholder="First name"required pattern="[A-z ' - é è ê ç à ï]{2,90}" value='<?php echo $firstname ?>'><br>
        <input type="text" name="lastname" placeholder="Lastame"required pattern="[A-z ' - é è ê ç à ï]{2,90}" value='<?php echo $lastname ?>'><br>
        <input type="text" name="phone_number" placeholder="Phone number"required pattern="[0-9]{10}" value='<?php echo $phone_number ?>'><br>
        <input type="text" name="adrs" placeholder="Address" value='<?php echo $adrs ?>' required><br>
        <input type="text" name="city" placeholder="City" value='<?php echo $city ?>' required><br>
        <input type="text" name="postcode" placeholder="Postcode"requirec pattern="[0-9]{5}" value='<?php echo $postcode ?>'><br>
        <input type="text" name="ssn" placeholder="Social security number"requirec pattern="[0-9]{15}" value='<?php echo $ssn ?>'><br>
        <input type="hidden" name="page" value="add_patient">
        <input type="submit" value="Register">
    </form>
    <a href="index.php?page=account"><button>return</button></a> <br>
</body>
</html>