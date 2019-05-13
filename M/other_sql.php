<?php
    function sql_modif () {
        include("M/db_connect.php");
        //modif account
        $req =$db->prepare ("UPDATE account SET psw =:psw , email =:email WHERE id LIKE :id");
        $req ->execute (array (
            "psw"=>$_GET['psw'],
            "id"=>$_GET['id'],
            "email"=>$_GET['email'] ));
            $req->closeCursor();
    };
function modif_patient () {
    include("M/db_connect.php");
    //modif table patient
    

        $req =$db->prepare ("UPDATE patient SET firstname =:firstname,lastname=:lastname ,adrs = :adrs , phone_number =:phone ,city = :city , postcode =:postcode ,ssn = :ssn WHERE id LIKE :id");
        $req ->execute (array (
            "id"=>$_GET['id'],
            "firstname"=>$_GET['firstname'],
            "lastname" =>$_GET['lastname'],
            "phone"=>$_GET['phone'],
            "adrs" =>$_GET['adrs'],
            "city" =>$_GET['city'],
            "postcode" =>$_GET['postcode'],
            "ssn" =>$_GET['ssn']));
            $req->closeCursor();
        }
?>