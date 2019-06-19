
<?php   
    include_once("M/get_sql.php");
    
    

    $histo = "";
    
    if ($_SESSION["type"] == "prac") {

        $req = sql_histo_appointment_prac();
        $first_col = "<th>patient</th>";
        //var_dump($req);
    } else {
        $req = sql_histo_appointment_pat();
        $first_col = "<th>Practitioner</th><th>Patient</th>";
    }
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var_dump($data);
            $histo = $histo."<tr>";
            foreach ($data as $key => $value) {
                if ($key == "observations" && $_SESSION["type"] == "prac") {
                    $histo = $histo."<td><a href=index.php?page=observ_modif&id=".$data["id"]."><button>".$data["observations"]."</button></td>";
                } else if ($key == "id") {
                } else {
                    $histo = $histo."<td>".$value."</td>";
                }
                
            }
            $histo = $histo."</tr>";
        }
    
        //var_dump($histo);
        include_once("V/both/mod_histo.php");
?>