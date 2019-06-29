<?php 
    function create_select ($stepm, $day) {
        $select = "";
        for ($i=0; $i < 24 ; $i++) {

            if (strlen($i) == 1) {
                $hr = "0".$i;
            } else {
                $hr = $i;
            }

            for ($j=0; $j < 60 ; $j = $j+$stepm) {
                if (strlen($j) == 1) {
                    $min = "0".$j;
                } else {
                    $min = $j;
                }
                //echo $i.":".$j." => ".is_working_hour($i.":".$j, $day)."</br>";
                if (is_working_hour($hr.":".$min.":00", $day) && is_not_taken($hr.":".$min.":00")) {
                    $select = $select."<option value='".$hr.":".$min.":00'>".$hr.":".$min."</option>\n";
                }
            }
        }

        return $select;
    }

    function is_working_hour ($hour, $day) {
        $req = sql_working_hour($day, $hour);
        if ($req->fetch() == false) {
            $return = false;
        } else {
            $return = true;
        }
        $req->closeCursor();

        return $return;
    }

    function is_not_taken ($hour) {
        $req = sql_taken($hour);
        if ($req->fetch() == false) {
            $return = true;
        } else {
            $return = false;
        }
        $req->closeCursor();

        return $return;
    }

    // function is_hollyday ($hour, $day) {
    //     $req = sql_working_hour($day, $hour);
    //     if ($req->fetch() == false) {
    //         $return = false;
    //     } else {
    //         $return = true;
    //     }
    //     $req->closeCursor();

    //     return $return;
    // }
?>