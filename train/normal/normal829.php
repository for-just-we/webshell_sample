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

		$arrparentid = explode(',', $arrparentid);
		$arrcatdir = array();
		krsort($arrparentid);
		foreach ($arrparentid as $id) {
			$arrcatdir[] = $this->categorys[$id]['catdir'];
		}
		krsort($arrcatdir);
		return implode('/', $arrcatdir).'/';
}
?>