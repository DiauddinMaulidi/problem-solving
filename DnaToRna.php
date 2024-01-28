<?php
    
    function dnaToRna($str) {
        // hitung jumlah karakter
        $sum = strlen($str);
        // buat variable untuk menampung hasilnya
        $result = "";

        // lakukan perulangan sebanyak jumlah karakter
        for ($i=0; $i < $sum; $i++) {  
        // lakukan pengkondisian
            // jika ada karakter yang bernilai T, ganti dengan U
            if ( $str[$i] == "T" ) {
                $result .= "U";
            // dan sebaliknya jika ada karakter yang bernilai U, ganti T
            } else if ( $str[$i] == "U" ) {
                $result .= "T";
            //  selain keduanya jangan diganti apapun
            } else {
                $result .= $str[$i];
            }
        }

        return $result;
    }
    $conversi = dnaToRna("GCAU");
    echo $conversi;
?>