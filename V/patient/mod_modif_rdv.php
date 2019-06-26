<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change your rdv or cancel</title>
</head>
<body>
<?php include_once("V/navbar.html"); ?> 
<table border=2>
        <tr><th>Patient</th><th>Date</th><th>Hour</th><th>Observations</th><th>Practitioner</th><th>Cancel</th><th>Change rdv</th></tr>
        <?php echo $rdv ?>
    </table>

    <p></p><a href="index.php?page=login"><button>return</button></a>

</body>
</html>