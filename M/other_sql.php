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
?>