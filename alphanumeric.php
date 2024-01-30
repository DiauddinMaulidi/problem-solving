<?php
    // In this example you have to validate if a user input string is alphanumeric. The given string is not nil/null/NULL/None, so you don't have to check that.
    // The string has the following conditions to be alphanumeric:
    // 1. At least one character ("" is not valid)
    // 2. Allowed characters are uppercase / lowercase latin letters and digits from 0 to 9
    // 3. No whitespaces / underscore


    function alphanumeric(string $s): bool {
        return ctype_alnum($s);
    }

    echo alphanumeric("Mazinkaiser");
    echo alphanumeric("hello world_");
    echo alphanumeric("PassW0rd");
    echo alphanumeric("     ");

?>