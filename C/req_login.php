<?php

//Connexion sur le site web

// verifie s'il une personne à rentrer quelque chose
if(isset($_GET['email']) && isset($_GET['password'])) {
    include("M/connexion.php");
    $req = check_login();
    $data = $req->fetch();

    if ($data == false) {
        //redirection vers le login car erreur
        include("./V/mod_login.php");
        
        //message d'erreur en rouge
        echo '<span style="color:red;">Mot De Passe ou Email Incorrect</span>';
    
    } else {
        
        //si identifient son bon alors enregistre les données en session
        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $_GET['email'];
        $_SESSION['password'] = $_GET['password'];

        //redirecton vers le home pour l'user connecté
        include("./V/mod_home.php");
    }
    
    //ferme la db
    $req->closeCursor();

    //deja connecté
} else if (isset($_SESSION['email'])) {

    //redirige vers le home
    include("./V/mod_home.php");
}
?>