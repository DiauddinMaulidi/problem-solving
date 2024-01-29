<?php
    function getGrade($a, $b, $c) {
        $builtArray = [$a, $b, $c];
        $sum = count($builtArray);
        $grade = "";

        $result = ( $a + $b + $c ) / $sum;
        // var_dump(number_format($result, 2));

        if ( $result >= 0 && $result < 60 ) {
            $grade = "F";
        } else if ( $result >= 60 && $result < 70 ) {
            $grade = "D";
        } else if ( $result >= 70 && $result < 80 ) {
            $grade = "C";
        } else if ( $result >= 80 && $result < 90 ) {
            $grade = "B";
        } else if ( $result >= 90 && $result <= 100 ) {
            $grade = "A";
        } else {
            echo "not grade";
        }
        return $grade;

    }
    echo getGrade(0,0,0);
?>