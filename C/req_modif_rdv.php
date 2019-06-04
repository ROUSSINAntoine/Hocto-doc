<?php
include("M/get_sql.php");
include("M/other_sql.php");
include("C/fct/select.php");

    $req = sql_account();
        $select = "";
        while ($data = $req->fetch()) {
            $select = $select."<option value='".$data["id"]."'>".$data["firstname"]." ".$data["lastname"]."</option>\n";
        }
    
        $req->closeCursor();

        $req = sql_modif_rdv ();
    
        $data = $req->fetch();
    
        $select_hours;
        $select_minutes;
        $length = $data["length_time"];
        $date["start"] = $data["open_time"];
        $date["break"] = $data["break_time"];
        $date["resume"] = $data["resume_time"];
        $date["end"] = $data["close_time"];
    
        foreach ($date as $key => $value) {
            //echo $value."</br>";
            $time["h"][$key] = $value[0].$value[1];
            $time["m"][$key] = $value[3].$value[4];
            $time["h"][$key]=(int)$time["h"][$key];
            $time["m"][$key]=(int)$time["m"][$key];
        }
        
        $select_hours = create_select($time["h"]["start"], $time["h"]["end"], 1);
       
        $select_minutes = create_select(0, 60, $length);
        
        if (isset($_GET["hours"])) {
            $hr = $_GET["hours"].":".$_GET["minutes"].":00";
            sql_appointment($hr);
            //echo "a";
            header('Location: index.php?page=login');
        } else {
            include("V/mod_appointment.php");
        }
?>