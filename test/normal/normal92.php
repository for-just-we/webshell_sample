<?php
@set_time_limit(0);
$tmp = array();
foreach($host_allow as $k=>$v) {
	$tmp[] = str_replace("\\*",".*",preg_quote($v));
}
$s = "!^(".implode("|",$tmp).")$!i";

exit;
?>