<?php
function modif () {
    
    $bdd = new PDO('mysql:host=localhost;dbname=hoctodoc', 'root', '');
    $reponse =$bdd->prepare ("UPDATE account SET psw =:psw , email =:email WHERE email LIKE :emails");
    $reponse ->execute (array (
        "psw"=>$_GET['psw'],
        "emails"=>$_GET['emails'],
        "email"=>$_GET['email'] ));
}

function affichage_account() {
    $bdd = new PDO('mysql:host=localhost;dbname=hoctodoc', 'root', '');

    $reponse =$bdd->query ("SELECT * FROM account");

    $donnees = $reponse->fetch();
    
    return $donnees;
}

if (isset($_GET["psw"])) {
    modif();
}

$donnees = affichage_account();
include("V/mod_modif_account.php");


?>