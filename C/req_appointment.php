<?php
    include("M/get_sql.php");
    include("M/other_sql.php");

    $req = sql_account();
    $select = "";
    while ($data = $req->fetch()) {
        $select = $select."<option value='".$data["id"]."'>".$data["firstname"]." ".$data["lastname"]."</option>\n";
    }

    $req->closeCursor();

    $req = sql_consult();

    $data = $req->fetch();

    $select_hours = "";
    $select_minutes = "";
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
    //var_dump($time);
    
    for ($i=$time["h"]["start"]; $i < $time["h"]["end"] ; $i++) {
        //if (time_dif("2019-"))
        $select_hours = $select_hours."<option value='$i'>$i h</option>\n";
    }

    for ($i=0; $i < 60 ; $i = $i+$length) {
        //if (time_dif("2019-"))
        $select_minutes = $select_minutes."<option value='$i'>$i</option>\n";
    }

    if (isset($_GET["hours"])) {
        $hr = $_GET["hours"].":".$_GET["minutes"].":00";
        sql_appointment($hr);
        //echo "a";
        header('Location: index.php?page=login');
    } else {
        include("V/mod_appointment.php");
    }
    
?>