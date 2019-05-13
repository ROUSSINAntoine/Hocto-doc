<?php
include("M/db_connect.php");
function modif () {
    //modif account
    $reponse =$bdd->prepare ("UPDATE account SET psw =:psw , email =:email WHERE email LIKE :emails");
    $reponse ->execute (array (
        "psw"=>$_GET['psw'],
        "emails"=>$_GET['emails'],
        "email"=>$_GET['email'] ));
    $reponse->closeCursor();

}
function modif_patient () 
    //modif table patient
    {

        $reponse =$bdd->prepare ("UPDATE patient SET firstname =:firstname,lastname=:lastname ,adrs = :adrs , phone_number =:phone ,city = :city , postcode =:postcode ,ssn = :ssn WHERE id LIKE :id");
        $reponse ->execute (array (
            "id"=>$_GET['id'],
            "firstname"=>$_GET['firstname'],
            "lastname" =>$_GET['lastname'],
            "phone"=>$_GET['phone'],
            "adrs" =>$_GET['adrs'],
            "city" =>$_GET['city'],
            "postcode" =>$_GET['postcode'],
            "ssn" =>$_GET['ssn']));

        $reponse->closeCursor();
        }

    function modif_practitioner () 
    //modifier la table practicien
    {

        $reponse =$bdd->prepare ("UPDATE practitioner SET fistname =:firstname,lastname=:lastname ,adrs = :adrs , phone_number =:phone ,city = :city , postcode =:postcode ,email =:email  WHERE id LIKE :id");
        $reponse ->execute (array (
            "id"=>$_GET['id'],
            "firstname"=>$_GET['firstname'],
            "lastname" =>$_GET['lastname'],
            "phone"=>$_GET['phone'],
            "adrs" =>$_GET['adrs'],
            "city" =>$_GET['city'],
            "email" =>$_GET['email'],
            "postcode" =>$_GET['postcode'] ));
        
        $reponse->closeCursor();
        }
?>