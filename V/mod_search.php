<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>search</title>
</head>
<body>
    <?php
        if ($_GET["type"] === "str") {
            $srch = "";
        } else {
            $srch ="";
        }
    ?>

    <form action=<?php echo "$srch"; ?>  method="get">
        <input type="text" name="srch">
        <input type="hidden" name="page" value="result">
        <input type="submit" value="go">
    </form>
</body>
</html>