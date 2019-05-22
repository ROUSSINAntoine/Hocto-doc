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
        <input type="date"  name="dtrdv" min="<?= $date;?>" required></br>
        <input type="time" name="hrdv" required><br>          
        <select name="patient">
                <?php echo $select ?>
        </select>
        <input type="hidden" name="page" value="appointment">
        <input type="hidden" name="doc" value="<?php echo $_GET["doc"] ?>">
        <input type="submit" value="go">
    </form>
    <a href="index.php?page=login"><button>return</button></a>
</body>
</html>