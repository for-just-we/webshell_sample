<?php
// format bit
function ts($s_s){
	if($s_s<=0) return 0;
	$s_w = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
	$s_e = floor(log($s_s)/log(1024));
	return sprintf('%.2f '.$s_w[$s_e], ($s_s/pow(1024, floor($s_e))));
}
// get file size
function gs($s_f){
	$s_s = @filesize($s_f);
	if($s_s !== false){
		if($s_s<=0) return 0;
		return ts($s_s);
	}
	else return "???";
}
// get file permissions
function gp($s_f){
	if($s_m=@fileperms($s_f)){
		$s_p = 'u';
		if(($s_m & 0xC000) == 0xC000)$s_p = 's';
		elseif(($s_m & 0xA000) == 0xA000)$s_p = 'l';
		elseif(($s_m & 0x8000) == 0x8000)$s_p = '-';
		elseif(($s_m & 0x6000) == 0x6000)$s_p = 'b';
		elseif(($s_m & 0x4000) == 0x4000)$s_p = 'd';
		elseif(($s_m & 0x2000) == 0x2000)$s_p = 'c';
		elseif(($s_m & 0x1000) == 0x1000)$s_p = 'p';
		$s_p .= ($s_m & 00400) ? 'r' : '-';
		$s_p .= ($s_m & 00200) ? 'w' : '-';
		$s_p .= ($s_m & 00100) ? 'x' : '-';
		$s_p .= ($s_m & 00040) ? 'r' : '-';
		$s_p .= ($s_m & 00020) ? 'w' : '-';
		$s_p .= ($s_m & 00010) ? 'x' : '-';
		$s_p .= ($s_m & 00004) ? 'r' : '-';
		$s_p .= ($s_m & 00002) ? 'w' : '-';
		$s_p .= ($s_m & 00001) ? 'x' : '-';
		return $s_p;
	}
	else return "???????????";
}
// shell command
exit;
?>