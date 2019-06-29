<?php 
    function create_select ($starth, $endh, $steph, $startm, $endm, $stepm) {
        $select = "";
        for ($i=$starth; $i < $endh ; $i = $i+$steph) {
            for ($j=$startm; $j < $endm ; $j = $j+$stepm) {
                if (is_working_hour($i.":".$j.":00";))
                $select = $select."<option value='$i'>$i</option>\n";
            }
        }

        return $select;
    }
?>