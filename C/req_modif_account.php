<?php
function modif_psw () 
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=hoctodoc', 'root', '');

    $reponse =$bdd->prepare ("UPDATE account SET psw =:psw , email = :email WHERE email LIKE :e-mail");
    $reponse ->execute (array (
        "psw"=>$_GET['psw'],
        "e-mail"=>$_GET['e-mail']
        "email"=>$_GET['email'],
        "id" =>$_GET['id'] ));
};



$reponse = modif_psw();
?>
<?php