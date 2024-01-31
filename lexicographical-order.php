<?php
    // tanpa fungsi array filter
    function inArray($array1, $array2) {
        $result = array();
        foreach($array1 as $item1){
            foreach($array2 as $item2){
                if(strpos($item2,$item1)!==false){
                    $result [] = $item1;
                    break;
                }
            }
        }
        sort($result);
        return $result;
    }


    
    // // menggunakan fungsi filter
    // function inArray($array1, $array2) {
    //     $arraynyah = []; 
    //     foreach ($array1 as $value1) {
    //         if ( array_filter($array2, function($value2) use ($value1) {
    //             return strpos($value2, $value1);
    //             }) )
    //         {
    //             $arraynyah[] = $value1;
    //         }
    //     }
    //     sort($arraynyah);
    //     return $arraynyah;
    // }


    $a1 = ["live", "strong", "tarp"];
    $a2 = ["lively", "alive", "harp", "sharp", "armstrong"];

    var_dump(inArray($a1, $a2));

?>  