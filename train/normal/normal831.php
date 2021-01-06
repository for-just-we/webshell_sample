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

		if (preg_match('/^((http|https):\/\/)?([^\/]+)/i', $url, $matches)) {
			$url = $matches[0].'/';
			$rs = $this->db->get_one(array('url'=>$url), '`parentdir`,`catid`');
			if ($catid == $rs['catid']) 
				return '';
			else 
				return $rs['parentdir'];
		} 
}
?>