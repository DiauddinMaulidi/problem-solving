<?php

    function past($h, $m, $s) {
        $jam = $h * 3600;
        $menit = $m * 60;
        $detik = $s;

        $milidetik = ($jam + $menit + $detik) * 1000;
        return $milidetik;
    }

    $result = past(1,0,1);
    echo $result;
?>
