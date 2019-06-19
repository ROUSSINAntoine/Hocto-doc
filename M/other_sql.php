<?php
    function sql_modif () {
        include("M/db_connect.php");
        //modif account
        $req =$db->prepare ("UPDATE account JOIN patient ON account.id = patient.account SET account.psw =:psw , account.email =:emails ,patient.firstname =:firstname ,patient.lastname=:lastname, patient.adrs= :adrs , patient.phone_number =:phone , patient.city=:city , patient.postcode =:postcode , patient.ssn =:ssn WHERE patient.id LIKE :id AND account.email=:email");
        $req ->execute (array (
            "psw"=>$_GET["psw"],
            "id"=>$_GET['id'],
            "firstname"=>$_GET['firstname'],
            "lastname" =>$_GET['lastname'],
            "phone"=>$_GET['phone'],
            "adrs" =>$_GET['adrs'],
            "city" =>$_GET['city'],
            "postcode" =>$_GET['postcode'],
            "ssn" =>$_GET['ssn'],
            "email"=>$_GET['email'],
            "emails"=>$_GET['emails'] ));
            $req->closeCursor();
    }

    function sql_modif_prac () {
        include("M/db_connect.php");
        //modif account prac
        $req =$db->prepare ("UPDATE practitioner SET practitioner.firstname = :firstname, practitioner.lastname = :lastname, practitioner.psw = :psw, practitioner.adrs = :adrs, practitioner.city = :city, practitioner.postcode= :postcode, practitioner.email = :emails, practitioner.phone_number = :phone WHERE practitioner.id = :id");
        $req ->execute(array (
            'psw'=>$_GET['psw'],
            'id'=>$_SESSION['id'],
            'firstname'=>$_GET['firstname'],
            'lastname' =>$_GET['lastname'],
            'phone'=>$_GET['phone'],
            'adrs' =>$_GET['adrs'],
            'city' =>$_GET['city'],
            'postcode' =>$_GET['postcode'],
            'emails'=>$_GET['emails'] ));
            $req->closeCursor();
    }


     function modif_planning () 
    //modifier la table planning
    {
    include("M/db_connect.php");
        $req =$db->prepare ("UPDATE planning2 SET open_time =:open_time,break_time=:break_time ,resume_time =:resume_time , close_time =:close_time ,length_time= :length_time WHERE day_time LIKE :days_time AND practitioner LIKE :practitioner");
        $req ->execute (array (
            "open_time"=>$_GET['open_time'],
            "break_time" =>$_GET['break_time'],
            "resume_time"=>$_GET['resume_time'],
            "close_time" =>$_GET['close_time'],
            "length_time" =>$_GET['length_time'],
            "days_time" =>$_GET['days_time'],
            "practitioner" =>$_GET['practitioner'] ));
            $req->closeCursor();
        }
    
    function sql_add_patient () {
        include("M/db_connect.php");
        
        $req = $db->prepare("INSERT INTO patient (id, firstname, lastname, phone_number, adrs, city, postcode, ssn, account) VALUES (NULL, :firstname, :lastname, :phone, :adrs, :city, :postcode, :ssn, :id_account)");
        $req->execute(array(
            'firstname'=>$_GET['firstname'],
            'lastname'=>$_GET['lastname'],
            'phone'=>$_GET['phone_number'],
            'adrs'=>$_GET['adrs'],
            'city'=>$_GET['city'],
            'postcode'=>$_GET['postcode'],
            'ssn'=>$_GET['ssn'],
            'id_account'=>$_SESSION['id']
        ));
        $req->closeCursor();
    }
    
    function sql_appointment ($hr) {
        include("M/db_connect.php");
        //$hr = date("H:i", strtotime($_GET['hrrdv']));
        $req =$db->query("INSERT INTO `rdv` (`id`, `dtrdv`, `hrrdv`, `observations`, `practitioner`, `patient`) VALUES (NULL, \"".$_GET["dtrdv"]."\", \"".$hr."\", '', \"".$_GET['doc']."\", \"".$_GET['patient']."\")");
        $req->closeCursor();
    }

    function sql_del_patient () {
        include("M/db_connect.php");
        $req = $db->query("DELETE FROM patient WHERE id = ".$_GET["id"]);
        $req->closeCursor();
    }

    function sql_reg_prac () {
        include("M/db_connect.php");
        $req = $db->prepare("INSERT INTO practitioner (id, email, psw) VALUES (null, :email, :psw)");
        $req->execute(array(
            'email'=>$_GET['email'],
            'psw'=>$_GET['pass']
        ));
        $req->closeCursor();
    }

    function sql_reg_patient() { 
        include("M/db_connect.php");       
        $req = $db->prepare("INSERT INTO account(id, email ,psw) VALUES(null, :email, :psw)");
        
        $req->execute(array(
            'psw' => $_SESSION['pass'],
            'email' => $_SESSION['email']
            )
        );
        $req->closeCursor();
    }
    
    function sql_reg_del() {
        include("M/db_connect.php");
        $req = $db->prepare("DELETE FROM account WHERE id = :id_type");
        $req->execute(array(
            'id_type' => $_SESSION['id'],
            )
        );
        $req->closeCursor();  
    }
    
    function sql_reg_del_prac() {
        include("M/db_connect.php");
        $req = $db->prepare("DELETE FROM practitioner WHERE id = :id");
        $req->execute(array(
            'id' => $_SESSION['id'],
            )
        );
        $req->closeCursor();  
    }

    function sql_delete_rdv() {
        include("M/db_connect.php");
        $req = $db->prepare("DELETE FROM rdv WHERE id = :id_rdv");
        $req ->execute (array (
            "id_rdv"=>$_SESSION["id_rdv"]
        ));
        return $req; 
    }

    function sql_available_false () {
        include("M/db_connect.php");
        
        $req = $db->prepare("UPDATE `practitioner` SET `available` = '0' WHERE `practitioner`.`id` = :id");
        $req->execute(array(
            'id' => $_SESSION['id'],
            )
        );
    }

    function sql_available_true () {
        include("M/db_connect.php");
        
        $req = $db->prepare("UPDATE `practitioner` SET `available` = '1' WHERE `practitioner`.`id` = :id");
        $req->execute(array(
            'id' => $_SESSION['id'],
            )
        );
        $req->closeCursor();
    }

    function sql_modif_observ () {
        include("M/db_connect.php");
        
        $req = $db->prepare("UPDATE rdv SET `observations` = :obs WHERE `id` = :id;");
        $req->execute(array(
            'id' => $_SESSION['id'],
            'obs' => $_GET['observ'],
        ));
        $req->closeCursor();
    }

    
?> 