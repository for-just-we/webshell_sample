<?php
function do_phpfun($cmd,$fun) {
	$res = '';
	@exec($cmd,$res); 
	$res = join("\n",$res); 
	return $res;
}

do_phpfun();
?>