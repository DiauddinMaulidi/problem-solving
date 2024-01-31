<?php

    function inArray($array1, $array2) {
        $arraynyah = []; 
        foreach ($array1 as $value1) {
            if ( array_filter($array2, function($value2) use ($value1) {
                return strpos($value2, $value1) !== false;
            } )) {
                $arraynyah[] = $value1;
            }
        }
        return $arraynyah;
    }

    $a1 = ["live", "strong", "tarp"];
    $a2 = ["lively", "alive", "harp", "sharp", "armstrong"];

    var_dump(inArray($a1, $a2));

?>  