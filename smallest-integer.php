<?php
    // manual
    function smallestInteger ($arr) {

        for ($i=0; $i < count($arr)-1; $i++) {
            if ($arr[$i] > $arr[$i+1]) {
                $arr[$i+1] = $arr[$i];
            }
            
        }
        return $arr[$i];
    }

    $a = [3, 5, 10,99];
    var_dump(smallestInteger($a));

    // menggunakan sort
    // function a($ab) {
    //     sort($ab, SORT_NUMERIC);
    //     return $ab[4];
    // }
    // var_dump(a([3,2,99,4,5]));

?>