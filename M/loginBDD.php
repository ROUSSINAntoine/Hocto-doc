<?php
    function login_bdd($bdd)
    {
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=hoctodoc;charset=utf8", "root" ,"");
            // fait la liaison avec la base de donnée via la variable $bdd
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
            // si il y à une erreur, affiche le message d'erreur
        }
        //$email = htmlspecialchars($_GET['email']);
        //$password = htmlspecialchars($_GET['password']);
        //$req = $bdd->prepare("SELECT * FROM account WHERE email LIKE :email AND psw LIKE :psw");
        //$req->execute(array("email"=>$email, "psw"=>$password));

    }
    //$req = login_bdd();
?>