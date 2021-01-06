<?php
header('Refresh: 45');
$keyFactor = 0;
if(count($keys[0]) > 0) {	
	foreach($keys[0] as $key) {
		if($key['iPad3'] == 'False' || $key['iPad3'] == 'True') {
			if($key['keyload'] < $config['max_keyload']) {
				$keyFactor++;
			}
		}
	}
}	
?>	