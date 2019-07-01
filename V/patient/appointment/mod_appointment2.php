<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>appointement</title>
</head>
<body>
<?php include_once("V/navbar.html"); ?> 
    <form action="index.php" method="GET">
        <select name="hours" <?php echo $dis["hour"] ?>>
                <?php echo $select_hour ?>
        </select>         
        <input type="hidden" name="patient" value="<?php echo $_GET["patient"] ?>">
        <input type="hidden" name="date" value="<?php echo $_GET["dtrdv"] ?>">
        <input type="hidden" name="page" value="appointment2">
        <input type="hidden" name="doc" value="<?php echo $_GET["doc"] ?>">
        <input type="submit" value="go">
    </form>
    <a href="index.php?page=appointment&doc=<?php echo $_GET["doc"] ?>"><button>return</button></a>
</body>
</html>