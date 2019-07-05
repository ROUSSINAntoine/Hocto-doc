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
        <h5><input type="text" name="firstname" placeholder="First name"require pattern="[A-z ' - é è ê ç à ï]{2,90}" value='<?php echo $firstname ?>'><br>
        <input type="text" name="lastname" placeholder="Lastame"require pattern="[A-z ' - é è ê ç à ï]{2,90}" value='<?php echo $lastname ?>'><br>
        <input type="text" name="phone_number" placeholder="Phone number"require pattern="[0-9]{10}" value='<?php echo $phone_number ?>'><br>
        <input type="text" name="adrs" placeholder="Address" value='<?php echo $adrs ?>'><br>
        <input type="text" name="city" placeholder="City" value='<?php echo $city ?>'><br>
        <input type="text" name="postcode" placeholder="Postcode"require pattern="[0-9]{5}" value='<?php echo $postcode ?>'><br>
        <input type="text" name="ssn" placeholder="Social security number"require pattern="[0-9]{15}" value='<?php echo $ssn ?>'><br>
        <input type="hidden" name="page" value="add_patient"></h5>
        <input type="submit" value="Register">
    </form>
    <a href="index.php?page=account"><button>return</button></a> <br>
</body>
</html>