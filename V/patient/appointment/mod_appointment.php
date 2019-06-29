<head>
    <meta charset="UTF-8">
    <title>appointement</title>
</head>
<?php $date = date('Y-m-j');?>
<body>
<?php include_once("V/navbar.html"); ?> 
    <form action="index.php" method="GET">
        <select name="patient">
            <?php echo $select; ?>
        </select><br>
        <input type="date" id name="dtrdv" min="<?php echo $date ?>" required></br>
        <input type="hidden" name="page" value="appointment">
        <input type="hidden" name="doc" value="<?php echo $_GET["doc"] ?>">
        <input type="submit" value="go">
    </form>
</body>
</html>