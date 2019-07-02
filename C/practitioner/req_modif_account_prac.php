<?php
    
    function modif () {
        include_once("M/other_sql.php");
        $req=sql_modif_prac();
    }

    function affichage_account() {
        include_once("M/get_sql.php");
        $req = sql_prac();
        $data = $req->fetch();
        
        $req->closeCursor();
        return $data;
        
    }
    
    if (isset($_GET["psw"])) {
        modif();
        $message='your data is changed';
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
    
    $data = affichage_account();

    include_once("V/practitioner/mod_modif_account_prac.php");
    

?>