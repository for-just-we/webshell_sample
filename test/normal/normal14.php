<?php
function swd($s_p){
	global $s_self;
	$s_ps = explode(DIRECTORY_SEPARATOR,$s_p);
	$s_pu = "";
	for($s_i = 0 ; $s_i < sizeof($s_ps)-1 ; $s_i++){
		$s_pz = "";
		for($s_j = 0 ; $s_j <= $s_i ; $s_j++) $s_pz .= $s_ps[$s_j].DIRECTORY_SEPARATOR;
		$s_pu .= "<a href='".$s_self."cd=".$s_pz."' onclick='return false;'>".$s_ps[$s_i]." ".DIRECTORY_SEPARATOR." </a>";
	}
	return trim($s_pu);
}
// htmlspecialchars, < > "
function hss($s_t){
	$s_n = array(">","<","\"");
	$s_y = array("&gt;", "&lt;", "&quot;");
	return str_replace($s_n,$s_y,$s_t);
}
// remove <br />tags
function rp($s_t){
	return trim(str_replace("<br />","",$s_t));
}
// replace spaces with underscore ( _ )
function cs($s_t){
	return str_replace(" ","_",$s_t);
}
// strip slashes,trim and urldecode
function ss($s_t){
	return (!get_magic_quotes_gpc())? trim(urldecode($s_t)) : trim(urldecode(stripslashes($s_t)));
exit;	
?>