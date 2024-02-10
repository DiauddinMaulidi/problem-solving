<?php

    function bowlingPins(array $arr) {
        $str = array_reduce($arr, function($v, $k) {
            return substr_replace($v, "P", $k-1, 1);
        }, "IIIIIIIIII");
        return strtr("6 7 8 9\n 3 4 5 \n  1 2  \n   0   ", "0123456789", $str);
    }

    echo bowlingPins([10]);

?>