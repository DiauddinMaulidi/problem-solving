<?php
    
    // versi orang
    function mn_lcm(int $m, int $n) {
        $a = range($m, $n);

        return array_reduce($a, function($carry, $curr) {
            return ($carry == 0 ) ? $curr : ( $carry * $curr / gcd($carry, $curr) );
        });
    }


    function gcd($m, $n) {
        if ($m % $n == 0 ) {
            return $n;
        } else {
            return gcd($n, $m % $n);
        }
    }

    echo mn_lcm(1,5);


    // versi saya
    // function mn_lcm(int $m, int $n) {
    // $x =  max($m, $n);
    // $y =  min($m, $n);

    // $a = 1;
    // $b = true;

    // while ( $b ) {
    //     $c = true;
    //     for ($i=$y; $i <= $x; $i++) {
    //         if ( $a % $i != 0 ) {
    //             $c = false;
    //             break;
    //         }
    //     }

    //     if ( $c ) {
    //         return $a;
    //         break;
    //     }

    //     $a++;
    // }


    // }

    // echo mn_lcm(5,1);


?>