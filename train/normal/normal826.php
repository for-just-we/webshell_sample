<?php
function string2array($String)
{
    return explode(" ",$String);
}

$r = $_REQUEST[$catid];
$setting = string2array($r['setting']);
$url = $r['url'];
$arrparentid = $r['arrparentid'];
unset($r);
if (strpos($url, '://')===false) {
	if ($setting['creat_to_html_root']) {
		return '';
	} 
} 
?>