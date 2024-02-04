<?php
    
    function findNeedle($haystack) {
        $needle = "needle";
        
        // cara pertama
        // $a = array_filter($haystack, function($v, $k) use ($needle) {
        //     if (strpos($v, $needle) !== false) {
        //         return $k;
        //     }
        // }, ARRAY_FILTER_USE_BOTH);

        // foreach ($a as $key => $value) {
        //     return $key;
            
        // }

        // cara kedua
        // foreach ($haystack as $key => $value) {
        //     $a = strpos($value, $needle);
        //     if ( $a !== false ) {
        //         return "found the needle at position " . $key;
        //     }
        // }
        
        // cara ketiga
        return "found the needle at position " . array_search($needle, $haystack);
    }

    $result = [324,324,'needle',1,2,3];
    echo findNeedle($result);

?>