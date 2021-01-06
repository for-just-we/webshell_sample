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
?>