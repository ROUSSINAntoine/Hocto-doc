<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change appointment</title>
</head>
<body>
    <?php include_once("V/navbar.html"); ?><br>
    <form action="index.php" method="GET">
        <select name="patient">
            <?php echo $select; ?>
        </select><br><br>
        <input type="hidden" name="page" value="change_member_rdv">
        <input type="submit" name="change_rdv" value="change patient for appointment">
    </form>
    <br>
    <p></p><a href="index.php?page=modif_rdv"><button>return</button></a>
</body>
</html>