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
        <textarea name="observ" cols="30" rows="10"><?php echo $obs; ?></textarea><br>
        <input type="hidden" name="page" value="observ_modif">
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
        <input type="submit" value="submit">
    </form>
</body>
</html>