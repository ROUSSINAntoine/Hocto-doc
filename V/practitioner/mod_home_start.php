<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New practitioner</title>
</head>
    <style>
	    input:invalid {color : red; }
	    input:valid {color : black ; }
    </style>
<body>
    <?php include_once("V/navbar.html"); ?> 
    <form action="index.php" action="GET">
        <input type="text" name="firstname" placeholder="First name"required pattern="[A-z ' - é è ê ç à ï]{2,90}"><br>
        <input type="text" name="lastname" placeholder="Lastame"required pattern="[A-z ' - é è ê ç à ï]{2,90}"><br>
        <input type="text" name="phone_number" placeholder="Phone number"required pattern="[0-9]{10}"><br>
        <input type="text" name="adrs" placeholder="Address" required><br>
        <input type="text" name="city" placeholder="City" required><br>
        <input type="text" name="postcode" placeholder="Postcode"required pattern="[0-9]{5}"><br>
        <input type="text" name="ssn" placeholder="Social security number"required pattern="[0-9]{15}"><br>
        <input type="hidden" name="page" value="home">
        <input type="submit" value="Register">
    </form>
</body>
</html>