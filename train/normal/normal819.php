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
	else {
		$arrparentid = explode(',', $arrparentid);
		$arrcatdir = array();
		foreach($arrparentid as $id) {
			if($id==0) 
				continue;
			$arrcatdir[] = $this->categorys[$id]['catdir'];
		}
		return implode('/', $arrcatdir).'/';
	}
} 
else {
	if ($setting['create_to_html_root']) {
		if (preg_match('/^((http|https):\/\/)?([^\/]+)/i', $url, $matches)) {
			$url = $matches[0].'/';
			$rs = $this->db->get_one(array('url'=>$url), '`parentdir`,`catid`');
			if ($catid == $rs['catid']) 
				return '';
			else 
				return $rs['parentdir'];
		} 
		else 
			return '';
			
	} 
	else {
		$arrparentid = explode(',', $arrparentid);
		$arrcatdir = array();
		krsort($arrparentid);
		foreach ($arrparentid as $id) {
			if ($id==0) 
				continue;
			$arrcatdir[] = $this->categorys[$id]['catdir'];
			if ($this->categorys[$id]['parentdir'] == '') 
				break;
		}
		krsort($arrcatdir);
		return implode('/', $arrcatdir).'/';
	}
}
?>