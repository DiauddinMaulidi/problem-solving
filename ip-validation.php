<?php
    // menggunakan konstanta pengecekan ip address
    function isValidIP(string $str): bool {
        return filter_var($str, FILTER_VALIDATE_IP,FILTER_FLAG_IPV4);
    }
    echo isValidIP('1.2.3.4');

    // // dengan cara manual versi saya  
    // function isValidIP(string $str) {

    //     $str = explode(".", $str);
    //     $sum = count($str);

    //     if ( $str === '' ) {
    //         return "invalid\n";
    //     }

    //     if ( $sum !== 4 ) {
    //         return "invalid\n";
    //     }
        
    //     foreach ($str as $value) {
    //         for ($i=0; $i < strlen($value); $i++) { 
    //             if ( $value[$i] === " " ) {
    //                 return "invalid\n";
    //             }
    //         }
            

    //         $angkaAwal = $value[0];
    //         if (( $angkaAwal == 0 && strlen($value) > 1) || $angkaAwal == " ") {
    //             return "invalid\n";
    //         }

    //         if ( $value > 255 ) {
    //             return "invalid\n";
    //         }
    //     }
    //     return "valid\n";

    // }

    // echo isValidIP('31.106.56.61 ');
    // echo isValidIP('1.2.3.4 ');


?>