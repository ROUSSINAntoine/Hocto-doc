<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Account</title>
    </head>
    <body>
        <?php include_once("V/navbar.html"); ?>   
        <h1>Your account</h1><p></p>
        
        <a href="index.php?page=popup_delete_account_prac"><button>delete account</button></a>
        <a href="index.php?page=histo"><button>appointement historic</button></a>
        <a href="index.php?page=modif_account_prac"><button>modif account</button></a>

        Take appointment<input type="checkbox" name="available" id="0" <?php echo $dis; ?> onchange="available(this)">
        <script>
            function available (value) {
                var check = document.getElementById("0");
                
                check.addEventListener("change", sql(event));

                function sql (event) {
                    console.log(check.checked);
                    if (check.checked === true) {
                        fetch("index.php?page=available&action=is", {method: "GET"});
                    } else {
                        fetch("index.php?page=available&action=not", {method: "GET"});
                    }
                }
            }
        </script>
    </body>
</html>