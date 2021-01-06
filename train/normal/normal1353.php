<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header');
$n=1; 
foreach ($menu as $key=>$v){
	if ($v['name']=='phpsso') 
		continue;
	if($n == 1) {
		echo '<div class="map-menu lf">';
	}
	
	foreach ($v['childmenus'] as $k=>$r)
		echo $r['name'];

	$n++; 
}
?>
