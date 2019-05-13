<?php
    function sql_modif () {
        include("M/db_connect.php");
        //modif account
        $req =$db->prepare ("UPDATE account SET psw =:psw , email =:email WHERE email LIKE :emails");
        $req ->execute (array (
            "psw"=>$_GET['psw'],
            "emails"=>$_GET['emails'],
            "email"=>$_GET['email'] ));
            $req->closeCursor();
    }

    function sql_add_patient () {
        include("M/db_connect.php");
        
        $req = $db->query("INSERT INTO patient (id, firstname, lastname, phone_number, adrs, city, postcode, ssn, account) VALUES (NULL, ".$_GET['firstname'].", ".$_GET['lastname'].", ".$_GET['phone_number'].", ".$_GET['adrs'].", ".$_GET['city'].", ".$_GET['postcode'].", ".$_GET['ssn'].", ".$_SESSION['id'].")");
        $req->closeCursor();
    }
?>