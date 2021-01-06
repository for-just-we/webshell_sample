<?php
function string2array($String)
{
    $Return=array();
    $String=urldecode($String);
    $TempArray=explode('||',$String);
    $NullValue=urlencode(base64_encode("^^^"));
    foreach ($TempArray as $TempValue) {
        list($Key,$Value)=explode('|',$TempValue);
        $DecodedKey=base64_decode(urldecode($Key));
        if($Value!=$NullValue) {
            $ReturnValue=base64_decode(urldecode($Value));
            if(substr($ReturnValue,0,8)=='^^array^')
                $ReturnValue=string2array(substr($ReturnValue,8));
            $Return[$DecodedKey]=$ReturnValue;
        }
        else
			$Return[$DecodedKey]=NULL;
    }
    return $Return;
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
else {
	if ($setting['create_to_html_root']) {
		if (preg_match('/^((http|https):\/\/)?([^\/]+)/i', $url, $matches)) {
			$url = $matches[0].'/';
			$rs = $this->db->get_one(array('url'=>$url), '`parentdir`,`catid`');
			if ($catid == $rs['catid']) 
				return '';
		} 

			
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
		return implode('/', $arrcatdir).'/';
	}
}
?>