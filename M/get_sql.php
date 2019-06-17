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
        "id"=>$_SESSION['id'] ));

        return $req;

    }

    function sql_search_by_prac() {
        include("M/db_connect.php");

        $req = $db->prepare("SELECT * FROM practitioner WHERE lastname LIKE %:doc% AND available = 1");
        $req ->execute (array (
            "doc"=> $_GET["srch"],
            "id"=> $_SESSION["id"] 
            )
        );
        return $req;
    }


    function sql_consult () {
        include("M/db_connect.php");
        $req =$db->query("SELECT * FROM planning2 WHERE practitioner = ".$_GET["doc"]);
        return $req;
    }

    function sql_modif_rdv () {
        include("M/db_connect.php");
        $req =$db->prepare("SELECT CONCAT(patient.firstname,\" \", patient.lastname) AS patient, rdv.dtrdv, rdv.hrrdv, rdv.observations, CONCAT(practitioner.firstname,\" \", practitioner.lastname) AS practitioner, rdv.id FROM rdv JOIN patient ON rdv.patient = patient.id JOIN practitioner ON rdv.practitioner = practitioner.id JOIN account ON patient.account = account.id WHERE account.id =:id AND DATEDIFF(DATE(CONCAT(rdv.dtrdv,\" \", rdv.hrrdv)),DATE(NOW())) >= 0");
        $req ->execute (array (
            "id"=> $_SESSION["id"] 
            )
        );
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
    
    function sql_prac() {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT * FROM practitioner WHERE practitioner.id = :id");
        $req->execute(array(
            'id'=> $_SESSION["id"]
        ));

        return $req;
    }

    function sql_modif_pract() {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT * FROM practitioner WHERE practitioner.id = :id");
        $req->execute(array(
            'id'=>$_SESSION['id']
            )
        );
        return $req;
    }

    function sql_membre() {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT * FROM patient JOIN account ON patient.account = account.id WHERE account.id = :id_account");
        $req->execute(array(
            'id_account'=>$_SESSION['id']
        ));

        return $req;
    }

    function sql_is_available() {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT available FROM practitioner WHERE practitioner.id = :id AND available = 0");
        $req->execute(array(
            'id'=>$_SESSION['id']
            )
        );
        return $req;
    }
?>
