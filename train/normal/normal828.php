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
		$arrparentid = explode(',', $arrparentid);
		$arrcatdir = array();
		foreach($arrparentid as $id) {
			$arrcatdir[] = $this->categorys[$id]['catdir'];
		}
		return implode('/', $arrcatdir).'/';
} 
?>