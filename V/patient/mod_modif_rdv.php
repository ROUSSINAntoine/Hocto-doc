<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change your appointment or cancel</title>
</head>
<body>
<?php include_once("V/navbar.html"); ?> 
<table border=2>
        <h5><tr><th style="border-left-color: white;"><h5>Patient</h5></th><th><h5>Date</h5></th><th><h5>Hour</h5></th><th><h5>Observations</h5></th><th><h5>Practitioner</h5></th><th><h5>Cancel</h5></th><th><h5>Change appointment</h5></th></tr>
        <h5><?php echo $rdv ?></h5>
    </table>

    <p></p><a href="index.php?page=login"><button>return</button></a>

</body>
</html>