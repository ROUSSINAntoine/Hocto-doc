<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Account</title>
    </head>
    <body>
        <h1>Your account</h1><p></p>
        
        </form>
        <a href="index.php?">add member</a><br>
        <a href="index.php?">calendar</a><br>
        <form action="index.php" method="GET">
            <select name="member">
                <?php echo $select ?>
            </select>
            <input type="hidden" name="page" value="modif_account">
            <input type="submit" value="Change user data">
        </form>
        <a href="index.php?page=add_patient">add patient</a></p>
        <a href="index.php?page=login"><button>return</button></a>
    </body>
</html>