<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>appointement</title>
</head>
<?php

$date = date('Y-m-j');?>
<body>
    <form action="index.php" method="GET">
<<<<<<< HEAD
        <input type="date" name="dtrdv" required></br>
=======
        <input type="date"  name="dtrdv" min="<?= $date;?>" required></br>
        <input type="time" name="hrdv" required><br>          
>>>>>>> f476c5b3e261b949b27fe91a991ce919ac25ee16
        <select name="patient">
                <?php echo $select ?>
        </select><br>
        <select name="hours">
                <?php echo $select_hours ?>
        </select>         
        <select name="minutes">
                <?php echo $select_minutes ?>
        </select>
        <input type="hidden" name="page" value="appointment">
        <input type="hidden" name="doc" value="<?php echo $_GET["doc"] ?>">
        <input type="submit" value="go">
    </form>
    <p></p><a href="index.php?page=login"><button>return</button></a>
</body>
</html>