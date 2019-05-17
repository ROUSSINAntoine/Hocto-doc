<?php

    include('M/db_connect.php');

    $id = $_SESSION["id"];
    echo $id;
        try {
            $req = $db->query("DELETE FROM account WHERE id = $id");
            header('Location: index.php');
            /*try {
                $db->beginTransaction(); 
                $req->execute(array());
            } catch(PDOExecption $e) { 
                $db->rollback(); 
                print "Error!: " . $e->getMessage() . "</br>"; 
            }*/ 
        } catch( PDOExecption $e ) { 
            print "Error!: " . $e->getMessage() . "</br>"; 
        }

?>    