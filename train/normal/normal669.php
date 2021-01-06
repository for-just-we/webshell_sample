<?php
function valid($string) {
    $array1 = array(
                    '<br>',
                    '<noscript>'
                    );
    $array2 = array(
                    '<br />',
                    '*noscript*'
                    );
    $output = str_replace($array1, $array2, $string);
    return $output;
}
?>