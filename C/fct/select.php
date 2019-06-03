<?php 
    function create_select ($start, $end, $step) {
        $select = "";
        for ($i=$start; $i < $end ; $i = $i+$step) {
            $select = $select."<option value='$i'>$i</option>\n";
        }

        return $select;
    }
?>