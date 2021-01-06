<?php
if(is_array($infos)){
	foreach($infos as $info){
		echo $info['ipbannedid'];
		echo $info['style'];
		echo $info['ip'];
		echo date('Y-m-d', $info['expires']);
		echo $info['ipbannedid'];
	}
}
?>
		