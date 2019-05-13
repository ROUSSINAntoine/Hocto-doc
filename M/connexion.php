<?php
    //fonction pour verifier le login entrer par le user
    function check_login() {
        //j'appelle la fonction pour se connecter à la database
        include("M/db_connect.php");
        
        //je récupere ce que à remplis l'user
        $email = htmlspecialchars($_GET['email']);
        $password = htmlspecialchars($_GET['password']);
        
        // la requete pour la database 
        $req = $db->prepare("SELECT * FROM account WHERE email LIKE :email AND psw LIKE :psw");
        $req->execute(array("email"=>$email, "psw"=>$password));

        return $req;
    }

?>