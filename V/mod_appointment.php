<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>appointement</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="date" name="dtrdv" required></br>
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