<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Account</title>
    </head>
    <body>
    <?php include_once("V/navbar.html"); ?> 
        <h1>Your account</h1><p></p>
        
        </form>
        <form action="index.php" method="GET">
            <select name="id">
                <?php echo $select ?>
            </select>
            <input type="hidden" name="page" value="modif_account">
            <input type="submit" name="modif" value="Change user data" <?php echo $dis ?>>
            <input type="submit" name="del" value="Delete patient" <?php echo $dis ?>>
        </form>
        <a href="index.php?page=add_patient"><button>add patient</button></a></p>
        <a href="index.php?page=popup_delete_account"><button>delete account</button></a>
        <a href="index.php?page=histo"><button>appointement historic</button></a></p>


    </body>
</html>