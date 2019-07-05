<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Historic</title>
</head>
<body>
<?php include_once("V/navbar.html"); ?> 
    <table border=2>
    <h1><tr><?php echo $first_col ?><th>Date</th><th>Hour</th><th>Observations</th></tr></h1>
        <?php echo $histo ?>
    </table>
    <p></p>
    
    <a href="index.php?page=account"><button>return</button></a>
</body>
</html>