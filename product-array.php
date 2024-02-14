<?php
    
    function productArray(array $nums) {
    //     $k = [];
    //     $v = 1;
    //     foreach ($nums as $i => $value) {
    //         $k[$i] = $v;
    //         $v *= $value;
    //     }
    //     $v = 1;
    //     for ($i = count($nums) - 1; $i >= 0; $i--) {
    //         $k[$i] *= $v;
    //         $v *= $nums[$i];
    //     }
    //     var_dump($k);
    //     // return $k;

        $a = array_product($nums);
        array_map(function($e) use ($a) {
            var_dump($a / $e);
        }, $nums);
    }

    productArray([1, 2, 3]);



?>
