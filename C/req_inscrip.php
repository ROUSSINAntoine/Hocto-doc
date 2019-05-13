<?php
session_start();

    $_SESSION['name'] = $_GET['name'];
    $_SESSION['name2'] = $_GET['name2'];
    $_SESSION['email'] = $_GET['email'];
    $_SESSION['vital'] = $_GET['vital'];
    $_SESSION['postcode'] = $_GET['postcode'];
    $_SESSION['address'] = $_GET['address'];
    $_SESSION['city'] = $_GET['city'];
    $_SESSION['pass'] = $_GET['pass'];
    $_SESSION['conf'] = $_GET['conf'];
    $_SESSION['phone_number'] = $_GET['phone_number'];

    
    $servername = "localhost";
    $username = "root";
    $password = "1234"; // mdp jérémy
    $db = "hoctodoc";
                
    try {
        $conn = new PDO("mysql:host=".$servername.";port=3308;dbname=hoctodoc;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";  //connection faite à la base de donnée
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    
    if ((!is_numeric($_GET['postcode'])) OR (strlen($_GET['postcode'])!=5)) {
        echo '<a href="mod_inscrip.html"><h1>code postale incorrect</h1>';
    } else if((!is_numeric($_GET['vital'])) OR (strlen($_GET['vital'])!=15)) {
        echo '<a href="mod_inscrip.html"><h1>numéro de sécurité social incorrect</h1>';
    } else if((!is_numeric($_GET['phone_number'])) OR (strlen($_GET['phone_number'])!=10)) {
        echo '<a href="mod_inscrip.html"><h1>numéro de téléphone incorrect</h1>';
    } else if (isset($_GET['email'])) {
        if (!(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_GET['email']))) {
            echo '<a href="mod_inscrip.html"><h1>mail incorrect</h1>';
        } else if ($_SESSION['pass']==$_SESSION['conf']) {
            $req = $conn->prepare('INSERT INTO account(email ,psw) VALUES(:email, :psw)');
                print_r($_SESSION);
                $req->execute(array(
                    'psw' => $_SESSION['pass'],
                    'email' => $_SESSION['email']
                )
            );
                
            
            $req = $conn->prepare('INSERT INTO patient(firstname ,name ,phone_number ,address ,city ,postcode ,ssn ,account) VALUES(:firstname ,:name ,:phone_number ,:address ,:city ,:postcode ,:ssn ,:account)');
                print_r($_SESSION);
                $req->execute(array(
                    'firstname' => $_SESSION['name'],
                    'name' => $_SESSION['name2'],
                    'phone_number' => $_SESSION['phone_number'],
                    'address' => $_SESSION['address'],
                    'city' => $_SESSION['city'],
                    'postcode' => $_SESSION['postcode'],
                    'ssn' => $_SESSION['vital'],
                    'account' => $_SESSION['id']
                )
            );
        }
    } 
   
?>
