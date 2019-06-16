<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Account</title>
    </head>
    <body>
        <?php include("V/navbar.html"); ?>   
        <h1>Your account</h1><p></p>
        
        <a href="index.php?page=delete"><button>delete account</button></a>
        <a href="index.php?page=histo"><button>appointement historic</button></a>
        <a href="index.php?page=login"><button>return</button></a>
        <a href="index.php?page=modif_account_prac"><button>modif account</button></a>

        Take appointment<input type="checkbox" name="available" id="0" onchange="available(this)">
        <script>
            function available (value) {
                var check = document.getElementById("0");

                check.addEventListener("change", function(event) {
                    
                    if (check.checked === true) {
                        console.log(check.checked);
                        fetch("/index.php?page=available&action=is", {method: "GET"});
                    } else {
                        fetch("/index.php?page=available&action=not", {method: "GET"});
                    }
                });
        }
        </script>
    </body>
</html>