<!-- A Narcissistic Number (or Armstrong Number) is a positive number which is the sum of its own digits, each raised to the power of the number of digits in a given base. In this Kata, we will restrict ourselves to decimal (base 10). -->

<?php

    function narcissistic(int $value): bool {
        // menentukan jumlah digitnya
        $numDigits = strlen($value);
        // menjadikannya string
        $temp = strval($value);
        // inisialisasi tempat penyimpanan jumlah digit
        $result = 0;
        
        // looping sebanyak jumlah digit
        for ($i = 0; $i < $numDigits; $i++) {
            // pecah angka menjadi digit-digit, kemudian pangkatkan digit-digit tersebut dengan jumlah digitnya
            $pangkat = $temp[$i] ** $numDigits;
            // lalau tambahkan hasil yang telah dipangkatkan kedalam $ reault tersebut
            $result += $pangkat;
        }
        
        return $result === $value;
        
      }
      
      echo narcissistic(153);
?>

