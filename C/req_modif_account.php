<?php
//include("M/db_connect.php");

function modif () {
    include("M/db_connect.php");
    
    $rep =$db->prepare ("UPDATE account SET psw =:psw , email =:email WHERE email LIKE :emails");
    $rep ->execute (array (
        "psw"=>$_GET['psw'],
        "emails"=>$_GET['emails'],
        "email"=>$_GET['email'] ));
    $rep->closeCursor();
}

function affichage_account() {
    include("M/db_connect.php");

    $rep =$db->query("SELECT * FROM account WHERE id LIKE ".$_SESSION['id']);
    $donnees = $rep->fetch();
    
    return $donnees;
    $rep->closeCursor();
}

if (isset($_GET["psw"])) {
    modif();
}

$donnees = affichage_account();
include("V/mod_modif_account.php");


?>