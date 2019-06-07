<?php
include("M/other_sql.php");
include("M/get_sql.php");


$req = sql_modif_rdv();

$rdv = "";
$delete_rdv = "";

while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
    $rdv = $rdv."<tr>";
    foreach ($data as $key => $value) {
        if($value != $data["id"]) {
            $rdv = $rdv."<td>".$value."</td>";
        } else {
            $rdv = $rdv."<td><a href=index.php?page=delete_rdv&id=".$_SESSION["id"]."&id_rdv=".$data["id"]."><button>cancel rdv</button></a></td>";
        }
        
    }
    $rdv = $rdv."</tr>";
    /*echo "<a href='index.php?page=delete_rdv'><button>delete rdv</button></a>"; */
}
include("./V/mod_modif_rdv.php")



?>