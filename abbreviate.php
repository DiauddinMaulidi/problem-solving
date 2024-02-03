<?php
    
    function abbrevName($name) {
        $a = explode(" ", $name);
        $b = '';
        foreach ($a as $key => $value) {
            $b .= $value[0];
        }
        $c = substr_replace($b, ".", 1, 0);

        return strtoupper($c);
    }

    echo abbrevName("asep kusniawan");

?>