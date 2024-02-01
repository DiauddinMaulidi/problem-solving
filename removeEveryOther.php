<?php
    
    function removeEveryOther($array) {
        // cara saya    
        // $arra = [];
        // foreach ($array as $key => $value) {
        //     if ( $key % 2 == 0 ) {
        //         $arra[$key] = $value;
        //     }
        // }
        // return $arra;

        // cara bagus
        return array_filter($array, function($k) {
            return !($k % 2);
        }, ARRAY_FILTER_USE_KEY);
    }

    $result = ['hello', 'world', 'buy'];
    var_dump(removeEveryOther($result));


    // banyak jalan menuju roma bro
?>