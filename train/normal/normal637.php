<?php 
$config = getconfig();
$stats = getstats();

$secondsLeft = $config['keyload_dropdown_interval'] - $stats['elapsed_key_check_interval'];
		
if($secondsLeft > 60) {
	echo floor($secondsLeft / 60) . ' minutes ';
	echo ($secondsLeft % 60). ' seconds';
}
else {
	echo $secondsLeft . ' seconds';
}
			
?>