<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>search</title>
</head>
<body>
    <form action="index.php"  method="get">
        <input type="text" name="srch">
        <input type="hidden" name="page" value="result">
        <input type="hidden" name="type" value="<?php echo $type ?>">
        <input type="submit" value="confirm">
    </form>
</body>
</html>