<?php
    // count the divisors of a number
    function divisors($n) {
        $b = 0;
        for ($i=1; $i <= $n; $i++) {
            $a = $n % $i === 0;
            if ( $a ) {
                $b += 1;
            }
        }
        var_dump($b);
    }

    divisors(54);
?>