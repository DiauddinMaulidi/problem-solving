<?php
    
    function find_even_index($arr){
        
        // cara bagus
        for ($i=0; $i < count($arr); $i++) { 
            if (  array_sum(array_slice($arr, 0, $i)) == array_sum(array_slice($arr, $i+1)) ) {
                return $i;
            }
        }
        return -1;


        // cara saya
        // $sumRight = 0;
        // $sumLeft = array_sum($arr);

        // foreach ($arr as $key => $value) {
        //     $sumLeft -= $arr[$key];
        //     if ( $sumRight === $sumLeft ) {
        //         return $key;
        //     }
        //     $sumRight += $arr[$key];
        // }
        
        // return -1;

        // $sumLeft = 0;
        // $sumRight = array_sum($arr);

        // for ($i=0; $i < count($arr); $i++) {
        //     $sumRight -= $arr[$i];
        //     if ( $sumLeft === $sumRight ) {
        //         return $i;
        //     }
            
        //     $sumLeft += $arr[$i];
        // }
        // return -1;   
    }

    $a = [1, 2, 3, 2, 1];
    echo find_even_index($a);

?>

