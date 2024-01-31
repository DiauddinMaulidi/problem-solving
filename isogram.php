<?php
    // cara pertama dan tentu cara saya😁
    // function isIsogram($string) {
    //     $sum = [];
    //     for ($i=0; $i < strlen($string); $i++) {
    //         $huruf = strtolower($string[$i]);
    //         if ( !isset($sum[$huruf]) ) {
    //             $sum[$huruf] = 1;
    //         } else {
    //             $sum[$huruf]++;
    //         }
    //     }

    //     foreach ($sum as $value) {
            
    //         if ( $value > 1 ) {
    //             return false;
    //         }
    //     }

    //     return true;
    // }
    
    // ini cara yang lebih simple
    function isIsogram($string) {
        $jumlahArray = str_split(strtolower($string));
        $jumlahArrayBaru = count(array_unique($jumlahArray));
        if ( count($jumlahArray) == $jumlahArrayBaru ) {
            return true;
        }
        return false;
    }

    $cek = "mose";
    var_dump(isIsogram($cek));

?>