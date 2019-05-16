<?php


    
    $servername = "localhost";
    $username = "root";
    $password = ""; // mdp jérémy
    $db = "hoctodoc";
                
    try {
        $conn = new PDO("mysql:host=".$servername.";port=3308;dbname=hoctodoc;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";  //connection faite à la base de donnée
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


    if(isset($_GET['city'])){   
        
        $_SESSION['name'] = $_GET['name'];
        $_SESSION['lastname'] = $_GET['lastname'];
        $_SESSION['email'] = $_GET['email'];
        $_SESSION['vital'] = $_GET['vital'];
        $_SESSION['postcode'] = $_GET['postcode'];
        $_SESSION['adrs'] = $_GET['adrs'];
        $_SESSION['city'] = $_GET['city'];
        $_SESSION['pass'] = $_GET['pass'];
        $_SESSION['conf'] = $_GET['conf'];
        $_SESSION['phone_number'] = $_GET['phone_number'];


        if ((!is_numeric($_SESSION['postcode'])) OR (strlen($_SESSION['postcode'])!=5)) {
            echo '<a href="mod_inscrip.html"><h1>code postale incorrect</h1>';
        } else if((!is_numeric($_SESSION['vital'])) OR (strlen($_SESSION['vital'])!=15)) {
            echo '<a href="mod_inscrip.html"><h1>numéro de sécurité social incorrect</h1>';
        } else if((!is_numeric($_SESSION['phone_number'])) OR (strlen($_SESSION['phone_number'])!=10)) {
            echo '<a href="mod_inscrip.html"><h1>numéro de téléphone incorrect</h1>';
        } else if (isset($_SESSION['email'])) {
            if (!(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_SESSION['email']))) {
                echo '<a href="mod_inscrip.html"><h1>mail incorrect</h1>';
            } else if ($_SESSION['pass']==$_SESSION['conf']) {
                
                
                
                try {
                    $req = $conn->prepare("INSERT INTO account(email ,psw) VALUES(:email, :psw)");
                        
                    try { 
                        $conn->beginTransaction(); 
                        $req->execute(array(
                            'psw' => $_SESSION['pass'],
                            'email' => $_SESSION['email']
                            )
                        );
                        $req->closeCursor();
                        
                        $conn->commit(); 
                        //print $conn->lastInsertId();
                        $id = $conn->lastInsertId(); 
                        
                        
                        
                    } catch(PDOExecption $e) { 
                        $conn->rollback(); 
                        print "Error!: " . $e->getMessage() . "</br>"; 
                    } 
                } catch( PDOExecption $e ) { 
                    print "Error!: " . $e->getMessage() . "</br>"; 
                }     

            }    
        
        } 
        
        include('V/mod_login.php');
        echo "compte ok ";
    } else {
        include('V/mod_register.php');
    }
?>