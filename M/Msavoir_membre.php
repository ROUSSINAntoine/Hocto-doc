<?php
    function savoir_membre ()
    //savoir quelle membre appartient a quel compte
{
     
    include("M/db_connect.php");
    $req =$db->prepare ("SELECT account.id aid,patient.firstname pf,patient.lastname pn FROM account JOIN patient ON account.id = patient.account WHERE email=:email ");
    $req ->execute (array (
        "email"=>$_GET['email'] ));
}
?>