<?php
$config = getconfig();
$keys = getkeys();
	
$keyFactor = 0;
if(count($keys[0]) > 0) {	
	foreach($keys[0] as $key) {
		if($key['keyload'] < $config['max_keyload']) {
			$keyFactor++;
		}
	}
}
?>	