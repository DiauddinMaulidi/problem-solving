<?php
    
    function digPow($n, $p) {
        $a = "$n";
        $c = 0;
        for ($i=0; $i < strlen($n); $i++) { 
            $c += pow($a[$i], $p++);
        }
        
        if ( $n === $c / ($c / $n) ) {
            return $c / $n;
        }
        return -1;
    }

    echo digPow(92, 1);

?>