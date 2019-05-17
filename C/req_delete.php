<?php

    include('M/db_connect.php');

    if(isset($_GET['email']) and isset($_GET(['psw']))){

        try {
            try {
                $conn->beginTransaction(); 
                $req = $conn->query("SELECT * FROM account");
            } catch(PDOExecption $e) { 
                $conn->rollback(); 
                print "Error!: " . $e->getMessage() . "</br>"; 
            } 
        } catch( PDOExecption $e ) { 
            print "Error!: " . $e->getMessage() . "</br>"; 
        }

        while ($rep = $req->fetch()) { 
            try {
                $req = $conn->prepare("DELETE * FROM account WHERE email=".$_GET['email']." AND psw =".$_GET['pass']);
                try {
                    $conn->beginTransaction(); 
                    $req->execute(array());
                } catch(PDOExecption $e) { 
                    $conn->rollback(); 
                    print "Error!: " . $e->getMessage() . "</br>"; 
                } 
            } catch( PDOExecption $e ) { 
                print "Error!: " . $e->getMessage() . "</br>"; 
            }
        }
    }

?>    