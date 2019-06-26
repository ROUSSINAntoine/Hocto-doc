<?php
include_once("M/other_sql.php");
include_once("M/get_sql.php");


$req = sql_modif_rdv();

$rdv = "";
$delete_rdv = "";

while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
    $rdv = $rdv."<tr>";
    foreach ($data as $key => $value) {
        if($value != $data["id"]) {
            $rdv = $rdv."<td>".$value."</td>";
        } else {
            $rdv = $rdv."<td><a href=index.php?page=popup_delete_rdv&id=".$_SESSION["id"]."&id_rdv=".$data["id"]."><button onclick=toto()>cancel rdv</button></a></td><p id=demo></p>";
            $rdv = $rdv."<td><a href=index.php?page=change_rdv&id=".$_SESSION["id"]."&id_rdv=".$data["id"]."><button>Change appointment</button></a>";
        }
        
    }
    $rdv = $rdv."</tr>";
    /*echo "<a href='index.php?page=delete_rdv'><button>delete rdv</button></a>"; */
    $_SESSION['id_rdv']=$data['id'];
}
include_once("./V/patient/mod_modif_rdv.php");

