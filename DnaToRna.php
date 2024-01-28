<?php
    
    function DnaToRna($str) {
        $sum = strlen($str);
        $temp = $str;

        for ($i=0; $i < $sum; $i++) {  
            $result = $temp[$i];
            if ( $result == "T" ) {
                $result = "U";
            } else if ( $result == "U" ) {
                $result = "T";
            }
            echo $result;
        }


    }

    DnaToRna("UUTT");
?>