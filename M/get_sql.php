<?php
    function sql_account() {
        include("M/db_connect.php");
        $req = $db -> query("SELECT firstname, lastname, id FROM patient WHERE account LIKE ".$_SESSION["id"]);
        return $req;
    }

    //fonction pour verifier le login entrer par le user
    function check_login() {
        //j'appelle la fonction pour se connecter à la database
        include("M/db_connect.php");
        
        //je récupere ce qui est du formulaire et normalisation du form
        $email = htmlspecialchars($_GET['email']);
        $password = htmlspecialchars($_GET['password']);
        
        // la requete pour la database 
        $req = $db->prepare("SELECT * FROM account WHERE email LIKE :email AND psw LIKE :psw");
        $req->execute(array("email"=>$email, "psw"=>$password));

        return $req;
    }

    function check_practitioner() {

        //j'appelle la fonction pour se connecter à la database
        include("M/db_connect.php");
        
        //je récupere ce que à remplis l'user
        $email = htmlspecialchars($_GET['email']);
        $password = htmlspecialchars($_GET['password']);
        
        $req = $db->prepare("SELECT * FROM practitioner WHERE email LIKE :email AND psw LIKE :psw");
        $req->execute(array("email"=>$email, "psw"=>$password));

        return $req;

    }

    function sql_display_account() {
        include("M/db_connect.php");

        $req = $db->query("SELECT * FROM account WHERE id LIKE ".$_SESSION['id']);
        
        return $req;
    }  

    function sql_display_member() {
        include("M/db_connect.php");
        $req = $db->prepare ("SELECT * FROM account JOIN patient ON account.id = patient.account WHERE patient.id LIKE :id ");
        $req ->execute (array(
        "id"=>$_GET['id'] ));

        return $req;

    }

    function sql_search_by_prac() {
        include("M/db_connect.php");

        $req = $db->query("SELECT * FROM practitioner WHERE lastname LIKE \"%".$_GET["srch"]."%\"");

        return $req;
    }


    function sql_consult () {
        include("M/db_connect.php");
        $req =$db->query("SELECT * FROM planning WHERE practitioner = ".$_GET["doc"]);
        return $req;
    }
  
    function sql_histo_appointment_prac () {
        include("M/db_connect.php");
        $req = $db->prepare("SELECT CONCAT(Pat.firstname,\" \", Pat.lastname) AS patient, R.dtrdv, R.hrrdv, R.observations, R.id FROM rdv R JOIN patient Pat ON R.patient = Pat.id WHERE R.practitioner = :id AND DATEDIFF(DATE(CONCAT(R.dtrdv,\" \", R.hrrdv)),DATE(NOW())) < 0 ORDER BY R.dtrdv, R.hrrdv");
        $req ->execute (array (
            "id"=> $_SESSION["id"] 
            )
        
        );
        
        return $req;
    }

    function sql_histo_appointment_pat () {
        include("M/db_connect.php");
        $req = $db->prepare("SELECT CONCAT(Pat.firstname,\" \", Pat.lastname) AS patient , CONCAT(Prac.firstname,\" \", Prac.lastname) AS practitioner, R.dtrdv, R.hrrdv, R.observations FROM rdv R JOIN practitioner Prac ON R.practitioner = Prac.id JOIN patient Pat ON R.patient = Pat.id WHERE Pat.account = :id AND DATEDIFF(DATE(CONCAT(R.dtrdv,\" \", R.hrrdv)),DATE(NOW())) < 0 ORDER BY R.dtrdv, R.hrrdv");
        $req ->execute (array (
            "id"=> $_SESSION["id"] 
            )
        
        );
        
        return $req;
    }
    

?>
