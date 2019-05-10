<?php
function modif_psw () 
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=hoctodoc', 'root', '');

    $reponse =$bdd->prepare ("UPDATE account SET psw =:psw WHERE email LIKE :email");
    $reponse ->execute (array (
        "psw"=>$_GET['modif_psw'],
        "email"=>$_GET['email'] ));
while ($donnes = $reponse -> fetch()) {
   echo $donnes['psw']. '<br/>';
}
  $reponse->closeCursor();
return $reponse;
}

$reponse = modif_psw();
?>
<?php

function modif_email () 
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=hoctodoc', 'root', '');

    $reponse =$bdd->prepare ("UPDATE account SET email = :email WHERE psw LIKE :psw");
    $reponse ->execute (array (
        "psw"=>$_GET['psw'],
        "email"=>$_GET['modif_email'] ));
while ($donnes = $reponse -> fetch()) {
   echo $donnes['psw']. '<br/>';
}
  $reponse->closeCursor();
return $reponse;
}

$reponse = modif_email();
?>