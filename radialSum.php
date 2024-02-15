<?php
    
    function largestRadialSum(array $arr, int $d): int {
        $a = array_chunk($arr, count($arr) / $d);
        return max( ($d > 1) ? array_map('array_sum', array_map(null, ...$a)) : $arr );
    }

    $arrAy = [1,5,6,3,4,2];
    echo largestRadialSum($arrAy, 3);

?>

