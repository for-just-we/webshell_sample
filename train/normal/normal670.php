<?php
function ubb($string) {
    $array1 = array(
                    '[b]',
                    '[/b]',
                    '[u]',
                    '[/u]',
                    '[center]',
                    '[/center]',
                    '[i]',
                    '[/i]'
                    );
    $array2 = array(
                    '<b>',
                    '</b>',
                    '<u>',
                    '</u>',
                    '<center>',
                    '</center>',
                    '<i>',
                    '</i>'
                    );
    $output = str_replace($array1, $array2, $string);
    return $output;
}

// VALID
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