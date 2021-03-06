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

        $req = $db->query('SELECT * FROM practitioner WHERE lastname LIKE "%'.$_GET["srch"].'%" AND available = 1');
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

    function get_appointment() {
        try {
            include("M/db_connect.php");
            $req = $db->prepare(
                "SELECT * FROM rdv WHERE practitioner LIKE :id ORDER BY dtrdv, hrrdv");  

            $req->execute(array(
                "id" => $_SESSION['id']
            ));
            $result = $req->fetchall();
            return $result;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function sql_membre() {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT * FROM patient JOIN account ON patient.account = account.id WHERE account.id = :id_account");
        $req->execute(array(
            'id_account'=>$_SESSION['id']
        ));

        return $req;
    }
    
    function sql_planning_monday() {
        include("M/db_connect.php");
        $req = $db->prepare("SELECT open_time , break_time , resume_time , close_time , length_time FROM planning2 WHERE practitioner LIKE :practitioner AND day_time LIKE 'monday'");
        $req->execute(array(
            "practitioner" =>$_SESSION['id'] 
        ));
        return $req;
    }

    function sql_planning_tuesday() {
        include("M/db_connect.php");
        $req = $db->prepare("SELECT open_time , break_time , resume_time , close_time , length_time FROM planning2 WHERE practitioner LIKE :practitioner AND day_time LIKE 'tuesday'");
        $req->execute(array(
            "practitioner" =>$_SESSION['id'] 
        ));
        return $req;
    }

    function sql_planning_wednesday() {
        include("M/db_connect.php");
        $req = $db->prepare("SELECT open_time , break_time , resume_time , close_time , length_time FROM planning2 WHERE practitioner LIKE :practitioner AND day_time LIKE 'wednesday'");
        $req->execute(array(
            "practitioner" =>$_SESSION['id'] 
        ));
        return $req;
    }

    function sql_planning_thursday() {
        include("M/db_connect.php");
        $req = $db->prepare("SELECT open_time , break_time , resume_time , close_time , length_time FROM planning2 WHERE practitioner LIKE :practitioner AND day_time LIKE 'thursday'");
        $req->execute(array(
            "practitioner" =>$_SESSION['id'] 
        ));
        return $req;
    }

    function sql_planning_friday() {
        include("M/db_connect.php");
        $req = $db->prepare("SELECT open_time , break_time , resume_time , close_time , length_time FROM planning2 WHERE practitioner LIKE :practitioner AND day_time LIKE 'friday'");
        $req->execute(array(
            "practitioner" =>$_SESSION['id'] 
        ));
        return $req;
    }

    function sql_planning_saturday() {
        include("M/db_connect.php");
        $req = $db->prepare("SELECT open_time , break_time , resume_time , close_time , length_time FROM planning2 WHERE practitioner LIKE :practitioner AND day_time LIKE 'saturday'");
        $req->execute(array(
            "practitioner" =>$_SESSION['id'] 
        ));
        return $req;
    }

    function sql_planning_sunday() {
        include("M/db_connect.php");
        $req = $db->prepare("SELECT open_time , break_time , resume_time , close_time , length_time FROM planning2 WHERE practitioner LIKE :practitioner AND day_time LIKE 'sunday'");
        $req->execute(array(
            "practitioner" =>$_SESSION['id'] 
        ));
        return $req;
    }

    function sql_planning_hollyday() {
        include("M/db_connect.php");
        $req = $db->prepare("SELECT start_hollyday , end_hollyday FROM hollyday WHERE practitioner LIKE :practitioner");
        $req->execute(array(
            "practitioner" =>$_SESSION['id'] ));
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

    function sql_get_obs() {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT observations FROM rdv WHERE id = :id");
        $req->execute(array(
            'id'=>$_GET['id']
        ));
        return $req;
    }

    function sql_member_rdv() {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT patient.id, patient.firstname, patient.lastname FROM patient JOIN account ON patient.account = account.id WHERE account.id = :id");
        $req->execute(array(
            'id'=>$_SESSION['id']
        ));
        return $req;
    }
    
    function sql_working_hour($day, $hour) {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT * FROM planning2 WHERE practitioner = :id AND day_time LIKE :name_day AND (:hour BETWEEN open_time AND break_time OR :hour BETWEEN resume_time AND close_time)");
        $req->execute(array(
            'id'=>$_GET['doc'],
            'name_day'=>$day,
            'hour'=>$hour
        ));
        return $req;
    }

    function sql_length($day) {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT length_time FROM planning2 WHERE practitioner = :id AND day_time LIKE :name_day");
        $req->execute(array(
            'id'=>$_GET['doc'],
            'name_day'=>$day
            )
        );
        return $req;
    }

    function sql_taken( $hour) {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT * FROM rdv WHERE practitioner = :id AND patient = :pat AND hrrdv LIKE :hr AND dtrdv LIKE :dt");
        $req->execute(array(
            'id'=>$_GET['doc'],
            'pat'=>$_GET['patient'],
            'dt'=>$_GET['dtrdv'],
            'hr'=>$hour
        ));
        return $req;
    }

    function sql_working_day($day) {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT * FROM planning2 WHERE practitioner = :id AND day_time LIKE :name_day AND `disabled` = 0");
        $req->execute(array(
            'id'=>$_GET['doc'],
            'name_day'=>$day
        ));
        return $req;
    }

    function sql_hollyday() {
        include("M/db_connect.php");
        $req=$db->prepare("SELECT * FROM hollyday WHERE practitioner = :id AND :dt BETWEEN start_hollyday AND end_hollyday");
        $req->execute(array(
            'id'=>$_GET['doc'],
            'dt'=>$_GET["dtrdv"]
        ));
        return $req;
    }
?>
