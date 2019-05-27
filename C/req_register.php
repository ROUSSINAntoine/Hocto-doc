<?php

    include('M/db_connect.php'); 
    include("M/other_sql.php");

    if(isset($_GET['email'])){   
        
        $_SESSION['email'] = $_GET['email'];
        $_SESSION['pass'] = $_GET['pass'];
        $_SESSION['conf'] = $_GET['conf'];


        
        if (isset($_SESSION['email'])) {
            if (!(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_SESSION['email']))) {
                header('Location: index.php?page=register');
            } else if ($_SESSION['pass']==$_SESSION['conf']) {
                
                
            if (isset($_GET["prac"])) {
                $req = sql_reg_prac();
            } else {
                try {
                   
                        $req = $db->prepare("INSERT INTO account(id, email ,psw) VALUES(null, :email, :psw)");
                    

                    try { 
                        $db->beginTransaction(); 
                        $req->execute(array(
                            'psw' => $_SESSION['pass'],
                            'email' => $_SESSION['email']
                            )
                        );
                        $req->closeCursor();
                        
                        $db->commit(); 
                        //print $db->lastInsertId();
                        $id = $db->lastInsertId(); 
                        
                        
                        
                    } catch(PDOExecption $e) { 
                        $db->rollback(); 
                        print "Error!: " . $e->getMessage() . "</br>"; 
                    } 
                } catch( PDOExecption $e ) { 
                    print "Error!: " . $e->getMessage() . "</br>"; 
                }     
            }
            }    
        
        } 
        
        include('V/mod_login.php');
    } else {
        include('V/mod_register.php');
    }
?>