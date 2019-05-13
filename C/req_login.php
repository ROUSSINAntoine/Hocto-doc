<?php

//Connexion sur le site web
//include('../M/loginBDD.php');
$bdd = new PDO("mysql:host=localhost;dbname=hoctodoc;charset=utf8", "root" ,"");

// verifie s'il une personne à rentrer quelque chose
if(isset($_GET['email']) && isset($_GET['password'])) {
    
    $email = htmlspecialchars($_GET['email']);
    $password = htmlspecialchars($_GET['password']);

    //login_bdd($bdd);
    $req = $bdd->prepare("SELECT * FROM account WHERE email LIKE :email AND psw LIKE :psw");
    $req->execute(array("email"=>$email, "psw"=>$password));

    while($verif = $req->fetch()) {
        
        if($email == $verif['email']) {
            $verif_mail = true;
        }
                
        if($_GET['password'] == $verif['psw']) {
            $verif_psw = true;
        } else {
            $verif_mail = false;
            $verif_psw = false;
        }
    }
    
    if($verif_mail == true && $verif_psw == true) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        //redirecton vers le home 
        include("./V/mod_home.php");
    } else {
        //redirection vers le login car erreur
        include("./V/mod_login.php");        
    } 
} else {
    $error = " Erreur";
}

?>