<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New patient</title>
</head>
<body>
    <form action="index.php" action="GET">
        <input type="text" name="firstname" placeholder="First name" value='<?php echo $firstname ?>'><br>
        <input type="text" name="lastname" placeholder="Lastame" value='<?php echo $lastname ?>'><br>
        <input type="text" name="phone_number" placeholder="Phone number" value='<?php echo $phone_number ?>'><br>
        <input type="text" name="adrs" placeholder="Address" value='<?php echo $adrs ?>'><br>
        <input type="text" name="city" placeholder="City" value='<?php echo $city ?>'><br>
        <input type="text" name="postcode" placeholder="Postcode" value='<?php echo $postcode ?>'><br>
        <input type="text" name="ssn" placeholder="Social security number" value='<?php echo $ssn ?>'><br>
        <input type="hidden" name="page" value="add_patient">
        <input type="submit" value="Register">
    </form>
    <a href="index.php?page=account"><button>return</button></a> <br>
</body>
</html>