<?php
function modif_psw () 
{
    
  $bdd = new PDO('mysql:host=localhost;dbname=hoctodoc', 'root', '');

  $reponse =$bdd->prepare ("UPDATE account SET psw =:psw WHERE email LIKE :email");
  $reponse ->execute (array (
      "psw"=>$_GET['modif_psw'],
      "email"=>$_GET['email'] ));
 
  $reponse->closeCursor();
  return $reponse;
}


function afficher_account()
{

    $bdd = new PDO('mysql:host=localhost;dbname=hoctodoc', 'root', '');

    $reponse =$bdd->query ("SELECT email , psw FROM account");

    $donnees = $reponse->fetch();

    return $donnees;
}


function modif_email () 
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=hoctodoc', 'root', '');

    $reponse =$bdd->prepare ("UPDATE account SET email = :email WHERE psw LIKE :psw");
    $reponse ->execute (array (
        "psw"=>$_GET['psw'],
        "email"=>$_GET['modif_email'] ));
    $reponse->closeCursor();
return $reponse;
}

if (isset($_GET["email"])) {
    $psw = modif_psw();
    $email = modif_email();
}

$donnees = afficher_account();

include("V\mod_modif_account.php");


?>