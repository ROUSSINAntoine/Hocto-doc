<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>appointement</title>
</head>
<?php

$date = date('Y-m-j');?>
<body>
<?php include_once("V/navbar.html"); ?> 
    <form action="index.php" method="GET">
        <input type="date" name="dtrdv" min="2019-06-17" required onchange="date(this)"></br>
        <select name="patient">
                <?php echo $select; ?>
        </select><br>
        <select name="hours">
                <?php echo $select_hours; ?>
        </select>         
        <select name="minutes">
                <?php echo $select_minutes; ?>
        </select>
        <input type="hidden" name="page" value="appointment">
        <input type="hidden" name="doc" value="<?php echo $_GET["doc"]; ?>">
        <input type="submit" value="go">
    </form>
</body>
</html>