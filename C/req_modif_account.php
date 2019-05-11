<?php
function modif_psw () 
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=hoctodoc', 'root', '');
    $reponse =$bdd->prepare ("UPDATE account SET psw =:psw , email =:email WHERE email LIKE :emails");
    $reponse ->execute (array (
        "psw"=>$_GET['psw'],
        "emails"=>$_GET['emails'],
        "email"=>$_GET['email'] ));
};
$reponse = modif_psw();

function affichage_account()
    {
    $bdd = new PDO('mysql:host=localhost;dbname=hoctodoc', 'root', '');

    $reponse =$bdd->query ("SELECT * FROM account");

    while($donnees = $reponse->fetch()) {
    
        echo $donnees['psw']. '<br/>';
        echo $donnees['email']. '<br/>';

    }
}

$reponse = affichage_account();

?>