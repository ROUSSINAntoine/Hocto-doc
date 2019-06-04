
<?php   
    include("M/get_sql.php");
    
    $req = sql_histo_appointment_prac();
    //var_dump($req);

    $histo = "";
    
    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($data);
        $histo = $histo."<tr>";
        foreach ($data as $key => $value) {
            if ($key == "observations" && $value == "") {
                $histo = $histo."<td><a href=index.php?page=observation&id=".$data["id"]."><button disabled>écrire commentaire</button></td>";
            } else if ($key == "id") {
            } else {
                $histo = $histo."<td>".$value."</td>";
            }
            
        }
        $histo = $histo."</tr>";
    }
    //var_dump($histo);
    include("V/mod_histo.php");
?>