<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 
$txt = trim($_GET['txt']);
if(extension_loaded('gd') && $txt ) {
	header ("Content-type: image/png");
	$txt = urldecode(sys_auth($txt, 'DECODE'));
	$fontsize = isset($_GET['fontsize']) ? intval($_GET['fontsize']) : 16;
	$fontpath = PC_PATH.'libs'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'font'.DIRECTORY_SEPARATOR;
	$fontfile = isset($_GET['font']) && !empty($_GET['font']) ? $fontpath.trim($_GET['font']) : $fontpath.'georgia.ttf';	
	$fontcolor = isset($_GET['fontcolor']) && !empty($_GET['fontcolor']) ? trim($_GET['fontcolor']) : 'FF0000';
	$fontcolor_r = hexdec(substr($fontcolor,0,2));
	$fontcolor_g = hexdec(substr($fontcolor,2,2));
	$fontcolor_b = hexdec(substr($fontcolor,4,2));


	
		$imageX = strlen($txt)*9;
		$im = @imagecreate ($imageX, 16) or die ("Cannot Initialize new GD image stream");
		$bgColor = ImageColorAllocate($im,255,255,255);
		$white=imagecolorallocate($im,234,185,95);
		$font_color=imagecolorallocate($im,$fontcolor_r,$fontcolor_g,$fontcolor_b);		
		$fonttype = intval($_GET['fonttype']);
		imagestring ($im, $fonttype, 0, 0,$txt, $font_color);
	imagepng ($im);
	imagedestroy ($im);	
}
?>