<?php

//Connexion sur le site web

// verifie s'il une personne à rentrer quelque chose
if(isset($_GET['email']) && isset($_GET['password'])) {
    
    //appelle la fonction sql qui permet de verifier le bon email et password
    include_once("M/get_sql.php");
    $req = check_login();
    $data = $req->fetch();
    $req->closeCursor();

    // si c'est faux regarde si c'est un practitioner
    if ($data == false) {

        //appelle la fonction sql qui permet de verifier le bon email et password du practitioner
        $req = check_practitioner();
        $data = $req->fetch();
        $req->closeCursor();
        

        //si c'est faux renvoie une erreur
        if ($data == false) {
            $co = "fail";
            //redirection vers le login car erreur
            include_once("./V/connection/mod_login.php");
        
            //message d'erreur en rouge
            echo '<span style="color:red;">Password or Incorrect Email</span>';

        //connecte le practitionner
        } else {
            $co = "prac";
            //crée une session avec les logins et id du practitioner
            $_SESSION['id'] = $data['id'];
            $_SESSION['email'] = $_GET['email'];
            $_SESSION['password'] = $_GET['password'];
            $_SESSION['type'] = "prac";
            
            //redirecton vers le home pour l'user connecté
            if ($co == "prac") {
                $req= sql_prac();
                $data= $req->fetch();
                $req->closeCursor();
                if($data['firstname'] == null || $data['firstname'] == "") {
                    include_once("./V/practitioner/mod_info_prac.php");
                } else {
                    include_once("./V/practitioner/mod_prac_home.php");
                }
                
            } else if ($co == "pat") {
                include_once("./V/patient/mod_home.php");
            }
            
        }

    } else {
        $co = "pat";    
        //si identifient son bon alors enregistre les données en session
        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $_GET['email'];
        $_SESSION['password'] = $_GET['password'];
        $_SESSION['type'] = "pat";

        //redirecton vers le home pour l'user connecté
        if ($co == "prac") {
            include_once("./V/practitioner/mod_prac_home.php");
        } else if ($co == "pat") {
            $req= sql_membre();
            $data= $req->fetch();
            $req->closeCursor();
            if($data['firstname'] == null || $data['firstname'] == "") {
                include_once("./V/practitioner/mod_home_start.php");
            } else {
                include_once("./V/patient/mod_home.php");
            }
        }
    }
    
    //ferme la db
    $req->closeCursor();

    //deja connecté
} else if (isset($_SESSION['email'])) {
    include_once("M/get_sql.php");
    //redirige vers le home
    if ($_SESSION['type'] == "prac") {
        $req= sql_prac();
        $data= $req->fetch();
        $req->closeCursor();
        if($data['firstname'] == null || $data['firstname'] == "") {
            include_once("./V/practitioner/mod_info_prac.php");
        } else {
            include_once("./V/practitioner/mod_prac_home.php");
        }
    } else if ($_SESSION['type'] == "pat") {
        $req= sql_membre();
            $data= $req->fetch();
            $req->closeCursor();
            if($data['firstname'] == null || $data['firstname'] == "") {
                include_once("./V/practitioner/mod_home_start.php");
            } else {
                include_once("./V/patient/mod_home.php");
            }
    }
}
?>